<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema(
 *     schema="NewsRelatedResource",
 *     @OA\Property(property="id", type="integer", example="1"),
 *     @OA\Property(property="title", type="string", example="News title"),
 *     @OA\Property(property="description", type="string", example="News description"),
 *     @OA\Property(property="date", type="string", example="2021-09-01"),
 *     @OA\Property(property="category", type="string", example="Category name"),
 *     @OA\Property(property="image", type="string", example="http://localhost/storage/image.jpg")
 * )
 *
 * @OA\Schema(
 *     schema="NewsRelatedResourceCollection",
 *     type="array",
 *     @OA\Items(ref="#/components/schemas/NewsRelatedResource")
 * )
 *
 */
class NewsRelatedResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'date' => $this->date,
//            'product' => $this->product->name,
            'category' => $this->category->name,
            'image' => $this->image ? asset('storage/' . $this->image) : asset('/storage/clientes/placeholder.svg'),
        ];
    }
}
