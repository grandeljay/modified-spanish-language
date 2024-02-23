<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('TEXT_BANK', 'Domiciliación bancaria');
define('TEXT_BANK_OWNER', 'Titular de la cuenta:');
define('TEXT_BANK_NUMBER', 'Número de cuenta:');
define('TEXT_BANK_BLZ', 'BLZ:');
define('TEXT_BANK_NAME', 'Banco:');
define('TEXT_BANK_BIC', 'BIC:');
define('TEXT_BANK_IBAN', 'IBAN:');
define('TEXT_BANK_FAX', 'La autorización de domiciliación bancaria se confirma por fax');
define('TEXT_BANK_STATUS', 'Estado de la prueba:');
define('TEXT_BANK_PRZ', 'Método de prueba:');
define('TEXT_BANK_OWNER_EMAIL', 'Dirección de correo electrónico del titular de la cuenta:');

define('TEXT_BANK_ERROR_1', 'El número de cuenta no coincide con el código de clasificación');
define('TEXT_BANK_ERROR_2', 'No se ha definido ningún procedimiento de verificación para este número de cuenta.');
define('TEXT_BANK_ERROR_3', 'Número de cuenta no verificable Procedimiento de verificación no aplicado');
define('TEXT_BANK_ERROR_4', 'Número de cuenta técnicamente no verificable');
define('TEXT_BANK_ERROR_5', '¡Código bancario no encontrado!');
define('TEXT_BANK_ERROR_8', 'No se facilita ningún código bancario');
define('TEXT_BANK_ERROR_9', 'No se da ningún número de cuenta');
define('TEXT_BANK_ERRORCODE', 'Código de error:');

define('HEADING_TITLE', 'Pedidos');
define('HEADING_TITLE_SEARCH', 'Nº de pedido');
define('HEADING_TITLE_STATUS', 'Estado:');

define('TABLE_HEADING_COMMENTS', 'Comentario');
define('TABLE_HEADING_CUSTOMERS', 'Clientes');
define('TABLE_HEADING_ORDER_TOTAL', 'Valor total');
define('TABLE_HEADING_DATE_PURCHASED', 'Fecha del pedido');
define('TABLE_HEADING_ACTION', 'Acción');
define('TABLE_HEADING_QUANTITY', 'Número');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Nº de artículo');
define('TABLE_HEADING_PRODUCTS', 'Artículo');
define('TABLE_HEADING_TAX', 'IVA');
define('TABLE_HEADING_TOTAL', 'Total');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Precio (excl.)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Precio (incl.)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Total (excl.)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Total');
define('TABLE_HEADING_AFTERBUY', 'Después de la compra');
define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Cliente notificado');
define('TABLE_HEADING_DATE_ADDED', 'añadido el:');

