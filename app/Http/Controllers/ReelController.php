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
        $reels = Reel::with('product')
            ->where('active', true)
            ->whereHas('product', fn($query) => $query->where('name', $product))
            ->orderBy('order');
        if ($request->has('limit')) $reels->limit($request->input('limit'));
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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
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
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reel $reel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reel $reel)
    {
        //
    }
}
