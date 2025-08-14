<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactEmailByValuesRequest;
use App\Http\Requests\ContactEmailRequest;
use App\Mail\ConfirmOrder;
use App\Mail\ContactByValuesEmail;
use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactEmailController extends Controller
{
    public function contact(ContactEmailRequest $request)
    {
        Mail::to(["hvaldiviezos@unprg.edu.pe"])->send(new ContactEmail(
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
