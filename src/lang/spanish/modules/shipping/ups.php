<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('MODULE_SHIPPING_UPS_TEXT_TITLE', 'United Parcel Service Estándar');
define('MODULE_SHIPPING_UPS_TEXT_DESCRIPTION', 'United Parcel Service Standard - Versandmodul');
define('MODULE_SHIPPING_UPS_TEXT_WAY', 'Envío a');
define('MODULE_SHIPPING_UPS_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_UPS_TEXT_FREE', 'Ab EUR ' . ((defined('MODULE_SHIPPING_UPS_FREEAMOUNT')) ? MODULE_SHIPPING_UPS_FREEAMOUNT : '') . ' valor del pedido, ¡le enviaremos su pedido sin gastos de envío!');
define('MODULE_SHIPPING_UPS_TEXT_LOW', 'Ab EUR ' . ((defined('MODULE_SHIPPING_UPS_FREEAMOUNT')) ? MODULE_SHIPPING_UPS_FREEAMOUNT : '') . ' valor del pedido, ¡le enviaremos su pedido con gastos de envío reducidos!');
define('MODULE_SHIPPING_UPS_INVALID_ZONE', 'Lamentablemente, el envío a este país no es posible.');
define('MODULE_SHIPPING_UPS_UNDEFINED_RATE', 'Los gastos de envío no pueden calcularse por el momento.');

define('MODULE_SHIPPING_UPS_STATUS_TITLE', 'Estándar UPS');
define('MODULE_SHIPPING_UPS_STATUS_DESC', '¿Desea ofrecer el envío a través de UPS Standard?');
define('MODULE_SHIPPING_UPS_HANDLING_TITLE', 'Recargo');
define('MODULE_SHIPPING_UPS_HANDLING_DESC', 'Recargo de tramitación para este método de envío en euros');
define('MODULE_SHIPPING_UPS_TAX_CLASS_TITLE', 'Tipo impositivo');
define('MODULE_SHIPPING_UPS_TAX_CLASS_DESC', 'Seleccione el tipo de IVA para este método de envío.');
define('MODULE_SHIPPING_UPS_ZONE_TITLE', 'Zona de expedición');
define('MODULE_SHIPPING_UPS_ZONE_DESC', 'Si selecciona una zona, este método de envío sólo se ofrece en esta zona.');
define('MODULE_SHIPPING_UPS_SORT_ORDER_TITLE', 'Orden de visualización');
define('MODULE_SHIPPING_UPS_SORT_ORDER_DESC', 'El más bajo se muestra primero.');
define('MODULE_SHIPPING_UPS_ALLOWED_TITLE', 'Zonas de envío individuales');
define('MODULE_SHIPPING_UPS_ALLOWED_DESC', 'Especifique <b>individualmente</b> las zonas a las que debe ser posible el envío, por ejemplo: AT,DE.');
define('MODULE_SHIPPING_UPS_FREEAMOUNT_TITLE', 'Envío nacional gratuito');
define('MODULE_SHIPPING_UPS_FREEAMOUNT_DESC', 'Valor mínimo del pedido para el envío nacional gratuito y el envío al extranjero con descuento.');

