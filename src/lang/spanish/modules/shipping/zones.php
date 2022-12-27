<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('MODULE_SHIPPING_ZONES_TEXT_TITLE', 'Gastos de envío por zona');
define('MODULE_SHIPPING_ZONES_TEXT_DESCRIPTION', 'Gastos de envío por zonas');
define('MODULE_SHIPPING_ZONES_TEXT_WAY', 'Envío a:');
define('MODULE_SHIPPING_ZONES_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_ZONES_INVALID_ZONE', '¡El envío a este país no es posible!');
define('MODULE_SHIPPING_ZONES_UNDEFINED_RATE', 'Los gastos de envío no pueden calcularse por el momento.');

define('MODULE_SHIPPING_ZONES_STATUS_TITLE', 'Habilitar el método de gastos de envío por zonas');
define('MODULE_SHIPPING_ZONES_STATUS_DESC', '¿Desea ofrecer los gastos de envío por zonas?');
define('MODULE_SHIPPING_ZONES_ALLOWED_TITLE', 'Zonas de embarque permitidas');
define('MODULE_SHIPPING_ZONES_ALLOWED_DESC', 'Especifique <b>individualmente</b> las zonas a las que debe ser posible el envío. (por ejemplo, AT,DE (deje este campo en blanco si desea permitir todas las zonas)).');
define('MODULE_SHIPPING_ZONES_TAX_CLASS_TITLE', 'Clase de impuestos');
define('MODULE_SHIPPING_ZONES_TAX_CLASS_DESC', 'Aplique la siguiente clase de impuesto a los gastos de envío');
define('MODULE_SHIPPING_ZONES_ZONE_TITLE', 'Zona de expedición');
define('MODULE_SHIPPING_ZONES_ZONE_DESC', 'Si selecciona una zona, este método de envío sólo se ofrece en esta zona.');
define('MODULE_SHIPPING_ZONES_SORT_ORDER_TITLE', 'Orden de clasificación');
define('MODULE_SHIPPING_ZONES_SORT_ORDER_DESC', 'Orden de visualización');
define('MODULE_SHIPPING_ZONES_NUMBER_ZONES_TITLE', 'Número de zonas');
define('MODULE_SHIPPING_ZONES_NUMBER_ZONES_DESC', 'Número de zonas previstas');
define('MODULE_SHIPPING_ZONES_DISPLAY_TITLE', 'Activar la pantalla');
define('MODULE_SHIPPING_ZONES_DISPLAY_DESC', '¿Desea mostrar si no es posible realizar envíos al país o si no se pueden calcular los gastos de envío?');

if (defined('MODULE_SHIPPING_ZONES_NUMBER_ZONES')) {
    for ($i = 1; $i <= MODULE_SHIPPING_ZONES_NUMBER_ZONES; $i++) {
        define('MODULE_SHIPPING_ZONES_COUNTRIES_' . $i . '_TITLE', '<hr/>Zona ' . $i . ' L&auml;nder');
        define('MODULE_SHIPPING_ZONES_COUNTRIES_' . $i . '_DESC', 'Lista separada por comas de los códigos de país ISO (2 caracteres) que forman parte de la zona ' . $i . '(Introduzca MUNDO para el resto del mundo).');
        define('MODULE_SHIPPING_ZONES_COST_' . $i . '_TITLE', 'Zona ' . $i . ' Gastos de envío');
        define('MODULE_SHIPPING_ZONES_COST_' . $i . '_DESC', 'Gastos de envío por zona ' . $i . ' destinos, basándose en un grupo de pesos máximos de pedido. Ejemplo: 3:8.50,7:10.50,... Un peso menor o igual a 3 costaría 8,50 por zona ' . $i . ' países de destino.');
        define('MODULE_SHIPPING_ZONES_HANDLING_' . $i . '_TITLE', 'Zona ' . $i . ' Gastos de tramitación');
        define('MODULE_SHIPPING_ZONES_HANDLING_' . $i . '_DESC', 'Gastos de gestión para esta zona de envío');
    }
}
