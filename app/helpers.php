<?php

use Illuminate\Support\Str;

if (! function_exists('media_url')) {
    /**
     * Devuelve la URL absoluta (con esquema y host) de un archivo público.
     *
     * A diferencia de asset(), no depende del host de la petición entrante:
     * usa siempre APP_URL, así la API entrega rutas completas
     * (https://dominio/storage/...) sea cual sea el entorno o subdirectorio.
     *
     * - null / '' -> null
     * - ya es una URL http(s) -> se devuelve tal cual
     * - 'clientes/x.png' o '/storage/clientes/x.png' -> https://dominio/storage/clientes/x.png
     */
    function media_url(?string $path): ?string
    {
        if (blank($path)) {
            return null;
        }

        if (Str::startsWith($path, ['http://', 'https://'])) {
            return $path;
        }

        $base = rtrim((string) config('app.url'), '/');
        $path = ltrim($path, '/');

        if (! Str::startsWith($path, 'storage/')) {
            $path = 'storage/' . $path;
        }

        return $base . '/' . $path;
    }
}
