<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('MODULE_SHIPPING_GLS_TEXT_TITLE', 'GLS');
define('MODULE_SHIPPING_GLS_TEXT_DESCRIPTION', 'GLS - Módulo de envío a toda Europa');
define('MODULE_SHIPPING_GLS_TEXT_WAY', 'Envío a');
define('MODULE_SHIPPING_GLS_POSTCODE_INFO_TEXT', 'incl. suplemento por isla');
define('MODULE_SHIPPING_GLS_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_GLS_INVALID_ZONE', 'Lo sentimos, el envío a este país no es posible');
define('MODULE_SHIPPING_GLS_UNDEFINED_RATE', 'Los gastos de envío no pueden calcularse por el momento');

define('MODULE_SHIPPING_GLS_STATUS_TITLE', 'GLS');
define('MODULE_SHIPPING_GLS_STATUS_DESC', '¿Desea ofrecer el envío a través de GLS?');
define('MODULE_SHIPPING_GLS_HANDLING_TITLE', 'Tasa de tramitación');
define('MODULE_SHIPPING_GLS_HANDLING_DESC', 'Gastos de gestión para este método de envío en euros');
define('MODULE_SHIPPING_GLS_TAX_CLASS_TITLE', 'Tipo impositivo');
define('MODULE_SHIPPING_GLS_TAX_CLASS_DESC', 'Seleccione el tipo de IVA para este método de envío.');
define('MODULE_SHIPPING_GLS_ZONE_TITLE', 'Zona de expedición');
define('MODULE_SHIPPING_GLS_ZONE_DESC', 'Si selecciona una zona, este método de envío sólo se ofrece en esta zona.');
define('MODULE_SHIPPING_GLS_SORT_ORDER_TITLE', 'Orden de visualización');
define('MODULE_SHIPPING_GLS_SORT_ORDER_DESC', 'El más bajo se muestra primero.');
define('MODULE_SHIPPING_GLS_ALLOWED_TITLE', 'Zonas de envío individuales');
define('MODULE_SHIPPING_GLS_ALLOWED_DESC', 'Especifique <b>individualmente</b> las zonas a las que debe ser posible el envío, por ejemplo: AT,DE');
define('MODULE_SHIPPING_GLS_DISPLAY_TITLE', 'Activar la pantalla');
define('MODULE_SHIPPING_GLS_DISPLAY_DESC', '¿Desea mostrar si no es posible realizar envíos al país o si no se pueden calcular los gastos de envío?');

define('MODULE_SHIPPING_GLS_POSTCODE_TITLE', 'Recargo insular GLS - Códigos postales');
define('MODULE_SHIPPING_GLS_POSTCODE_DESC', 'Zonas de código postal');
define('MODULE_SHIPPING_GLS_POSTCODE_EXTRA_COST_TITLE', 'Recargo insular GLS - Costes');
define('MODULE_SHIPPING_GLS_POSTCODE_EXTRA_COST_DESC', 'Recargo por isla: Introduzca aquí cuánto debe añadirse a los gastos de envío si la dirección de entrega se encuentra en una isla alemana.');

for ($i = 1; $i <= 6; $i++) {
    define('MODULE_SHIPPING_GLS_COUNTRIES_' . $i . '_TITLE', '<hr/>Zona ' . $i . ' L&auml;nder');
    define('MODULE_SHIPPING_GLS_COUNTRIES_' . $i . '_DESC', 'Lista separada por comas de los códigos de país ISO (2 caracteres) que forman parte de la zona ' . $i . '(Introduzca MUNDO para el resto del mundo).');
    define('MODULE_SHIPPING_GLS_COST_' . $i . '_TITLE', 'Zona ' . $i . ' Gastos de envío');
    define('MODULE_SHIPPING_GLS_COST_' . $i . '_DESC', 'Gastos de envío por zona ' . $i . ' destinos, basándose en un grupo de pesos máximos de pedido. Ejemplo: 3:8.50,7:10.50,... Un peso menor o igual a 3 costaría 8,50 por zona ' . $i . ' países de destino.');
}
