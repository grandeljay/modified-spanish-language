<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

$lang_array = array(
    'MODULE_PAYMENT_PAYPALPUI_TEXT_TITLE'                             => 'Factura',
    'MODULE_PAYMENT_PAYPALPUI_TEXT_ADMIN_TITLE'                       => 'Factura a través de PayPal',
    'MODULE_PAYMENT_PAYPALPUI_TEXT_INFO'                              => 'Al hacer clic en el botón, acepta las <a target="_blank" href="https://www.ratepay.com/legal-payment-terms">condiciones de pago</a> de Ratepay y acepta que <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">Ratepay</a>, nuestro socio, realice una <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">comprobación de riesgos</a>. También acepta la <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/ua/rechnungskauf-mit-ratepay?locale.x=en_DE&_ga=1.121064910.716429872.1643889674">política de privacidad</a> de PayPal. Si su transacción puede procesarse con éxito mediante compra a cuenta, el precio de compra se asigna a Ratepay y sólo podrá transferir dinero a Ratepay, no al comerciante.',
    'MODULE_PAYMENT_PAYPALPUI_TEXT_DESCRIPTION'                       => '<strong><font color="red">ATENCIÓN:</font></strong> Para que la compra a cuenta funcione correctamente, deben establecerse los siguientes webhooks en la configuración de PayPal para que el estado cambie correctamente:<ul><li>PAGO.COMPLETADO</li><li>PAGO.CAPTURA.DENEGADO</li></ul>',
    'MODULE_PAYMENT_PAYPALPUI_ALLOWED_TITLE'                          => 'Zonas permitidas',
    'MODULE_PAYMENT_PAYPALPUI_ALLOWED_DESC'                           => 'Especifique <b>individualmente</b> las zonas que deben permitirse para este módulo. (por ejemplo, AT,DE (si está vacía, se permiten todas las zonas))',
    'MODULE_PAYMENT_PAYPALPUI_STATUS_TITLE'                           => 'Activar factura PayPal',
    'MODULE_PAYMENT_PAYPALPUI_STATUS_DESC'                            => '¿Desea aceptar pagos mediante factura?',
    'MODULE_PAYMENT_PAYPALPUI_SORT_ORDER_TITLE'                       => 'Orden de visualización',
    'MODULE_PAYMENT_PAYPALPUI_SORT_ORDER_DESC'                        => 'Orden de visualización. El dígito más pequeño aparece primero',
    'MODULE_PAYMENT_PAYPALPUI_ZONE_TITLE'                             => 'Zona de pago',
    'MODULE_PAYMENT_PAYPALPUI_ZONE_DESC'                              => 'Cuando se selecciona una zona, el método de pago sólo se aplica a esa zona.',
    'MODULE_PAYMENT_PAYPALPUI_LP'                                     => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Cree una cuenta PayPal aquí.</strong></a>',

    'MODULE_PAYMENT_PAYPALPUI_TEXT_EXTENDED_DESCRIPTION'              => '<strong><font color="red">ATENCIÓN:</font></strong> Realice los ajustes en "Módulos para socios" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal". <a href="' . xtc_href_link('paypal_config.php') . '"><strong>"Configuración de PayPal"</strong></a> ¡Hazlo!',

    'MODULE_PAYMENT_PAYPALPUI_TEXT_ERROR_HEADING'                     => 'Nota',
    'MODULE_PAYMENT_PAYPALPUI_TEXT_ERROR_MESSAGE'                     => 'Lamentablemente, la compra a cuenta no está disponible en este momento, por favor elija otro método de pago.',

    'MODULE_PAYMENT_PAYPALPUI_PAYMENT_SOURCE_INFO_CANNOT_BE_VERIFIED' => 'No se ha podido validar la combinación de su nombre y dirección. Por favor, corrija sus datos e inténtelo de nuevo. Para más información, consulte la <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">política de privacidad</a> de Ratepay o póngase en contacto con Ratepay a través de este <a target="_blank" href="https://www.ratepay.com/kontakt">formulario de contacto</a>.',
    'MODULE_PAYMENT_PAYPALPUI_PAYMENT_SOURCE_DECLINED_BY_PROCESSOR'   => 'No se puede utilizar el método de pago seleccionado. Esta decisión se basa en un procedimiento automatizado de tratamiento de datos. Para más información, consulte la <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">política de privacidad</a> de Ratepay o póngase en contacto con Ratepay a través de este <a target="_blank" href="https://www.ratepay.com/kontakt">formulario de contacto</a>.',
    'MODULE_PAYMENT_PAYPALPUI_PAYMENT_SOURCE_CANNOT_BE_USED'          => 'No se puede utilizar el método de pago seleccionado. Esta decisión se basa en un procedimiento automatizado de tratamiento de datos. Para más información, consulte la <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">política de privacidad</a> de Ratepay o póngase en contacto con Ratepay a través de este <a target="_blank" href="https://www.ratepay.com/kontakt">formulario de contacto</a>.',
    'MODULE_PAYMENT_PAYPALPUI_BILLING_ADDRESS_INVALID'                => 'No se ha podido validar su dirección de facturación.',
    'MODULE_PAYMENT_PAYPALPUI_SHIPPING_ADDRESS_INVALID'               => 'No se ha podido validar su dirección de envío.',

    'MALFORMED_REQUEST_JSON'                                          => 'No se ha podido validar la combinación de su nombre y dirección. Por favor, corrija sus datos e inténtelo de nuevo. Para más información, consulte la <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">política de privacidad</a> de Ratepay o póngase en contacto con Ratepay a través de este <a target="_blank" href="https://www.ratepay.com/kontakt">formulario de contacto</a>.',

    'MODULE_PAYMENT_PAYPALPUI_TEXT_DOB'                               => 'Fecha de nacimiento (por ejemplo, 21.05.1970):',
    'MODULE_PAYMENT_PAYPALPUI_TEXT_TELEPHONE'                         => 'Número de teléfono:',
    'MODULE_PAYMENT_PAYPALPUI_TEXT_SERVICE'                           => 'Servicio al cliente: %s',

    'JS_DOB_ERROR'                                                    => 'Su fecha de nacimiento debe introducirse en el formato DD.MM.AAAA (por ejemplo, 21.05.1970).',
    'JS_TELEPHONE_ERROR'                                              => 'Para este método de pago necesitamos su número de teléfono.',

    'MODULE_PAYMENT_PAYPALPUI_TEXT_LEGAL'                             => 'Al hacer clic en el botón, acepta las <a target="_blank" href="https://www.ratepay.com/legal-payment-terms">condiciones de pago</a> de Ratepay y acepta que <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">Ratepay</a>, nuestro socio, realice una <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">comprobación de riesgos</a>. También acepta la <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/ua/rechnungskauf-mit-ratepay?locale.x=en_DE&_ga=1.121064910.716429872.1643889674">política de privacidad</a> de PayPal. Si su transacción puede procesarse con éxito mediante compra a cuenta, el precio de compra se asigna a Ratepay y sólo podrá transferir dinero a Ratepay, no al comerciante.',
);

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
