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
     * @OA\Post(
     *     path="/mrsoft-news/public/api/type",
     *     summary="Create a new type",
     *     tags={"Type"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"name"},
     *             @OA\Property(property="name", type="string", example="Type name"),
     *             @OA\Property(property="active", type="boolean", example=true)
     *         )
     *     ),
     *     @OA\Response(response="201", description="Created", @OA\JsonContent(ref="#/components/schemas/TypeResourceCollection")),
     *     @OA\Response(response="422", description="Validation error", @OA\JsonContent(ref="#/components/schemas/ValidationError"))
     * )
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @OA\Get(
     *     path="/mrsoft-news/public/api/type/{id}",
     *     summary="Get type by id",
     *     tags={"Type"},
     *     @OA\Parameter(name="id", in="path", required=true, description="Type id", @OA\Schema(type="integer")),
     *     @OA\Response(response="200", description="Success", @OA\JsonContent(ref="#/components/schemas/TypeResourceCollection")),
     *     @OA\Response(response="404", description="Not found", @OA\JsonContent(
     *         @OA\Property(property="message", type="string", example="Type not found")
     *     ))
     * )
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
     * @OA\Put(
     *     path="/mrsoft-news/public/api/type/{id}",
     *     summary="Update a type",
     *     tags={"Type"},
     *     @OA\Parameter(name="id", in="path", required=true, description="Type id", @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="name", type="string", example="Type name"),
     *             @OA\Property(property="active", type="boolean", example=true)
     *         )
     *     ),
     *     @OA\Response(response="200", description="Updated", @OA\JsonContent(ref="#/components/schemas/TypeResourceCollection")),
     *     @OA\Response(response="404", description="Not found", @OA\JsonContent(
     *         @OA\Property(property="message", type="string", example="Type not found")
     *     )),
     *     @OA\Response(response="422", description="Validation error", @OA\JsonContent(ref="#/components/schemas/ValidationError"))
     * )
     */
    public function update(Request $request, Type $type)
    {
        //
    }

    /**
     * @OA\Delete(
     *     path="/mrsoft-news/public/api/type/{id}",
     *     summary="Delete a type",
     *     tags={"Type"},
     *     @OA\Parameter(name="id", in="path", required=true, description="Type id", @OA\Schema(type="integer")),
     *     @OA\Response(response="200", description="Deleted", @OA\JsonContent(
     *         @OA\Property(property="message", type="string", example="Type deleted successfully")
     *     )),
     *     @OA\Response(response="404", description="Not found", @OA\JsonContent(
     *         @OA\Property(property="message", type="string", example="Type not found")
     *     ))
     * )
     */
    public function destroy(Type $type)
    {
        //
    }
}
