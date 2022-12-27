<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('MODULE_SHIPPING_AP_TEXT_TITLE', 'Correo austriaco');
define('MODULE_SHIPPING_AP_TEXT_DESCRIPTION', '&Ouml;sterreichische Post AG - Módulo de envío mundial');
define('MODULE_SHIPPING_AP_TEXT_WAY', 'Envío a');
define('MODULE_SHIPPING_AP_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_AP_INVALID_ZONE', 'Lo sentimos, el envío a este país no es posible');
define('MODULE_SHIPPING_AP_UNDEFINED_RATE', 'Los gastos de envío no pueden calcularse por el momento');

define('MODULE_SHIPPING_AP_STATUS_TITLE', 'Correo austriaco');
define('MODULE_SHIPPING_AP_STATUS_DESC', '¿Desea ofrecer el envío a través de &Ouml;sterreichische Post AG?');
define('MODULE_SHIPPING_AP_TAX_CLASS_TITLE', 'Tipo impositivo');
define('MODULE_SHIPPING_AP_TAX_CLASS_DESC', 'Seleccione el tipo de IVA para este método de envío.');
define('MODULE_SHIPPING_AP_ZONE_TITLE', 'Zona de expedición');
define('MODULE_SHIPPING_AP_ZONE_DESC', 'Si selecciona una zona, este método de envío sólo se ofrece en esta zona.');
define('MODULE_SHIPPING_AP_SORT_ORDER_TITLE', 'Orden de visualización');
define('MODULE_SHIPPING_AP_SORT_ORDER_DESC', 'El más bajo se muestra primero.');
define('MODULE_SHIPPING_AP_ALLOWED_TITLE', 'Zonas de envío individuales');
define('MODULE_SHIPPING_AP_ALLOWED_DESC', 'Especifique <b>individualmente</b> las zonas a las que debe ser posible el envío. por ejemplo AT,DE');
define('MODULE_SHIPPING_AP_NUMBER_ZONES_TITLE', 'Número de zonas');
define('MODULE_SHIPPING_AP_NUMBER_ZONES_DESC', 'Número de zonas previstas');
define('MODULE_SHIPPING_AP_DISPLAY_TITLE', 'Activar la pantalla');
define('MODULE_SHIPPING_AP_DISPLAY_DESC', '¿Desea mostrar si no es posible realizar envíos al país o si no se pueden calcular los gastos de envío?');

if (defined('MODULE_SHIPPING_AP_NUMBER_ZONES')) {
    for ($i = 1; $i <= MODULE_SHIPPING_AP_NUMBER_ZONES; $i++) {
        define('MODULE_SHIPPING_AP_COUNTRIES_' . $i . '_TITLE', '<hr/>Zona ' . $i . ' L&auml;nder');
        define('MODULE_SHIPPING_AP_COUNTRIES_' . $i . '_DESC', 'Lista separada por comas de los códigos de país ISO (2 caracteres) que forman parte de la zona ' . $i . '(Introduzca MUNDO para el resto del mundo).');
        define('MODULE_SHIPPING_AP_COST_' . $i . '_TITLE', 'Zona ' . $i . ' Tabla arancelaria hasta 20 kg');
        define('MODULE_SHIPPING_AP_COST_' . $i . '_DESC', 'Gastos de envío por zona ' . $i . ' destinos, basándose en un grupo de pesos máximos de pedido. Ejemplo: 3:8.50,7:10.50,... Un peso menor o igual a 3 costaría 8,50 por zona ' . $i . ' países de destino.');
        define('MODULE_SHIPPING_AP_HANDLING_' . $i . '_TITLE', 'Zona ' . $i . ' Gastos de tramitación');
        define('MODULE_SHIPPING_AP_HANDLING_' . $i . '_DESC', 'Gastos de gestión para esta zona de envío');
    }
}
