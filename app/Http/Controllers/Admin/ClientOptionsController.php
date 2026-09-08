<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\TagTestimonio;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Opciones para los selects dependientes del formulario de Testimonios.
 * MoonShine 2.0 no tiene campos reactivos, así que el cascadeo
 * producto -> (cliente | motivos) se resuelve con estos endpoints + un
 * script en resources/views/vendor/moonshine/layouts/shared/assets.blade.php
 */
class ClientOptionsController extends Controller
{
    public function byProduct(Request $request): JsonResponse
    {
        $productId = $request->integer('product_id') ?: null;

        $clients = Client::query()
            ->where('active', true)
            ->when(
                $productId,
                fn ($q) => $q->whereHas('type', fn ($t) => $t->where('product_id', $productId))
            )
            ->orderBy('nombre')
            ->get(['id', 'nombre']);

        return response()->json(
            $clients->map(fn (Client $c): array => [
                'value' => (string) $c->id,
                'label' => $c->nombre,
            ])->all()
        );
    }

    /**
     * Lista completa de motivos. Los Motivos del testimonio ya no dependen del
     * producto: el select siempre ofrece todos y este endpoint solo se usa para
     * refrescar la lista tras crear uno nuevo desde el modal "Agregar".
     */
    public function tagsByProduct(Request $request): JsonResponse
    {
        $tags = TagTestimonio::query()
            ->orderBy('nombre')
            ->get(['id', 'nombre']);

        return response()->json(
            $tags->map(fn (TagTestimonio $t): array => [
                'value' => (string) $t->id,
                'label' => $t->nombre,
            ])->all()
        );
    }
}
