<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

$lang_array = array(
    'TEXT_PAYPAL_WEBHOOK_HEADING_TITLE'      => 'Webhooks de PayPal',

    'TEXT_PAYPAL_WEBHOOK_STATUS_NOT_DEFINED' => 'No configurado',
    'TEXT_PAYPAL_WEBHOOK_INFO'               => '<ul><li>No hay webhooks disponibles</li><li>Con Webhooks recibirá actualizaciones del estado de los pedidos y de los pagos.</li><li>Para utilizar Webhooks, es obligatorio que disponga de un certificado SSL válido.</li></ul>',
    'TEXT_PAYPAL_WEBHOOK_CREDENTIAL_INFO'    => 'No se han podido recibir webhooks disponibles de PayPal. Por favor, compruebe los ajustes.',

    'TABLE_HEADING_URL'                      => 'URL',
    'TABLE_HEADING_WEBHOOK'                  => 'Gancho web',
    'TABLE_HEADING_STATUS'                   => 'Estado',
    'TABLE_HEADING_DESCRIPTION'              => 'Descripción',

);

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
