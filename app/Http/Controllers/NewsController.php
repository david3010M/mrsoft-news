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
        $isMrSoft = $product === 'Mr. Soft';
        $news = News::with(['category', 'product'])
            ->where('active', true)
            ->when(!$isMrSoft, function ($query) use ($product) {
                $query->whereHas('product', fn($q) => $q->where('name', $product));
            })
            ->orderBy('date', 'desc');
        if ($category)
            $news->whereHas('category', fn($query) => $query->where('name', $category));
        if ($request->has('limit'))
            $news->limit($request->input('limit'));
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
     * @OA\Post(
     *     path="/mrsoft-news/public/api/news",
     *     summary="Create a new news entry",
     *     tags={"News"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"title", "description", "date", "category_id"},
     *             @OA\Property(property="title", type="string", example="News title"),
     *             @OA\Property(property="description", type="string", example="News description"),
     *             @OA\Property(property="date", type="string", format="date", example="2024-01-01"),
     *             @OA\Property(property="content", type="string", example="Full news content"),
     *             @OA\Property(property="image", type="string", example="image.jpg"),
     *             @OA\Property(property="typeMedia", type="string", example="video"),
     *             @OA\Property(property="category_id", type="integer", example=1),
     *             @OA\Property(property="active", type="boolean", example=true)
     *         )
     *     ),
     *     @OA\Response(response="201", description="Created", @OA\JsonContent(ref="#/components/schemas/NewsResource")),
     *     @OA\Response(response="422", description="Validation error", @OA\JsonContent(ref="#/components/schemas/ValidationError"))
     * )
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
     * @OA\Put(
     *     path="/mrsoft-news/public/api/news/{id}",
     *     summary="Update a news entry",
     *     tags={"News"},
     *     @OA\Parameter(name="id", in="path", required=true, description="News id", @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="title", type="string", example="News title"),
     *             @OA\Property(property="description", type="string", example="News description"),
     *             @OA\Property(property="date", type="string", format="date", example="2024-01-01"),
     *             @OA\Property(property="content", type="string", example="Full news content"),
     *             @OA\Property(property="image", type="string", example="image.jpg"),
     *             @OA\Property(property="typeMedia", type="string", example="video"),
     *             @OA\Property(property="category_id", type="integer", example=1),
     *             @OA\Property(property="active", type="boolean", example=true)
     *         )
     *     ),
     *     @OA\Response(response="200", description="Updated", @OA\JsonContent(ref="#/components/schemas/NewsResource")),
     *     @OA\Response(response="404", description="Not found", @OA\JsonContent(
     *         @OA\Property(property="message", type="string", example="News not found")
     *     )),
     *     @OA\Response(response="422", description="Validation error", @OA\JsonContent(ref="#/components/schemas/ValidationError"))
     * )
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * @OA\Delete(
     *     path="/mrsoft-news/public/api/news/{id}",
     *     summary="Delete a news entry",
     *     tags={"News"},
     *     @OA\Parameter(name="id", in="path", required=true, description="News id", @OA\Schema(type="integer")),
     *     @OA\Response(response="200", description="Deleted", @OA\JsonContent(
     *         @OA\Property(property="message", type="string", example="News deleted successfully")
     *     )),
     *     @OA\Response(response="404", description="Not found", @OA\JsonContent(
     *         @OA\Property(property="message", type="string", example="News not found")
     *     ))
     * )
     */
    public function destroy(string $id)
    {
        //
    }
}
