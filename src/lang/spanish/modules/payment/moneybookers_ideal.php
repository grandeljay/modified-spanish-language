<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('MODULE_PAYMENT_MONEYBOOKERS_IDEAL_TEXT_TITLE', 'iDEAL');

$_var = 'iDEAL a través de Skrill';

if ('' === _PAYMENT_MONEYBOOKERS_EMAILID) {
    $_var .= '<br /><br /><b><font color="red">¡Por favor, primero realice los ajustes en<br /> Configuración avanzada -&gt; Socio -&gt; Skrill.com!</font></b>';
}

define('MODULE_PAYMENT_MONEYBOOKERS_IDEAL_TEXT_DESCRIPTION', $_var);
define('MODULE_PAYMENT_MONEYBOOKERS_IDEAL_NOCURRENCY_ERROR', 'No se instala ninguna moneda aceptada por Skrill');
define('MODULE_PAYMENT_MONEYBOOKERS_IDEAL_ERRORTEXT1', 'payment_error=');
define('MODULE_PAYMENT_MONEYBOOKERS_IDEAL_TEXT_INFO', '');
define('MODULE_PAYMENT_MONEYBOOKERS_IDEAL_ERRORTEXT2', '&amp;error=¡Error durante su pago con Skrill!');
define('MODULE_PAYMENT_MONEYBOOKERS_IDEAL_ORDER_TEXT', 'Fecha de pedido: ');
define('MODULE_PAYMENT_MONEYBOOKERS_IDEAL_TEXT_ERROR', '¡Error de pago!');
define('MODULE_PAYMENT_MONEYBOOKERS_IDEAL_CONFIRMATION_TEXT', 'Gracias por su pedido.');
define('MODULE_PAYMENT_MONEYBOOKERS_IDEAL_TRANSACTION_FAILED_TEXT', 'Su transacción de pago con skrill.com ha fallado. Por favor, inténtelo de nuevo o elija otro método de pago.');

define('MODULE_PAYMENT_MONEYBOOKERS_IDEAL_STATUS_TITLE', 'Activar Skrill');
define('MODULE_PAYMENT_MONEYBOOKERS_IDEAL_STATUS_DESC', '¿Desea aceptar pagos a través de Skrill?');
define('MODULE_PAYMENT_MONEYBOOKERS_IDEAL_SORT_ORDER_TITLE', 'Orden de visualización');
define('MODULE_PAYMENT_MONEYBOOKERS_IDEAL_SORT_ORDER_DESC', 'Orden de visualización. El dígito más pequeño aparece primero.');
define('MODULE_PAYMENT_MONEYBOOKERS_IDEAL_ZONE_TITLE', 'Zona de pago');
define('MODULE_PAYMENT_MONEYBOOKERS_IDEAL_ZONE_DESC', 'Cuando se selecciona una zona, el método de pago sólo se aplica a esa zona.');
define('MODULE_PAYMENT_MONEYBOOKERS_IDEAL_ALLOWED_TITLE', 'Zonas permitidas');
define('MODULE_PAYMENT_MONEYBOOKERS_IDEAL_ALLOWED_DESC', 'Especifique <b>individualmente</b> las zonas que deben permitirse para este módulo. (por ejemplo, AT,DE (si está vacía, se permiten todas las zonas))');
