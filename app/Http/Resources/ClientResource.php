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
 *     @OA\Property(property="logo", type="string", example="https://develop.garzasoft.com/storage/logo.png"),
 *     @OA\Property(property="departamento", type="string", example="News description"),
 *     @OA\Property(property="type", type="string", example="News description"),
 *     @OA\Property(property="departments", ref="#/components/schemas/DepartmentResourceCollection"),
 *     @OA\Property(property="addresses", ref="#/components/schemas/AddressResourceCollection"),
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
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'logo' => media_url($this->logo),
            'type' => $this->type?->name,
            'departments' => DepartmentResource::collection($this->whenLoaded('departments')),
            'addresses' => AddressResource::collection($this->whenLoaded('addresses')),
        ];
    }
}
