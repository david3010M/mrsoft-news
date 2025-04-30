<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema(
 *     schema="AddressResource",
 *     @OA\Property(property="id", type="integer", example="1"),
 *     @OA\Property(property="name", type="string", example="Address name"),
 * )
 *
 * @OA\Schema(
 *     schema="AddressResourceCollection",
 *     type="array",
 *     @OA\Items(ref="#/components/schemas/AddressResource")
 * )
 *
 */
class AddressResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'address' => $this->address,
            'reference' => $this->reference,
            'department' => new DepartmentResource($this->whenLoaded('department')),
        ];
    }
}
