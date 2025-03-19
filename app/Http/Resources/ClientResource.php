<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


/**
 * @OA\Schema(
 *     schema="ClientResource",
 *     @OA\Property(property="id", type="integer", example="1"),
 *     @OA\Property(property="nombre", type="string", example="News title"),
 *     @OA\Property(property="direccion", type="string", example="News description"),
 *     @OA\Property(property="logo", type="string", example="http://localhost/storage/logo.png"),
 * )
 *
 * @OA\Schema(
 *     schema="ClientResourceCollection",
 *     type="array",
 *     @OA\Items(ref="#/components/schemas/ClientResource")
 * )
 *
 */
class ClientResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return[
            'id' => $this->id,
            'nombre' => $this->nombre,
            'direccion' => $this->direccion,
            'logo' => asset('storage/' . $this->logo),
        ];
    }
}
