<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema(
 *     schema="DepartmentResource",
 *     @OA\Property(property="id", type="integer", example="1"),
 *     @OA\Property(property="name", type="string", example="Department name"),
 * )
 *
 * @OA\Schema(
 *     schema="DepartmentResourceCollection",
 *     type="array",
 *     @OA\Items(ref="#/components/schemas/DepartmentResource")
 * )
 *
 */
class DepartmentResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }
}
