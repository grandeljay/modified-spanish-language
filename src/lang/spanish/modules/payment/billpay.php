<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('MODULE_PAYMENT_BILLPAY_TEXT_TITLE', 'BillPay - Factura');
define('MODULE_PAYMENT_BILLPAY_TEXT_DESCRIPTION', 'BillPay - Factura');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_MESSAGE', 'Mensaje de error de BillPay');
define('MODULE_PAYMENT_BILLPAY_TEXT_INFO', '<div style="margin-top:6px"><img src="https://www.billpay.de/wp-content/uploads/2011/04/LogoSmall_0.png" alt="BillPay Logo" title="BillPay Logo" /></div>');

define('MODULE_PAYMENT_BILLPAY_ALLOWED_TITLE', 'Zonas permitidas');
define('MODULE_PAYMENT_BILLPAY_ALLOWED_DESC', 'Especifique individualmente las zonas que deben permitirse para este módulo. (por ejemplo, AT,DE (si está vacía, se permiten todas las zonas))');

define('MODULE_PAYMENT_BILLPAY_LOGGING_TITLE', 'Ruta absoluta al archivo de registro');
define('MODULE_PAYMENT_BILLPAY_LOGGING_DESC', 'Si no se establece ningún valor, el valor predeterminado es escribir en el directorio /includes/external/billpay/log (los permisos de escritura deben estar disponibles).');

define('MODULE_PAYMENT_BILLPAY_GS_MERCHANT_ID_TITLE', 'Identificación del vendedor');
define('MODULE_PAYMENT_BILLPAY_GS_MERCHANT_ID_DESC', 'Usted recibe estos datos de BillPay');

define('MODULE_PAYMENT_BILLPAY_ORDER_STATUS_TITLE', 'Establecer el estado del pedido');
define('MODULE_PAYMENT_BILLPAY_ORDER_STATUS_DESC', 'Establezca en este estado los pedidos realizados con este módulo.');

define('MODULE_PAYMENT_BILLPAY_GS_PORTAL_ID_TITLE', 'ID del portal');
define('MODULE_PAYMENT_BILLPAY_GS_PORTAL_ID_DESC', 'Usted recibe estos datos de BillPay');

define('MODULE_PAYMENT_BILLPAY_GS_SECURE_TITLE', 'Clave de seguridad');
define('MODULE_PAYMENT_BILLPAY_GS_SECURE_DESC', 'Usted recibe estos datos de BillPay');

define('MODULE_PAYMENT_BILLPAY_GS_PUBLIC_API_KEY_TITLE', 'Clave API pública');
define('MODULE_PAYMENT_BILLPAY_GS_PUBLIC_API_KEY_DESC', 'Usted recibe estos datos de BillPay');

define('MODULE_PAYMENT_BILLPAY_SORT_ORDER_TITLE', 'Orden de visualización');
define('MODULE_PAYMENT_BILLPAY_SORT_ORDER_DESC', 'Orden de visualización. El dígito más pequeño aparece primero.');

define('MODULE_PAYMENT_BILLPAY_STATUS_TITLE', 'Activado');
define('MODULE_PAYMENT_BILLPAY_STATUS_DESC', '¿Desea permitir la compra a cuenta con BillPay?');

define('MODULE_PAYMENT_BILLPAY_GS_TESTMODE_TITLE', 'Modo de transacción');
define('MODULE_PAYMENT_BILLPAY_GS_TESTMODE_DESC', 'En el modo de prueba se muestran mensajes de error detallados. Para un funcionamiento productivo, debe activarse el modo en directo.');

define('MODULE_PAYMENT_BILLPAY_ZONE_TITLE', 'Zona fiscal');
define('MODULE_PAYMENT_BILLPAY_ZONE_DESC', '');

define('MODULE_PAYMENT_BILLPAY_GS_API_URL_BASE_TITLE', 'API url base');
define('MODULE_PAYMENT_BILLPAY_GS_API_URL_BASE_DESC', 'Recibirá estos datos de BillPay (¡Atención! Las URL del sistema de prueba y del sistema en vivo son diferentes).');

