<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('MODULE_PAYMENT_BANKTRANSFER_TEXT_TITLE', 'Domiciliación bancaria');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_DESCRIPTION', 'Domiciliación bancaria');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_INFO', '');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK', 'Domiciliación bancaria');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_EMAIL_FOOTER', defined('MODULE_PAYMENT_BANKTRANSFER_URL_NOTE') ? 'Nota: Puede descargar nuestro formulario de fax en ' . HTTP_SERVER . DIR_WS_CATALOG . MODULE_PAYMENT_BANKTRANSFER_URL_NOTE . ' y envíenoslo terminado.' : '');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_INFO', ((defined('MODULE_PAYMENT_BANKTRANSFER_IBAN_ONLY') && 'True' !== MODULE_PAYMENT_BANKTRANSFER_IBAN_ONLY) ? 'Tenga en cuenta que la domiciliación bancaria sin IBAN/BIC <b>sólo</b> es posible desde una <b>cuenta corriente alemana</b>. Especificando el IBAN/BIC, puede utilizar el procedimiento de domiciliación bancaria <b>en toda la UE</b>.<br/>' : '') . 'Los campos marcados con (*) son obligatorios. Para un IBAN alemán, el BIC es opcional.<br/><br/>');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_OWNER', 'Titular de la cuenta:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_OWNER_EMAIL', 'Titular de la cuenta de correo electrónico:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_NUMBER', 'WhoNr / IBAN:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_IBAN', 'IBAN:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_BLZ', 'BLZ / BIC:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_BIC', 'BIC:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_NAME', 'Banco:');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_FAX', 'La autorización de domiciliación bancaria se confirma por fax');

define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR', 'ERROR: ');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_1', 'El número de cuenta y el código bancario no coinciden, por favor corrija su información.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_2', 'Este número de cuenta no es verificable, por favor compruebe su entrada de nuevo para estar seguro.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_3', 'Este número de cuenta no es verificable, por favor compruebe su entrada de nuevo para estar seguro.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_4', 'Este número de cuenta no es verificable, por favor compruebe su entrada de nuevo para estar seguro.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_5', 'Este código bancario no existe, por favor corrija su entrada.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_8', 'No ha introducido un código bancario correcto.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_9', 'No ha introducido un número de cuenta correcto.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_10', 'No ha especificado un titular de cuenta.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_11', 'No ha introducido un BIC correcto.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_12', 'No ha introducido un IBAN correcto.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_13', 'Dirección de correo electrónico no válida para la notificación al titular de la cuenta.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_14', 'No hay aprobación de domiciliación bancaria para este país SEPA.');

define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE', 'Sugerencia:');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE2', 'Si no desea transmitir datos bancarios a través de Internet<br /> por motivos de seguridad, puede descargar nuestro ');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE3', 'Faxformular');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE4', ' y envíenoslo cumplimentado.');

define('JS_BANK_BLZ', '* ¡Por favor, introduzca el BLZ / BIC de su banco!\n\n');
define('JS_BANK_NAME', '* Por favor, introduzca el nombre de su banco\n\n');
define('JS_BANK_NUMBER', '* Por favor, introduzca su número de cuenta / IBAN\n\n');
define('JS_BANK_OWNER', '* Por favor, introduzca el nombre del titular de la cuenta\n\n');
define('JS_BANK_OWNER_EMAIL', '* Introduzca la dirección de correo electrónico del titular de la cuenta.\n\n');

