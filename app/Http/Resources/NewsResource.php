<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema(
 *     schema="NewsResource",
 *     @OA\Property(property="id", type="integer", example="1"),
 *     @OA\Property(property="title", type="string", example="News title"),
 *     @OA\Property(property="description", type="string", example="News description"),
 *     @OA\Property(property="date", type="string", example="2021-09-01"),
 *     @OA\Property(property="image", type="string", example="http://localhost/storage/image.jpg"),
 *     @OA\Property(property="images", type="array", @OA\Items(type="string", example="http://localhost/storage/image.jpg")),
 *     @OA\Property(property="content", type="string", example="News content"),
 *     @OA\Property(property="typeMedia", type="string", example="video"),
 *     @OA\Property(property="category", type="string", example="Category name"),
 *     @OA\Property(property="category_id", type="integer", example="1"),
 *     @OA\Property(property="newsRelated", type="array", @OA\Items(ref="#/components/schemas/NewsRelatedResource"))
 * )
 */
class NewsResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'date' => $this->date,
            'image' => asset('storage/' . $this->image),
            'images' => collect($this->images)->map(fn($image) => asset('storage/' . $image))->all(),
            'content' => $this->content,
            'typeMedia' => $this->typeMedia,
//            'product' => $this->product->name,
            'category' => $this->category->name,
//            'product_id' => $this->product_id,
            'category_id' => $this->category_id,
            'newsRelated' => NewsRelatedResource::collection($this->newsRelated($this->id)),
        ];
    }
}
