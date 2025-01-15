<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexNewsRequest;
use App\Http\Resources\NewsRelatedResource;
use App\Http\Resources\NewsResource;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @OA\Get(
     *     path="/mrsoft-news/public/api/news",
     *     summary="Get all news",
     *     tags={"News"},
     *     @OA\Parameter(name="product", in="query", required=true, description="Product name", @OA\Schema(type="string", enum={"Gesrest", "360sys", "HotelHUB", "Comprobante-e"})),
     *     @OA\Parameter(name="category", in="query", required=true, description="Category name", @OA\Schema(type="string", enum={"Noticias", "Eventos", "Promociones"})),
     *     @OA\Parameter(name="limit", in="query", required=false, description="Limit of news", @OA\Schema(type="integer")),
     *     @OA\Response(response="200", description="Success", @OA\JsonContent(ref="#/components/schemas/NewsRelatedResourceCollection")),
     *     @OA\Response(response="401", description="Unauthenticated", @OA\JsonContent(ref="#/components/schemas/Unauthenticated"))
     * )
     */
    public function index(IndexNewsRequest $request)
    {
        $product = $request->query('product');
        $category = $request->query('category');
        $news = News::with(['category', 'product'])
            ->where('active', true)
            ->whereHas('product', fn($query) => $query->where('name', $product))
            ->orderBy('date', 'desc');
        if ($category) $news->whereHas('category', fn($query) => $query->where('name', $category));
        if ($request->has('limit')) $news->limit($request->input('limit'));
        return response()->json(NewsRelatedResource::collection($news->get()));
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
     * @OA\Get(
     *     path="/mrsoft-news/public/api/news/{id}",
     *     summary="Get news by id",
     *     tags={"News"},
     *     @OA\Parameter( name="id", in="path", required=true, description="News id", @OA\Schema(type="integer")),
     *     @OA\Response(response="200", description="Success", @OA\JsonContent(ref="#/components/schemas/NewsResource")),
     *     @OA\Response(response="401", description="Unauthenticated", @OA\JsonContent(ref="#/components/schemas/Unauthenticated"))
     * )
     */
    public function show(int $id)
    {
        return response()->json(new NewsResource(News::with(['category', 'product'])->find($id)));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
