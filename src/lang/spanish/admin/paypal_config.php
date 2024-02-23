<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

$lang_array = [
    'TEXT_PAYPAL_CONFIG_HEADING_TITLE'            => 'Configuración de PayPal',

    'TEXT_PAYPAL_CONFIG_SECRET_LIVE'              => 'Secreto en directo:',
    'TEXT_PAYPAL_CONFIG_CLIENT_LIVE'              => 'Cliente ID Live:',
    'TEXT_PAYPAL_CONFIG_CLIENT_LIVE_INFO'         => 'Introduzca los datos de su APP de PayPal o solicite nuevos datos.',

    'TEXT_PAYPAL_CONFIG_SECRET_SANDBOX'           => 'Cajón de arena secreto:',
    'TEXT_PAYPAL_CONFIG_CLIENT_SANDBOX'           => 'Sandbox de identificación del cliente:',
    'TEXT_PAYPAL_CONFIG_CLIENT_SANDBOX_INFO'      => 'Introduzca los datos de su APP de PayPal o solicite nuevos datos.',

    'TEXT_PAYPAL_APPINATOR_LIVE'                  => 'Solicitar datos en directo',
    'TEXT_PAYPAL_APPINATOR_SANDBOX'               => 'Solicitar datos del sandbox',

    'TEXT_PAYPAL_CONFIG_MODE'                     => 'Modo:',
    'TEXT_PAYPAL_CONFIG_MODE_INFO'                => '',

    'TEXT_PAYPAL_CONFIG_MERCHANT_ID_LIVE'         => 'ID de comerciante Live:',
    'TEXT_PAYPAL_CONFIG_MERCHANT_ID_SANDBOX'      => 'Caja de arena de identificación del comerciante:',
    'TEXT_PAYPAL_CONFIG_MERCHANT_ID_INFO'         => 'ID de comerciante de su cuenta de comerciante. Si no lo tiene a mano, solicite de nuevo los datos de ID de cliente y Secreto. Esto determinará automáticamente el ID de comerciante.',

    'TEXT_PAYPAL_CONFIG_STATUS_ACDC_LIVE'         => 'Estado de la tarjeta de crédito Live:',
    'TEXT_PAYPAL_CONFIG_STATUS_ACDC_SANDBOX'      => 'Estado de la caja de arena de la tarjeta de crédito:',
    'TEXT_PAYPAL_CONFIG_STATUS_ACDC_INFO'         => 'Si el estado es amarillo, póngase en contacto con el servicio de asistencia de PayPal. Si el estado es rojo, el servicio para su cuenta no está disponible en este momento.',

    'TEXT_PAYPAL_CONFIG_STATUS_PUI_LIVE'          => 'Estado Compra en cuenta Live:',
    'TEXT_PAYPAL_CONFIG_STATUS_PUI_SANDBOX'       => 'Estado Compra en cuenta Sandbox:',
    'TEXT_PAYPAL_CONFIG_STATUS_PUI_INFO'          => 'Si el estado es amarillo, póngase en contacto con el servicio de asistencia de PayPal. Si el estado es rojo, el servicio para su cuenta no está disponible en este momento.',

    'TEXT_PAYPAL_CONFIG_INVOICE_PREFIX'           => 'Prefijo del número de pedido:',
    'TEXT_PAYPAL_CONFIG_INVOICE_PREFIX_INFO'      => 'Cadena de caracteres de libre elección (prefijo) que precede al número de pedido y se utiliza para generar el número de factura de PayPal.<br />Esto permite que varias tiendas trabajen con una sola aplicación de PayPal. Se evitan los conflictos con números de pedido idénticos. Cada pedido recibe su propio número de factura en la cuenta PayPal.',

    'TEXT_PAYPAL_CONFIG_TRANSACTION'              => 'Transacción:',
    'TEXT_PAYPAL_CONFIG_TRANSACTION_INFO'         => 'Seleccione el tipo de transacción.<br/><br/><b>Nota:</b> Con PayPal Plus y el pago a plazos impulsado por PayPal, siempre se realiza una venta.',

    'TEXT_PAYPAL_CONFIG_CAPTURE'                  => 'Capture manualmente:',
    'TEXT_PAYPAL_CONFIG_CAPTURE_INFO'             => '¿Desea capturar los pagos manualmente en PayPal?<br/><br/><b>Nota:</b> Esto requiere que la transacción esté configurada en Autorizar.',

    'TEXT_PAYPAL_CONFIG_CART'                     => 'Cesta de la compra:',
    'TEXT_PAYPAL_CONFIG_CART_INFO'                => '¿Debe transferirse el carro de la compra a PayPal?<br/><br/><b>Nota:</b> Esta configuración puede causar problemas al utilizar módulos ot en "Módulos" -&gt; "Resumen" que conceden un descuento o recargo ("Descuento [ot_discount]", "Cupones de descuento [ot_coupon]", "Cupones [ot_gv]", "Descuento y recargo en tipos de pago [ot_payment]", etc.).<br/>Ajuste recomendado: "No',

    'TEXT_PAYPAL_INSTALLMENT_BANNER_DISPLAY'      => 'Pago a plazos Banner:',
    'TEXT_PAYPAL_INSTALLMENT_BANNER_DISPLAY_INFO' => '¿Debe aparecer el cartel de pago a plazos?<br/><br/><b>Nota:</b> El pago a plazos con PayPal sólo está disponible si su cuenta PayPal está activada.',

    'TEXT_PAYPAL_INSTALLMENT_BANNER_COLOR'        => 'Color del estandarte:',
    'TEXT_PAYPAL_INSTALLMENT_BANNER_COLOR_INFO'   => 'Seleccione el color para la pancarta.',

    'TEXT_PAYPAL_CONFIG_STATE_SUCCESS'            => 'Estado Éxito:',
    'TEXT_PAYPAL_CONFIG_STATE_SUCCESS_INFO'       => 'Estado del pedido realizado con éxito',

    'TEXT_PAYPAL_CONFIG_STATE_REJECTED'           => 'Estado Rechazado:',
    'TEXT_PAYPAL_CONFIG_STATE_REJECTED_INFO'      => 'Estado en caso de pedido rechazado',

    'TEXT_PAYPAL_CONFIG_STATE_PENDING'            => 'Estado de espera:',
    'TEXT_PAYPAL_CONFIG_STATE_PENDING_INFO'       => 'Estado en caso de pedido realizado con éxito, pero aún no confirmado por PayPal',

    'TEXT_PAYPAL_CONFIG_STATE_CAPTURED'           => 'Estado registrado:',
    'TEXT_PAYPAL_CONFIG_STATE_CAPTURED_INFO'      => 'Estado activado por una captura',

    'TEXT_PAYPAL_CONFIG_STATE_REFUNDED'           => 'Estado de reembolso:',
    'TEXT_PAYPAL_CONFIG_STATE_REFUNDED_INFO'      => 'Estado provocado por una devolución',

    'TEXT_PAYPAL_CONFIG_STATE_TEMP'               => 'Estado Temp:',
    'TEXT_PAYPAL_CONFIG_STATE_TEMP_INFO'          => 'Estado de un pedido no confirmado',

    'TEXT_PAYPAL_CONFIG_LOG'                      => 'Registro:',
    'TEXT_PAYPAL_CONFIG_LOG_INFO'                 => '¿Debe escribirse un registro?',

    'TEXT_PAYPAL_CONFIG_LOG_LEVEL'                => 'Nivel de registro:',
    'TEXT_PAYPAL_CONFIG_LOG_LEVEL_INFO'           => '<b>Nota:</b> En el modo en directo, el registro sólo tiene lugar hasta el nivel INFO.',

    'BUTTON_PAYPAL_STATUS_INSTALL'                => 'Estado de la orden de instalación',
];

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}

$PAYPAL_INST_ORDER_STATUS_TMP_NAME      = 'PayPal cancelado';
$PAYPAL_INST_ORDER_STATUS_SUCCESS_NAME  = 'Pagado con PayPal';
$PAYPAL_INST_ORDER_STATUS_PENDING_NAME  = 'PayPal wartend';
$PAYPAL_INST_ORDER_STATUS_CAPTURED_NAME = 'Registros de PayPal';
$PAYPAL_INST_ORDER_STATUS_REFUNDED_NAME = 'Reembolsos de PayPal';
$PAYPAL_INST_ORDER_STATUS_REJECTED_NAME = 'PayPal rechazó';
$PAYPAL_INST_ORDER_STATUS_ACCEPTED_NAME = 'Se acepta PayPal';
