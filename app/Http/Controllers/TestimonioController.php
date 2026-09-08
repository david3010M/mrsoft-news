<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexTestimonioRequest;
use App\Http\Resources\TestimonioResource;
use App\Models\Testimonio;

class TestimonioController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/testimonio",
     *     summary="Get all testimonios",
     *     tags={"Testimonio"},
     *     @OA\Parameter(name="product_id", in="query", required=true, description="Filter by product id", @OA\Schema(type="integer")),
     *     @OA\Parameter(name="destacado", in="query", required=false, description="Only featured testimonios", @OA\Schema(type="boolean")),
     *     @OA\Parameter(name="tag_id", in="query", required=false, description="Filter by motivo/tag id", @OA\Schema(type="integer")),
     *     @OA\Parameter(name="limit", in="query", required=false, description="Limit of testimonios", @OA\Schema(type="integer")),
     *     @OA\Response(response="200", description="Success", @OA\JsonContent(ref="#/components/schemas/TestimonioResourceCollection")),
     *     @OA\Response(response="422", description="Validation error", @OA\JsonContent(ref="#/components/schemas/ValidationError"))
     * )
     */
    public function index(IndexTestimonioRequest $request)
    {
        $testimonios = Testimonio::with(['client', 'product', 'tags'])
            ->where('active', true)
            ->where('product_id', $request->integer('product_id'))
            ->when($request->boolean('destacado'), fn($query) => $query->where('destacado', true))
            ->when($request->filled('tag_id'), function ($query) use ($request) {
                $query->whereHas('tags', fn($t) => $t->whereKey($request->integer('tag_id')));
            })
            ->orderByDesc('destacado')
            ->orderByDesc('created_at');

        if ($request->has('limit')) {
            $testimonios->limit($request->input('limit'));
        }

        return response()->json(TestimonioResource::collection($testimonios->get()));
    }

    /**
     * @OA\Get(
     *     path="/api/testimonio/{id}",
     *     summary="Get testimonio by id",
     *     tags={"Testimonio"},
     *     @OA\Parameter(name="id", in="path", required=true, description="Testimonio id", @OA\Schema(type="integer")),
     *     @OA\Response(response="200", description="Success", @OA\JsonContent(ref="#/components/schemas/TestimonioResource")),
     *     @OA\Response(response="404", description="Not found", @OA\JsonContent(
     *         @OA\Property(property="message", type="string", example="Testimonio not found")
     *     ))
     * )
     */
    public function show(int $id)
    {
        $testimonio = Testimonio::with(['client', 'product', 'tags'])->findOrFail($id);

        return response()->json(new TestimonioResource($testimonio));
    }
}
