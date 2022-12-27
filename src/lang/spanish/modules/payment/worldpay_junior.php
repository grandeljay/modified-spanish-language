<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_DESCRIPTION', '<img src="images/icon_popup.gif" border="0"> <a href="http://www.worldpay.com" target="_blank" style="text-decoration: underline; font-weight: bold;">Visite la página web de WorldPay</a>');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_WARNING_DEMO_MODE', 'En prueba: Transacción realizada en modo demo.');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_SUCCESSFUL_TRANSACTION', '¡La transacción de pago se ha completado con éxito!');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_UNSUCCESSFUL_TRANSACTION', '¡Su pago no ha tenido éxito!');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_CONTINUE_BUTTON', 'Pulse aquí para continuar a %s');

define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_TITLE', 'WorldPay Junior');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_DESC', 'Módulo de pago Worldpay');

define('MODULE_PAYMENT_WORLDPAY_JUNIOR_STATUS_TITLE', 'Activar el módulo WorldPay');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_STATUS_DESC', '¿Desea aceptar pagos a través de WorldPay?');

define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ALLOWED_TITLE', 'Zonas permitidas');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ALLOWED_DESC', 'Especifique <b>individualmente</b> las zonas que deben permitirse para este módulo. (por ejemplo, AT,DE (si está vacía, se permiten todas las zonas))');

define('MODULE_PAYMENT_WORLDPAY_JUNIOR_INSTALLATION_ID_TITLE', 'Worldpay Instalaciones ID');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_INSTALLATION_ID_DESC', 'Su ID de instalaciones WorldPay');

define('MODULE_PAYMENT_WORLDPAY_JUNIOR_CALLBACK_PASSWORD_TITLE', 'Contraseña de respuesta de pago');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_CALLBACK_PASSWORD_DESC', 'Una contraseña enviada de vuelta en la respuesta de devolución de llamada (especificada en el sistema de gestión de clientes de WorldPay).');

define('MODULE_PAYMENT_WORLDPAY_JUNIOR_MD5_PASSWORD_TITLE', 'Secreto MD5 para la contraseña de la transacción');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_MD5_PASSWORD_DESC', 'La contraseña secreta de encriptación MD5 para validar las respuestas de las transacciones (especificada en el sistema de gestión de clientes de WorldPay).');

define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TRANSACTION_METHOD_TITLE', 'Método de transacción');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TRANSACTION_METHOD_DESC', 'El método de procesamiento que se utilizará para cada transacción.');

define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TESTMODE_TITLE', 'Modo de prueba');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TESTMODE_DESC', '¿Realizar transacciones en modo de prueba?');

define('MODULE_PAYMENT_WORLDPAY_JUNIOR_SORT_ORDER_TITLE', 'Orden de visualización');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_SORT_ORDER_DESC', 'Orden de visualización. El dígito más pequeño aparece primero.');

define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ZONE_TITLE', 'Zona de pago');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ZONE_DESC', 'Cuando se selecciona una zona, el método de pago sólo se aplica a esa zona.');

define('MODULE_PAYMENT_WORLDPAY_JUNIOR_PREPARE_ORDER_STATUS_ID_TITLE', 'Estado de la orden temporal');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_PREPARE_ORDER_STATUS_ID_DESC', 'Estado del pedido para transacciones aún no completadas');

define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ORDER_STATUS_ID_TITLE', 'Establecer el estado del pedido');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ORDER_STATUS_ID_DESC', 'Establezca en este estado los pedidos realizados con este módulo.');