define('MODULE_PAYMENT_BANKTRANSFER_DATABASE_BLZ_TITLE', '¿Utilizar la búsqueda en la base de datos para comprobar el código de clasificación bancaria?');
define('MODULE_PAYMENT_BANKTRANSFER_DATABASE_BLZ_DESC', '¿Desea utilizar la base de datos para la comprobación de verosimilitud del código de clasificación bancaria ("true")?<br/>Asegúrese de que los códigos de clasificación bancaria de la base de datos están actualizados.<br/><br/>Si es "false" (por defecto), se utiliza el archivo blz.csv suministrado, ¡que puede contener entradas obsoletas!');
define('MODULE_PAYMENT_BANKTRANSFER_URL_NOTE_TITLE', 'Fax-URL');
define('MODULE_PAYMENT_BANKTRANSFER_URL_NOTE_DESC', 'El archivo de confirmación del fax. Debe estar en el directorio del catálogo');
define('MODULE_PAYMENT_BANKTRANSFER_FAX_CONFIRMATION_TITLE', 'Permitir confirmación por fax');
define('MODULE_PAYMENT_BANKTRANSFER_FAX_CONFIRMATION_DESC', '¿Desea permitir la confirmación por fax?');
define('MODULE_PAYMENT_BANKTRANSFER_SORT_ORDER_TITLE', 'Orden de visualización');
define('MODULE_PAYMENT_BANKTRANSFER_SORT_ORDER_DESC', 'Orden de visualización. El dígito más pequeño aparece primero.');
define('MODULE_PAYMENT_BANKTRANSFER_ORDER_STATUS_ID_TITLE', 'Establecer el estado del pedido');
define('MODULE_PAYMENT_BANKTRANSFER_ORDER_STATUS_ID_DESC', 'Establezca en este estado los pedidos realizados con este módulo.');
define('MODULE_PAYMENT_BANKTRANSFER_ZONE_TITLE', 'Zona de pago');
define('MODULE_PAYMENT_BANKTRANSFER_ZONE_DESC', 'Cuando se selecciona una zona, el método de pago sólo se aplica a esa zona.');
define('MODULE_PAYMENT_BANKTRANSFER_ALLOWED_TITLE', 'Zonas permitidas');
define('MODULE_PAYMENT_BANKTRANSFER_ALLOWED_DESC', 'Especifique <b>individualmente</b> las zonas que deben permitirse para este módulo. (por ejemplo, AT,DE (si está vacía, se permiten todas las zonas))');
define('MODULE_PAYMENT_BANKTRANSFER_STATUS_TITLE', 'Permitir pagos por transferencia bancaria');
define('MODULE_PAYMENT_BANKTRANSFER_STATUS_DESC', '¿Desea permitir los pagos por transferencia bancaria?');
define('MODULE_PAYMENT_BANKTRANSFER_MIN_ORDER_TITLE', 'Pedidos necesarios');
define('MODULE_PAYMENT_BANKTRANSFER_MIN_ORDER_DESC', 'El número mínimo de pedidos que debe tener un cliente para que la opción esté disponible.');
define('MODULE_PAYMENT_BANKTRANSFER_IBAN_ONLY_TITLE', 'Modo IBAN');
define('MODULE_PAYMENT_BANKTRANSFER_IBAN_ONLY_DESC', '¿Sólo desea permitir pagos IBAN?');

define('MODULE_PAYMENT_BANKTRANSFER_CI_TITLE', 'Número de identificación del acreedor (CI)');
define('MODULE_PAYMENT_BANKTRANSFER_CI_DESC', 'Introduzca aquí su ID de acreedor SEPA');
define('MODULE_PAYMENT_BANKTRANSFER_REFERENCE_PREFIX_TITLE', 'Prefijo para la referencia del mandato (opcional)');
define('MODULE_PAYMENT_BANKTRANSFER_REFERENCE_PREFIX_DESC', 'Introduzca aquí un prefijo para la referencia del mandato');
define('MODULE_PAYMENT_BANKTRANSFER_DUE_DELAY_TITLE', 'Madurez');
define('MODULE_PAYMENT_BANKTRANSFER_DUE_DELAY_DESC', 'Introduzca el periodo (en días) tras el cual ejecutará la domiciliación bancaria.');

define('MODULE_PAYMENT_BANKTRANSFER_TEXT_EXTENDED_DESCRIPTION', '<strong><font color="red">ATENCIÓN:</font></strong> Por favor, actualice los códigos bancarios');

define('MODULE_PAYMENT_BANKTRANSFER_TEXT_UPDATE_SUCCESS', 'Códigos bancarios actualizados: ');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_UPDATE_ERROR', 'No se han podido actualizar los códigos bancarios.');
