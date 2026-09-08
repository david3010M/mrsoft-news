<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *             title="API's MrSoft News",
 *             version="1.0",
 *             description="API's for MrSoft News",
 * )
 *
 * @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST,
 *      description="Servidor de la API (dinámico: usa APP_URL del entorno actual)"
 * )
 *
 * @OA\SecurityScheme(
 *      securityScheme="bearerAuth",
 *      in="header",
 *      name="Authorization",
 *      type="http",
 *      scheme="bearer",
 *      bearerFormat="JWT",
 *  )
 *
 * @OA\Schema (
 *      schema="PaginationLinks",
 *      @OA\Property(property="first", type="string", example="/api/path?page=1"),
 *      @OA\Property(property="last", type="string", example="/api/path?page=4"),
 *      @OA\Property(property="prev", type="string", example="null"),
 *      @OA\Property(property="next", type="string", example="/api/path?page=2")
 *  )
 *
 * @OA\Schema (
 *      schema="PaginationMetaLinks",
 *      @OA\Property(property="url", type="string", example="/api/path?page=1"),
 *      @OA\Property(property="label", type="string", example="1"),
 *      @OA\Property(property="active", type="boolean", example="true")
 *  )
 *
 * @OA\Schema (
 *      schema="PaginationMeta",
 *      @OA\Property(property="current_page", type="integer", example="1"),
 *      @OA\Property(property="from", type="integer", example="1"),
 *      @OA\Property(property="last_page", type="integer", example="4"),
 *      @OA\Property(property="links", type="object", ref="#/components/schemas/PaginationMetaLinks"),
 *      @OA\Property(property="path", type="string", example="/api/path"),
 *      @OA\Property(property="per_page", type="integer", example="15"),
 *      @OA\Property(property="to", type="integer", example="15"),
 *      @OA\Property(property="total", type="integer", example="60")
 *  )
 *
 * @OA\Schema (
 *      schema="ValidationError",
 *      @OA\Property(property="error", type="string", example="The pagination must be an integer.")
 *  )
 *
 * @OA\Schema (
 *      schema="Unauthenticated",
 *      @OA\Property(property="error", type="string", example="Unauthenticated.")
 *  )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
