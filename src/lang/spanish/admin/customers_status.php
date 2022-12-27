<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('HEADING_TITLE', 'Grupos de clientes');

define('ENTRY_CUSTOMERS_FSK18', '¿Bloquear la compra de artículos FSK18?');
define('ENTRY_CUSTOMERS_FSK18_DISPLAY', '¿Despliegue de artículos FSK18?');
define('ENTRY_CUSTOMERS_STATUS_ADD_TAX', 'Mostrar el IVA en la factura');
define('ENTRY_CUSTOMERS_STATUS_MIN_ORDER', 'Valor mínimo del pedido:');
define('ENTRY_CUSTOMERS_STATUS_MAX_ORDER', 'Valor máximo del pedido:');
define('ENTRY_CUSTOMERS_STATUS_BT_PERMISSION', 'Por domiciliación bancaria');
define('ENTRY_CUSTOMERS_STATUS_CC_PERMISSION', 'Con tarjeta de crédito');
define('ENTRY_CUSTOMERS_STATUS_COD_PERMISSION', 'Contra reembolso');
define('ENTRY_CUSTOMERS_STATUS_DISCOUNT_ATTRIBUTES', 'Rabatt');
define('ENTRY_CUSTOMERS_STATUS_PAYMENT_UNALLOWED', 'Introducir métodos de pago no autorizados');
define('ENTRY_CUSTOMERS_STATUS_PUBLIC', 'Público');
define('ENTRY_CUSTOMERS_STATUS_SHIPPING_UNALLOWED', 'Introducir métodos de envío no autorizados');
define('ENTRY_CUSTOMERS_STATUS_SHOW_PRICE', 'Precio');
define('ENTRY_CUSTOMERS_STATUS_SHOW_PRICE_TAX', 'Precios con IVA incluido.');
define('ENTRY_CUSTOMERS_STATUS_WRITE_REVIEWS', '¿Se permite a un grupo de clientes escribir reseñas de productos?');
define('ENTRY_CUSTOMERS_STATUS_READ_REVIEWS', '¿Se permite al grupo de clientes leer las reseñas de los productos?');
define('ENTRY_CUSTOMERS_STATUS_REVIEWS_STATUS', '¿Activar las reseñas de productos automáticamente?');
define('ENTRY_GRADUATED_PRICES', 'Precios escalonados');
define('ENTRY_NO', 'No');
define('ENTRY_OT_XMEMBER', '¿Descuento para el cliente sobre el valor total del pedido? :');
define('ENTRY_YES', 'Ja');

define('ERROR_REMOVE_DEFAULT_CUSTOMERS_STATUS', 'Error: No se puede eliminar el grupo de clientes por defecto. Por favor, establezca primero otro grupo de clientes por defecto e inténtelo de nuevo.');
define('ERROR_STATUS_USED_IN_CUSTOMERS', 'Error: Este grupo de clientes está actualmente en uso por clientes.');
define('ERROR_STATUS_USED_IN_HISTORY', 'Error: Este grupo de clientes se utiliza actualmente en el resumen de pedidos.');

define('TABLE_HEADING_ACTION', 'Acción');
define('TABLE_HEADING_CUSTOMERS_GRADUATED', 'Precio graduado');
define('TABLE_HEADING_CUSTOMERS_STATUS', 'Grupo de clientes');
define('TABLE_HEADING_CUSTOMERS_UNALLOW', 'Métodos de pago no permitidos');
define('TABLE_HEADING_CUSTOMERS_UNALLOW_SHIPPING', 'Métodos de envío no permitidos');
define('TABLE_HEADING_DISCOUNT', 'Rabatt');
define('TABLE_HEADING_TAX_PRICE', 'Precio / IVA');

define('TAX_NO', 'excl.');
define('TAX_YES', 'incl.');

define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS_STATUS', 'Grupos de clientes existentes:');

