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
        $clients = Client::with('type.product', 'comment', 'addresses.department', 'departments')
            ->where('active', true)
            ->whereHas('type.product', fn($query) => $query->where('name', $product))
            ->orderBy('created_at', 'desc');
        if ($request->has('limit')) $clients->limit($request->input('limit'));
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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
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
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }
}
