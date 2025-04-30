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
 *     @OA\Property(property="imagen_referencia", type="string", example="https://develop.garzasoft.com/storage/logo.png"),
 *     @OA\Property(property="flyer_bienvenida", type="string", example="https://develop.garzasoft.com/storage/logo.png"),
 *     @OA\Property(property="flyer_informativo", type="string", example="https://develop.garzasoft.com/storage/logo.png"),
 *     @OA\Property(property="type", type="string", example="News description"),
 *     @OA\Property(property="comment", type="object",
 *         @OA\Property(property="text", type="string", example="News description"),
 *         @OA\Property(property="author", type="string", example="News description"),
 *         @OA\Property(property="position", type="string", example="News description"),
 *     ),
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
            'logo' => $this->logo ? asset('storage/' . $this->logo) : null,
            'imagen_referencia' => $this->imagen_referencia ? asset('storage/' . $this->imagen_referencia) : null,
            'flyer_bienvenida' => $this->flyer_bienvenida ? asset('storage/' . $this->flyer_bienvenida) : null,
            'flyer_informativo' => $this->flyer_informativo ? asset('storage/' . $this->flyer_informativo) : null,
            'type' => $this->type?->name,
            'comment' => $this->comment ? [
                'text' => $this->comment->content,
                'author' => $this->comment->person,
                'position' => $this->comment->position,
            ] : null,
            'departments' => DepartmentResource::collection($this->whenLoaded('departments')),
            'addresses' => AddressResource::collection($this->whenLoaded('addresses')),
        ];
    }
}
