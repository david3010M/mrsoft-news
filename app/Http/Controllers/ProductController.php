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
     *                     @OA\Property(property="short_description", type="string", nullable=true, example="Gestión de ventas y facturación"),
     *                     @OA\Property(property="description", type="string", nullable=true, example="Descripción completa del módulo de ventas"),
     *                     @OA\Property(property="is_featured", type="boolean", example=true),
     *                     @OA\Property(
     *                         property="features",
     *                         type="array",
     *                         @OA\Items(
     *                             @OA\Property(property="name", type="string", example="Reportes en tiempo real"),
     *                             @OA\Property(property="description", type="string", nullable=true, example="Visualiza tus ventas al instante")
     *                         )
     *                     ),
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
        $modules = $product->modules->map(function ($module) {
            $pricing = [];

            if ($module->monthly !== null) {
                $pricing['monthly'] = (float) $module->monthly;
            }

            if ($module->annual !== null) {
                $pricing['annual'] = (float) $module->annual;
            }

            if ($module->is_quote) {
                $pricing['quote'] = true;
                if ($module->quote_message) {
                    $pricing['message'] = $module->quote_message;
                }
            }

            return [
                'id'                => $module->id,
                'name'              => $module->name,
                'short_description' => $module->short_description,
                'description'       => $module->description,
                'is_featured'       => (bool) $module->is_featured,
                'features'          => $module->features ?? [],
                'pricing'           => $pricing,
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
