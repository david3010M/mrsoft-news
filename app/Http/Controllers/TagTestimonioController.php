<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexTagTestimonioRequest;
use App\Http\Resources\TagTestimonioResource;
use App\Models\TagTestimonio;

class TagTestimonioController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/testimonio-tag",
     *     summary="Get all testimonio tags",
     *     tags={"Testimonio"},
     *     @OA\Parameter(name="limit", in="query", required=false, description="Limit of tags", @OA\Schema(type="integer")),
     *     @OA\Response(response="200", description="Success", @OA\JsonContent(ref="#/components/schemas/TagTestimonioResourceCollection")),
     *     @OA\Response(response="422", description="Validation error", @OA\JsonContent(ref="#/components/schemas/ValidationError"))
     * )
     */
    public function index(IndexTagTestimonioRequest $request)
    {
        $tags = TagTestimonio::query()->orderBy('nombre');

        if ($request->has('limit')) {
            $tags->limit($request->input('limit'));
        }

        return response()->json(TagTestimonioResource::collection($tags->get()));
    }

    /**
     * @OA\Get(
     *     path="/api/testimonio-tag/{id}",
     *     summary="Get testimonio tag by id",
     *     tags={"Testimonio"},
     *     @OA\Parameter(name="id", in="path", required=true, description="Tag id", @OA\Schema(type="integer")),
     *     @OA\Response(response="200", description="Success", @OA\JsonContent(ref="#/components/schemas/TagTestimonioResource")),
     *     @OA\Response(response="404", description="Not found", @OA\JsonContent(
     *         @OA\Property(property="message", type="string", example="Tag not found")
     *     ))
     * )
     */
    public function show(int $id)
    {
        return response()->json(new TagTestimonioResource(TagTestimonio::findOrFail($id)));
    }
}
