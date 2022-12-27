<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

$lang_array = array(
    'MODULE_PAYMENT_EASYCREDIT_TEXT_TITLE'                    => 'ratenkauf por easyCredit',
    'MODULE_PAYMENT_EASYCREDIT_TEXT_INFO'                     => '',
    'MODULE_PAYMENT_EASYCREDIT_TEXT_DESCRIPTION'              => '',
    'MODULE_PAYMENT_EASYCREDIT_ALLOWED_TITLE'                 => 'Zonas permitidas',
    'MODULE_PAYMENT_EASYCREDIT_ALLOWED_DESC'                  => 'Especifique <b>individualmente</b> las zonas que deben permitirse para este módulo. (por ejemplo, AT,DE (si está vacía, se permiten todas las zonas))',
    'MODULE_PAYMENT_EASYCREDIT_STATUS_TITLE'                  => 'Activar módulo',
    'MODULE_PAYMENT_EASYCREDIT_STATUS_DESC'                   => '¿Desea aceptar pagos con ratenkauf by easyCredit?',
    'MODULE_PAYMENT_EASYCREDIT_SORT_ORDER_TITLE'              => 'Orden de visualización',
    'MODULE_PAYMENT_EASYCREDIT_SORT_ORDER_DESC'               => 'Orden de visualización. El dígito más pequeño aparece primero.',
    'MODULE_PAYMENT_EASYCREDIT_ZONE_TITLE'                    => 'Zona de pago',
    'MODULE_PAYMENT_EASYCREDIT_ZONE_DESC'                     => 'Cuando se selecciona una zona, el método de pago sólo se aplica a esa zona.',
    'MODULE_PAYMENT_EASYCREDIT_ORDER_STATUS_ID_TITLE'         => 'Estado de la orden temporal',
    'MODULE_PAYMENT_EASYCREDIT_ORDER_STATUS_ID_DESC'          => 'Indicar el estado del pedido para los pedidos no confirmados.',
    'MODULE_PAYMENT_EASYCREDIT_ORDER_STATUS_SUCCESS_ID_TITLE' => 'Estado satisfactorio del pedido',
    'MODULE_PAYMENT_EASYCREDIT_ORDER_STATUS_SUCCESS_ID_DESC'  => 'Indicar el estado del pedido para los pedidos realizados con éxito.',
    'MODULE_PAYMENT_EASYCREDIT_SHOP_ID_TITLE'                 => 'ID de la tienda',
    'MODULE_PAYMENT_EASYCREDIT_SHOP_ID_DESC'                  => 'Puede encontrar el ID de su tienda virtual en la interfaz de comerciante de easyCredit, en el subapartado Administración de la tienda.',
    'MODULE_PAYMENT_EASYCREDIT_SHOP_TOKEN_TITLE'              => 'Contraseña API',
    'MODULE_PAYMENT_EASYCREDIT_SHOP_TOKEN_DESC'               => 'Usted mismo define su contraseña API en la interfaz de comerciante easyCredit, en el subapartado Administración de la tienda.',
    'MODULE_PAYMENT_EASYCREDIT_LOG_LEVEL_TITLE'               => 'Nivel de registro',
    'MODULE_PAYMENT_EASYCREDIT_LOG_LEVEL_DESC'                => 'Especifique el nivel de registro. Por defecto: "error',

    'MODULE_PAYMENT_EASYCREDIT_TEXT_ERROR_HEADING'            => 'Nota',
    'MODULE_PAYMENT_EASYCREDIT_TEXT_ERROR_MESSAGE'            => 'El pago con ratenkauf por easyCredit fue cancelado',
    'MODULE_PAYMENT_EASYCREDIT_TEXT_ERROR_CHECKBOX'           => 'Por favor, acepte los acuerdos adicionales necesarios para ratenkauf by easyCredit',
    'MODULE_PAYMENT_EASYCREDIT_TEXT_LEGAL'                    => 'Información precontractual sobre la compra a plazos disponible aquí',

    'TEXT_EASYCREDIT_TBAID'                                   => 'Identificador del proceso',
    'TEXT_EASYCREDIT_RATING_PLAN'                             => 'Financiación a partir de %s en %s plazos con compra a plazos por easyCredit',
    'TEXT_EASYCREDIT_RATING_PLAN_SHORT'                       => 'Financiación a partir de %s al mes',
    'TEXT_EASYCREDIT_RATING_PLAN_CALC'                        => 'más información sobre la compra a plazos',
    'TEXT_EASYCREDIT_LEGAL'                                   => 'Ejemplo representativo según &sect; 6a PAngV',
    'TEXT_EASYCREDIT_NOMINAL_RATE'                            => 'Tipo de interés deudor p.a. fijo durante todo el plazo',
    'TEXT_EASYCREDIT_EFFECTIVE_RATE'                          => 'tasa porcentual anual',
    'TEXT_EASYCREDIT_TOTAL_COST'                              => 'Importe total',
    'TEXT_EASYCREDIT_TOTAL_NETTO'                             => 'Importe neto del préstamo',
    'TEXT_EASYCREDIT_TOTAL_INTEREST'                          => 'Importe de los intereses',
    'TEXT_EASYCREDIT_MONTHLY_PAYMENT'                         => 'Cuotas mensuales por importe de',
    'TEXT_EASYCREDIT_LAST_PAYMENT'                            => 'último plazo',
);

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