define('MODULE_PAYMENT_BILLPAY_GS_TESTAPI_URL_BASE_TITLE', 'Test-API url base');
define('MODULE_PAYMENT_BILLPAY_GS_TESTAPI_URL_BASE_DESC', 'Recibirá estos datos de BillPay (¡Atención! Las URL del sistema de prueba y del sistema en vivo son diferentes).');

define('MODULE_PAYMENT_BILLPAY_LOGGING_ENABLE_TITLE', 'Registro activado');
define('MODULE_PAYMENT_BILLPAY_LOGGING_ENABLE_DESC', '¿Deben escribirse en el archivo de registro las solicitudes a la interfaz de pago BillPay?');

define('MODULE_PAYMENT_BILLPAY_MIN_AMOUNT_TITLE', 'Valor mínimo del pedido');
define('MODULE_PAYMENT_BILLPAY_MIN_AMOUNT_DESC', 'A partir de este valor del pedido, se muestra la forma de pago.');

define('MODULE_PAYMENT_BILLPAY_LOGPATH_TITLE', 'Ruta de registro');
define('MODULE_PAYMENT_BILLPAY_LOGPATH_DESC', '');

define('MODULE_PAYMENT_BILLPAY_GS_HTTP_X_TITLE', 'X_FORWARDED_FOR permitir');
define('MODULE_PAYMENT_BILLPAY_GS_HTTP_X_DESC', 'Active esta función si su tienda funciona en un sistema de nube.');

define('MODULE_PAYMENT_BILLPAY_HTTP_X_TITLE', 'X_FORWARDED_FOR permitir');
define('MODULE_PAYMENT_BILLPAY_HTTP_X_DESC', 'Active esta función si su tienda funciona en un sistema de nube.');

define('MODULE_PAYMENT_BILLPAY_TEXT_BIRTHDATE', 'Fecha de nacimiento');
define('MODULE_PAYMENT_BILLPAY_TEXT_PHONE', 'Número de teléfono');
define('MODULE_PAYMENT_BILLPAY_TEXT_EULA_CHECK', 'Acepto la transmisión de los datos necesarios para la tramitación de la compra a cuenta y una comprobación de identidad y crédito a <a href="https://www.billpay.de/endkunden/" target="blank">BillPay GmbH.</a> Se aplican las <a href="%s" target="_blank">disposiciones de protección de datos de</a> BillPay.');
define('MODULE_PAYMENT_BILLPAY_TEXT_EULA_CHECK_CH', '<label for="billpay_eula">Por la presente confirmo los <a href="https://www.billpay.de/kunden/agb-ch" target="_blank">Términos y Condiciones Generales</a> y la <a href="https://www.billpay.de/kunden/agb-ch#datenschutz" target="_blank">Política de Privacidad de</a> BillPay GmbH.</label> <br />');

define('MODULE_PAYMENT_BILLPAY_TEXT_EULA_CHECK_SEPA', "Acepto la transmisión de los datos necesarios para la tramitación del pago y una comprobación de identidad y crédito a <a href='https://www.billpay.de/endkunden/' target='_blank'>BillPay GmbH.</a> La <a href='%s' target='_blank'>política de privacidad de</a> BillPay.<br/><br/> Concedo a BillPay un mandato de domiciliación SEPA<a href='#' class='bpy-btn-details'>(detalles</a>) para cobrar los pagos adeudados e instruyo a mi entidad de crédito para que cobre las domiciliaciones.");
define('MODULE_PAYMENT_BILLPAY_TEXT_EULA_CHECK_SEPA_AT', "Acepto la transmisión de los datos necesarios para la tramitación del pago y una comprobación de identidad y crédito a <a href='https://www.billpay.de/endkunden/' target='_blank'>BillPay GmbH.</a> La <a href='%s' target='_blank'>política de privacidad de</a> BillPay.<br/><br/> Concedo a BillPay y a <a href='https://www.privatbank1891.com/' target='_blank'>net-m privatbank 1891 AG</a> un mandato de adeudo directo SEPA<a href='#' class='bpy-btn-details'>(detalles</a>) para el cobro de los pagos pendientes y doy instrucciones a mi entidad de crédito para que cobre los adeudos directos.");

