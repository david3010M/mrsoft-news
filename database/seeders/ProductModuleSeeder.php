<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductModule;
use Illuminate\Database\Seeder;

class ProductModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modules = [
            'Gesrest' => [
                [
                    'name' => 'Atención en Local + Facturación Electrónica',
                    'short_description' => 'El corazón operativo de tu restaurante. Este módulo centraliza todo lo que necesitas para brindar una atención impecable, desde que el cliente se sienta hasta que paga su cuenta, integrando además la facturación electrónica para que estés siempre al día con SUNAT sin esfuerzo adicional.',
                    'description' => 'El corazón operativo de tu restaurante. Este módulo centraliza todo lo que necesitas para brindar una atención impecable, desde que el cliente se sienta hasta que paga su cuenta, integrando además la facturación electrónica para que estés siempre al día con SUNAT sin esfuerzo adicional.',
                    'is_featured' => false,
                    'is_required' => true,
                    'monthly' => 120.00,
                    'annual' => 1200.00,
                    'is_quote' => false,
                    'quote_message' => null,
                    'features' => [
                        ['name' => 'Plataforma para Cajero', 'description' => 'El cajero tiene el control total en sus manos. Puede emitir y cobrar estados de cuenta por mesa, gestionar ventas rápidas al estilo cafetería o discoteca, y hacer seguimiento en tiempo real de pedidos para llevar, delivery y app móvil. Las anulaciones, ediciones, descuentos y cortesías requieren clave de aprobación del administrador, garantizando transparencia en cada operación. El cobro es flexible: acepta múltiples métodos de pago incluyendo billeteras digitales, el medio preferido por la mayoría de clientes hoy en día. Además, cuenta con control de caja chica para registrar ingresos y gastos, seguimiento de ventas al crédito con alertas de vencimiento, y un cuadre de caja detallado por turno para que nada quede sin registro.'],
                        ['name' => 'Plataforma para Mesero', 'description' => 'Olvídate de ir y venir a una estación fija. Tus meseros pueden atender a los clientes directamente desde su celular, tablet o computadora táctil, y emitir el estado de cuenta en mesa de forma autónoma. Más agilidad, menos errores y una experiencia más profesional para el comensal.'],
                        ['name' => 'Plataforma para Cocina', 'description' => 'La cocina siempre al ritmo del salón. Las comandas se imprimen automáticamente en cocina y bar en cuanto se toma el pedido. El equipo puede seguir el estado de cada pedido y sus tiempos de preparación desde una pantalla interactiva, y recibe un aviso al instante cuando un plato está listo para salir. Coordinación perfecta entre salón y cocina.'],
                        ['name' => 'Pedidos Programados y Cotizaciones', 'description' => 'Ideal para eventos, celebraciones o clientes corporativos. Gestiona pedidos con anticipación que incluyen un pago adelantado para recoger o entregar cuando el cliente lo necesite. También puedes generar borradores y cotizaciones de ventas para empresas, con la opción de convertirlos automáticamente en atención en mesa cuando llegue el momento.'],
                        ['name' => 'Compras', 'description' => 'Mantén un historial completo de tus proveedores y observa cómo ha evolucionado el costo de cada producto a lo largo del tiempo. Registra tus documentos de compra vinculándolos a los egresos correspondientes y lleva un seguimiento claro de todas tus cuentas por pagar. Decisiones de compra más inteligentes, respaldadas por datos reales.'],
                        ['name' => 'Control de Existencias', 'description' => 'Tu inventario, siempre bajo control. Organiza tu carta de productos por categorías, asigna cada plato a su impresora correspondiente (cocina o bar) y configura múltiples precios de venta según la modalidad: salón, mostrador, delivery o app. Gestiona entradas y salidas de almacén y accede al historial completo de movimientos para tener visibilidad total de tus existencias en todo momento.'],
                        ['name' => 'Producción y Recetas', 'description' => 'Sabe exactamente cuánto te cuesta cada plato. Crea productos compuestos que descuentan automáticamente el stock de sus insumos al momento de la venta. Además, calcula el costo real de cada receta considerando el precio de compra de ingredientes, mano de obra, porcentaje de merma y margen de ganancia deseado. Rentabilidad con precisión, desde la cocina.'],
                        ['name' => 'Facturación Electrónica', 'description' => 'Cumple con SUNAT sin complicaciones. El sistema envía automáticamente boletas, facturas, anulaciones, notas de crédito y guías de remisión cada vez que se genera una venta o se realiza un cambio. La emisión de comprobantes es ilimitada y, si se anula una venta, el comprobante se anula solo. Además, puedes enviar los comprobantes directamente al cliente por correo o WhatsApp. Sin papeles, sin demoras, sin errores.'],
                    ],
                ],
                [
                    'name' => 'Restaurante Inteligente',
                    'short_description' => 'Transforma los datos de tu restaurante en gráficos',
                    'description' => 'Tomar buenas decisiones requiere información clara. Este módulo transforma los datos de tu restaurante en gráficos visuales e indicadores clave que te permiten entender qué está funcionando, qué puedes mejorar y hacia dónde dirigir tu negocio. Deja de operar a ciegas y empieza a crecer con estrategia.',
                    'is_featured' => true,
                    'is_required' => false,
                    'monthly' => 60.00,
                    'annual' => 600.00,
                    'is_quote' => false,
                    'quote_message' => null,
                    'features' => [
                        ['name' => 'Estadísticas y Análisis de Ventas', 'description' => 'Conoce a fondo el comportamiento de tus ventas: ingreso promedio por persona y por transacción, tiempo promedio en mesa, productos y categorías más vendidos, comparativa entre el mes anterior y el actual, ventas por horario y por tipo de comprobante. Información que te dice cuándo vendes más, qué venden mejor y cómo mejorar tu operación día a día.'],
                        ['name' => 'Estadísticas y Análisis de Inventario', 'description' => 'Evita quiebres de stock y excesos innecesarios. Este apartado te indica cuál es el nivel óptimo para cada producto y qué necesitas reponer antes de que sea tarde. Gestión de inventario basada en datos, no en suposiciones.'],
                        ['name' => 'Estadísticas y Análisis de Rentabilidad', 'description' => 'Descubre cuánto ganas realmente. Analiza la rentabilidad bruta de tu negocio, identifica qué tipo de egreso impacta más tus márgenes y compara la rentabilidad por categoría y por producto. Así sabes qué conservar en tu carta, qué ajustar y qué retirar.'],
                        ['name' => 'Estadísticas y Análisis de Ingresos y Gastos de Caja', 'description' => 'Visualiza el flujo de dinero de tu negocio con un análisis diario, el comportamiento a lo largo de las semanas, los promedios diarios y mensuales, los egresos por concepto de pago y la participación de cada rubro en el mes. Transparencia financiera al alcance de un vistazo.'],
                        ['name' => 'Estadísticas y Análisis de Tiempos de Cocina', 'description' => 'Mide la eficiencia de tu cocina con datos concretos. Evalúa la calidad de los platos, revisa los pedidos aceptados y rechazados, y conoce el tiempo promedio de preparación por producto. Una herramienta poderosa para mejorar la velocidad del servicio y la satisfacción del cliente.'],
                    ],
                ],
                [
                    'name' => 'Carta Digital',
                    'short_description' => 'Ofrece una carta digital atractiva, actualizada y accesible desde cualquier celular.',
                    'description' => 'Moderniza la experiencia de tus clientes desde el primer contacto. Olvídate de los menús impresos desgastados o los PDFs difíciles de navegar, y ofrece una carta digital atractiva, actualizada y accesible desde cualquier celular. Una experiencia que sorprende antes de que llegue el primer plato.',
                    'is_featured' => false,
                    'is_required' => false,
                    'monthly' => 20.00,
                    'annual' => 200.00,
                    'is_quote' => false,
                    'quote_message' => null,
                    'features' => [
                        ['name' => 'Código QR', 'description' => 'Tus clientes solo tienen que escanear el código QR de su mesa o ingresar al enlace compartido para explorar tu carta completa al instante. Sin descargas, sin complicaciones.'],
                        ['name' => 'Personalización', 'description' => 'Tu carta digital se construye directamente desde el listado de productos que ya usas en el sistema para comandar. No necesitas cargar nada dos veces: lo que está en tu sistema, aparece en tu carta, organizado por categorías y listo para mostrarse al mundo.'],
                        ['name' => 'Interactividad', 'description' => 'Los clientes pueden armar su propio carrito de compra seleccionando productos, eligiendo opciones adicionales, complementos, y añadiendo notas personalizadas. Una experiencia de pedido intuitiva que reduce malentendidos y agiliza la atención.'],
                        ['name' => 'Comunicación con el Cliente', 'description' => 'Una vez armado el pedido, el sistema genera automáticamente un mensaje de WhatsApp para coordinar el pago con el cliente de forma rápida y directa. Tecnología que acerca a las personas.'],
                    ],
                ],
                [
                    'name' => 'Encuesta de Opinión',
                    'short_description' => 'Mide la calidad de tu servicio y recibe avisos automáticos de malas experiencias.',
                    'description' => 'La opinión de tus clientes es tu mejor brújula. Este módulo te permite crear encuestas personalizadas para medir la calidad de tu servicio, identificar oportunidades de mejora y entender qué es lo que más valoran quienes visitan tu restaurante. Escucha activa que se traduce en decisiones concretas.',
                    'is_featured' => false,
                    'is_required' => false,
                    'monthly' => 40.00,
                    'annual' => 400.00,
                    'is_quote' => false,
                    'quote_message' => null,
                    'features' => [
                        ['name' => 'Personalización', 'description' => 'Diseña encuestas a tu medida con distintos tipos de preguntas: selección de opción única, opción múltiple, confirmación de sí o no, escala de valoración (malo, bueno o excelente), calificación por estrellas o una escala numérica personalizada. Flexibilidad total para capturar exactamente lo que quieres saber.'],
                        ['name' => 'Avisos Automáticos de Malas Experiencias', 'description' => 'Cuando un cliente tiene una mala experiencia, cada segundo cuenta. El sistema te notifica de inmediato por WhatsApp cada vez que una encuesta refleja insatisfacción, indicándote el pedido involucrado y el responsable a cargo de esa mesa. Reacciona a tiempo, recupera la confianza y convierte una mala experiencia en una oportunidad de fidelización.'],
                        ['name' => 'Reportes y Estadísticas', 'description' => 'Accede a un resumen claro y visual de lo que opinan tus clientes sobre la comida, el ambiente, la atención y más. Tendencias, puntos fuertes y áreas de mejora en un solo lugar para que tomes acción con información sólida.'],
                    ],
                ],
                [
                    'name' => 'Reservas',
                    'short_description' => 'Control total de tus mesas y salones en tiempo real.',
                    'description' => 'Gestiona tus reservas con la misma precisión con la que preparas tus platos. Este módulo te da el control total de tus mesas y salones en tiempo real, permitiéndote organizar cada reserva, anticipar la demanda y garantizar que cada cliente sea recibido con todo listo para él.',
                    'is_featured' => false,
                    'is_required' => false,
                    'monthly' => 30.00,
                    'annual' => 300.00,
                    'is_quote' => false,
                    'quote_message' => null,
                    'features' => [
                        ['name' => 'Agenda Diaria y Calendario Semanal / Mensual', 'description' => 'Visualiza todas tus reservas en una agenda clara y ordenada, tanto a nivel diario como en vista semanal o mensual. Las reservas con pagos anticipados se destacan visualmente para que sepas, de un vistazo, qué está confirmado y qué aún está pendiente.'],
                        ['name' => 'Pagos Anticipados', 'description' => 'Registra los pagos anticipados de tus reservas, genera el comprobante correspondiente si es necesario y refleja ese ingreso directamente en tu caja chica. Sin vacíos en tu cuadre de dinero y con total trazabilidad de cada operación.'],
                        ['name' => 'Recordatorios de Asistencia', 'description' => 'Reduce las ausencias de forma simple y efectiva. Envía recordatorios automáticos a tus clientes por WhatsApp o correo electrónico para asegurarte de que no olviden su reserva. Menos mesas vacías, mejor planificación y una relación más cercana con quien te elige.'],
                    ],
                ],
                [
                    'name' => 'Eventos y Entradas',
                    'short_description' => 'Organiza, promueve y controla cada evento con generación de entradas y código QR.',
                    'description' => 'Lleva tus eventos al siguiente nivel. Este módulo te da las herramientas para organizar, promover y controlar cada evento con profesionalismo: desde la generación de entradas hasta el control de asistencia en puerta, todo en un solo sistema.',
                    'is_featured' => false,
                    'is_required' => false,
                    'monthly' => 50.00,
                    'annual' => 500.00,
                    'is_quote' => false,
                    'quote_message' => null,
                    'features' => [
                        ['name' => 'Eventos Personalizados', 'description' => 'Crea eventos con todos sus detalles: nombre, dirección, ubicación en Google Maps, fecha y hora de vencimiento. Cada evento tiene su propia identidad dentro del sistema para que puedas gestionarlos de forma independiente y ordenada.'],
                        ['name' => 'Control de Promotores', 'description' => 'Asigna a cada promotor un enlace único a través del cual los asistentes podrán generar sus entradas, y define cuántas puede distribuir cada uno. De esta manera tienes visibilidad total sobre el alcance de cada promotor, mantienes el control de la capacidad del evento y garantizas una distribución organizada desde el inicio.'],
                        ['name' => 'Código QR y Recopilación de Datos', 'description' => 'Cada asistente genera su propia entrada a través del enlace de su promotor y completa un breve registro con datos como número de celular, correo electrónico y fecha de nacimiento, información que puedes aprovechar para futuras campañas y promociones. Al finalizar, el asistente recibe su código QR automáticamente en su correo.'],
                        ['name' => 'Control de Asistencia', 'description' => 'En la puerta, el control es total. Valida el ingreso de cada asistente mediante la lectura de su código QR, evita accesos con entradas duplicadas o no autorizadas y eleva la seguridad de tu evento. Una experiencia más fluida para los asistentes y más tranquilidad para ti.'],
                        ['name' => 'Reportes y Estadísticas', 'description' => 'Al finalizar el evento, accede a un informe completo: cuántas entradas generó cada promotor, cuántas personas asistieron efectivamente, qué porcentaje no se presentó y el perfil demográfico de tus asistentes según sus fechas de nacimiento. Datos que te ayudan a planificar mejor el próximo evento.'],
                    ],
                ],
                [
                    'name' => 'Autoservicio',
                    'short_description' => 'Elimina las colas: tus clientes piden y pagan de forma autónoma.',
                    'description' => 'Transforma la experiencia de compra de tus clientes y elimina las largas colas en tu negocio. Este módulo permite que cada cliente realice su pedido y pago de forma completamente autónoma, ya sea desde terminales de autoservicio instaladas en tu local o desde su propio celular mediante un enlace web. Menos tiempo de espera, mayor capacidad de atención y una operación mucho más eficiente durante las horas de mayor demanda.',
                    'is_featured' => false,
                    'is_required' => false,
                    'monthly' => 50.00,
                    'annual' => 500.00,
                    'is_quote' => false,
                    'quote_message' => null,
                    'features' => [
                        ['name' => 'Canales autónomos', 'description' => 'Ofrece a tus clientes dos formas de comprar sin necesidad de pasar por caja. Instala terminales de autoservicio en tu establecimiento para que los clientes realicen sus pedidos de manera independiente o comparte un enlace web para que puedan ordenar directamente desde su celular. Una sola plataforma para atender tanto dentro como fuera del local.'],
                        ['name' => 'Fácil gestión', 'description' => 'Decide qué productos y categorías estarán disponibles independientemente a tu operación habitual. Tu autoservicio se alimenta directamente de la carta de platos que ya usas en tu Atención en Local, por lo que cualquier actualización de stock o descripción se reflejará de forma automática. Sin embargo, puedes configurar precios diferenciados entre tu atención presencial y tu canal de autoservicio.'],
                        ['name' => 'Interactividad', 'description' => 'El cliente recorre un proceso de compra intuitivo y moderno. Desde el inicio puede visualizar banners promocionales, navegar por la carta, agregar productos a su carrito según el stock en tiempo real, seleccionar complementos, incluir notas personalizadas y solicitar comprobante electrónico antes de finalizar su pedido. Todo diseñado para reducir errores y agilizar la atención.'],
                        ['name' => 'Pasarela de pago', 'description' => 'El proceso de pago se realiza de forma rápida y segura mediante una pasarela de pagos integrada. Los clientes pueden pagar con tarjeta, Yape o Plin. Una experiencia completamente digital que acelera tu atención.'],
                        ['name' => 'Validación y despacho de pedidos', 'description' => 'El cliente recibe su código de pedido en formato QR a través de su correo electrónico y WhatsApp. Además, los pedidos desde terminal física se imprimen automáticamente en la impresora térmica conectada al equipo. Evita confusiones y reduce errores de entrega mediante la validación de código de pedido en la zona de entrega.'],
                    ],
                ],
                [
                    'name' => 'Tienda virtual',
                    'short_description' => 'Tu negocio disponible 24/7 en el mundo digital.',
                    'description' => 'Tu negocio merece estar disponible para cualquier cliente en cualquier lugar. Con nuestra tienda virtual desarrollada a medida, llevas tu marca al mundo digital con una experiencia de compra moderna, atractiva y completamente integrada con tu operación diaria. Sin complicaciones técnicas, sin doble gestión: todo conectado desde un solo sistema.',
                    'is_featured' => false,
                    'is_required' => false,
                    'monthly' => 0.00,
                    'annual' => 0.00,
                    'is_quote' => true,
                    'quote_message' => 'Contactar ventas',
                    'features' => [
                        ['name' => 'Personalización', 'description' => 'Tu tienda, tu identidad. Diseñamos y desarrollamos una tienda virtual única, adaptada al estilo y las necesidades específicas de tu negocio, con dominio propio y una propuesta visual que refleja lo que tu marca representa.'],
                        ['name' => 'Fácil gestión', 'description' => 'Olvídate de mantener dos cartas de platos distintas. Tu tienda virtual se alimenta directamente del catálogo de productos que ya usas en tu Atención en local, por lo que cualquier actualización de stock o descripción se refleja de forma automática en tu tienda en línea. Sin embargo, puedes configurar precios diferenciados entre tu atención presencial y tu canal virtual.'],
                        ['name' => 'Interactividad', 'description' => 'Ofrece a tus clientes una experiencia de compra completa y sin fricciones. Podrán navegar por tu catálogo con toda la información que necesitan para decidir con confianza, y armar su carrito al elegir productos según el stock en tiempo real.'],
                        ['name' => 'Pasarela de pago', 'description' => 'Tus clientes pagan de forma segura y autónoma directamente desde la tienda. Una vez confirmado el pago, el pedido llega automáticamente a tu zona de Delivery/Mostrador, así como a tu cocina, para que puedas prepararlo de inmediato. Menos pasos, menos errores, más ventas.'],
                    ],
                ],
            ],
            '360sys' => [
                [
                    'name' => 'Punto de venta + Facturación electrónica',
                    'short_description' => 'El corazón operativo de tu negocio. Desde el primer saludo al cliente hasta el cierre de caja, este módulo centraliza todo lo que necesitas para vender más rápido, cobrar con precisión y cumplir con SUNAT sin complicaciones. Diseñado para que tú y tu equipo trabajen con agilidad, control total y cero errores.',
                    'description' => 'El corazón operativo de tu negocio. Desde el primer saludo al cliente hasta el cierre de caja, este módulo centraliza todo lo que necesitas para vender más rápido, cobrar con precisión y cumplir con SUNAT sin complicaciones. Diseñado para que tú y tu equipo trabajen con agilidad, control total y cero errores.',
                    'is_featured' => false,
                    'is_required' => true,
                    'monthly' => 120.00,
                    'annual' => 1200.00,
                    'is_quote' => false,
                    'quote_message' => null,
                    'features' => [
                        ['name' => 'Plataforma para cajero', 'description' => 'Una experiencia de venta fluida, pensada para la velocidad y la precisión en el punto de atención. Gestiona múltiples tipos de venta -minorista, mayorista, promoción y crédito- y trabaja con productos en distintas presentaciones gracias a la conversión automática de unidades. ¿Necesitas anular un producto, aplicar un descuento o registrar una cortesía? Todo queda protegido por clave de aprobación del administrador, garantizando el orden y seguridad en cada operación. Acepta pagos en efectivo, tarjetas y billeteras digitales como Yape o Plin. Controla tu caja chica con registros detallados de ingresos y gastos, y cierra cada turno con un cuadre completo que refleja exactamente lo que pasó.'],
                        ['name' => 'Créditos', 'description' => 'Vende al crédito sin perder el control. Haz seguimiento en tiempo real de todas tus cuentas por cobrar, con alertas de vencimiento que te avisan antes de que una deuda se convierta en un problema. Mantén tu flujo de caja saludable y tus relaciones comerciales al día.'],
                        ['name' => 'Cotizaciones', 'description' => 'Presenta tus productos y servicios de forma profesional antes de cerrar la venta. Genera cotizaciones detalladas para tus clientes empresariales -con condiciones, precios y observaciones- y cuando estén listos para comprar, conviértelas en ventas con un solo clic, con la posibilidad de ajustar lo que necesites en el camino.'],
                        ['name' => 'Pedidos', 'description' => 'Organiza y controla cada pedido anticipado, ya sea para recojo en tienda, delivery o envíos a nivel nacional. Desde el momento en que se registra el pago adelantado hasta que el producto llega a manos del cliente, tendrás visibilidad completa del estado de cada pedido, eliminando confusiones y asegurando una entrega impecable.'],
                        ['name' => 'Compras', 'description' => 'Gestiona tus proveedores y tus compras en un solo lugar. Registra cada documento de compra, vincula los egresos correspondientes y lleva el historial de evolución de costos por producto para negociar siempre desde una posición informada. Además, controla tus cuentas por pagar para que ningún vencimiento te tome por sorpresa.'],
                        ['name' => 'Control de existencias', 'description' => 'Tu almacén siempre ordenado y bajo control. Organiza tu catálogo de productos por categorías y marcas, maneja múltiples precios de venta con márgenes de ganancia configurables, y registra entradas y salidas con total trazabilidad. Lleva el seguimiento de productos perecibles por lote y fecha de vencimiento, y consulta el historial completo de movimientos cuando lo necesites.'],
                        ['name' => 'Facturación electrónica', 'description' => 'Cumple con SUNAT de forma automática y sin esfuerzo. Emite boletas, facturas, notas de crédito, anulaciones y guías de remisión directamente desde el sistema, con envío ilimitado de comprobantes electrónicos. Cuando anulas una venta, el comprobante se anula solo. Y para que tus clientes reciban su documento al instante, el sistema lo envía automáticamente por correo o WhatsApp.'],
                    ],
                ],
                [
                    'name' => 'Comercio inteligente',
                    'short_description' => 'Transforma los datos de tu negocio en gráficos e indicadores.',
                    'description' => 'Tomar buenas decisiones requiere información clara y oportuna. Este módulo transforma los datos de tu negocio en gráficos, indicadores y análisis accionables que te permiten entender qué está funcionando, qué necesita atención y hacia dónde dirigir tus esfuerzos. Deja de operar por intuición y empieza a crecer con inteligencia.',
                    'is_featured' => true,
                    'is_required' => false,
                    'monthly' => 50.00,
                    'annual' => 500.00,
                    'is_quote' => false,
                    'quote_message' => null,
                    'features' => [
                        ['name' => 'Estadísticas y análisis de ventas', 'description' => 'Conoce el pulso real de tus ventas en cada dimensión. Visualiza tus ingresos totales, identifica los momentos del día con mayor actividad, analiza qué categorías y productos generan más dinero, y compara el rendimiento de este mes frente al anterior. Desde la estacionalidad hasta el desglose por método de pago y tipo de comprobante, tendrás todos los datos que necesitas para vender más y mejor.'],
                        ['name' => 'Estadísticas y análisis de inventario', 'description' => 'Nunca más te quedes sin stock ni acumules productos que no rotan. Visualiza el estado de tu inventario con indicadores de stock óptimo y alertas de reposición, para que siempre tengas disponible lo que tus clientes buscan y liberes espacio de lo que no se mueve.'],
                        ['name' => 'Estadísticas y análisis de rentabilidad', 'description' => 'Vender mucho no siempre significa ganar mucho. Analiza tu rentabilidad bruta, descubre cuáles son tus productos y categorías más rentables, y entiende cómo cada tipo de egreso impacta en tus ganancias reales. Con esta información, podrás optimizar tu oferta y maximizar tus márgenes.'],
                        ['name' => 'Estadísticas y análisis de ingresos y gastos de caja', 'description' => 'Monitorea la salud financiera de tu caja con total claridad. Analiza el comportamiento diario de ingresos y egresos, observa las tendencias semanales, compara promedios y conoce en detalle a qué conceptos de pago se destinan tus salidas de dinero. Todo lo que necesitas para mantener un flujo de caja equilibrado y predecible.'],
                    ],
                ],
                [
                    'name' => 'Encuestas de opinión',
                    'short_description' => 'Mide la satisfacción y detecta oportunidades de mejora.',
                    'description' => 'La opinión de tus clientes es el activo más valioso que tienes para mejorar. Con este módulo, creas encuestas personalizadas que te permiten medir la satisfacción, detectar oportunidades de mejora y tomar decisiones basadas en lo que realmente sienten quienes visitan tu negocio. Escuchar a tus clientes nunca había sido tan fácil ni tan útil.',
                    'is_featured' => false,
                    'is_required' => false,
                    'monthly' => 20.00,
                    'annual' => 200.00,
                    'is_quote' => false,
                    'quote_message' => null,
                    'features' => [
                        ['name' => 'Personalización', 'description' => 'Diseña encuestas a tu medida con una amplia variedad de formatos de pregunta: selección única, opción múltiple, confirmación de sí o no, escala de malo a excelente, valoración por estrellas o escala numérica personalizada. Adapta cada encuesta al objetivo que tengas -atención al cliente, calidad del producto, experiencia en tienda- y obtén respuestas precisas y comparables.'],
                        ['name' => 'Avisos automáticos de malas experiencias', 'description' => 'No esperes hasta que un cliente molesto lo publique en redes. Cuando una encuesta refleja una mala experiencia, recibes una notificación inmediata en tu WhatsApp con el detalle de la compra y el colaborador que atendió, para que puedas actuar de inmediato, resolver la situación y convertir una experiencia negativa en una oportunidad de fidelización.'],
                        ['name' => 'Reportes y estadísticas', 'description' => 'Más allá de las respuestas individuales, accede a un panorama completo de lo que piensan tus clientes. Consulta los resultados agrupados por dimensión -atención, producto, local, experiencia general- y toma decisiones de mejora fundamentadas en datos reales, no en suposiciones.'],
                    ],
                ],
                [
                    'name' => 'Atención y reservas',
                    'short_description' => 'Organiza la agenda de tu equipo y evita cruces de horarios.',
                    'description' => 'Si tu negocio funciona por citas, turnos o reservas, como campos deportivas o servicios de belleza y spa, este módulo es tu aliado para mantener la agenda siempre organizada y tu equipo siempre preparado. Gestiona el tiempo de tus estaciones de atención con precisión, elimina cruces de horario y garantiza que cada cliente reciba el servicio que merece, exactamente cuando lo espera.',
                    'is_featured' => false,
                    'is_required' => false,
                    'monthly' => 60.00,
                    'annual' => 600.00,
                    'is_quote' => false,
                    'quote_message' => null,
                    'features' => [
                        ['name' => 'Agenda diaria y calendario semanal / mensual', 'description' => 'Visualiza toda tu operación de un vistazo. Gestiona tus reservas en una agenda diaria o en un calendario semanal y mensual, diferenciando de forma clara cuáles tienen pago adelantado registrado y cuáles están pendientes. Todo el orden que necesitas para que ningún turno se pierda ni se duplique.'],
                        ['name' => 'Pagos anticipados', 'description' => 'Asegura la reserva y cuida tu caja. Registra los pagos adelantados de tus clientes, genera el comprobante correspondiente y refleja automáticamente el ingreso en tu caja chica. Así, tu cuadre de dinero siempre estará completo y sin vacíos al final del día.'],
                        ['name' => 'Recordatorios de asistencia', 'description' => 'Reduce las ausencias antes de que ocurran. Envía recordatorios automáticos por WhatsApp o correo electrónico a tus clientes antes de su cita o reserva. Un mensaje a tiempo puede marcar la diferencia entre un turno lleno y un espacio desperdiciado.'],
                    ],
                ],
                [
                    'name' => 'Historia médica veterinaria',
                    'short_description' => 'Centraliza la información clínica y administrativa de tus pacientes.',
                    'description' => 'Tu clínica veterinaria merece una gestión tan profesional como la atención que brindas. Este módulo centraliza toda la información clínica y administrativa de tus pacientes en un solo lugar, optimizando los procesos internos y elevando la calidad del servicio. Para que tú y tu equipo puedan enfocarse en lo que realmente importa: el bienestar de cada mascota.',
                    'is_featured' => false,
                    'is_required' => false,
                    'monthly' => 50.00,
                    'annual' => 500.00,
                    'is_quote' => false,
                    'quote_message' => null,
                    'features' => [
                        ['name' => 'Gestión administrativa', 'description' => 'Accede en segundos al perfil completo de cada paciente: datos del propietario, especie, raza e historial de atenciones previas. Mantén toda la información organizada y disponible para cualquier miembro del equipo, reduciendo tiempos de búsqueda y eliminando el desorden del papel.'],
                        ['name' => 'Citas y atenciones', 'description' => 'Lleva el control completo de cada consulta, desde la programación hasta el diagnóstico. Recibe alertas de citas pendientes, envía recordatorios automáticos a los dueños de las mascotas y documenta diagnósticos, tratamientos y observaciones clínicas de forma estructurada y siempre accesible para futuras atenciones.'],
                        ['name' => 'Plan de vacunación', 'description' => 'Protege a tus pacientes con un seguimiento preciso y puntual. Configura planes de vacunación personalizados para cada mascota y activa recordatorios automáticos para que ningún refuerzo quede olvidado. Una gestión preventiva efectiva que fortalece la confianza de los propietarios en tu clínica.'],
                        ['name' => 'Hospitalizaciones', 'description' => 'Cuando una mascota requiere internamiento, cada detalle cuenta. Documenta el estado del paciente en tiempo real durante toda su hospitalización, registra los tratamientos aplicados y construye un historial clínico confiable que garantiza la continuidad de la atención, sin importar quién esté a cargo del turno.'],
                    ],
                ],
                [
                    'name' => 'Tienda virtual',
                    'short_description' => 'Tu negocio disponible 24/7 en el mundo digital.',
                    'description' => 'Tu negocio merece estar disponible las 24 horas, los 7 días de la semana, para cualquier cliente en cualquier lugar. Con nuestra tienda virtual desarrollada a medida, llevas tu marca al mundo digital con una experiencia de compra moderna, atractiva y completamente integrada con tu operación diaria. Sin complicaciones técnicas, sin doble gestión: todo conectado desde un solo sistema.',
                    'is_featured' => false,
                    'is_required' => false,
                    'monthly' => 0.00,
                    'annual' => 0.00,
                    'is_quote' => true,
                    'quote_message' => 'Contactar ventas',
                    'features' => [
                        ['name' => 'Personalización', 'description' => 'Tu tienda, tu identidad. Diseñamos y desarrollamos una tienda virtual única, adaptada al estilo y las necesidades específicas de tu negocio, con dominio propio y una propuesta visual que refleja lo que tu marca representa.'],
                        ['name' => 'Fácil gestión', 'description' => 'Olvídate de mantener dos catálogos distintos. Tu tienda virtual se alimenta directamente del catálogo de productos que ya usas en tu Punto de venta, por lo que cualquier actualización de precios, stock o descripción se refleja de forma automática en tu tienda en línea.'],
                        ['name' => 'Interactividad', 'description' => 'Ofrece a tus clientes una experiencia de compra completa y sin fricciones. Podrán armar su carrito, elegir entre las tallas y colores disponibles según el stock real en tiempo real, y navegar por tu catálogo con toda la información que necesitan para decidir con confianza.'],
                        ['name' => 'Pasarela de pago', 'description' => 'Tus clientes pagan de forma segura y autónoma directamente desde la tienda. Una vez confirmado el pago, el pedido llega automáticamente a tu Punto de venta para que puedas procesarlo de inmediato. Menos pasos, menos errores, más ventas.'],
                    ],
                ],
            ],
            'HotelHUB' => [
                [
                    'name' => 'Gestiona tu Alojamiento',
                    'short_description' => 'Gestión operativa del hotel: habitaciones, huéspedes, check-in/check-out, ventas y caja.',
                    'description' => 'Gestión operativa del hotel: habitaciones, huéspedes, check-in/check-out, ventas y caja.',
                    'is_featured' => false,
                    'is_required' => true,
                    'monthly' => 50.00,
                    'annual' => 500.00,
                    'is_quote' => false,
                    'quote_message' => null,
                    'features' => [
                        ['name' => 'Gestión de habitaciones y huéspedes', 'description' => ''],
                        ['name' => 'Check-in / Check-out', 'description' => ''],
                        ['name' => 'Control de ventas y caja', 'description' => ''],
                        ['name' => 'Productos y almacén', 'description' => ''],
                        ['name' => 'Gestión de turnos', 'description' => ''],
                    ],
                ],
                [
                    'name' => 'Facturación Electrónica',
                    'short_description' => 'Emisión y control de comprobantes electrónicos, reportes y anulaciones.',
                    'description' => 'Emisión y control de comprobantes electrónicos, reportes y anulaciones.',
                    'is_featured' => true,
                    'is_required' => false,
                    'monthly' => 30.00,
                    'annual' => 300.00,
                    'is_quote' => false,
                    'quote_message' => null,
                    'features' => [
                        ['name' => 'Emisión de boletas y facturas', 'description' => ''],
                        ['name' => 'Control de comprobantes', 'description' => ''],
                        ['name' => 'Anulaciones directas', 'description' => ''],
                    ],
                ],
                [
                    'name' => 'Hotel Inteligente',
                    'short_description' => 'Inteligencia de negocios para analizar reservas, ventas, caja y métricas del hotel.',
                    'description' => 'Inteligencia de negocios para analizar reservas, ventas, caja y métricas del hotel.',
                    'is_featured' => false,
                    'is_required' => false,
                    'monthly' => 50.00,
                    'annual' => 500.00,
                    'is_quote' => false,
                    'quote_message' => null,
                    'features' => [
                        ['name' => 'Métricas del hotel', 'description' => ''],
                        ['name' => 'Análisis de reservas', 'description' => ''],
                        ['name' => 'Análisis de caja y ventas', 'description' => ''],
                    ],
                ],
                [
                    'name' => 'Encuesta de Opinión',
                    'short_description' => 'Creación y gestión de encuestas y estadísticas de satisfacción del cliente.',
                    'description' => 'Creación y gestión de encuestas y estadísticas de satisfacción del cliente.',
                    'is_featured' => false,
                    'is_required' => false,
                    'monthly' => 30.00,
                    'annual' => 300.00,
                    'is_quote' => false,
                    'quote_message' => null,
                    'features' => [
                        ['name' => 'Encuestas personalizadas', 'description' => ''],
                        ['name' => 'Estadísticas de satisfacción', 'description' => ''],
                        ['name' => 'Gestión de categorías', 'description' => ''],
                    ],
                ],
                [
                    'name' => 'Housekeeping',
                    'short_description' => 'Asignación y seguimiento de limpieza de habitaciones y control de jornadas.',
                    'description' => 'Asignación y seguimiento de limpieza de habitaciones y control de jornadas.',
                    'is_featured' => false,
                    'is_required' => false,
                    'monthly' => 20.00,
                    'annual' => 200.00,
                    'is_quote' => false,
                    'quote_message' => null,
                    'features' => [
                        ['name' => 'Asignación de limpieza', 'description' => ''],
                        ['name' => 'Seguimiento de tiempos', 'description' => ''],
                        ['name' => 'Control de jornadas del personal', 'description' => ''],
                    ],
                ],
                [
                    'name' => 'Gestión de Reservas',
                    'short_description' => 'Registro, calendario, atención y seguimiento de reservas de habitaciones y salones.',
                    'description' => 'Registro, calendario, atención y seguimiento de reservas de habitaciones y salones.',
                    'is_featured' => false,
                    'is_required' => false,
                    'monthly' => 30.00,
                    'annual' => 300.00,
                    'is_quote' => false,
                    'quote_message' => null,
                    'features' => [
                        ['name' => 'Calendario de reservas', 'description' => ''],
                        ['name' => 'Registro y seguimiento', 'description' => ''],
                        ['name' => 'Control de origen y estados', 'description' => ''],
                    ],
                ],
                [
                    'name' => 'Gestiona tus Alquileres',
                    'short_description' => 'Administración de contratos, ambientes, edificios y compromisos de pago.',
                    'description' => 'Administración de contratos, ambientes, edificios y compromisos de pago.',
                    'is_featured' => false,
                    'is_required' => false,
                    'monthly' => 50.00,
                    'annual' => 500.00,
                    'is_quote' => false,
                    'quote_message' => null,
                    'features' => [
                        ['name' => 'Plantillas de contrato', 'description' => ''],
                        ['name' => 'Gestión de edificios/ambientes', 'description' => ''],
                        ['name' => 'Control de pagos', 'description' => ''],
                    ],
                ],
            ],
        ];

        ProductModule::truncate();

        foreach ($modules as $productName => $plans) {
            $product = Product::where('name', $productName)->first();

            if (!$product) {
                continue;
            }

            foreach ($plans as $plan) {
                ProductModule::updateOrCreate(
                    [
                        'product_id' => $product->id,
                        'name' => $plan['name'],
                    ],
                    $plan
                );
            }
        }
    }
}
