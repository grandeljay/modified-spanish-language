<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('MODULE_SHIPPING_DP_TEXT_TITLE', 'Correo alemán');
define('MODULE_SHIPPING_DP_TEXT_DESCRIPTION', 'Deutsche Post - Módulo de envíos a todo el mundo');
define('MODULE_SHIPPING_DP_TEXT_WAY', 'Envío a');
define('MODULE_SHIPPING_DP_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_DP_INVALID_ZONE', 'Lo sentimos, el envío a este país no es posible');
define('MODULE_SHIPPING_DP_UNDEFINED_RATE', 'Los gastos de envío no pueden calcularse por el momento');

define('MODULE_SHIPPING_DP_STATUS_TITLE', 'Correo alemán WorldNet');
define('MODULE_SHIPPING_DP_STATUS_DESC', '¿Desea ofrecer el envío a través de Correos alemanes?');
define('MODULE_SHIPPING_DP_HANDLING_TITLE', 'Tasa de tramitación');
define('MODULE_SHIPPING_DP_HANDLING_DESC', 'Gastos de gestión para este método de envío en euros');
define('MODULE_SHIPPING_DP_TAX_CLASS_TITLE', 'Clase de impuestos');
define('MODULE_SHIPPING_DP_TAX_CLASS_DESC', 'Aplique la siguiente clase de impuesto a los gastos de envío.');
define('MODULE_SHIPPING_DP_ZONE_TITLE', 'Zona de expedición');
define('MODULE_SHIPPING_DP_ZONE_DESC', 'Si selecciona una zona, este método de envío sólo se ofrece en esta zona.');
define('MODULE_SHIPPING_DP_SORT_ORDER_TITLE', 'Orden de visualización');
define('MODULE_SHIPPING_DP_SORT_ORDER_DESC', 'El más bajo se muestra primero.');
define('MODULE_SHIPPING_DP_ALLOWED_TITLE', 'Zonas de envío individuales');
define('MODULE_SHIPPING_DP_ALLOWED_DESC', 'Especifique <b>individualmente</b> las zonas a las que debe ser posible el envío. por ejemplo AT,DE');
define('MODULE_SHIPPING_DP_NUMBER_ZONES_TITLE', 'Número de zonas');
define('MODULE_SHIPPING_DP_NUMBER_ZONES_DESC', 'Número de zonas previstas');
define('MODULE_SHIPPING_DP_DISPLAY_TITLE', 'Activar la pantalla');
define('MODULE_SHIPPING_DP_DISPLAY_DESC', '¿Desea mostrar si no es posible realizar envíos al país o si no se pueden calcular los gastos de envío?');

if (defined('MODULE_SHIPPING_DP_NUMBER_ZONES')) {
    for ($i = 1; $i <= MODULE_SHIPPING_DP_NUMBER_ZONES; $i++) {
        define('MODULE_SHIPPING_DP_COUNTRIES_' . $i . '_TITLE', '<hr/>Zona DP' . $i . ' L&auml;nder');
        define('MODULE_SHIPPING_DP_COUNTRIES_' . $i . '_DESC', 'Lista separada por comas de los códigos de país ISO de 2 dígitos de la zona ' . $i . ' (Introduzca MUNDO para el resto del mundo).');
        define('MODULE_SHIPPING_DP_COST_' . $i . '_TITLE', 'Zona DP ' . $i . ' Tabla de envíos');
        define('MODULE_SHIPPING_DP_COST_' . $i . '_DESC', 'Gastos de envío de la zona ' . $i . ' relacionada con el peso del pedido. Beispiel: 3:8.50,7:10.50,99999:12.00... Los pesos superiores a 0 e inferiores a 3 cuestan 8,50, los inferiores a 7 cuestan 10,50 para la zona ' . $i . '.');
    }
}
