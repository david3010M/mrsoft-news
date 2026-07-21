<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactEmailByValuesRequest;
use App\Http\Requests\ContactEmailRequest;
use App\Mail\ConfirmOrder;
use App\Mail\ContactByValuesEmail;
use App\Mail\ContactEmail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactEmailController extends Controller
{
    /**
     * @OA\Post(
     *     path="/mrsoft-news/public/api/contact",
     *     summary="Send a contact form email",
     *     tags={"Contact"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"ruc", "razon_social", "persona_contacto", "telefono", "correo", "mensaje", "producto"},
     *             @OA\Property(property="ruc", type="string", minLength=11, maxLength=11, example="12345678901"),
     *             @OA\Property(property="razon_social", type="string", example="Mi Empresa SAC"),
     *             @OA\Property(property="direccion", type="string", nullable=true, example="Av. Principal 123"),
     *             @OA\Property(property="ciudad_pais", type="string", nullable=true, example="Lima, Perú"),
     *             @OA\Property(property="persona_contacto", type="string", example="Juan Pérez"),
     *             @OA\Property(property="telefono", type="string", example="+51 999 999 999"),
     *             @OA\Property(property="correo", type="string", format="email", example="juan@empresa.com"),
     *             @OA\Property(property="mensaje", type="string", minLength=50, maxLength=1000, example="Estoy interesado en su producto y me gustaría recibir más información sobre precios y funcionalidades."),
     *             @OA\Property(property="producto", type="string", example="Gesrest")
     *         )
     *     ),
     *     @OA\Response(response="200", description="Email enviado correctamente", @OA\JsonContent(
     *         @OA\Property(property="message", type="string", example="Email enviado correctamente")
     *     )),
     *     @OA\Response(response="422", description="Validation error", @OA\JsonContent(ref="#/components/schemas/ValidationError"))
     * )
     */
    public function contact(ContactEmailRequest $request)
    {
        $product = Product::where('name', $request->producto)->first();
        $primaryColor = $product?->primary_color ?? '#040931';
        $secondaryColor = $product?->secondary_color ?? '#5EBEB5';

        Mail::to(["hvaldiviezos@unprg.edu.pe"])->send(new ContactEmail(
            $request->ruc,
            $request->razon_social,
            $request->direccion,
            $request->ciudad_pais,
            $request->persona_contacto,
            $request->telefono,
            $request->correo,
            $request->mensaje,
            $request->producto,
            $primaryColor,
            $secondaryColor,
        ));

        return response()->json([
            'message' => 'Email enviado correctamente',
        ], 200);

    }

    /**
     * @OA\Post(
     *     path="/mrsoft-news/public/api/contactByValues",
     *     summary="Send a styled email with custom key-value data",
     *     tags={"Contact"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"emails", "values"},
     *             @OA\Property(property="primaryColor", type="string", nullable=true, example="#FF5733"),
     *             @OA\Property(property="secondaryColor", type="string", nullable=true, example="#33C3FF"),
     *             @OA\Property(property="foreground", type="string", nullable=true, example="#FFFFFF"),
     *             @OA\Property(property="emails", type="array", @OA\Items(type="string", format="email", example="recipient@empresa.com")),
     *             @OA\Property(
     *                 property="values",
     *                 type="array",
     *                 @OA\Items(
     *                     @OA\Property(property="key", type="string", example="Nombre"),
     *                     @OA\Property(property="value", type="string", example="Juan Pérez")
     *                 )
     *             )
     *         )
     *     ),
     *     @OA\Response(response="200", description="Email enviado correctamente", @OA\JsonContent(
     *         @OA\Property(property="message", type="string", example="Email enviado correctamente")
     *     )),
     *     @OA\Response(response="422", description="Validation error", @OA\JsonContent(ref="#/components/schemas/ValidationError"))
     * )
     */
    public function contactByValues(ContactEmailByValuesRequest $request)
    {
        $data = $request->validated();
        Mail::to($data["emails"])->send(new ContactByValuesEmail(
            $data["values"],
            $data["primaryColor"],
            $data["secondaryColor"],
            $data["foreground"]
        ));

        return response()->json(['message' => 'Email enviado correctamente',]);
    }
}
