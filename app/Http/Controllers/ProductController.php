<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/products/{product}/pricing",
     *     summary="Get pricing modules for a product",
     *     tags={"Product"},
     *     @OA\Parameter(name="product", in="path", required=true, description="Product ID", @OA\Schema(type="integer", example=1)),
     *     @OA\Response(
     *         response="200",
     *         description="Success",
     *         @OA\JsonContent(
     *             @OA\Property(property="installation_price", type="number", format="float", nullable=true, example=500.00),
     *             @OA\Property(
     *                 property="modules",
     *                 type="array",
     *                 @OA\Items(
     *                     @OA\Property(property="id", type="integer", example=1),
     *                     @OA\Property(property="name", type="string", example="Módulo Ventas"),
     *                     @OA\Property(
     *                         property="pricing",
     *                         type="object",
     *                         @OA\Property(property="monthly", type="number", format="float", example=99.90),
     *                         @OA\Property(property="annual", type="number", format="float", example=999.00),
     *                         @OA\Property(property="quote", type="boolean", example=true),
     *                         @OA\Property(property="message", type="string", example="Contáctenos para cotizar")
     *                     )
     *                 )
     *             )
     *         )
     *     ),
     *     @OA\Response(response="404", description="Product not found")
     * )
     */
    public function pricing(Product $product): JsonResponse
    {
        $modules = $product->prices->groupBy('name')->map(function ($rows, $name) {
            $pricing = [];

            foreach ($rows as $row) {
                if ($row->is_quote) {
                    $pricing['quote'] = true;
                    if ($row->quote_message) {
                        $pricing['message'] = $row->quote_message;
                    }
                } else {
                    $pricing[$row->period] = (float)$row->price;
                }
            }

            return [
                'id'      => $rows->first()->id,
                'name'    => $name,
                'pricing' => $pricing,
            ];
        })->values();

        return response()->json([
            'installation_price' => $product->installation_price !== null
                ? (float)$product->installation_price
                : null,
            'modules'            => $modules,
        ]);
    }
}
