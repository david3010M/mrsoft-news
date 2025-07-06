<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto desde la web</title>
    <style>
        body {
            background-color: {{$primaryColor}};
            color: {{$foreground}};
            font-family: Arial, sans-serif;
            padding: 40px 20px;
        }

        h1 {
            color: {{$primaryColor}};
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: white;
            border: 1px solid{{$secondaryColor}};
            overflow: hidden;
        }

        td {
            padding: 12px 16px;
            vertical-align: top;
            border-bottom: 1px solid{{$secondaryColor}};
        }

        td.label {
            font-weight: bold;
            background-color: {{$secondaryColor}};
            color: {{$foreground}};
            width: 35%;
        }

        tr:last-child td {
            border-bottom: none;
        }
    </style>
</head>
<body>
<h1>Contacto desde la web</h1>

<table>
    @foreach ($values as $item)
        <tr>
            <td class="label">{{ ucfirst(str_replace('_', ' ', $item['key'])) }}</td>
            <td>{{ $item['value'] }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