define('MODULE_PAYMENT_BILLPAY_UTF8_ENCODE_TITLE', 'Activar la codificación UTF8');
define('MODULE_PAYMENT_BILLPAY_UTF8_ENCODE_DESC', 'Desactive esta opción si utiliza la codificación UTF-8 en su tienda online.');

define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_BIRTHDATE', 'Introduzca su fecha de nacimiento');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_GENDER', 'Introduzca su sexo');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_TITLE', 'Por favor, introduzca su título');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_BIRTHDATE_AND_GENDER', 'Introduzca su fecha de nacimiento y su sexo');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_PHONE', 'Por favor, introduzca su número de teléfono');
define('MODULE_PAYMENT_BILLPAY_TEXT_NOTE', '');
define('MODULE_PAYMENT_BILLPAY_TEXT_REQ', '');
define('MODULE_PAYMENT_BILLPAY_TEXT_GENDER', 'Género');
define('MODULE_PAYMENT_BILLPAY_TEXT_SALUTATION', 'Saludo');
define('MODULE_PAYMENT_BILLPAY_TEXT_MALE', 'masculino');
define('MODULE_PAYMENT_BILLPAY_TEXT_FEMALE', 'mujer');
define('MODULE_PAYMENT_BILLPAY_TEXT_MR', 'Sr.');
define('MODULE_PAYMENT_BILLPAY_TEXT_MRS', 'Sra.');

define('JS_BILLPAY_EULA', '* ¡Por favor confirme el GTC de BillPay!\n');
define('JS_BILLPAY_DOBDAY', '* Por favor, introduzca su fecha de cumpleaños.\n\n');
define('JS_BILLPAY_DOBMONTH', '* Por favor, introduzca su mes de nacimiento.');
define('JS_BILLPAY_DOBYEAR', '* Por favor, introduzca su año de nacimiento.');
define('JS_BILLPAY_GENDER', '* Por favor, introduzca su género.');

define('JS_BILLPAY_CODE', '* Por favor, introduzca el BIC.\n');
define('JS_BILLPAY_NUMBER', '* Por favor, introduzca el IBAN.\n');
define('JS_BILLPAY_NAME', '* Por favor, introduzca el nombre del titular de la cuenta.\n');
define('JS_BILLPAY_PHONE', '* Por favor, introduzca su número de teléfono.\n\n');

define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_NUMBER', '* Por favor, introduzca el IBAN.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_CODE', '* Por favor, introduzca el BIC.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_NAME', '* Introduzca el nombre del titular de la cuenta.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_PHONE', '* Por favor, introduzca su número de teléfono.');

define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_EULA', '* ¡Por favor, acepte los T&amp;Cs de BillPay!');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DOB', '* Por favor, introduzca su fecha de nacimiento.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DOB_UNDER', 'Debe ser mayor de 18 años para utilizar BillPay.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DEFAULT', 'Se ha producido un error interno. Seleccione otra forma de pago');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_SHORT', '¡Se ha producido un error interno!');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_CREATED_COMMENT', 'El plazo de pago del pedido se ha iniciado correctamente con BillPay.');
define('MODULE_PAYMENT_BILLPAY_TEXT_CANCEL_COMMENT', 'El pedido se ha cancelado correctamente con BillPay');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DUEDATE', 'No se ha podido iniciar el objetivo de pago porque la fecha de vencimiento está vacía.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_NO_RATEPLAN', 'Solicite un plan de pago a plazos para el número total de plazos.');

define('MODULE_PAYMENT_BILLPAY_TEXT_CREATE_INVOICE', '¿Activar ahora el plazo de pago BillPay?');
define('MODULE_PAYMENT_BILLPAY_TEXT_CANCEL_ORDER', '¿Cancelar el pedido de BillPay ahora?');

