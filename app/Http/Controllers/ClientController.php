<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexClientRequest;
use App\Http\Requests\IndexReelRequest;
use App\Http\Resources\ClientResource;
use App\Http\Resources\ReelResource;
use App\Models\Client;
use App\Models\Reel;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * @OA\Get(
     *     path="/mrsoft-news/public/api/client",
     *     summary="Get all clients",
     *     tags={"Client"},
     *     @OA\Parameter(name="product", in="query", required=true, description="Product name", @OA\Schema(type="string", enum={"Gesrest", "360sys", "HotelHUB", "Comprobante-e", "Mr. Soft"})),
     *     @OA\Parameter(name="limit", in="query", required=false, description="Limit of clients", @OA\Schema(type="integer")),
     *     @OA\Response(response="200", description="Success", @OA\JsonContent(ref="#/components/schemas/CommentResourceCollection")),
     *     @OA\Response(response="401", description="Unauthenticated", @OA\JsonContent(ref="#/components/schemas/Unauthenticated"))
     * )
     */
    public function index(IndexClientRequest $request)
    {
        $product = $request->query('product');
        $isMrSoft = $product === 'Mr. Soft';
        $clients = Client::with('type.product', 'comment', 'addresses.department', 'departments')
            ->where('active', true);
        if (!$isMrSoft) {
            $clients->whereHas('type.product', fn($query) => $query->where('name', $product));
        }
        $clients->orderBy('created_at', 'desc');
        if ($request->has('limit')) {
            $clients->limit($request->input('limit'));
        }
        return response()->json(ClientResource::collection($clients->get()));
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
     *     path="/mrsoft-news/public/api/client",
     *     summary="Create a new client",
     *     tags={"Client"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"name", "type_id"},
     *             @OA\Property(property="name", type="string", example="Client name"),
     *             @OA\Property(property="logo", type="string", example="logo.jpg"),
     *             @OA\Property(property="type_id", type="integer", example=1),
     *             @OA\Property(property="active", type="boolean", example=true)
     *         )
     *     ),
     *     @OA\Response(response="201", description="Created", @OA\JsonContent(ref="#/components/schemas/CommentResourceCollection")),
     *     @OA\Response(response="422", description="Validation error", @OA\JsonContent(ref="#/components/schemas/ValidationError"))
     * )
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @OA\Get(
     *     path="/mrsoft-news/public/api/client/{id}",
     *     summary="Get client by id",
     *     tags={"Client"},
     *     @OA\Parameter(name="id", in="path", required=true, description="Client id", @OA\Schema(type="integer")),
     *     @OA\Response(response="200", description="Success", @OA\JsonContent(ref="#/components/schemas/CommentResourceCollection")),
     *     @OA\Response(response="404", description="Not found", @OA\JsonContent(
     *         @OA\Property(property="message", type="string", example="Client not found")
     *     ))
     * )
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * @OA\Put(
     *     path="/mrsoft-news/public/api/client/{id}",
     *     summary="Update a client",
     *     tags={"Client"},
     *     @OA\Parameter(name="id", in="path", required=true, description="Client id", @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="name", type="string", example="Client name"),
     *             @OA\Property(property="logo", type="string", example="logo.jpg"),
     *             @OA\Property(property="type_id", type="integer", example=1),
     *             @OA\Property(property="active", type="boolean", example=true)
     *         )
     *     ),
     *     @OA\Response(response="200", description="Updated", @OA\JsonContent(ref="#/components/schemas/CommentResourceCollection")),
     *     @OA\Response(response="404", description="Not found", @OA\JsonContent(
     *         @OA\Property(property="message", type="string", example="Client not found")
     *     )),
     *     @OA\Response(response="422", description="Validation error", @OA\JsonContent(ref="#/components/schemas/ValidationError"))
     * )
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * @OA\Delete(
     *     path="/mrsoft-news/public/api/client/{id}",
     *     summary="Delete a client",
     *     tags={"Client"},
     *     @OA\Parameter(name="id", in="path", required=true, description="Client id", @OA\Schema(type="integer")),
     *     @OA\Response(response="200", description="Deleted", @OA\JsonContent(
     *         @OA\Property(property="message", type="string", example="Client deleted successfully")
     *     )),
     *     @OA\Response(response="404", description="Not found", @OA\JsonContent(
     *         @OA\Property(property="message", type="string", example="Client not found")
     *     ))
     * )
     */
    public function destroy(Client $client)
    {
        //
    }
}