define('ENTRY_CUSTOMER', 'Cliente:');
define('ENTRY_SOLD_TO', 'Dirección de facturación:');
define('ENTRY_TELEPHONE', 'Teléfono:');
define('ENTRY_DELIVERY_TO', 'Dirección de entrega:');
define('ENTRY_SHIP_TO', 'Dirección de entrega:');
define('ENTRY_SHIPPING_ADDRESS', 'Dirección de envío:');
define('ENTRY_PICKUP_ADDRESS', 'Abholadresse:');
define('ENTRY_BILLING_ADDRESS', 'Dirección de facturación:');
define('ENTRY_PAYMENT_METHOD', 'Forma de pago:');
define('ENTRY_SHIPPING_METHOD', 'Forma de envío:');
define('ENTRY_SUB_TOTAL', 'Subtotal:');
define('ENTRY_TAX', 'IVA:');
define('ENTRY_SHIPPING', 'Gastos de envío:');
define('ENTRY_TOTAL', 'Importe total:');
define('ENTRY_DATE_PURCHASED', 'Fecha de pedido:');
define('ENTRY_STATUS', 'Estado:');
define('ENTRY_DATE_LAST_UPDATED', 'actualizado por última vez el:');
define('ENTRY_NOTIFY_CUSTOMER', 'Avise al cliente:');
define('ENTRY_NOTIFY_COMMENTS', 'Envíe sus comentarios:');
define('ENTRY_PRINTABLE', 'Imprimir factura');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Borrar orden');
define('TEXT_INFO_DELETE_INTRO', '¿Está seguro de que desea eliminar este pedido?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Acredite el número de artículos en el almacén');
define('TEXT_DATE_ORDER_CREATED', 'creado el:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'último cambio:');
define('TEXT_INFO_PAYMENT_METHOD', 'Forma de pago:');
define('TEXT_INFO_SHIPPING_METHOD', 'Forma de envío:');

define('TEXT_ALL_ORDERS', 'Todos los pedidos');
define('TEXT_NO_ORDER_HISTORY', 'No hay historial de pedidos disponible');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Cambiar el estado de su pedido');
define('EMAIL_TEXT_ORDER_NUMBER', 'Nº de pedido');
define('EMAIL_TEXT_INVOICE_URL', 'Puede consultar su pedido en la siguiente dirección:');
define('EMAIL_TEXT_DATE_ORDERED', 'Fecha de pedido:');
define('EMAIL_TEXT_STATUS_UPDATE', 'Se ha actualizado el estado de su pedido' . '\n\n' . 'Nuevo estado: %s' . "\n\n" . 'Si tiene alguna pregunta sobre su pedido, responda a este correo electrónico' . "\n\n" . 'Atentamente' . "\n");
define('EMAIL_TEXT_COMMENTS_UPDATE', 'Notas y comentarios sobre su pedido:' . "\n\n%s\n\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Error: ¡El pedido no existe!');
define('SUCCESS_ORDER_UPDATED', 'Éxito: El pedido se ha actualizado correctamente.');
define('WARNING_ORDER_NOT_UPDATED', 'Nota: No se ha modificado nada. Por lo tanto, esta orden no ha sido actualizada.');

define('TABLE_HEADING_DISCOUNT', 'Rabatt');
define('ENTRY_CUSTOMERS_GROUP', 'Grupo de clientes:');
define('TEXT_VALIDATING', 'No confirmado');

define('TEXT_PRODUCTS', 'Artículo');

define('COMMENT_SEND_ORDER_BY_ADMIN', 'Envío de la confirmación del pedido');
define('BUTTON_ORDER_CONFIRMATION', 'Enviar confirmación de pedido');
define('SUCCESS_ORDER_SEND', 'Confirmación de pedido enviada correctamente');

define('ENTRY_CUSTOMERS_ADDRESS', 'Dirección del cliente:');
define('TEXT_ORDER', 'Orden:');
define('TEXT_ORDER_HISTORY', 'Historial de pedidos:');
define('TEXT_ORDER_STATUS', 'Estado del pedido:');

define('TABLE_HEADING_ORDERS_ID', 'Best.Nr.');
define('TEXT_SHIPPING_TO', 'Envío a');

define('TABLE_HEADING_COMMENTS_SENT', 'Comentario enviado');

define('TABLE_HEADING_TRACK_TRACE', 'Seguimiento y localización:');
define('TABLE_HEADING_CARRIER', 'Método de envío');
define('TABLE_HEADING_PARCEL_LINK', 'Número de envío / número de etiqueta de paquete / número de pedido / ID de envío / número de seguimiento');

define('TEXT_INFO_HEADING_REVERSE_ORDER', 'Cancelar pedido');
define('TEXT_INFO_REVERSE_INTRO', '¿Está seguro de que desea cancelar este pedido?');

define('TABLE_HEADING_SHIPCLOUD', 'Shipcloud:');
define('TABLE_HEADING_PARCEL_ID', 'Número de etiqueta del paquete');
define('TEXT_SHIPCLOUD_STANDARD', 'Estándar');
define('TEXT_SHIPCLOUD_ONE_DAY', 'Express');
define('TEXT_SHIPCLOUD_ONE_DAY_EARLY', 'Exprés 10:00');
define('TEXT_SHIPCLOUD_RETURNS', 'Volver');
define('TEXT_SHIPCLOUD_LETTER', 'Resumen del puesto');
define('TEXT_SHIPCLOUD_BOOKS', 'Envío posterior del libro');
define('TEXT_SHIPCLOUD_PARCEL_LETTER', 'Envío postal');
define('TEXT_WEIGHT_PLACEHOLDER', 'Peso / Kg');
define('TEXT_SHIPCLOUD_INSURANCE_NO', 'Seguro más alto No');
define('TEXT_SHIPCLOUD_INSURANCE_YES', 'Seguro más alto SÍ');
define('TEXT_SHIPCLOUD_BULK', 'Mercancías voluminosas');
define('TEXT_SHIPCLOUD_PARCEL', 'Envase');
define('TEXT_SHIPCLOUD_DPAG_WARENPOST', 'Correo de mercancías');
define('TEXT_SHIPCLOUD_DPAG_WARENPOST_UNTRACKED', 'Warenpost (sin seguimiento)');
define('TEXT_SHIPCLOUD_DPAG_WARENPOST_SIGNATURE', 'Correo de mercancías (firma)');

define('DOWNLOAD_LABEL', 'Descargar la etiqueta del paquete');
define('CREATE_LABEL', 'Crear etiqueta de paquete');
define('TEXT_DELETE_SHIPMENT_SUCCESS', 'etiqueta de paquete shipcloud eliminada.');
define('TEXT_LABEL_CREATED', 'Etiqueta de paquete creada con éxito.');
define('TEXT_CARRIER_ERROR', 'Proveedor de servicios de paquetería no activado en su cuenta shipcloud o clave API no válida.');
define('TEXT_CARRIER_PLACEHOLDER_1', 'Descripción del paquete');
define('TEXT_CARRIER_PLACEHOLDER_2', 'Descripción del envío');

define('TEXT_DOWNLOADS', 'Descargas');
define('TABLE_HEADING_FILENAME', 'Nombre del archivo');
define('TABLE_HEADING_EXPIRES', 'Fecha de caducidad');
define('TABLE_HEADING_DOWNLOADS', 'Número de descargas');
define('TABLE_HEADING_DAYS', 'Número de días');

define('ENTRY_SEND_TRACKING_INFO', 'Información sobre el envío:');

define('TEXT_ORDERS_STATUS_FILTER', 'Filtro de estado del pedido');

define('TABLE_HEADING_DATE', 'Fecha');

define('BUTTON_ORDER_MAIL_STEP', 'Enviar confirmación de pedido');
define('COMMENT_SEND_ORDER_MAIL_STEP', 'Envío de la confirmación del pedido');
define('SUCCESS_ORDER_MAIL_STEP_SEND', 'Confirmación de pedido enviada correctamente');

define('BILLPAY_ORDER_UPDATE_HIGH', 'Error: Para un pedido BillPay, el valor del nuevo pedido no debe ser superior al valor del pedido anterior.');

define('TABLE_HEADING_INVOICE_NUMBER', 'Rg.Nr.');
define('BUTTON_BILL', 'Crear número de factura');
define('NOT_ASSIGNED', '¡aún no asignado!');
