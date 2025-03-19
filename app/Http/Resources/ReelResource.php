<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema(
 *     schema="ReelResource",
 *     @OA\Property(property="id", type="integer", example="1"),
 *     @OA\Property(property="title", type="string", example="News title"),
 *     @OA\Property(property="description", type="string", example="News description"),
 *     @OA\Property(property="video", type="string", example="https://develop.garzasoft.com/storage/video.mp4"),
 * )
 *
 * @OA\Schema(
 *     schema="ReelResourceCollection",
 *     type="array",
 *     @OA\Items(ref="#/components/schemas/ReelResource")
 * )
 *
 */
class ReelResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return[
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'video' => asset('storage/' . $this->video),
        ];
    }
}
