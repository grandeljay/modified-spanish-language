<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

$lang_array = [
    'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_TITLE'                => 'PayPal PLUS',
    'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_ADMIN_TITLE'          => 'Enlace de pago PayPal PLUS (sólo con sede de la empresa en DE<span style="background:#dd2400;color: #fff;font-weight: bold;padding: 2px 5px;border-radius: 4px;margin: 0 0 0 5px;">)ALT</span>',
    'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_INFO'                 => ((!defined('RUN_MODE_ADMIN') && function_exists('xtc_href_link')) ? '<img src="' . xtc_href_link(DIR_WS_ICONS . 'paypal.png', '', 'SSL', false) . '" />' : ''),
    'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_DESCRIPTION'          => 'PayPal PLUS como enlace de pago que sólo está disponible para el cliente una vez finalizado el pedido. Decida usted mismo dónde recibe el cliente la solicitud de pago.<br/>PayPal PLUS: las cuatro formas de pago más populares de los compradores alemanes: PayPal, domiciliación bancaria, tarjeta de crédito y factura.<br/>Puede encontrar más información sobre PayPal PLUS <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/paypal-plus">aquí</a>.',
    'MODULE_PAYMENT_PAYPALPLUSLINK_ALLOWED_TITLE'             => 'Zonas permitidas',
    'MODULE_PAYMENT_PAYPALPLUSLINK_ALLOWED_DESC'              => 'Especifique <b>individualmente</b> las zonas que deben permitirse para este módulo. (por ejemplo, AT,DE (si está vacía, se permiten todas las zonas))',
    'MODULE_PAYMENT_PAYPALPLUSLINK_STATUS_TITLE'              => 'Activar enlace PayPal PLUS',
    'MODULE_PAYMENT_PAYPALPLUSLINK_STATUS_DESC'               => '¿Desea aceptar pagos a través de PayPal PLUS Link?',
    'MODULE_PAYMENT_PAYPALPLUSLINK_SORT_ORDER_TITLE'          => 'Orden de visualización',
    'MODULE_PAYMENT_PAYPALPLUSLINK_SORT_ORDER_DESC'           => 'Orden de visualización. El dígito más pequeño aparece primero',
    'MODULE_PAYMENT_PAYPALPLUSLINK_ZONE_TITLE'                => 'Zona de pago',
    'MODULE_PAYMENT_PAYPALPLUSLINK_ZONE_DESC'                 => 'Cuando se selecciona una zona, el método de pago sólo se aplica a esa zona.',
    'MODULE_PAYMENT_PAYPALPLUSLINK_LP'                        => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Cree una cuenta PayPal aquí.</strong></a>',

    'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATENCIÓN:</font></strong> Realice los ajustes en "Módulos para socios" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal". <a href="' . xtc_href_link('paypal_config.php') . '"><strong>"Configuración de PayPal"</strong></a> ¡Hazlo!',

    'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_ERROR_HEADING'        => 'Nota',
    'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_ERROR_MESSAGE'        => 'Se ha cancelado el pago de PayPal',

    'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_SUCCESS'              => 'Pague ahora con PayPal. Haga clic en el siguiente enlace:<br/> %s',
    'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_COMPLETED'            => 'Gracias por pagar con PayPal.',
];

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
