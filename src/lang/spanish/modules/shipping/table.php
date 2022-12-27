<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('MODULE_SHIPPING_TABLE_TEXT_TITLE', 'Tabla de gastos de envío');
define('MODULE_SHIPPING_TABLE_TEXT_DESCRIPTION', 'Tabla de gastos de envío');
define('MODULE_SHIPPING_TABLE_TEXT_WAY', 'La mejor manera');
define('MODULE_SHIPPING_TABLE_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_TABLE_TEXT_WEIGHT', 'Peso');
define('MODULE_SHIPPING_TABLE_TEXT_AMOUNT', 'Cantidad');
define('MODULE_SHIPPING_TABLE_UNDEFINED_RATE', 'Los gastos de envío no pueden calcularse por el momento.');
define('MODULE_SHIPPING_TABLE_INVALID_ZONE', '¡El envío a este país no es posible!');

define('MODULE_SHIPPING_TABLE_STATUS_TITLE', 'Activar los gastos de envío tabulares');
define('MODULE_SHIPPING_TABLE_STATUS_DESC', '¿Desea ofrecer los gastos de envío tabulados?');
define('MODULE_SHIPPING_TABLE_ALLOWED_TITLE', 'Zonas de embarque permitidas');
define('MODULE_SHIPPING_TABLE_ALLOWED_DESC', 'Especifique <b>individualmente</b> las zonas a las que debe ser posible el envío. (por ejemplo, AT,DE (deje este campo en blanco si desea permitir todas las zonas)).');
define('MODULE_SHIPPING_TABLE_MODE_TITLE', 'Método de gastos de envío');
define('MODULE_SHIPPING_TABLE_MODE_DESC', 'Los gastos de envío se basan en el coste total o en el peso total de la mercancía pedida.');
define('MODULE_SHIPPING_TABLE_TAX_CLASS_TITLE', 'Clase de impuestos');
define('MODULE_SHIPPING_TABLE_TAX_CLASS_DESC', 'Aplique la siguiente clase de impuesto a los gastos de envío');
define('MODULE_SHIPPING_TABLE_ZONE_TITLE', 'Versandzone');
define('MODULE_SHIPPING_TABLE_ZONE_DESC', 'Cuando se selecciona una zona, este método de envío se utiliza exclusivamente para esa zona');
define('MODULE_SHIPPING_TABLE_SORT_ORDER_TITLE', 'Orden de clasificación');
define('MODULE_SHIPPING_TABLE_SORT_ORDER_DESC', 'Orden de visualización');
define('MODULE_SHIPPING_TABLE_NUMBER_ZONES_TITLE', 'Número de zonas');
define('MODULE_SHIPPING_TABLE_NUMBER_ZONES_DESC', 'Número de zonas previstas');
define('MODULE_SHIPPING_TABLE_DISPLAY_TITLE', 'Activar la pantalla');
define('MODULE_SHIPPING_TABLE_DISPLAY_DESC', '¿Desea mostrar si no es posible realizar envíos al país o si no se pueden calcular los gastos de envío?');

if (defined('MODULE_SHIPPING_TABLE_NUMBER_ZONES')) {
    for ($i = 1; $i <= MODULE_SHIPPING_TABLE_NUMBER_ZONES; $i++) {
        define('MODULE_SHIPPING_TABLE_COUNTRIES_' . $i . '_TITLE', '<hr/>Zona ' . $i . ' L&auml;nder');
        define('MODULE_SHIPPING_TABLE_COUNTRIES_' . $i . '_DESC', 'Lista separada por comas de los códigos de país ISO (2 caracteres) que forman parte de la zona ' . $i . '(Introduzca MUNDO para el resto del mundo).');
        define('MODULE_SHIPPING_TABLE_COST_' . $i . '_TITLE', 'Zona ' . $i . ' Gastos de envío');
        define('MODULE_SHIPPING_TABLE_COST_' . $i . '_DESC', 'Gastos de envío por zona ' . $i . ' destinos, en función de un grupo de pesos máximos de pedido o del valor de la cesta, según la configuración del módulo. Ejemplo: 3:8.50,7:10.50,... Peso/precio menor o igual a 3 costaría 8,50 por zona ' . $i . ' países de destino.');
        define('MODULE_SHIPPING_TABLE_HANDLING_' . $i . '_TITLE', 'Zona ' . $i . ' Gastos de tramitación');
        define('MODULE_SHIPPING_TABLE_HANDLING_' . $i . '_DESC', 'Gastos de gestión para esta zona de envío');
    }
}
