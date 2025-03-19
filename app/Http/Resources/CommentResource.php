<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema(
 *     schema="CommentResource",
 *     @OA\Property(property="id", type="integer", example="1"),
 *     @OA\Property(property="content", type="string", example="Muy buena plataforma me facilita mucho para llevar..."),
 *     @OA\Property(property="person", type="string", example="Jose Santos More Monja"),
 *     @OA\Property(property="position", type="string", example="Administrador"),
 *     @OA\Property(property="producto", type="string", example="Mr. Soft"),
 *     @OA\Property(property="cliente", ref="#/components/schemas/ClientResource")
 * )
 *
 * @OA\Schema(
 *     schema="CommentResourceCollection",
 *     type="array",
 *     @OA\Items(ref="#/components/schemas/CommentResource")
 * )
 *
 */

class CommentResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return[
            'id' => $this->id,
            'content' => $this->content,
            'person' => $this->person,
            'position' => $this->position,
            'producto' => $this->product->name,
            'cliente' => new ClientResource($this->client),
        ];
    }
}