define('MODULE_PAYMENT_BILLPAY_TEXT_ACCOUNT_HOLDER', 'Titular de la cuenta');
define('MODULE_PAYMENT_BILLPAY_TEXT_IBAN', 'IBAN');
define('MODULE_PAYMENT_BILLPAY_TEXT_BANK_NAME', 'Banco');
define('MODULE_PAYMENT_BILLPAY_TEXT_BIC', 'BIC');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_REFERENCE', 'Número de factura');

define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO', 'Por favor, transfiera el importe total, indicando el número de transacción BillPay en el motivo del pago (%1$s), a la siguiente cuenta dentro del plazo de pago antes del %2$02s.%3$02s.%4$04s:');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO_NO_DUEDATE', 'Por favor, transfiera el importe total, indicando el número de transacción BillPay en el motivo del pago (%1$s), a la siguiente cuenta dentro del plazo de pago hasta la fecha de vencimiento, que recibirá con la factura:');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO1', 'Ha elegido comprar a cuenta con BillPay. Por favor, transfiera el importe total por ');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO2', ' a la siguiente cuenta: ');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO3', 'Fecha de vencimiento que recibe con la factura');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO_MAIL', '<br/>Por favor, transfiera el importe total, indicando el número de transacción BillPay en el motivo del pago (%s), a la siguiente cuenta antes de la fecha de vencimiento, que recibirá con la factura:');

define('MODULE_PAYMENT_BILLPAY_TEXT_BANKDATA', 'Por favor, introduzca sus datos bancarios.');

define('MODULE_PAYMENT_BILLPAY_DUEDATE_TITLE', 'Plazo de pago');

define('MODULE_PAYMENT_BILLPAY_TEXT_PURPOSE', 'Uso previsto');

define('MODULE_PAYMENT_BILLPAY_TEXT_ADD', 'más');
define('MODULE_PAYMENT_BILLPAY_TEXT_FEE', 'Tarifa');
define('MODULE_PAYMENT_BILLPAY_TEXT_FEE_INFO1', 'Para este pedido por factura se cobrará una tasa de ');
define('MODULE_PAYMENT_BILLPAY_TEXT_FEE_INFO2', ' elevado');

define('MODULE_PAYMENT_BILLPAY_TEXT_SANDBOX', 'Se encuentra en el modo sandbox:');
define('MODULE_PAYMENT_BILLPAY_TEXT_CHECK', 'Usted está en modo de aceptación:');
define('MODULE_PAYMENT_BILLPAY_UNLOCK_INFO', 'Información sobre el circuito en directo');

define('MODULE_PAYMENT_BILLPAY_B2BCONFIG_TITLE', 'Tipos de clientes permitidos');
define('MODULE_PAYMENT_BILLPAY_B2BCONFIG_DESC', '¿Desea activar el método de pago para clientes particulares (B2C), clientes empresariales (B2B) o ambos (AMBOS)?');
define('MODULE_PAYMENT_BILLPAY_B2B_COMPANY_NAME_TEXT', 'Nombre de la empresa');
define('MODULE_PAYMENT_BILLPAY_B2B_COMPANY_LEGAL_FORM_TEXT', 'Forma jurídica');
define('MODULE_PAYMENT_BILLPAY_B2B_COMPANY_LEGAL_FORM_SELECT_HTML', "");
define('MODULE_PAYMENT_BILLPAY_B2B_LEGALFORM_VALUES', 'ag:AG (sociedad anónima)|eg:eG (cooperativa registrada)|ek:EK (comerciante registrado)|ev:e.V. (asociación registrada). (asociación registrada)|freelancer:Autónomo/pequeño empresario/representante comercial|gbr:GbR/BGB (Gesellschaft b&uuml;rgerlichen Rechts)|gmbh:GmbH (sociedad de responsabilidad limitada)|gmbh_ig:GmbH in Gr&uuml;ndung|gmbh_co_kg:GmbH &amp; Co. KG|kg:KG (sociedad comanditaria)|ltd:Limited|ltd_co_kg:Limited &amp; Co. KG|ohg:OHG (sociedad colectiva)|public_inst:Organismo público|misc_capital:Otra sociedad anónima|misc:Otra sociedad colectiva|foundation:Fundación|ug:UG (sociedad de responsabilidad limitada)');
define('MODULE_PAYMENT_BILLPAY_B2B_REGISTER_NUMBER_TEXT', 'Número del registro mercantil');
define('MODULE_PAYMENT_BILLPAY_B2B_TAX_NUMBER_TEXT', 'CIF');
define('MODULE_PAYMENT_BILLPAY_B2B_HOLDER_NAME_TEXT', 'Nombre del propietario');
define('MODULE_PAYMENT_BILLPAY_B2B_CONTACT_PERSON_TEXT', 'Persona de contacto');

