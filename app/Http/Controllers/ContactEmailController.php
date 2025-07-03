<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactEmailRequest;
use App\Mail\ConfirmOrder;
use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactEmailController extends Controller
{
    public function contact(ContactEmailRequest $request)
    {
        Mail::to(["hvaldiviezos@unprg.edu.pe", "martinampuero@hotmail.com", "alex_3849@hotmail.com"])->send(new ContactEmail(
            $request->ruc,
            $request->razon_social,
            $request->direccion,
            $request->ciudad_pais,
            $request->persona_contacto,
            $request->telefono,
            $request->correo,
            $request->mensaje,
            $request->producto
        ));

        return response()->json([
            'message' => 'Email enviado correctamente',
        ], 200);

    }
}
