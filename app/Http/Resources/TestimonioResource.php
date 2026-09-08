<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema(
 *     schema="TestimonioResource",
 *     @OA\Property(property="id", type="integer", example="1"),
 *     @OA\Property(property="titulo", type="string", example="Más control de caja"),
 *     @OA\Property(property="descripcion", type="string", example="Este es un pequeño resumen"),
 *     @OA\Property(property="destacado", type="boolean", example=true),
 *     @OA\Property(property="url", type="string", example="https://www.youtube.com/shorts/abc123"),
 *     @OA\Property(property="cliente", ref="#/components/schemas/ClientResource"),
 *     @OA\Property(property="producto", type="string", example="Gesrest"),
 *     @OA\Property(property="tags", type="array", @OA\Items(ref="#/components/schemas/TagTestimonioResource"))
 * )
 *
 * @OA\Schema(
 *     schema="TestimonioResourceCollection",
 *     type="array",
 *     @OA\Items(ref="#/components/schemas/TestimonioResource")
 * )
 */
class TestimonioResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'titulo' => $this->titulo,
            'descripcion' => $this->descripcion,
            'destacado' => (bool) $this->destacado,
            'url' => $this->url,
            'cliente' => $this->whenLoaded('client', fn() => $this->client ? new ClientResource($this->client) : null),
            'producto' => $this->whenLoaded('product', fn() => $this->product?->name),
            'tags' => TagTestimonioResource::collection($this->whenLoaded('tags')),
        ];
    }
}
