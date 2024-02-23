<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

$lang_array = [
    'TEXT_PAYPAL_MODULE_HEADING_TITLE'              => 'Productos PayPal',

    'TABLE_HEADING_MODULES'                         => 'Módulo',
    'TABLE_HEADING_FILENAME'                        => 'Nombre del módulo (para uso interno)',
    'TABLE_HEADING_SORT_ORDER'                      => 'Clasificación',
    'TABLE_HEADING_STATUS'                          => 'Estado',
    'TABLE_HEADING_ACTION'                          => 'Acción',

    'TABLE_HEADING_WALL_STATUS'                     => 'Mostrar en el muro de pago',
    'TABLE_HEADING_WALL_DESCRIPTION'                => 'Descripción',

    'TEXT_PAYPAL_MODULE_PROFILE'                    => 'Perfil',
    'TEXT_PAYPAL_NO_PROFILE'                        => 'Sin perfil web',
    'TEXT_PAYPAL_STANDARD_PROFILE'                  => 'Webprofil estándar',

    'TEXT_PAYPAL_MODULE_LINK_SUCCESS'               => 'Enlace en la caja',
    'TEXT_PAYPAL_MODULE_LINK_SUCCESS_INFO'          => '¿Debe aparecer el enlace de pago en la caja?',

    'TEXT_PAYPAL_MODULE_LINK_ACCOUNT'               => 'Enlace im Cuenta',
    'TEXT_PAYPAL_MODULE_LINK_ACCOUNT_INFO'          => '¿Debe aparecer el enlace de pago en la cuenta?',

    'TEXT_PAYPAL_MODULE_PRODUCT'                    => 'Botón exprés por el artículo',
    'TEXT_PAYPAL_MODULE_PRODUCT_INFO'               => '¿Debe aparecer el botón de PayPal exprés en la información del artículo?',

    'TEXT_PAYPAL_MODULE_CART_BNPL'                  => 'Botón Pagar más tarde en la cesta de la compra',
    'TEXT_PAYPAL_MODULE_CART_BNPL_INFO'             => '¿Debe aparecer el botón PayPal Pagar más tarde en el carro de la compra?',

    'TEXT_PAYPAL_MODULE_PRODUCT_BNPL'               => 'Botón de pago posterior por artículo',
    'TEXT_PAYPAL_MODULE_PRODUCT_BNPL_INFO'          => '¿Debería aparecer el botón Pagar más tarde de PayPal en la información del artículo?',

    'TEXT_PAYPAL_MODULE_CHECKOUT_BNPL'              => 'Botón Pagar más tarde en la caja',
    'TEXT_PAYPAL_MODULE_CHECKOUT_BNPL_INFO'         => '¿Debería aparecer el botón Pagar más tarde de PayPal en la caja?',

    'TEXT_PAYPAL_MODULE_USE_TABS'                   => 'Acordeón / Tabs',
    'TEXT_PAYPAL_MODULE_USE_TABS_INFO'              => '¿La plantilla utiliza acordeón o pestañas en la caja?',

    'TEXT_PAYPAL_MODULE_SHIPPING_COST'              => 'Gastos de envío provisionales',
    'TEXT_PAYPAL_MODULE_SHIPPING_COST_INFO'         => 'Introduzca el importe de los gastos de envío provisionales.',

    'TEXT_PAYPAL_MODULE_ORDER_STATUS_ACCEPTED'      => 'Estado del pedido',
    'TEXT_PAYPAL_MODULE_ORDER_STATUS_ACCEPTED_INFO' => 'Seleccione el estado del pedido.<br/><b>Importante:</b> el nombre no debe contener la palabra "pagado".',

    'TEXT_PAYPAL_MODULE_UPSTREAM_PRODUCT'           => 'Caja de financiación por artículo',
    'TEXT_PAYPAL_MODULE_UPSTREAM_PRODUCT_INFO'      => '¿Deben mostrarse los detalles del pago a plazos junto con el artículo?',

    'TEXT_PAYPAL_MODULE_UPSTREAM_CART'              => 'Caja de financiación en la cesta de la compra',
    'TEXT_PAYPAL_MODULE_UPSTREAM_CART_INFO'         => '¿Deben aparecer los detalles del pago a plazos en la cesta de la compra?',

    'TEXT_PAYPAL_MODULE_UPSTREAM_PAYMENT'           => 'Caja de financiación en la caja',
    'TEXT_PAYPAL_MODULE_UPSTREAM_PAYMENT_INFO'      => '¿Deben mostrarse los detalles del pago a plazos en la caja?',
];

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
