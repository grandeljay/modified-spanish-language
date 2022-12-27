<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('MODULE_PAYMENT_MONEYBOOKERS_ELV_TEXT_TITLE', 'Bankeinzug');

$_var = 'Domiciliación bancaria a través de Moneybookers';

if ('' === _PAYMENT_MONEYBOOKERS_EMAILID) {
    $_var .= '<br /><br /><b><font color="red">¡Por favor, primero realice los ajustes en<br /> Configuración avanzada -&gt; Socio -&gt; Skrill.com!</font></b>';
}

define('MODULE_PAYMENT_MONEYBOOKERS_ELV_TEXT_DESCRIPTION', $_var);
define('MODULE_PAYMENT_MONEYBOOKERS_ELV_NOCURRENCY_ERROR', 'No se instala ninguna moneda aceptada por Skrill');
define('MODULE_PAYMENT_MONEYBOOKERS_ELV_ERRORTEXT1', 'payment_error=');
define('MODULE_PAYMENT_MONEYBOOKERS_ELV_TEXT_INFO', '');
define('MODULE_PAYMENT_MONEYBOOKERS_ELV_ERRORTEXT2', '&amp;error=¡Error durante su pago con Skrill!');
define('MODULE_PAYMENT_MONEYBOOKERS_ELV_ORDER_TEXT', 'Fecha de pedido: ');
define('MODULE_PAYMENT_MONEYBOOKERS_ELV_TEXT_ERROR', '¡Error de pago!');
define('MODULE_PAYMENT_MONEYBOOKERS_ELV_CONFIRMATION_TEXT', 'Gracias por su pedido.');
define('MODULE_PAYMENT_MONEYBOOKERS_ELV_TRANSACTION_FAILED_TEXT', 'Su transacción de pago con skrill.com ha fallado. Por favor, inténtelo de nuevo o elija otro método de pago.');

define('MODULE_PAYMENT_MONEYBOOKERS_ELV_STATUS_TITLE', 'Activar Skrill');
define('MODULE_PAYMENT_MONEYBOOKERS_ELV_STATUS_DESC', '¿Desea aceptar pagos a través de Skrill?');
define('MODULE_PAYMENT_MONEYBOOKERS_ELV_SORT_ORDER_TITLE', 'Orden de visualización');
define('MODULE_PAYMENT_MONEYBOOKERS_ELV_SORT_ORDER_DESC', 'Orden de visualización. El dígito más pequeño aparece primero.');
define('MODULE_PAYMENT_MONEYBOOKERS_ELV_ZONE_TITLE', 'Zona de pago');
define('MODULE_PAYMENT_MONEYBOOKERS_ELV_ZONE_DESC', 'Cuando se selecciona una zona, el método de pago sólo se aplica a esa zona.');
define('MODULE_PAYMENT_MONEYBOOKERS_ELV_ALLOWED_TITLE', 'Zonas permitidas');
define('MODULE_PAYMENT_MONEYBOOKERS_ELV_ALLOWED_DESC', 'Especifique <b>individualmente</b> las zonas que deben permitirse para este módulo. (por ejemplo, AT,DE (si está vacía, se permiten todas las zonas))');
