<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

$lang_array = [
    'MODULE_PAYMENT_PAYPALSEPA_TEXT_TITLE'                => 'Cobrar a través de PayPal',
    'MODULE_PAYMENT_PAYPALSEPA_TEXT_ADMIN_TITLE'          => 'Cobrar a través de PayPal',
    'MODULE_PAYMENT_PAYPALSEPA_TEXT_INFO'                 => ((!defined('RUN_MODE_ADMIN') && function_exists('xtc_href_link')) ? '<img src="' . xtc_href_link(DIR_WS_ICONS . 'paypal_sepa.png', '', 'SSL', false) . '" />' : ''),
    'MODULE_PAYMENT_PAYPALSEPA_TEXT_DESCRIPTION'          => 'Después de "confirmar" será dirigido a PayPal para pagar su pedido.<br />A continuación, volverá a la tienda y recibirá la confirmación de su pedido.<br />Pague ahora más rápido con la protección ilimitada del comprador de PayPal, sin coste alguno, por supuesto.',
    'MODULE_PAYMENT_PAYPALSEPA_ALLOWED_TITLE'             => 'Zonas permitidas',
    'MODULE_PAYMENT_PAYPALSEPA_ALLOWED_DESC'              => 'Especifique <b>individualmente</b> las zonas que deben permitirse para este módulo. (por ejemplo, AT,DE (si está vacía, se permiten todas las zonas))',
    'MODULE_PAYMENT_PAYPALSEPA_STATUS_TITLE'              => 'Activar la domiciliación bancaria de PayPal',
    'MODULE_PAYMENT_PAYPALSEPA_STATUS_DESC'               => '¿Desea aceptar pagos por domiciliación bancaria de PayPal?',
    'MODULE_PAYMENT_PAYPALSEPA_SORT_ORDER_TITLE'          => 'Orden de visualización',
    'MODULE_PAYMENT_PAYPALSEPA_SORT_ORDER_DESC'           => 'Orden de visualización. El dígito más pequeño aparece primero',
    'MODULE_PAYMENT_PAYPALSEPA_ZONE_TITLE'                => 'Zona de pago',
    'MODULE_PAYMENT_PAYPALSEPA_ZONE_DESC'                 => 'Cuando se selecciona una zona, el método de pago sólo se aplica a esa zona.',
    'MODULE_PAYMENT_PAYPALSEPA_LP'                        => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Cree una cuenta PayPal aquí.</strong></a>',

    'MODULE_PAYMENT_PAYPALSEPA_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATENCIÓN:</font></strong> Realice los ajustes en "Módulos para socios" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal". <a href="' . xtc_href_link('paypal_config.php') . '"><strong>"Configuración de PayPal"</strong></a> ¡Hazlo!',

    'MODULE_PAYMENT_PAYPALSEPA_TEXT_ERROR_HEADING'        => 'Nota',
    'MODULE_PAYMENT_PAYPALSEPA_TEXT_ERROR_MESSAGE'        => 'El pago con domiciliación bancaria a través de PayPal fue cancelado',
];

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
