<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexTypeRequest;
use App\Http\Resources\TypeResource;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * @OA\Get(
     *     path="/mrsoft-news/public/api/type",
     *     summary="Get all types",
     *     tags={"Type"},
     *     @OA\Parameter(name="product", in="query", required=true, description="Product name", @OA\Schema(type="string", enum={"Gesrest", "360sys", "HotelHUB", "Comprobante-e", "Mr. Soft"})),
     *     @OA\Parameter(name="limit", in="query", required=false, description="Limit of types", @OA\Schema(type="integer")),
     *     @OA\Response(response="200", description="Success", @OA\JsonContent(ref="#/components/schemas/TypeResourceCollection")),
     *     @OA\Response(response="401", description="Unauthenticated", @OA\JsonContent(ref="#/components/schemas/Unauthenticated"))
     * )
     */
    public function index(IndexTypeRequest $request)
    {
        $product = $request->query('product');
        $types = Type::with('product')
            ->where('active', true)
            ->whereHas('product', fn($query) => $query->where('name', $product))
            ->orderBy('created_at', 'desc');
        if ($request->has('limit')) $types->limit($request->input('limit'));
        return response()->json(TypeResource::collection($types->get()));
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
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        //
    }
}
