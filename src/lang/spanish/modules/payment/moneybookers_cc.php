<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('MODULE_PAYMENT_MONEYBOOKERS_CC_TEXT_TITLE', 'Kreditkarte');

$_var = 'Tarjeta de crédito a través de Skrill';

if ('' === _PAYMENT_MONEYBOOKERS_EMAILID) {
    $_var .= '<br /><br /><b><font color="red">¡Por favor, primero realice los ajustes en<br /> Configuración avanzada -&gt; Socio -&gt; Skrill.com!</font></b>';
}

define('MODULE_PAYMENT_MONEYBOOKERS_CC_TEXT_DESCRIPTION', $_var);
define('MODULE_PAYMENT_MONEYBOOKERS_CC_NOCURRENCY_ERROR', 'No se instala ninguna moneda aceptada por Skrill');
define('MODULE_PAYMENT_MONEYBOOKERS_CC_ERRORTEXT1', 'payment_error=');
define('MODULE_PAYMENT_MONEYBOOKERS_CC_TEXT_INFO', '');
define('MODULE_PAYMENT_MONEYBOOKERS_CC_ERRORTEXT2', '&amp;error=¡Error durante su pago con Skrill!');
define('MODULE_PAYMENT_MONEYBOOKERS_CC_ORDER_TEXT', 'Fecha de pedido: ');
define('MODULE_PAYMENT_MONEYBOOKERS_CC_TEXT_ERROR', '¡Error de pago!');
define('MODULE_PAYMENT_MONEYBOOKERS_CC_CONFIRMATION_TEXT', 'Gracias por su pedido.');
define('MODULE_PAYMENT_MONEYBOOKERS_CC_TRANSACTION_FAILED_TEXT', 'Su transacción de pago en skrill.com ha fallado. Por favor, inténtelo de nuevo o elija otro método de pago.');

define('MODULE_PAYMENT_MONEYBOOKERS_CC_STATUS_TITLE', 'Activar Skrill');
define('MODULE_PAYMENT_MONEYBOOKERS_CC_STATUS_DESC', '¿Desea aceptar pagos a través de Skrill?');
define('MODULE_PAYMENT_MONEYBOOKERS_CC_SORT_ORDER_TITLE', 'Orden de visualización');
define('MODULE_PAYMENT_MONEYBOOKERS_CC_SORT_ORDER_DESC', 'Orden de visualización. El dígito más pequeño aparece primero.');
define('MODULE_PAYMENT_MONEYBOOKERS_CC_ZONE_TITLE', 'Zona de pago');
define('MODULE_PAYMENT_MONEYBOOKERS_CC_ZONE_DESC', 'Cuando se selecciona una zona, el método de pago sólo se aplica a esa zona.');
define('MODULE_PAYMENT_MONEYBOOKERS_CC_ALLOWED_TITLE', 'Zonas permitidas');
define('MODULE_PAYMENT_MONEYBOOKERS_CC_ALLOWED_DESC', 'Especifique <b>individualmente</b> las zonas que deben permitirse para este módulo. (por ejemplo, AT,DE (si está vacía, se permiten todas las zonas))');
