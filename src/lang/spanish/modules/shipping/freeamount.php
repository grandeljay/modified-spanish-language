<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('MODULE_SHIPPING_FREEAMOUNT_TEXT_TITLE', 'Envío gratuito');
define('MODULE_SHIPPING_FREEAMOUNT_TEXT_DESCRIPTION', 'Entrega libre de gastos de envío');
define('MODULE_SHIPPING_FREEAMOUNT_TEXT_WAY', 'a partir de %s valor del pedido enviamos su pedido sin gastos de envío');
define('MODULE_SHIPPING_FREEAMOUNT_INVALID_ZONE', 'Lo sentimos, el envío a este país no es posible');

define('MODULE_SHIPPING_FREEAMOUNT_ALLOWED_TITLE', 'Zonas de embarque permitidas');
define('MODULE_SHIPPING_FREEAMOUNT_ALLOWED_DESC', 'Especifique <b>individualmente</b> las zonas a las que debe ser posible el envío. (por ejemplo, AT,DE (deje este campo en blanco si desea permitir todas las zonas)).');
define('MODULE_SHIPPING_FREEAMOUNT_STATUS_TITLE', 'Activar la entrega gratuita');
define('MODULE_SHIPPING_FREEAMOUNT_STATUS_DESC', '¿Le gustaría ofrecer la entrega gratuita?');
define('MODULE_SHIPPING_FREEAMOUNT_ZONE_TITLE', 'Zona de expedición');
define('MODULE_SHIPPING_FREEAMOUNT_ZONE_DESC', 'Si selecciona una zona, este método de envío sólo se ofrece en esta zona.');
define('MODULE_SHIPPING_FREEAMOUNT_SORT_ORDER_TITLE', 'Orden de clasificación');
define('MODULE_SHIPPING_FREEAMOUNT_SORT_ORDER_DESC', 'Orden de visualización');
define('MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES_TITLE', 'Número de zonas');
define('MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES_DESC', 'Número de zonas previstas');
define('MODULE_SHIPPING_FREEAMOUNT_DISPLAY_TITLE', 'Activar la pantalla');
define('MODULE_SHIPPING_FREEAMOUNT_DISPLAY_DESC', '¿Desea mostrar si no es posible realizar envíos al país o si no se pueden calcular los gastos de envío?');

if (defined('MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES')) {
    for ($i = 1; $i <= MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES; $i++) {
        define('MODULE_SHIPPING_FREEAMOUNT_COUNTRIES_' . $i . '_TITLE', '<hr/>Zona ' . $i . ' L&auml;nder');
        define('MODULE_SHIPPING_FREEAMOUNT_COUNTRIES_' . $i . '_DESC', 'Lista separada por comas de los códigos de país ISO (2 caracteres) que forman parte de la zona ' . $i . '(Introduzca MUNDO para el resto del mundo).');
        define('MODULE_SHIPPING_FREEAMOUNT_AMOUNT_' . $i . '_TITLE', 'Zona ' . $i . ' Importe mínimo');
        define('MODULE_SHIPPING_FREEAMOUNT_AMOUNT_' . $i . '_DESC', 'Valor mínimo de pedido para la zona ' . $i . ' para que el envío sea gratuito.');
    }
}
