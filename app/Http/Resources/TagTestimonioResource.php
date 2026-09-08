<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema(
 *     schema="TagTestimonioResource",
 *     @OA\Property(property="id", type="integer", example="1"),
 *     @OA\Property(property="nombre", type="string", example="Facilidad de uso")
 * )
 *
 * @OA\Schema(
 *     schema="TagTestimonioResourceCollection",
 *     type="array",
 *     @OA\Items(ref="#/components/schemas/TagTestimonioResource")
 * )
 */
class TagTestimonioResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
        ];
    }
}