define('MODULE_SHIPPING_UPS_COUNTRIES_1_TITLE', 'Estados para UPS Zona Estándar 1');
define('MODULE_SHIPPING_UPS_COUNTRIES_1_DESC', 'Abreviaturas ISO separadas por comas de los estados para la zona 1 (introduzca WORLD para el resto del mundo):');
define('MODULE_SHIPPING_UPS_COST_1_TITLE', 'Tarife f&uuml;r UPS Standard Zona 1');
define('MODULE_SHIPPING_UPS_COST_1_DESC', 'Gastos de envío basados en el peso dentro de la zona 1. Ejemplo: Un envío de entre 0 y 4 kg cuesta 5,15 euros = 4:5,15,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_2_TITLE', 'Estados para UPS Standard Zona 3');
define('MODULE_SHIPPING_UPS_COUNTRIES_2_DESC', 'Abreviaturas ISO separadas por comas de los estados para la zona 3 (introduzca WORLD para el resto del mundo):');
define('MODULE_SHIPPING_UPS_COST_2_TITLE', 'Tarife f&uuml;r UPS Standard Zona 3');
define('MODULE_SHIPPING_UPS_COST_2_DESC', 'Gastos de envío basados en el peso dentro de la zona 3. Ejemplo: Un envío de entre 0 y 4 kg cuesta 13,75 euros = 4:13,75,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_3_TITLE', 'Estados para UPS Zona Estándar 31');
define('MODULE_SHIPPING_UPS_COUNTRIES_3_DESC', 'Abreviaturas ISO separadas por comas de los estados para la zona 31 (introduzca WORLD para el resto del mundo):');
define('MODULE_SHIPPING_UPS_COST_3_TITLE', 'Tarife f&uuml;r UPS Standard Zona 31');
define('MODULE_SHIPPING_UPS_COST_3_DESC', 'Gastos de envío basados en el peso dentro de la zona 31. Ejemplo: Un envío de entre 0 y 4 kg cuesta 23,50 euros = 4:23,50,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_4_TITLE', 'Estados para UPS Standard Zona 4');
define('MODULE_SHIPPING_UPS_COUNTRIES_4_DESC', 'Abreviaturas ISO separadas por comas de los estados para la zona 4 (introduzca WORLD para el resto del mundo):');
define('MODULE_SHIPPING_UPS_COST_4_TITLE', 'Tarife f&uuml;r UPS Standard Zona 4');
define('MODULE_SHIPPING_UPS_COST_4_DESC', 'Gastos de envío basados en el peso dentro de la zona 4. Ejemplo: Un envío de entre 0 y 4 kg cuesta 25,40 euros = 4:25,40,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_5_TITLE', 'Estados para UPS Zona Estándar 41');
define('MODULE_SHIPPING_UPS_COUNTRIES_5_DESC', 'Abreviaturas ISO separadas por comas de los estados para la zona 41 (introduzca WORLD para el resto del mundo):');
define('MODULE_SHIPPING_UPS_COST_5_TITLE', 'Tarife f&uuml;r UPS Standard Zona 41');
define('MODULE_SHIPPING_UPS_COST_5_DESC', 'Gastos de envío basados en el peso dentro de la zona 41. Ejemplo: Un envío de entre 0 y 4 kg cuesta 30,00 euros = 4:30,00,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_6_TITLE', 'Estados para UPS Standard Zona 5');
define('MODULE_SHIPPING_UPS_COUNTRIES_6_DESC', 'Abreviaturas ISO separadas por comas de los estados para la zona 5 (introduzca WORLD para el resto del mundo):');
define('MODULE_SHIPPING_UPS_COST_6_TITLE', 'Tarife f&uuml;r UPS Standard Zona 5');
define('MODULE_SHIPPING_UPS_COST_6_DESC', 'Gastos de envío basados en el peso dentro de la zona 5. Ejemplo: Un envío de entre 0 y 4 kg cuesta 34,35 euros = 4:34,35,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_7_TITLE', 'Estados para UPS Standard Zona 6');
define('MODULE_SHIPPING_UPS_COUNTRIES_7_DESC', 'Abreviaturas ISO separadas por comas de los estados para la zona 6 (introduzca WORLD para el resto del mundo):');
define('MODULE_SHIPPING_UPS_COST_7_TITLE', 'Tarife f&uuml;r UPS Standard Zona 6');
define('MODULE_SHIPPING_UPS_COST_7_DESC', 'Gastos de envío basados en el peso dentro de la zona 6. Ejemplo: Un envío de entre 0 y 4 kg cuesta 37,10 euros = 4:37,10,...');
