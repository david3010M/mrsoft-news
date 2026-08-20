{!! moonshineAssets()->toHtml() !!}

@stack('styles')

<style>
    [x-cloak] { display: none !important; }
</style>

<script>
    const translates = @js(__('moonshine::ui'));
</script>

<style>
    :root {
    @foreach (moonshineAssets()->getColors() as $name => $value)
    --{{ $name }}:{{ $value }};
    @endforeach
    }
    :root.dark {
    @foreach (moonshineAssets()->getColors(dark: true) as $name => $value)
        --{{ $name }}:{{ $value }};
    @endforeach
    }

    /* ══ SIDEBAR siempre oscuro (slate-950) — variables iguales en ambos modos ══ */
    :root,
    :root.dark {
        --menu-link-color:    148, 163, 184;  /* slate-400 — texto sobre fondo oscuro */
        --menu-hover-color:   8,   145, 178;  /* cyan-600  */
        --menu-current-bg:    14,  116, 144;  /* cyan-700  */
        --menu-current-color: 255, 255, 255;  /* blanco    */
        --menu-dropdown-bg:   15,  23,  42;   /* slate-900 — dropdown sobre sidebar oscuro */
    }

    /* ══ BASE — frame/body siempre slate-950 ══ */
    body { background-color: #020617 !important; }

    /* ══ SIDEBAR — mismo color que el body (se funde, sin "rectángulo") ══ */
    .layout-menu                          { background-color: #020617; border: none; }
    .layout-menu .menu                    { background-color: #020617 !important; }

    /* ══ CONTENIDO — cambia según modo ══ */
    .layout-page                          { background-color: #f8fafc; } /* slate-50  */
    :root.dark .layout-page              { background-color: #0f172a; } /* slate-900 */

    /* ══ CONECTORES del ítem activo — deben coincidir con .layout-page ══ */
    .layout-menu .menu-inner-link::after,
    .layout-menu .menu-inner-item._is-active::before,
    .layout-menu .menu-inner-item._is-active::after {
        background-color: #f8fafc !important; /* light: slate-50 */
    }
    :root.dark .layout-menu .menu-inner-link::after,
    :root.dark .layout-menu .menu-inner-item._is-active::before,
    :root.dark .layout-menu .menu-inner-item._is-active::after {
        background-color: #0f172a !important; /* dark: slate-900 */
    }

    /* ══ PERFIL / TOGGLE — sidebar siempre oscuro → texto siempre claro ══ */
    .menu-profile-info > .name           { color: #e2e8f0 !important; } /* slate-200 */
    .menu-profile-info > .email          { color: #94a3b8 !important; } /* slate-400 */
    .menu-profile-exit                   { color: #475569 !important; }
    .menu-profile-exit:hover             { color: #22d3ee !important; } /* cyan-400  */
    .menu-heading-mode-btn,
    .menu-inner-button                   { color: #94a3b8 !important; } /* slate-400 */
    .menu-heading-mode-btn:hover,
    .menu-inner-button:hover             { color: #22d3ee !important; }
    /* _is-active va en el <button> mismo (Alpine.js), no en el <li> padre */
    .menu-inner-button._is-active        { color: #ffffff !important; }

    /* ══ SIDEBAR COMPACTO — ítems más pequeños ══ */
    .menu-inner-link,
    .layout-menu .menu-inner-button {
        padding: 0.45rem 0.875rem !important;
        font-size: 0.875rem !important;
    }
    .menu-inner-link > svg,
    .layout-menu .menu-inner-button > svg { width: 1.1rem !important; height: 1.1rem !important; }

    /* Encabezados de grupo — sidebar siempre oscuro */
    .menu-heading-title,
    .menu-inner-divider {
        color: #475569;
        font-size: 0.7rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.07em;
    }

    /* ══ HEADER DE PÁGINA — compacto ══ */
    .layout-page > header,
    .layout-page header { padding: 0.5rem 1rem !important; margin-bottom: 0.5rem !important; }
    .page-title           { font-size: 1.125rem !important; line-height: 1.5 !important; margin-bottom: 0 !important; }

    /* ══ NAVEGACIÓN (barra con search) — ultra compacta ══ */
    .layout-navigation    { padding: 0.375rem 0.875rem !important; min-height: 0 !important; }
    /* Search input en el header */
    .search-form-field    { height: 1.875rem !important; padding: 0.25rem 0.5rem !important; font-size: 0.8125rem !important; }
    .search               { height: 1.875rem !important; }
    .search-form          { height: 1.875rem !important; }

    /* ══ BOTONES — border-radius +5px y talla reducida ══ */
    .btn {
        border-radius: 0.6875rem !important; /* 11px — +5px sobre los 6px base */
        height: 2rem !important;
        padding: 0.3rem 0.625rem !important;
        font-size: 0.8125rem !important;
    }
    .btn.btn-lg {
        height: 2.25rem !important;
        padding: 0.35rem 0.875rem !important;
    }

    /* ══ TABLAS — filas compactas ══ */
    .table tbody td,
    .table tbody th               { padding: 0.4rem 0.75rem !important; }
    .table-list tbody td,
    .table-list tbody th          { padding: 0.4rem 1rem !important; }
    .table-list thead td,
    .table-list thead th          { padding: 0.4rem 1rem !important; }

    /* ══ TABLAS — bordes en dark más apagados (dark-600 en vez de dark-400) ══ */
    :root.dark .table tbody td,
    :root.dark .table tbody th    { border-color: #334155 !important; } /* slate-700 */

    /* ══ FORMS — compactos ══ */
    .form-group,
    .moonshine-field              { margin-bottom: 0.6rem !important; }
    .form-label                   { font-size: 0.8125rem !important; margin-bottom: 0.2rem !important; font-weight: 500; }
    .form-input,
    .form-textarea,
    .form-select {
        padding-top:    0.3rem  !important;
        padding-bottom: 0.3rem  !important;
        font-size:      0.875rem !important;
        min-height:     2rem    !important;
    }
    .form-textarea            { min-height: 4.5rem !important; }
    /* ══ CHOICES.JS — select compacto (sobrescribe estilos inline de Alpine/Choices) ══ */
    .choices__inner {
        min-height: 0 !important;
        height: 2rem !important;
        max-height: 2rem !important;
        padding: 0 2rem 0 0.5rem !important;
        font-size: 0.8125rem !important;
        border-radius: 0.375rem !important;
        display: flex !important;
        align-items: center !important;
        overflow: hidden !important;
    }
    .choices__list--single {
        padding: 0 !important;
        line-height: 1 !important;
    }
    .choices__list--single .choices__item {
        padding: 0 !important;
        font-size: 0.8125rem !important;
        line-height: 1 !important;
        white-space: nowrap !important;
    }
    /* Flecha — centrada verticalmente */
    .choices[data-type*="select-one"]::after {
        top: 50% !important;
        transform: translateY(-50%) !important;
        margin-top: 0 !important;
        right: 0.6rem !important;
    }
    /* Dropdown abierto — ancho mínimo para que las opciones no se corten */
    .choices__list--dropdown,
    .choices__list[aria-expanded] {
        min-width: 5rem !important;
        width: auto !important;
        z-index: 9999 !important;
    }
    .choices__list--dropdown .choices__item {
        font-size: 0.8125rem !important;
        padding: 0.3rem 0.6rem !important;
        white-space: nowrap !important;
        min-width: max-content !important;
    }
    /* Ocultar el hint "Press to select" */
    .choices__list--dropdown .choices__notice,
    .choices__item--choice .choices__button,
    [data-select-text]::after {
        display: none !important;
        content: none !important;
    }
    /* Reduce gap between form sections */
    .box .form-group + .form-group { margin-top: 0 !important; }

    /* ══ CARDS — capa única (evita el bug de caja-dentro-de-caja) ══ */
    .box, .moonshine-card {
        position: relative;
        z-index: 0;                 /* crea su propio contexto de apilamiento: el ::before de abajo
                                        queda SIEMPRE detrás en vez de escaparse y pintarse encima */
        overflow: hidden;          /* nada puede desbordarse ni "flotar" fuera de la tarjeta */
        min-width: 0;              /* evita que un grid item se ensanche por su contenido */
        background-color: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 0.5rem;
    }
    /* El pseudo-elemento "tarjeta apilada" (efecto stacked-card) de MoonShine es el causante
       real del rectángulo gris/azulado flotando encima de las cards: al no tener .box un
       contexto de apilamiento propio, su z-index:-1 se escapaba y pintaba por delante del
       contenido en vez de detrás. Lo desactivamos: no aporta nada al diseño flat/shadcn. */
    .box-shadow:before {
        display: none !important;
    }
    :root.dark .box,
    :root.dark .moonshine-card {
        background-color: #1e293b; /* slate-800 — contraste sobre slate-900 */
        border-color: #334155;     /* slate-700 */
    }

    /* report-card vive dentro de .box: sin fondo/borde/sombra propios para no duplicar capas */
    .report-card {
        background: transparent !important;
        box-shadow: none !important;
        border-radius: 0 !important;
        border: none !important;
        padding: 0.875rem !important;
        min-width: 0;
        overflow: hidden;
    }
    .report-card-heading {
        display: flex;
        align-items: center;
        margin-bottom: 0.5rem;
    }
    /* ícono en un chip suave, estilo shadcn */
    .report-card-heading > svg {
        width: 1.25rem !important;
        height: 1.25rem !important;
        flex: none;
        padding: 0.4rem;
        box-sizing: content-box;
        border-radius: 0.5rem;
        background-color: rgb(14 116 144 / 0.1);   /* cyan-700 @ 10% */
        color: rgb(14, 116, 144);
        opacity: 1;
    }
    :root.dark .report-card-heading > svg {
        background-color: rgb(34 211 238 / 0.12);  /* cyan-400 @ 12% */
        color: rgb(34, 211, 238);
    }
    .report-card-body {
        min-width: 0;
        margin-top: 0 !important; /* quita el mt-auto que empujaba el número al borde */
    }
    .report-card-value {
        font-size: 1.5rem !important;
        margin-top: 0.25rem !important;
        font-weight: 700 !important;
        color: rgb(14, 116, 144);       /* cyan-700 light */
        line-height: 1.2 !important;
    }
    .report-card-title {
        color: #64748b !important;      /* slate-500 light */
        font-size: 0.75rem !important;
        margin-top: 0.2rem !important;
    }
    :root.dark .report-card-value { color: rgb(34, 211, 238) !important; }  /* cyan-400 dark */
    :root.dark .report-card-title { color: #94a3b8 !important; }            /* slate-400 dark — visible en fondo oscuro */

    /* ══ TABLAS — LIGHT ══ */
    table thead            { background-color: #e2e8f0; }
    table th               { font-weight: 500; color: #475569; text-transform: none; letter-spacing: 0; font-size: 0.8125rem; }
    table tr:hover td      { background-color: #cffafe !important; }

    /* ══ TABLAS — DARK ══ */
    :root.dark table thead { background-color: #1e293b; }
    :root.dark table th    { color: #64748b; }
    :root.dark table tr:hover td { background-color: rgba(14, 116, 144, 0.10) !important; }

    /* ══ SOMBRAS (aplanar) ══ */
    *                                    { box-shadow: none !important; }
    .box, .moonshine-card, .modal        { box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.07) !important; }

    /* ══ BADGE ══ */
    .badge { border-radius: 9999px; font-size: 0.65rem; padding: 0.1rem 0.45rem; font-weight: 600; }

    /* ══ DROPDOWNS — mismo bug de fondo: MoonShine pinta el panel con su gris/azulado
       por defecto (--dark-500) en vez de nuestra paleta slate. Se repite en TODOS los
       dropdowns: notificaciones, menú de acciones "⋮" de las tablas y selector de idioma,
       porque los tres usan el mismo componente moonshine dropdown. ══ */
    .dropdown-body {
        background-color: #ffffff;
        border: 1px solid #e2e8f0;   /* antes dependía solo del shadow, que lo aplanamos abajo */
    }
    :root.dark .dropdown-body {
        background-color: #1e293b !important; /* slate-800 — igual que .box, no el gris de MoonShine */
        border: 1px solid #334155 !important;  /* slate-700 */
    }
    .dropdown-heading,
    .dropdown-footer {
        background-color: transparent !important;
        border-color: #e2e8f0 !important;
    }
    :root.dark .dropdown-heading,
    :root.dark .dropdown-footer {
        border-color: #334155 !important;
    }
    :root.dark .dropdown-heading { color: #e2e8f0 !important; }
    .dropdown-content > :not([hidden]) ~ :not([hidden]),
    .dropdown-menu > :not([hidden]) ~ :not([hidden]) {
        border-color: #e2e8f0 !important;
    }
    :root.dark .dropdown-content > :not([hidden]) ~ :not([hidden]),
    :root.dark .dropdown-menu > :not([hidden]) ~ :not([hidden]) {
        border-color: #334155 !important;
    }
    .dropdown-menu-link:hover {
        background-color: rgb(14 116 144 / 0.1) !important;   /* cyan-700 @ 10%, igual que hover de tablas */
    }
    :root.dark .dropdown-menu-link:hover {
        background-color: rgb(34 211 238 / 0.12) !important;  /* cyan-400 @ 12% */
        color: #e2e8f0 !important;
    }

    /* Contenido del dropdown de notificaciones */
    .notifications-title { color: #0f172a; }
    :root.dark .notifications-title { color: #e2e8f0 !important; }
    .notifications-text  { color: #64748b !important; }
    :root.dark .notifications-text { color: #94a3b8 !important; }
    .notifications-time  { color: #94a3b8 !important; }
    :root.dark .notifications-time { color: #64748b !important; }

    /* ══ DASHBOARD — el .box que envuelve el Grid es transparente; solo las cards internas son visibles ══ */
    .box:has(> .grid.grid-cols-12) {
        background: transparent !important;
        border: none !important;
        box-shadow: none !important;
        padding: 0 !important;
    }

    /* ══ DASHBOARD — cada columna del grid no puede ensancharse más que su carril ══ */
    .grid.grid-cols-12 > [class*="col-span-"] {
        min-width: 0;
    }

    /* ══ DASHBOARD — gaps entre secciones de métricas ══ */
    .layout-page > .layout-content > * + * { margin-top: 1.25rem; }
</style>
