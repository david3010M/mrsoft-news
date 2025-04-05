<?php

namespace App\Http\Resources;

use App\MoonShine\Resources\ProductResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema(
 *     schema="TypeResource",
 *     @OA\Property(property="id", type="integer", example="1"),
 *     @OA\Property(property="name", type="string", example="Tipo de prueba"),
 *     @OA\Property(property="product", type="string", example="Gesrest"),
 * )
 *
 * @OA\Schema(
 *     schema="TypeResourceCollection",
 *     type="array",
 *     @OA\Items(ref="#/components/schemas/TypeResource")
 * )
 *
 */
class TypeResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'product' => $this->product?->name,
        ];
    }
}
