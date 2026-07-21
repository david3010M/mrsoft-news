<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexReelRequest;
use App\Http\Resources\ReelResource;
use App\Models\Reel;
use Illuminate\Http\Request;

class ReelController extends Controller
{
    /**
     * @OA\Get(
     *     path="/mrsoft-news/public/api/reel",
     *     summary="Get all reels",
     *     tags={"Reel"},
     *     @OA\Parameter(name="product", in="query", required=true, description="Product name", @OA\Schema(type="string", enum={"Gesrest", "360sys", "HotelHUB", "Comprobante-e"})),
     *     @OA\Parameter(name="limit", in="query", required=false, description="Limit of news", @OA\Schema(type="integer")),
     *     @OA\Response(response="200", description="Success", @OA\JsonContent(ref="#/components/schemas/ReelResourceCollection")),
     *     @OA\Response(response="401", description="Unauthenticated", @OA\JsonContent(ref="#/components/schemas/Unauthenticated"))
     * )
     */
    public function index(IndexReelRequest $request)
    {
        $product = $request->query('product');
        $isMrSoft = $product === 'Mr. Soft';
        $reels = Reel::with('product')
            ->where('active', true)
            ->when(!$isMrSoft, function ($query) use ($product) {
                $query->whereHas('product', fn($q) => $q->where('name', $product));
            })
            ->orderBy('order');
        if ($request->has('limit'))
            $reels->limit($request->input('limit'));
        return response()->json(ReelResource::collection($reels->get()));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * @OA\Post(
     *     path="/mrsoft-news/public/api/reel",
     *     summary="Create a new reel",
     *     tags={"Reel"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"title", "url"},
     *             @OA\Property(property="title", type="string", example="Reel title"),
     *             @OA\Property(property="url", type="string", example="https://www.youtube.com/watch?v=..."),
     *             @OA\Property(property="order", type="integer", example=1),
     *             @OA\Property(property="active", type="boolean", example=true)
     *         )
     *     ),
     *     @OA\Response(response="201", description="Created", @OA\JsonContent(ref="#/components/schemas/ReelResourceCollection")),
     *     @OA\Response(response="422", description="Validation error", @OA\JsonContent(ref="#/components/schemas/ValidationError"))
     * )
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @OA\Get(
     *     path="/mrsoft-news/public/api/reel/{id}",
     *     summary="Get reel by id",
     *     tags={"Reel"},
     *     @OA\Parameter(name="id", in="path", required=true, description="Reel id", @OA\Schema(type="integer")),
     *     @OA\Response(response="200", description="Success", @OA\JsonContent(ref="#/components/schemas/ReelResourceCollection")),
     *     @OA\Response(response="404", description="Not found", @OA\JsonContent(
     *         @OA\Property(property="message", type="string", example="Reel not found")
     *     ))
     * )
     */
    public function show(Reel $reel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reel $reel)
    {
        //
    }

    /**
     * @OA\Put(
     *     path="/mrsoft-news/public/api/reel/{id}",
     *     summary="Update a reel",
     *     tags={"Reel"},
     *     @OA\Parameter(name="id", in="path", required=true, description="Reel id", @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="title", type="string", example="Reel title"),
     *             @OA\Property(property="url", type="string", example="https://www.youtube.com/watch?v=..."),
     *             @OA\Property(property="order", type="integer", example=1),
     *             @OA\Property(property="active", type="boolean", example=true)
     *         )
     *     ),
     *     @OA\Response(response="200", description="Updated", @OA\JsonContent(ref="#/components/schemas/ReelResourceCollection")),
     *     @OA\Response(response="404", description="Not found", @OA\JsonContent(
     *         @OA\Property(property="message", type="string", example="Reel not found")
     *     )),
     *     @OA\Response(response="422", description="Validation error", @OA\JsonContent(ref="#/components/schemas/ValidationError"))
     * )
     */
    public function update(Request $request, Reel $reel)
    {
        //
    }

    /**
     * @OA\Delete(
     *     path="/mrsoft-news/public/api/reel/{id}",
     *     summary="Delete a reel",
     *     tags={"Reel"},
     *     @OA\Parameter(name="id", in="path", required=true, description="Reel id", @OA\Schema(type="integer")),
     *     @OA\Response(response="200", description="Deleted", @OA\JsonContent(
     *         @OA\Property(property="message", type="string", example="Reel deleted successfully")
     *     )),
     *     @OA\Response(response="404", description="Not found", @OA\JsonContent(
     *         @OA\Property(property="message", type="string", example="Reel not found")
     *     ))
     * )
     */
    public function destroy(Reel $reel)
    {
        //
    }
}