define('MODULE_PAYMENT_BILLPAY_B2B_CHOOSE_CLIENT_TEXT', 'Tipo de cliente');
define('MODULE_PAYMENT_BILLPAY_B2B_PRIVATE_CLIENT_TEXT', 'Clientes particulares');
define('MODULE_PAYMENT_BILLPAY_B2B_BUSINESS_CLIENT_TEXT', 'Cliente comercial');

define('MODULE_PAYMENT_BILLPAY_B2B_COMPANY_FIELD_EMPTY', 'Introduzca el nombre de la empresa');
define('MODULE_PAYMENT_BILLPAY_B2B_LEGAL_FORM_FIELD_EMPTY', 'Introduzca la forma jurídica de la empresa');
define('MODULE_PAYMENT_BILLPAY_B2B_HOLDER_NAME_EMPTY', 'Por favor, introduzca el nombre del propietario');
define('MODULE_PAYMENT_BILLPAY_B2B_REGISTER_NUMBER_EMPTY', 'Por favor, introduzca el número de registro comercial');
define('MODULE_PAYMENT_BILLPAY_B2B_TAX_NUMBER_EMPTY', 'Por favor, introduzca el CIF');

defined('MODULE_ORDER_TOTAL_BILLPAY_FEE_FROM_TOTAL') || define('MODULE_ORDER_TOTAL_BILLPAY_FEE_FROM_TOTAL', 'del importe de la factura');

define('MODULE_PAYMENT_BILLPAY_GS_UTF8_ENCODE_TITLE', 'Codificación regional');
define('MODULE_PAYMENT_BILLPAY_GS_UTF8_ENCODE_DESC', '¿Utiliza su sitio una codificación regional (distinta de UTF-8)?');


