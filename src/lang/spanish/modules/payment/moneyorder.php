<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', 'Pago anticipado/Transferencia bancaria');
define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', 'Datos bancarios:<br />' . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? nl2br(MODULE_PAYMENT_MONEYORDER_PAYTO) : '') . '<br />Motivo del pago: %s<br /><br />Titular de la cuenta:<br />' . nl2br(STORE_OWNER) . '<br /><br />' . 'Su pedido le será enviado una vez que el dinero haya sido ingresado en nuestra cuenta.');
define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', "Datos bancarios: " . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '') . "\nFinalidad de uso: %s\n\nTitular de la cuenta:\n" . STORE_OWNER . "\n\n" . 'Su pedido le será enviado una vez que el dinero haya sido ingresado en nuestra cuenta.');

if (defined('MODULE_PAYMENT_MONEYORDER_SUCCESS') && 'True' === MODULE_PAYMENT_MONEYORDER_SUCCESS) {
    define('MODULE_PAYMENT_MONEYORDER_TEXT_INFO', 'Enviaremos su pedido una vez recibido el pago. Recibirá los datos de la cuenta en el último paso del pedido.');
} else {
    define('MODULE_PAYMENT_MONEYORDER_TEXT_INFO', 'Enviaremos su pedido una vez recibido el pago. Recibirá los datos de la cuenta por correo electrónico una vez aceptado su pedido.');
}

define('MODULE_PAYMENT_MONEYORDER_STATUS_TITLE', 'Activar el módulo de cheques/giros postales');
define('MODULE_PAYMENT_MONEYORDER_STATUS_DESC', '¿Desea aceptar pagos por cheque/giro postal?');
define('MODULE_PAYMENT_MONEYORDER_ALLOWED_TITLE', 'Zonas permitidas');
define('MODULE_PAYMENT_MONEYORDER_ALLOWED_DESC', 'Especifique <b>individualmente</b> las zonas que deben permitirse para este módulo. (por ejemplo, AT,DE (si está vacía, se permiten todas las zonas))');
define('MODULE_PAYMENT_MONEYORDER_PAYTO_TITLE', 'Pagadero a:');
define('MODULE_PAYMENT_MONEYORDER_PAYTO_DESC', '¿A quién deben efectuarse los pagos?');
define('MODULE_PAYMENT_MONEYORDER_SORT_ORDER_TITLE', 'Orden de visualización');
define('MODULE_PAYMENT_MONEYORDER_SORT_ORDER_DESC', 'Orden de visualización. El dígito más pequeño aparece primero.');
define('MODULE_PAYMENT_MONEYORDER_ZONE_TITLE', 'Zona de pago');
define('MODULE_PAYMENT_MONEYORDER_ZONE_DESC', 'Cuando se selecciona una zona, el método de pago sólo se aplica a esa zona.');
define('MODULE_PAYMENT_MONEYORDER_ORDER_STATUS_ID_TITLE', 'Establecer el estado del pedido');
define('MODULE_PAYMENT_MONEYORDER_ORDER_STATUS_ID_DESC', 'Establezca en este estado los pedidos realizados con este módulo.');
define('MODULE_PAYMENT_MONEYORDER_SUCCESS_TITLE', 'Mostrar datos bancarios');
define('MODULE_PAYMENT_MONEYORDER_SUCCESS_DESC', '¿Deben aparecer los datos bancarios en la página de éxito?');
