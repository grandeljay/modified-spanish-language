<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

require_once 'ot_billpay_fee.php';

$prefix = 'MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_';
$parent = 'MODULE_ORDER_TOTAL_BILLPAY_';

define($prefix . 'FEE_TITLE', 'Cálculo de tasas para la compra a plazos (BillPay)');
define($prefix . 'FEE_DESCRIPTION', 'Cálculo de la tasa para pedidos con la modalidad de pago compra a plazos mediante BillPay');

$fields = [
    'FEE_STATUS_TITLE',
    'FEE_STATUS_DESC',
    'FEE_SORT_ORDER_TITLE',
    'FEE_SORT_ORDER_DESC',
    'FEE_TYPE_TITLE',
    'FEE_TYPE_DESC',
    'FEE_PERCENT_TITLE',
    'FEE_PERCENT_DESC',
    'FEE_VALUE_TITLE',
    'FEE_VALUE_DESC',
    'FEE_TAX_CLASS_TITLE',
    'FEE_TAX_CLASS_DESC',
    'FEE_FROM_TOTAL',
];

foreach ($fields as $field) {
    defined($prefix . $field) || define($prefix . $field, constant($parent . $field));
}

defined('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE')                           || define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE', 'Recargo de intereses');
defined('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE')      || define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE', 'Tasa de tramitación');
defined('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TOTAL')                || define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TOTAL', 'Importe total compra a plazos');
defined('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE_TAX1') || define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE_TAX1', 'incl.');
defined('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE_TAX2') || define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE_TAX2', 'IVA');