define('MODULE_PAYMENT_BILLPAY_ACTIVATE_ORDER', 'El pedido aún no ha sido activado con BillPay. Por favor, active el pedido inmediatamente antes del envío estableciendo el estado adecuado.');
define('MODULE_PAYMENT_BILLPAY_ACTIVATE_ORDER_WARNING', "Atención: ¡El plazo de pago aún no se ha iniciado con BillPay!");

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ADDRESS', 'El ajuste de la dirección no está permitido para los pedidos con BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_PRODUCT', 'No se permite reordenar artículos al hacer pedidos con BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_PAYMENT', 'El ajuste de la forma de pago no está permitido para los pedidos con BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_CURRENCY', 'No se permite ajustar la divisa en los pedidos con BillPay');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_HIGHER_QUANTITY', 'No puede pedir más productos que en pedido original con BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_NEGATIVE_QUANTITY', 'Para los pedidos con BillPay, la cantidad de artículos no debe ser negativa');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_TAX', 'No se permite ajustar el tipo impositivo de los pedidos con BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_PRICE', 'No se permite ajustar el precio del producto para pedidos con BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ID', 'No se permite ajustar el ID del producto para pedidos con BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ZERO_REDUCTION', 'Por favor, introduzca la cantidad a cancelar');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_NEGATIVE_REDUCTION', 'No se permite reordenar artículos al hacer pedidos con BillPay');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_NEGATIVE_SHIPPING', 'No se admiten gastos de envío negativos para pedidos con BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_INCREASED_SHIPPING', 'Aumento de los gastos de envío no permitido para los pedidos con BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ADDED_SHIPPING', 'No se permite añadir gastos de envío a los pedidos con BillPay');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_FORBIDDEN', 'Acción no permitida para pedidos con BillPay');
define('MODULE_PAYMENT_BILLPAY_PARTIAL_CANCEL_NOT_PROCESSED', '¡Atención! El ajuste de los pedidos sin impuesto sobre artículos no se envía automáticamente a BillPay debido a un error en el software de la tienda. ¡Por favor, realice el ajuste del importe manualmente en el back office de BillPay (https://admin.billpay.de) en su lugar!');
define('MODULE_PAYMENT_BILLPAY_PARTIAL_CANCEL_ERROR_CUSTOMER_CARE', 'El ajuste del pedido en BillPay ha fallado. Póngase en contacto inmediatamente con nuestro servicio de atención al cliente (haendler@billpay.de).');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ADJUST_CHARGEABLE', 'Personalización de una opción de producto facturable no permitida para pedidos con BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ADD_CHARGEABLE', 'Añadir una opción de producto con cargo no permitida para pedidos con BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_REMOVE_CHARGEABLE', 'Eliminación de una opción de producto facturable no permitida para pedidos con BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_GENERAL', 'No puede hacerlo para el método de pago BillPay.');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_CONTACT_BILLPAY', '¡Se ha producido un error! Póngase en contacto con BillPay.');

define('MODULE_PAYMENT_BILLPAY_HISTORY_INFO_PARTIAL_CANCEL', 'Cancelación parcial enviada con éxito a BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_INFO_EDIT_CART_CONTENT', 'El cambio de pedido se ha enviado correctamente a BillPay');

define('MODULE_PAYMENT_BILLPAY_TRANSACTION_MODE_TEST', 'Testmodus');
define('MODULE_PAYMENT_BILLPAY_TRANSACTION_MODE_LIVE', 'Livemodus');

define('MODULE_PAYMENT_BILLPAY_STATUS_PENDING_TITLE_EN', 'BillPay pendiente');
define('MODULE_PAYMENT_BILLPAY_STATUS_PENDING_TITLE_DE', 'BillPay no completado');

define('MODULE_PAYMENT_BILLPAY_STATUS_APPROVED_TITLE_EN', 'BillPay aprobado');
define('MODULE_PAYMENT_BILLPAY_STATUS_APPROVED_TITLE_DE', 'BillPay aprobado');

define('MODULE_PAYMENT_BILLPAY_STATUS_ACTIVATED_TITLE_EN', 'BillPay activado');
define('MODULE_PAYMENT_BILLPAY_STATUS_ACTIVATED_TITLE_DE', 'BillPay activado');

define('MODULE_PAYMENT_BILLPAY_STATUS_CANCELLED_TITLE_EN', 'BillPay cancelado');
define('MODULE_PAYMENT_BILLPAY_STATUS_CANCELLED_TITLE_DE', 'BillPay storniert');

define('MODULE_PAYMENT_BILLPAY_STATUS_ERROR_TITLE_EN', '¡Error en BillPay!');
define('MODULE_PAYMENT_BILLPAY_STATUS_ERROR_TITLE_DE', '¡Error en BillPay!');

define('MODULE_PAYMENT_BILLPAY_STATUS_PENDING_DESC', 'BillPay - A la espera de confirmación');
define('MODULE_PAYMENT_BILLPAY_STATUS_APPROVED_DESC', 'BillPay - Confirmado');
define('MODULE_PAYMENT_BILLPAY_STATUS_ACTIVATED_DESC', 'BillPay - Activado');
define('MODULE_PAYMENT_BILLPAY_STATUS_CANCELLED_DESC', 'BillPay - Cancelado');
define('MODULE_PAYMENT_BILLPAY_STATUS_ERROR_DESC', 'BillPay - Debido a un error, este pedido requiere una corrección manual. Póngase en contacto con el servicio de asistencia de BillPay.');