define('TEXT_INFO_CUSTOMERS_FSK18_DISPLAY_INTRO', '<strong>Artículo FSK18</strong>');
define('TEXT_INFO_CUSTOMERS_FSK18_INTRO', '<strong>Cerradura FSK18</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_ADD_TAX_INTRO', '<strong>Si "Precios con IVA incluido" = "Sí", ajústelo a "No</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_MIN_ORDER_INTRO', '<strong>Introduzca un valor mínimo de pedido o deje este campo en blanco.</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_MAX_ORDER_INTRO', '<strong>Introduzca un valor máximo de pedido o deje este campo en blanco.</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_BT_PERMISSION_INTRO', '<strong>¿Desea permitir que este grupo de clientes pague mediante domiciliación bancaria?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_CC_PERMISSION_INTRO', '<strong>¿Desea permitir que este grupo de clientes pague con tarjeta de crédito?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_COD_PERMISSION_INTRO', '<strong>¿Le gustaría permitir a este grupo de clientes pagar contra reembolso?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_ATTRIBUTES_INTRO', '<strong>Descuento en los atributos de</strong> los artículos<br />(Aplique un % de descuento máximo en un artículo)');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_OT_XMEMBER_INTRO', '<strong>Descuento en todo el pedido</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_PRICE', 'Descuento (de 0 a 100%):');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_PRICE_INTRO', '<strong>Descuento máximo en los productos (en función del descuento fijado en el producto).</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_GRADUATED_PRICES_INTRO', '<strong>Precios escalonados</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_IMAGE', '<strong>Imagen del grupo de clientes:</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_NAME', '<strong>Nombre del grupo</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_PAYMENT_UNALLOWED_INTRO', '<strong>Métodos de pago no permitidos</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_PUBLIC_INTRO', '<strong>¿Grupo público?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_SHIPPING_UNALLOWED_INTRO', '<strong>Métodos de envío no permitidos</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_SHOW_PRICE_INTRO', '<strong>Exposición de precios en la tienda</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_SHOW_PRICE_TAX_INTRO', '<strong>¿Desea mostrar los precios con o sin IVA?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_WRITE_REVIEWS_INTRO', '<strong>Escriba reseñas de productos</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_READ_REVIEWS_INTRO', '<strong>Lea las reseñas de los productos</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_REVIEWS_STATUS_INTRO', '<strong>Desbloquear reseñas de productos</strong>');

define('TEXT_INFO_DELETE_INTRO', '¿Está seguro de que desea eliminar este grupo de clientes?');
define('TEXT_INFO_EDIT_INTRO', 'Realice todos los ajustes necesarios');
define('TEXT_INFO_INSERT_INTRO', 'Por favor, cree un nuevo grupo de clientes con los ajustes deseados');

define('TEXT_INFO_HEADING_DELETE_CUSTOMERS_STATUS', 'Borrar grupo de clientes');
define('TEXT_INFO_HEADING_EDIT_CUSTOMERS_STATUS', 'Editar datos de grupo');
define('TEXT_INFO_HEADING_NEW_CUSTOMERS_STATUS', 'Nuevo grupo de clientes');

define('TEXT_INFO_CUSTOMERS_STATUS_BASE', '<strong>Grupo de clientes base para los precios de los artículos</strong>');
define('ENTRY_CUSTOMERS_STATUS_BASE', 'Asuma los precios del grupo de clientes siguiente. Si la selección es = "Admin", no se adoptan precios para el nuevo grupo de clientes.');
define('ENTRY_CUSTOMERS_STATUS_BASE_EDIT', 'Asuma los precios del grupo de clientes siguiente. Si la selección es = "Admin", no se asume ningún precio para el grupo de clientes.<br /><span class="col-red"><strong>ATENCIÓN:</strong></span> ¡Esto sobrescribe todos los precios existentes del grupo de clientes!');

define('TEXT_INFO_CUSTOMERS_GROUP_ADOPT_PERMISSION', '<strong>Asumir los derechos de visibilidad de otro grupo de clientes</strong>');
define('ENTRY_CUSTOMERS_GROUP_ADOPT_PERMISSION', 'Asuma los derechos de visibilidad de categoría, artículo y contenido del siguiente grupo de clientes:');
define('CUSTOMERS_GROUP_ADOPT_PERMISSIONS', 'No se arrogue derechos');

define('TEXT_INFO_CUSTOMERS_STATUS_SHOW_PRICE_TAX_TOTAL', '<b>Mostrar el IVA del importe de compra</b>');
define('ENTRY_CUSTOMERS_STATUS_SHOW_PRICE_TAX_TOTAL', 'Importe mínimo de compra');

define('TABLE_HEADING_CUSTOMERS_SPECIALS', 'Ofertas especiales');
define('TEXT_INFO_CUSTOMERS_STATUS_SPECIALS_INTRO', '<strong>Ofertas especiales</strong>');
define('ENTRY_CUSTOMERS_STATUS_SPECIALS', '¿Grupo de clientes autorizado a ver ofertas especiales?');

define('CUSTOMERS_GROUP_PUBLIC', 'público');
