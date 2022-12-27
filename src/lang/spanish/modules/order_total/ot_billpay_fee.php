<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

$prefix = 'MODULE_ORDER_TOTAL_BILLPAY_';

define($prefix . 'FEE_TITLE', 'Recargo por método de pago de facturas (BillPay)');
define($prefix . 'FEE_DESCRIPTION', 'Cálculo de la tasa para pedidos con el método de pago factura (BillPay)');

define($prefix . 'FEE_STATUS_TITLE', 'Método de pago recargo compra a cuenta');
define($prefix . 'FEE_STATUS_DESC', 'Cálculo de la tasa de facturación');

define($prefix . 'FEE_SORT_ORDER_TITLE', 'Orden de clasificación');
define($prefix . 'FEE_SORT_ORDER_DESC', 'Orden de visualización');

define($prefix . 'FEE_TYPE_TITLE', 'Tipo de tasa');
define($prefix . 'FEE_TYPE_DESC', 'Seleccione el tipo de tasa. La comisión puede ser una cantidad fija, un porcentaje del total de la factura o una cantidad graduada.');

define($prefix . 'FEE_PERCENT_TITLE', 'Porcentaje');
define($prefix . 'FEE_PERCENT_DESC', 'Introduzca el valor porcentual como un número entero con el país al que envía (ejemplo: DE:5;CH:7). Este valor porcentual se añadirá al total de la factura si el tipo de tasa "porcentaje" está activado.');

define($prefix . 'FEE_VALUE_TITLE', 'valor fijo');
define($prefix . 'FEE_VALUE_DESC', 'Introduzca el valor fijo (neto) con el país al que envía (ejemplo: DE:5;CH:7). Este valor se añade al total de la factura si está activado el tipo de tarifa "fija".');

define($prefix . 'FEE_GRADUATE_TITLE', 'Asombroso');
define($prefix . 'FEE_GRADUATE_DESC', 'Introduzca aquí la escala de cargos de la forma {Total factura}={Cargo neto};{Total factura}={Cargo neto};. Esta escala se aplica al total de la factura si el tipo de cargo "Escala" está activado.');

define($prefix . 'FEE_TAX_CLASS_TITLE', 'Clase de impuestos');
define($prefix . 'FEE_TAX_CLASS_DESC', 'Elija una clase fiscal.');

defined($prefix . 'FEE_FROM_TOTAL') || define($prefix . 'FEE_FROM_TOTAL', 'del importe de la factura');