define('MODULE_PAYMENT_BILLPAY_SALUTATION_MALE', MODULE_PAYMENT_BILLPAY_TEXT_MR);
define('MODULE_PAYMENT_BILLPAY_SALUTATION_FEMALE', MODULE_PAYMENT_BILLPAY_TEXT_MRS);

define('MODULE_PAYMENT_BILLPAY_TEXT_SEPA_INFORMATION', "El número de identificación de acreedor de BillPay es DE19ZZ00000237180. El número de referencia del mandato me será enviado posteriormente por correo electrónico junto con un modelo de mandato escrito. Firmaré además este mandato escrito y lo enviaré a BillPay.<br/><br/>Nota: Puedo solicitar la devolución del importe adeudado en un plazo de ocho semanas, a partir de la fecha de adeudo. Se aplican las condiciones acordadas con mi entidad financiera. Tenga en cuenta que el importe adeudado sigue siendo pagadero incluso en caso de devolución de la nota de adeudo. Para más información, visite <a href='https://www.billpay.de/sepa' target='_blank'>https://www.billpay.de/sepa.</a>");
define('MODULE_PAYMENT_BILLPAY_TEXT_SEPA_INFORMATION_AT', "El número de identificación de acreedor de BillPay es DE19ZZ00000237180, el número de identificación de acreedor de net-m privatbank AG es DE62ZZ000009232. El número de referencia del mandato me será enviado posteriormente por correo electrónico junto con un modelo de mandato escrito. También firmaré este mandato por escrito y lo enviaré a BillPay.<br/><br/>Nota: Puedo solicitar la devolución del importe adeudado en un plazo de ocho semanas, a partir de la fecha de adeudo. Se aplican las condiciones acordadas con mi entidad financiera. Tenga en cuenta que la deuda pendiente se mantiene incluso en caso de devolución de la nota de adeudo. Para más información, visite <a href='https://www.billpay.de/sepa' target='_blank'>https://www.billpay.de/sepa.</a>");

define('MODULE_PAYMENT_BILLPAY_THANK_YOU_TEXT', 'Gracias por elegir BillPay Invoice para su compra.');
define('MODULE_PAYMENT_BILLPAY_PAY_UNTIL_TEXT', 'Por favor, transfiera la cantidad de %1$s %2$s a la siguiente cuenta antes de %3$s, indicando el propósito del pago:');
define('MODULE_PAYMENT_BILLPAY_PAY_UNTIL_TEXT_NO_DUE_DATE', 'Por favor, transfiera la cantidad de %1$s %2$s dentro del plazo de pago, indicando la finalidad del pago, a la siguiente cuenta.');
define('MODULE_PAYMENT_BILLPAY_PAY_UNTIL_TEXT_ADD_CH', 'Se aplicarán tasas adicionales a los depósitos realizados en el mostrador de la oficina de correos. Por favor, transfiera un %1$s %2$s adicional si paga mediante recibo de depósito.');
define('MODULE_PAYMENT_BILLPAY_TEXT_PAYEE', 'Beneficiario');
define('MODULE_PAYMENT_BILLPAY_TEXT_PAYEE_CH', 'Sucursal Suiza (Regensdorf)');
define('MODULE_PAYMENT_BILLPAY_TEXT_IBAN_CH', 'Número de cuenta');
define('MODULE_PAYMENT_BILLPAY_TEXT_BIC_CH', 'Número BC');
define('MODULE_PAYMENT_BILLPAY_TEXT_BANK', 'Kreditinstitut');
define('MODULE_PAYMENT_BILLPAY_TEXT_TOTAL_AMOUNT', 'Importe');
define('MODULE_PAYMENT_BILLPAY_UPDATE_AVAILABLE', 'La versión %2s$ del plugin de métodos de pago BillPay está disponible (actualmente instalado: %1s$). Pulse <a href="%3s$">aquí</a> para descargar.');
