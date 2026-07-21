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
                            {{ $producto }}
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

                            @if($razon_social)
                            <tr>
                                <td style="width:32px;padding:18px 12px 18px 0;vertical-align:top;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="{{ $primaryColor }}" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/><path d="M10 6h4"/><path d="M10 10h4"/><path d="M10 14h4"/><path d="M10 18h4"/>
                                    </svg>
                                </td>
                                <td style="padding:18px 0;vertical-align:top;">
                                    <p style="margin:0 0 3px 0;font-size:16px;font-weight:500;color:#1D1D1F;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif;">{{ $razon_social }}</p>
                                    <p style="margin:0;font-size:12px;color:#AEAEB2;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif;">Empresa</p>
                                </td>
                            </tr>
                            @endif

                            @if($ruc)
                            <tr>
                                <td style="width:32px;padding:18px 12px 18px 0;vertical-align:top;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="{{ $primaryColor }}" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="4" x2="20" y1="9" y2="9"/><line x1="4" x2="20" y1="15" y2="15"/><line x1="10" x2="8" y1="3" y2="21"/><line x1="16" x2="14" y1="3" y2="21"/>
                                    </svg>
                                </td>
                                <td style="padding:18px 0;vertical-align:top;">
                                    <p style="margin:0 0 3px 0;font-size:16px;font-weight:500;color:#1D1D1F;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif;">{{ $ruc }}</p>
                                    <p style="margin:0;font-size:12px;color:#AEAEB2;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif;">RUC</p>
                                </td>
                            </tr>
                            @endif

                            @if($persona_contacto)
                            <tr>
                                <td style="width:32px;padding:18px 12px 18px 0;vertical-align:top;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="{{ $primaryColor }}" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>
                                    </svg>
                                </td>
                                <td style="padding:18px 0;vertical-align:top;">
                                    <p style="margin:0 0 3px 0;font-size:16px;font-weight:500;color:#1D1D1F;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif;">{{ $persona_contacto }}</p>
                                    <p style="margin:0;font-size:12px;color:#AEAEB2;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif;">Persona de contacto</p>
                                </td>
                            </tr>
                            @endif

                            @if($telefono)
                            <tr>
                                <td style="width:32px;padding:18px 12px 18px 0;vertical-align:top;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="{{ $primaryColor }}" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.36 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.13 2H6.15a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L7.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                    </svg>
                                </td>
                                <td style="padding:18px 0;vertical-align:top;">
                                    <p style="margin:0 0 3px 0;font-size:16px;font-weight:500;color:#1D1D1F;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif;">{{ $telefono }}</p>
                                    <p style="margin:0;font-size:12px;color:#AEAEB2;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif;">Teléfono</p>
                                </td>
                            </tr>
                            @endif

                            @if($correo)
                            <tr>
                                <td style="width:32px;padding:18px 12px 18px 0;vertical-align:top;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="{{ $primaryColor }}" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                                        <rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                                    </svg>
                                </td>
                                <td style="padding:18px 0;vertical-align:top;">
                                    <p style="margin:0 0 3px 0;font-size:16px;font-weight:500;color:#1D1D1F;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif;">{{ $correo }}</p>
                                    <p style="margin:0;font-size:12px;color:#AEAEB2;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif;">Correo electrónico</p>
                                </td>
                            </tr>
                            @endif

                            @if($direccion)
                            <tr>
                                <td style="width:32px;padding:18px 12px 18px 0;vertical-align:top;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="{{ $primaryColor }}" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/>
                                    </svg>
                                </td>
                                <td style="padding:18px 0;vertical-align:top;">
                                    <p style="margin:0 0 3px 0;font-size:16px;font-weight:500;color:#1D1D1F;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif;">{{ $direccion }}</p>
                                    <p style="margin:0;font-size:12px;color:#AEAEB2;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif;">Dirección</p>
                                </td>
                            </tr>
                            @endif

                            @if($ciudad_pais)
                            <tr>
                                <td style="width:32px;padding:18px 12px 18px 0;vertical-align:top;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="{{ $primaryColor }}" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"/><line x1="2" x2="22" y1="12" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                                    </svg>
                                </td>
                                <td style="padding:18px 0;vertical-align:top;">
                                    <p style="margin:0 0 3px 0;font-size:16px;font-weight:500;color:#1D1D1F;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif;">{{ $ciudad_pais }}</p>
                                    <p style="margin:0;font-size:12px;color:#AEAEB2;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif;">Ciudad / País</p>
                                </td>
                            </tr>
                            @endif

                        </table>
                    </td>
                </tr>

                @if($mensaje)
                <!-- Message divider -->
                <tr>
                    <td class="wrap" style="padding:8px 52px 0;">
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr><td style="height:1px;background-color:#E8E8ED;font-size:0;line-height:0;">&nbsp;</td></tr>
                        </table>
                    </td>
                </tr>

                <!-- Message section -->
                <tr>
                    <td class="wrap" style="padding:24px 52px 20px;">
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td style="padding-right:10px;vertical-align:middle;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="{{ $primaryColor }}" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                                    </svg>
                                </td>
                                <td style="font-size:14px;font-weight:600;color:#86868B;vertical-align:middle;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif;">Mensaje</td>
                            </tr>
                        </table>
                        <p style="margin:16px 0 0 0;font-size:16px;line-height:1.75;color:#1D1D1F;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif;white-space:pre-wrap;">{{ $mensaje }}</p>
                    </td>
                </tr>
                @endif

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
