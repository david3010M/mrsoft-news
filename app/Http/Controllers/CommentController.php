<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexCommentRequest;
use App\Http\Resources\CommentResource;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * @OA\Get(
     *     path="/mrsoft-news/public/api/comment",
     *     summary="Get all comments",
     *     tags={"Comment"},
     *     @OA\Parameter(name="product", in="query", required=true, description="Product name", @OA\Schema(type="string", enum={"Gesrest", "360sys", "HotelHUB", "Comprobante-e", "Mr. Soft"})),
     *     @OA\Parameter(name="limit", in="query", required=false, description="Limit of clients", @OA\Schema(type="integer")),
     *     @OA\Response(response="200", description="Success", @OA\JsonContent(ref="#/components/schemas/CommentResourceCollection")),
     *     @OA\Response(response="401", description="Unauthenticated", @OA\JsonContent(ref="#/components/schemas/Unauthenticated"))
     * )
     */
    public function index(IndexCommentRequest $request)
    {
        $product = $request->query('product');
        $isMrSoft = $product === 'Mr. Soft';
        $clients = Comment::with('product')
            ->where('active', true)
            ->when(!$isMrSoft, function ($query) use ($product) {
                return $query->whereHas('product', function ($q) use ($product) {
                    $q->where('name', $product);
                });
            })
            ->orderBy('created_at', 'desc');
        if ($request->has('limit')) $clients->limit($request->input('limit'));
        return response()->json(CommentResource::collection($clients->get()));
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
     *     path="/mrsoft-news/public/api/comment",
     *     summary="Create a new comment/testimonial",
     *     tags={"Comment"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"content", "person"},
     *             @OA\Property(property="content", type="string", example="Great product!"),
     *             @OA\Property(property="person", type="string", example="John Doe"),
     *             @OA\Property(property="position", type="string", example="CEO"),
     *             @OA\Property(property="active", type="boolean", example=true)
     *         )
     *     ),
     *     @OA\Response(response="201", description="Created", @OA\JsonContent(ref="#/components/schemas/CommentResource")),
     *     @OA\Response(response="422", description="Validation error", @OA\JsonContent(ref="#/components/schemas/ValidationError"))
     * )
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @OA\Get(
     *     path="/mrsoft-news/public/api/comment/{id}",
     *     summary="Get comment by id",
     *     tags={"Comment"},
     *     @OA\Parameter(name="id", in="path", required=true, description="Comment id", @OA\Schema(type="integer")),
     *     @OA\Response(response="200", description="Success", @OA\JsonContent(ref="#/components/schemas/CommentResource")),
     *     @OA\Response(response="404", description="Not found", @OA\JsonContent(
     *         @OA\Property(property="message", type="string", example="Comment not found")
     *     ))
     * )
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * @OA\Put(
     *     path="/mrsoft-news/public/api/comment/{id}",
     *     summary="Update a comment/testimonial",
     *     tags={"Comment"},
     *     @OA\Parameter(name="id", in="path", required=true, description="Comment id", @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="content", type="string", example="Great product!"),
     *             @OA\Property(property="person", type="string", example="John Doe"),
     *             @OA\Property(property="position", type="string", example="CEO"),
     *             @OA\Property(property="active", type="boolean", example=true)
     *         )
     *     ),
     *     @OA\Response(response="200", description="Updated", @OA\JsonContent(ref="#/components/schemas/CommentResource")),
     *     @OA\Response(response="404", description="Not found", @OA\JsonContent(
     *         @OA\Property(property="message", type="string", example="Comment not found")
     *     )),
     *     @OA\Response(response="422", description="Validation error", @OA\JsonContent(ref="#/components/schemas/ValidationError"))
     * )
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * @OA\Delete(
     *     path="/mrsoft-news/public/api/comment/{id}",
     *     summary="Delete a comment/testimonial",
     *     tags={"Comment"},
     *     @OA\Parameter(name="id", in="path", required=true, description="Comment id", @OA\Schema(type="integer")),
     *     @OA\Response(response="200", description="Deleted", @OA\JsonContent(
     *         @OA\Property(property="message", type="string", example="Comment deleted successfully")
     *     )),
     *     @OA\Response(response="404", description="Not found", @OA\JsonContent(
     *         @OA\Property(property="message", type="string", example="Comment not found")
     *     ))
     * )
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
