<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

$lang_array = [
    'MODULE_PAYMENT_PAYPALPLUS_TEXT_TITLE'                => 'PayPal PLUS',
    'MODULE_PAYMENT_PAYPALPLUS_TEXT_ADMIN_TITLE'          => 'PayPal PLUS (sólo con sede de la empresa en DE<span style="background:#dd2400;color: #fff;font-weight: bold;padding: 2px 5px;border-radius: 4px;margin: 0 0 0 5px;">)ALT</span>',
    'MODULE_PAYMENT_PAYPALPLUS_TEXT_INFO'                 => 'Por favor, seleccione uno de los métodos de pago que aparecen aquí haciendo clic sobre él.',
    'MODULE_PAYMENT_PAYPALPLUS_TEXT_DESCRIPTION'          => 'PayPal PLUS: las cuatro formas de pago más populares entre los compradores alemanes: PayPal, domiciliación bancaria, tarjeta de crédito y factura.<br/>Puede encontrar más información sobre PayPal PLUS <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/paypal-plus">aquí</a>.',
    'MODULE_PAYMENT_PAYPALPLUS_ALLOWED_TITLE'             => 'Zonas permitidas',
    'MODULE_PAYMENT_PAYPALPLUS_ALLOWED_DESC'              => 'Especifique <b>individualmente</b> las zonas que deben permitirse para este módulo. (por ejemplo, AT,DE (si está vacía, se permiten todas las zonas))',
    'MODULE_PAYMENT_PAYPALPLUS_STATUS_TITLE'              => 'Activar PayPal PLUS',
    'MODULE_PAYMENT_PAYPALPLUS_STATUS_DESC'               => '¿Desea aceptar pagos a través de PayPal, tarjeta de crédito, domiciliación bancaria y compra a cuenta?',
    'MODULE_PAYMENT_PAYPALPLUS_SORT_ORDER_TITLE'          => 'Orden de visualización',
    'MODULE_PAYMENT_PAYPALPLUS_SORT_ORDER_DESC'           => 'Orden de visualización. El dígito más pequeño aparece primero',
    'MODULE_PAYMENT_PAYPALPLUS_ZONE_TITLE'                => 'Zona de pago',
    'MODULE_PAYMENT_PAYPALPLUS_ZONE_DESC'                 => 'Cuando se selecciona una zona, el método de pago sólo se aplica a esa zona.',
    'MODULE_PAYMENT_PAYPALPLUS_LP'                        => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Cree una cuenta PayPal aquí.</strong></a>',

    'MODULE_PAYMENT_PAYPALPLUS_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATENCIÓN:</font></strong> Realice los ajustes en "Módulos para socios" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal". <a href="' . xtc_href_link('paypal_config.php') . '"><strong>"Configuración de PayPal"</strong></a> ¡Hazlo!',

    'MODULE_PAYMENT_PAYPALPLUS_TEXT_ERROR_HEADING'        => 'Nota',
    'MODULE_PAYMENT_PAYPALPLUS_TEXT_ERROR_MESSAGE'        => 'Se ha cancelado el pago de PayPal',

    'MODULE_PAYMENT_PAYPALPLUS_INVOICE'                   => 'Compra a cuenta',
];

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
