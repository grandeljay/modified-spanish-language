<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_TITLE', 'Transferencia bancaria estándar de la UE');
define(
    'MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_DESCRIPTION',
    '<br />El método de pago más barato y sencillo dentro de la UE es la transferencia bancaria utilizando el IBAN y el BIC.' .
    '<br />Por favor, utilice los siguientes datos para la transferencia del importe total:<br />' .
    (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM') ? '<br />Nombre del banco: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM : '') .
    (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH')  ? '<br />Beneficiario: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH : '') .
    (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM')  ? '<br />Código bancario: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM : '') .
    (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM')  ? '<br />Número de cuenta: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM : '') .
    (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN') ? '<br />IBAN: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN : '') .
    (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC') ? '<br />BIC/SWIFT: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC : '') .
    '<br />Uso previsto: %s' .
    '<br /><br />La mercancía no se entregará hasta que el importe haya sido abonado en nuestra cuenta.<br />'
);

if (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS') && 'True' === MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS) {
    define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_INFO', 'Por favor, transfiera el importe de la factura debida a nuestra cuenta. Recibirá los datos de la cuenta en el último paso del pedido.');
} else {
    define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_INFO', 'Por favor, transfiera el importe de la factura debida a nuestra cuenta. Recibirá los datos de la cuenta por correo electrónico una vez aceptado su pedido.');
}

define('MODULE_PAYMENT_EUSTANDARDTRANSFER_STATUS_TITLE', 'Activar el módulo de transferencia bancaria estándar de la UE');
define('MODULE_PAYMENT_EUSTANDARDTRANSFER_STATUS_DESC', '¿Desea aceptar transferencias bancarias?');

define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH_TITLE', 'Receptor');
define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH_DESC', 'El destinatario de la transferencia.');

define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM_TITLE', 'Nombre del banco');
define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM_DESC', 'El nombre completo del banco.');

define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM_TITLE', 'Código bancario');
define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM_DESC', 'El código bancario de la cuenta especificada.');

define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM_TITLE', 'Número de cuenta');
define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM_DESC', 'Su número de cuenta.');

define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN_TITLE', 'Cuenta bancaria IBAN');
define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN_DESC', 'Id. de cuenta internacional.<br />(Pregunte a su banco si no está seguro).');

define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC_TITLE', 'Banco Bic');
define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC_DESC', 'Identificación bancaria internacional.<br />(Pregunte a su banco si no está seguro).');

define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SORT_ORDER_TITLE', 'Orden de visualización');
define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SORT_ORDER_DESC', 'Orden de visualización. El dígito más pequeño aparece primero.');

define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ALLOWED_TITLE', 'Zonas permitidas');
define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ALLOWED_DESC', 'Especifique <b>individualmente</b> las zonas que deben permitirse para este módulo. (por ejemplo, AT,DE (si está vacía, se permiten todas las zonas))');

define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ZONE_TITLE', 'Zona de pago');
define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ZONE_DESC', 'Cuando se selecciona una zona, el método de pago sólo se aplica a esa zona.');

define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ORDER_STATUS_ID_TITLE', 'Establecer el estado del pedido');
define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ORDER_STATUS_ID_DESC', 'Establezca en este estado los pedidos realizados con este módulo.');

define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS_TITLE', 'Mostrar datos bancarios');
define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS_DESC', '¿Deben aparecer los datos bancarios en la página de éxito?');
