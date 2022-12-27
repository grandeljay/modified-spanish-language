<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('MODULE_SHIPPING_ITEM_TEXT_TITLE', 'Gastos de envío por pieza');
define('MODULE_SHIPPING_ITEM_TEXT_DESCRIPTION', 'Gastos de envío por pieza');
define('MODULE_SHIPPING_ITEM_TEXT_WAY', 'La mejor manera');
define('MODULE_SHIPPING_ITEM_INVALID_ZONE', 'Lo sentimos, el envío a este país no es posible');

define('MODULE_SHIPPING_ITEM_STATUS_TITLE', 'Activar gastos de envío por pieza');
define('MODULE_SHIPPING_ITEM_STATUS_DESC', '¿Desea ofrecer los gastos de envío por pieza?');
define('MODULE_SHIPPING_ITEM_ALLOWED_TITLE', 'Zonas de embarque permitidas');
define('MODULE_SHIPPING_ITEM_ALLOWED_DESC', 'Especifique <b>individualmente</b> las zonas a las que debe ser posible el envío. (por ejemplo, AT,DE (deje este campo en blanco si desea permitir todas las zonas)).');
define('MODULE_SHIPPING_ITEM_TAX_CLASS_TITLE', 'Clase de impuestos');
define('MODULE_SHIPPING_ITEM_TAX_CLASS_DESC', 'Aplique la siguiente clase de impuesto a los gastos de envío');
define('MODULE_SHIPPING_ITEM_ZONE_TITLE', 'Versandzone');
define('MODULE_SHIPPING_ITEM_ZONE_DESC', 'Cuando se selecciona una zona, este método de envío se utiliza exclusivamente para esa zona');
define('MODULE_SHIPPING_ITEM_SORT_ORDER_TITLE', 'Orden de clasificación');
define('MODULE_SHIPPING_ITEM_SORT_ORDER_DESC', 'Orden de visualización');
define('MODULE_SHIPPING_ITEM_NUMBER_ZONES_TITLE', 'Número de zonas');
define('MODULE_SHIPPING_ITEM_NUMBER_ZONES_DESC', 'Número de zonas previstas');
define('MODULE_SHIPPING_ITEM_DISPLAY_TITLE', 'Activar la pantalla');
define('MODULE_SHIPPING_ITEM_DISPLAY_DESC', '¿Desea mostrar si no es posible realizar envíos al país o si no se pueden calcular los gastos de envío?');

if (defined('MODULE_SHIPPING_ITEM_NUMBER_ZONES')) {
    for ($i = 1; $i <= MODULE_SHIPPING_ITEM_NUMBER_ZONES; $i++) {
        define('MODULE_SHIPPING_ITEM_COUNTRIES_' . $i . '_TITLE', '<hr/>Zona ' . $i . ' L&auml;nder');
        define('MODULE_SHIPPING_ITEM_COUNTRIES_' . $i . '_DESC', 'Lista separada por comas de los códigos de país ISO (2 caracteres) que forman parte de la zona ' . $i . '(Introduzca MUNDO para el resto del mundo).');
        define('MODULE_SHIPPING_ITEM_COST_' . $i . '_TITLE', 'Zona ' . $i . ' Gastos de envío');
        define('MODULE_SHIPPING_ITEM_COST_' . $i . '_DESC', 'Gastos de envío por zona ' . $i . ' se multiplican por el número de artículos de un pedido si se especifica este método de envío.');
        define('MODULE_SHIPPING_ITEM_HANDLING_' . $i . '_TITLE', 'Zona ' . $i . ' Gastos de tramitación');
        define('MODULE_SHIPPING_ITEM_HANDLING_' . $i . '_DESC', 'Gastos de gestión para esta zona de envío');
    }
}
