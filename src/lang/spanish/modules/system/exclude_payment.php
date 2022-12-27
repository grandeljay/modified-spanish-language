<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('MODULE_EXCLUDE_PAYMENT_TEXT_TITLE', 'Formas de pago en función del método de envío');
define('MODULE_EXCLUDE_PAYMENT_TEXT_DESCRIPTION', '');
define('MODULE_EXCLUDE_PAYMENT_STATUS_TITLE', 'Estado');
define('MODULE_EXCLUDE_PAYMENT_STATUS_DESC', '¿Activar módulo?');
define('MODULE_EXCLUDE_PAYMENT_NUMBER_TITLE', 'Número de métodos de envío');
define('MODULE_EXCLUDE_PAYMENT_NUMBER_DESC', 'Número de tipos de envío que deben configurarse.');

if (defined('MODULE_EXCLUDE_PAYMENT_NUMBER')) {
    for ($i = 1; $i <= MODULE_EXCLUDE_PAYMENT_NUMBER; $i++) {
        define('MODULE_EXCLUDE_PAYMENT_SHIPPING_' . $i . '_TITLE', '<hr noshade>' . $i . '. Método de envío');
        define('MODULE_EXCLUDE_PAYMENT_SHIPPING_' . $i . '_DESC', 'Seleccione el método de envío para el que desea excluir una forma de pago.');
        define('MODULE_EXCLUDE_PAYMENT_PAYMENT_' . $i . '_TITLE', $i . '. Forma de pago excluida');
        define('MODULE_EXCLUDE_PAYMENT_PAYMENT_' . $i . '_DESC', 'Seleccione el método de pago que desea excluir.');
    }
}
