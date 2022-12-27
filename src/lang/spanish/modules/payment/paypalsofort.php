<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

$lang_array = array(
    'MODULE_PAYMENT_PAYPALSOFORT_TEXT_TITLE'                => 'Inmediatamente a través de PayPal',
    'MODULE_PAYMENT_PAYPALSOFORT_TEXT_ADMIN_TITLE'          => 'Inmediatamente a través de PayPal',
    'MODULE_PAYMENT_PAYPALSOFORT_TEXT_INFO'                 => '<img src="https://www.paypalobjects.com/images/checkout/alternative_payments/paypal_sofort_black.svg" />',
    'MODULE_PAYMENT_PAYPALSOFORT_TEXT_DESCRIPTION'          => 'Después de "confirmar", será dirigido a Sofort para pagar su pedido.<br />A continuación, volverá a la tienda y recibirá la confirmación de su pedido.<br />Pague ahora más rápido con la protección ilimitada del comprador de PayPal, sin coste alguno, por supuesto.',
    'MODULE_PAYMENT_PAYPALSOFORT_ALLOWED_TITLE'             => 'Zonas permitidas',
    'MODULE_PAYMENT_PAYPALSOFORT_ALLOWED_DESC'              => 'Especifique <b>individualmente</b> las zonas que deben permitirse para este módulo. (por ejemplo, AT,DE (si está vacía, se permiten todas las zonas))',
    'MODULE_PAYMENT_PAYPALSOFORT_STATUS_TITLE'              => 'Sofort via PayPal aktivieren',
    'MODULE_PAYMENT_PAYPALSOFORT_STATUS_DESC'               => '¿Desea aceptar pagos con PayPal Sofort?',
    'MODULE_PAYMENT_PAYPALSOFORT_SORT_ORDER_TITLE'          => 'Orden de visualización',
    'MODULE_PAYMENT_PAYPALSOFORT_SORT_ORDER_DESC'           => 'Orden de visualización. El dígito más pequeño aparece primero',
    'MODULE_PAYMENT_PAYPALSOFORT_ZONE_TITLE'                => 'Zona de pago',
    'MODULE_PAYMENT_PAYPALSOFORT_ZONE_DESC'                 => 'Cuando se selecciona una zona, el método de pago sólo se aplica a esa zona.',
    'MODULE_PAYMENT_PAYPALSOFORT_LP'                        => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Cree una cuenta PayPal aquí.</strong></a>',

    'MODULE_PAYMENT_PAYPALSOFORT_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATENCIÓN:</font></strong> Realice los ajustes en "Módulos para socios" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal". <a href="' . xtc_href_link('paypal_config.php') . '"><strong>"Configuración de PayPal"</strong></a> ¡Hazlo!',

    'MODULE_PAYMENT_PAYPALSOFORT_TEXT_ERROR_HEADING'        => 'Nota',
    'MODULE_PAYMENT_PAYPALSOFORT_TEXT_ERROR_MESSAGE'        => 'El pago con Sofort a través de PayPal fue cancelado',
);

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
