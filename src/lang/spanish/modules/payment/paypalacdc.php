<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

$lang_array = array(
    'MODULE_PAYMENT_PAYPALACDC_TEXT_TITLE'                  => 'Tarjeta de crédito',
    'MODULE_PAYMENT_PAYPALACDC_TEXT_ADMIN_TITLE'            => 'Tarjeta de crédito (sin referencia a PayPal)',
    'MODULE_PAYMENT_PAYPALACDC_TEXT_INFO'                   => ((!defined('RUN_MODE_ADMIN') && function_exists('xtc_href_link')) ? '<img src="' . xtc_href_link(DIR_WS_ICONS . 'paypal_creditcard.png', '', 'SSL', false) . '" />' : ''),
    'MODULE_PAYMENT_PAYPALACDC_TEXT_DESCRIPTION'            => 'En el último paso de la caja, se le pedirá que introduzca los datos de su tarjeta de crédito para pagar el pedido.',
    'MODULE_PAYMENT_PAYPALACDC_ALLOWED_TITLE'               => 'Zonas permitidas',
    'MODULE_PAYMENT_PAYPALACDC_ALLOWED_DESC'                => 'Especifique <b>individualmente</b> las zonas que deben permitirse para este módulo. (por ejemplo, AT,DE (si está vacía, se permiten todas las zonas))',
    'MODULE_PAYMENT_PAYPALACDC_STATUS_TITLE'                => 'Activar tarjeta de crédito',
    'MODULE_PAYMENT_PAYPALACDC_STATUS_DESC'                 => '¿Desea aceptar pagos mediante tarjeta PayPal?',
    'MODULE_PAYMENT_PAYPALACDC_SORT_ORDER_TITLE'            => 'Orden de visualización',
    'MODULE_PAYMENT_PAYPALACDC_SORT_ORDER_DESC'             => 'Orden de visualización. El dígito más pequeño aparece primero',
    'MODULE_PAYMENT_PAYPALACDC_ZONE_TITLE'                  => 'Zona de pago',
    'MODULE_PAYMENT_PAYPALACDC_ZONE_DESC'                   => 'Cuando se selecciona una zona, el método de pago sólo se aplica a esa zona.',
    'MODULE_PAYMENT_PAYPALACDC_LP'                          => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Cree una cuenta PayPal aquí.</strong></a>',

    'MODULE_PAYMENT_PAYPALACDC_TEXT_EXTENDED_DESCRIPTION'   => '<strong><font color="red">ATENCIÓN:</font></strong> Realice los ajustes en "Módulos para socios" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal". <a href="' . xtc_href_link('paypal_config.php') . '"><strong>"Configuración de PayPal"</strong></a> ¡Hazlo!',

    'MODULE_PAYMENT_PAYPALACDC_TEXT_ERROR_HEADING'          => 'Nota',
    'MODULE_PAYMENT_PAYPALACDC_TEXT_ERROR_MESSAGE'          => 'Se canceló el pago con tarjeta de crédito',
    'MODULE_PAYMENT_PAYPALACDC_TEXT_ERROR_MSG'              => 'Lamentablemente, el pago no puede efectuarse.',

    'MODULE_PAYMENT_PAYPALACDC_TEXT_CARDNUMBER'             => 'Número de tarjeta',
    'MODULE_PAYMENT_PAYPALACDC_TEXT_CARDHOLDER'             => 'Titular de la tarjeta',
    'MODULE_PAYMENT_PAYPALACDC_TEXT_EXPIRATION'             => 'Válido hasta',
    'MODULE_PAYMENT_PAYPALACDC_TEXT_CVV'                    => 'Dígito de control',

    'MODULE_PAYMENT_PAYPALACDC_TEXT_CARDNUMBER_PLACEHOLDER' => 'Número de tarjeta',
    'MODULE_PAYMENT_PAYPALACDC_TEXT_EXPIRATION_PLACEHOLDER' => 'MM/JJ',
    'MODULE_PAYMENT_PAYPALACDC_TEXT_CVV_PLACEHOLDER'        => 'Dígito de control',
);

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
