<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contacto Web</title>
    <style>
        body {
            background-color: #040931;
            color: #ffffff;
            font-family: Arial, sans-serif;
            padding: 40px 20px;
        }

        h1 {
            color: #040931;
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: white;
            border: 1px solid #5EBEB5;
            border-radius: 8px;
            overflow: hidden;
        }

        td {
            padding: 12px 16px;
            vertical-align: top;
            border-bottom: 1px solid #5EBEB5;
        }

        td.label {
            font-weight: bold;
            background-color: #5EBEB5;
            color: white;
            width: 35%;
        }

        tr:last-child td {
            border-bottom: none;
        }

        p.message {
            background: #040931;
            color: #ffffff;
            padding: 16px;
            max-width: 600px;
            margin: 30px auto 0;
            border-left: 4px solid #5EBEB5;
            border-radius: 4px;
            white-space: pre-wrap;
        }
    </style>
</head>
<body>
<h1>Contacto desde la web de {{ $producto }}</h1>

<table>
    @if($razon_social)
        <tr>
            <td class="label">Empresa</td>
            <td>{{ $razon_social }}</td>
        </tr>
    @endif

    @if($ruc)
        <tr>
            <td class="label">RUC</td>
            <td>{{ $ruc }}</td>
        </tr>
    @endif

    @if($persona_contacto)
        <tr>
            <td class="label">Persona</td>
            <td>{{ $persona_contacto }}</td>
        </tr>
    @endif

    @if($telefono)
        <tr>
            <td class="label">Teléfono</td>
            <td>{{ $telefono }}</td>
        </tr>
    @endif

    @if($correo)
        <tr>
            <td class="label">Correo</td>
            <td>{{ $correo }}</td>
        </tr>
    @endif
</table>

@if($mensaje)
    <p class="message"><strong>Mensaje:</strong><br>{{ $mensaje }}</p>
@endif
</body>
</html>
