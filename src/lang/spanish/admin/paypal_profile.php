<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

$lang_array = [
    'TEXT_PAYPAL_PROFILE_HEADING_TITLE' => 'Perfil de PayPal',

    'TEXT_PAYPAL_PROFILE_STATUS'        => 'Estándar:',
    'TEXT_PAYPAL_PROFILE_STATUS_INFO'   => '¿Debe utilizarse este perfil por defecto?<br/><br/><b>Nota:</b> Se puede asignar un perfil distinto para cada módulo en función del idioma.',

    'TEXT_PAYPAL_PROFILE_NAME'          => 'Nombre interno:',
    'TEXT_PAYPAL_PROFILE_NAME_INFO'     => '',

    'TEXT_PAYPAL_PROFILE_BRAND'         => 'Nombre mostrado:',
    'TEXT_PAYPAL_PROFILE_BRAND_INFO'    => 'Este nombre se mostrará al cliente en PayPal (máx. 127 caracteres).',

    'TEXT_PAYPAL_PROFILE_LOGO'          => 'URL del logotipo:',
    'TEXT_PAYPAL_PROFILE_LOGO_INFO'     => 'URL completa (máx. 127 caracteres)<br/><br/><b>Nota:</b> Para que se muestre el logotipo, la URL debe introducirse con https://.',

    'TEXT_PAYPAL_PROFILE_LOCALE'        => 'Idioma:',
    'TEXT_PAYPAL_PROFILE_LOCALE_INFO'   => '',

    'TEXT_PAYPAL_PROFILE_PAGE'          => 'Página:',
    'TEXT_PAYPAL_PROFILE_PAGE_INFO'     => '<b>Por defecto:</b> Login<br/><br/>El pago sin cuenta de cliente está preseleccionado para Facturación.',

    'TEXT_PAYPAL_PROFILE_ADDRESS'       => 'Sobrescribir dirección:',
    'TEXT_PAYPAL_PROFILE_ADDRESS_INFO'  => '¿Debe tomarse la dirección de envío de PayPal?',

    'TEXT_PAYPAL_PROFILE_INFO'          => 'No hay ningún perfil de PayPal disponible.<br/><br/>Con un perfil de PayPal puede:<ul><li>cambiar el nombre que aparece en PayPal</li><li>añadir un logotipo a la página de PayPal</li><li>establecer la página de destino en PayPal</li></ul>',
];

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
