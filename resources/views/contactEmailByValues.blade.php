<!doctype html>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nuevo contacto</title>
    <style>
        body { margin: 0; padding: 0; background-color: #ffffff; }
        table { border-spacing: 0; border-collapse: collapse; }
        td { padding: 0; }
        @media only screen and (max-width: 640px) {
            .wrap { padding-left: 24px !important; padding-right: 24px !important; }
        }
    </style>
</head>
<body style="margin:0;padding:0;background-color:#ffffff;-webkit-font-smoothing:antialiased;">

<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%"
       style="background-color:#ffffff;">
    <tr>
        <td align="center">

            <table role="presentation" border="0" cellpadding="0" cellspacing="0"
                   style="width:600px;max-width:600px;background-color:#ffffff;">

                <!-- Header -->
                <tr>
                    <td class="wrap" style="padding:52px 52px 32px;">
                        <p style="margin:0 0 10px 0;font-size:12px;letter-spacing:0.1em;text-transform:uppercase;color:#AEAEB2;font-weight:500;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif;">
                            Nuevo contacto &middot; desde la web
                        </p>
                        <h1 style="margin:0;font-size:32px;font-weight:700;color:#1D1D1F;letter-spacing:-0.5px;line-height:1.2;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif;">
                            Información de contacto
                        </h1>
                    </td>
                </tr>

                <!-- Divider -->
                <tr>
                    <td class="wrap" style="padding:0 52px;">
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr><td style="height:1px;background-color:#E8E8ED;font-size:0;line-height:0;">&nbsp;</td></tr>
                        </table>
                    </td>
                </tr>

                <!-- Fields -->
                <tr>
                    <td class="wrap" style="padding:8px 52px 8px;">
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">

                            @foreach ($values as $item)
                            <tr>
                                <td style="width:32px;padding:18px 12px 18px 0;vertical-align:top;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 24 24" fill="{{$primaryColor}}" stroke="none">
                                        <circle cx="12" cy="12" r="10"/>
                                    </svg>
                                </td>
                                <td style="padding:18px 0;vertical-align:top;">
                                    <p style="margin:0 0 3px 0;font-size:16px;font-weight:500;color:#1D1D1F;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif;">{{ $item['value'] }}</p>
                                    <p style="margin:0;font-size:12px;color:#AEAEB2;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif;">{{ ucfirst(str_replace('_', ' ', $item['key'])) }}</p>
                                </td>
                            </tr>
                            @endforeach

                        </table>
                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td class="wrap" style="padding:32px 52px 52px;">
                        <p style="margin:0;font-size:12px;color:#AEAEB2;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif;">
                            Enviado desde el formulario de contacto web
                        </p>
                    </td>
                </tr>

            </table>

        </td>
    </tr>
</table>

</body>
</html>
