<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @OA\Get(
     *     path="/mrsoft-news/public/api/category",
     *     summary="Get all categories",
     *     tags={"Category"},
     *     @OA\Response(response="200", description="Success", @OA\JsonContent(type="array",
     *         @OA\Items(
     *             @OA\Property(property="id", type="integer", example="1"),
     *             @OA\Property(property="name", type="string", example="Category name"),
     *             @OA\Property(property="description", type="string", example="Category description")
     *         )
     *     )),
     * )
     */
    public function index()
    {
        return Category::all();
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
     *     path="/mrsoft-news/public/api/category",
     *     summary="Create a new category",
     *     tags={"Category"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"name"},
     *             @OA\Property(property="name", type="string", example="Category name"),
     *             @OA\Property(property="description", type="string", example="Category description")
     *         )
     *     ),
     *     @OA\Response(response="201", description="Created", @OA\JsonContent(
     *         @OA\Property(property="id", type="integer", example=1),
     *         @OA\Property(property="name", type="string", example="Category name"),
     *         @OA\Property(property="description", type="string", example="Category description")
     *     )),
     *     @OA\Response(response="422", description="Validation error", @OA\JsonContent(ref="#/components/schemas/ValidationError"))
     * )
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @OA\Get(
     *     path="/mrsoft-news/public/api/category/{id}",
     *     summary="Get category by id",
     *     tags={"Category"},
     *     @OA\Parameter(name="id", in="path", required=true, description="Category id", @OA\Schema(type="integer")),
     *     @OA\Response(response="200", description="Success", @OA\JsonContent(
     *         @OA\Property(property="id", type="integer", example=1),
     *         @OA\Property(property="name", type="string", example="Category name"),
     *         @OA\Property(property="description", type="string", example="Category description")
     *     )),
     *     @OA\Response(response="404", description="Not found", @OA\JsonContent(
     *         @OA\Property(property="message", type="string", example="Category not found")
     *     ))
     * )
     */
    public function show(string $id)
    {
        //
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
     *     path="/mrsoft-news/public/api/category/{id}",
     *     summary="Update a category",
     *     tags={"Category"},
     *     @OA\Parameter(name="id", in="path", required=true, description="Category id", @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="name", type="string", example="Category name"),
     *             @OA\Property(property="description", type="string", example="Category description")
     *         )
     *     ),
     *     @OA\Response(response="200", description="Updated", @OA\JsonContent(
     *         @OA\Property(property="id", type="integer", example=1),
     *         @OA\Property(property="name", type="string", example="Category name"),
     *         @OA\Property(property="description", type="string", example="Category description")
     *     )),
     *     @OA\Response(response="404", description="Not found", @OA\JsonContent(
     *         @OA\Property(property="message", type="string", example="Category not found")
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
     *     path="/mrsoft-news/public/api/category/{id}",
     *     summary="Delete a category",
     *     tags={"Category"},
     *     @OA\Parameter(name="id", in="path", required=true, description="Category id", @OA\Schema(type="integer")),
     *     @OA\Response(response="200", description="Deleted", @OA\JsonContent(
     *         @OA\Property(property="message", type="string", example="Category deleted successfully")
     *     )),
     *     @OA\Response(response="404", description="Not found", @OA\JsonContent(
     *         @OA\Property(property="message", type="string", example="Category not found")
     *     ))
     * )
     */
    public function destroy(string $id)
    {
        //
    }
}
