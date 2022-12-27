<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('TOP_BAR_TITLE', 'Estadísticas');
define('HEADING_TITLE', 'Cupones Rabatt');
define('HEADING_TITLE_STATUS', 'Estado : ');
define('TEXT_CUSTOMER', 'Cliente:');
define('TEXT_COUPON', 'Nombre del cupón');
define('TEXT_COUPON_ALL', 'Cupones Alle');
define('TEXT_COUPON_ACTIVE', 'Cupones Aktive');
define('TEXT_COUPON_INACTIVE', 'Cupones Inaktive');
define('TEXT_SUBJECT', 'Asunto:');
define('TEXT_FROM', 'De:');
define('TEXT_FREE_SHIPPING', 'Envío gratuito');
define('TEXT_MESSAGE', 'Mensaje:');
define('TEXT_SELECT_CUSTOMER', 'Seleccionar cliente');
define('TEXT_ALL_CUSTOMERS', 'Todos los clientes');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Todos los suscriptores del boletín');
define('TEXT_CONFIRM_DELETE', '¿Debería eliminarse realmente este cupón?');

define('TEXT_TO_REDEEM', 'Puede canjear el vale al realizar su pedido. Para ello, introduzca el código de su vale en el campo correspondiente y pulse el botón "Canjear".');
define('TEXT_IN_CASE', ' Si, en contra de lo esperado, surgieran problemas al contabilizar.');
define('TEXT_VOUCHER_IS', 'Su código de vale es: ');
define('TEXT_REMEMBER', 'Mantenga a salvo su código de vale para poder beneficiarse de esta oferta');
define('TEXT_VISIT', 'la próxima vez que nos llame al ' . HTTP_SERVER . DIR_WS_CATALOG . ' visita.');
define('TEXT_ENTER_CODE', ' e introduzca el código ');

define('TABLE_HEADING_ACTION', 'Acción');

define('CUSTOMER_ID', 'Nº de cliente');
define('CUSTOMER_NAME', 'Nombre del cliente');
define('REDEEM_DATE', 'canjeado en');
define('IP_ADDRESS', 'Dirección IP');

define('TEXT_REDEMPTIONS', 'Redención');
define('TEXT_REDEMPTIONS_TOTAL', 'En general:');
define('TEXT_REDEMPTIONS_CUSTOMER', 'Para este cliente:');
define('TEXT_NO_FREE_SHIPPING', 'No exento de gastos de envío');

define('NOTICE_EMAIL_SENT_TO', 'Nota: Correo electrónico enviado a: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Error: No se ha seleccionado ningún cliente.');
define('COUPON_NAME', 'Nombre del cupón');
define('COUPON_AMOUNT', 'Valor del cupón');
define('COUPON_CODE', 'Código de cupón');
define('COUPON_STARTDATE', 'válido a partir de');
define('COUPON_FINISHDATE', 'válido hasta');
define('COUPON_FREE_SHIP', 'Envío gratuito');
define('COUPON_DESC', 'Descripción del cupón');
define('COUPON_MIN_ORDER', 'Valor mínimo de pedido del cupón');
define('COUPON_USES_COUPON', 'Número/utilizaciones por cupón');
define('COUPON_USES_USER', 'Número/usos por cliente');
define('COUPON_PRODUCTS', 'Lista de artículos válidos');
define('COUPON_CATEGORIES', 'Lista de categorías válidas');
define('COUPON_CUSTOMERS', 'Lista de grupos de clientes válidos');
define('VOUCHER_NUMBER_USED', 'Número utilizado');
define('DATE_CREATED', 'creado el');
define('DATE_MODIFIED', 'cambiado el');
define('TEXT_HEADING_NEW_COUPON', 'Crear un nuevo cupón');
define('TEXT_NEW_INTRO', 'Por favor, facilite la siguiente información para el nuevo cupón.<br />');

define('COUPON_NAME_HELP', 'Un nombre corto para el cupón');
define('COUPON_AMOUNT_HELP', 'Introduzca aquí el descuento de este cupón. Ya sea una cantidad fija o un porcentaje de descuento como el 10%.');
define('COUPON_CODE_HELP', 'Aquí puede introducir su propio código (máx. 16 caracteres). Si deja el campo en blanco, este código se generará automáticamente.');
define('COUPON_STARTDATE_HELP', 'La fecha a partir de la cual es válido el cupón.<br>');
define('COUPON_FINISHDATE_HELP', 'La fecha de caducidad del cupón.<br>');
define('COUPON_FREE_SHIP_HELP', 'Cupón de entrega gratuita.');
define('COUPON_DESC_HELP', 'Descripción del cupón para el cliente');
define('COUPON_MIN_ORDER_HELP', 'Valor mínimo del pedido a partir del cual es válido este cupón');
define('COUPON_USES_COUPON_HELP', 'Introduzca aquí la frecuencia con la que puede canjear este cupón. Si deja el campo en blanco, el uso es ilimitado.');
define('COUPON_USES_USER_HELP', 'Introduzca aquí la frecuencia con la que un cliente puede canjear este cupón. Si deja el campo en blanco, el uso es ilimitado.');
define('COUPON_PRODUCTS_HELP', 'Una lista separada por comas de los ID de los artículos para los que es válido este cupón. Un campo vacío significa que no hay restricciones.');
define('COUPON_CATEGORIES_HELP', 'Una lista separada por comas de los ID de categoría para los que es válido este cupón. Un campo vacío significa que no hay restricciones.');
define('COUPON_CUSTOMERS_HELP', 'Seleccione los grupos de clientes válidos para este cupón.');

define('COUPON_ID', 'cID');
define('BUTTON_DELETE_NO_CONFIRM', 'Borrar sin consultar');
define('TEXT_NO_RESTRICTION', 'Sin limitación');
define('TEXT_COUPON_DELETE', 'Borrar');
define('TEXT_COUPON_STATUS', 'Estado');
define('TEXT_COUPON_DETAILS', 'Datos del cupón');
define('TEXT_COUPON_EMAIL', 'Envío por correo electrónico');
define('TEXT_COUPON_OVERVIEW', 'Visión general');
define('TEXT_COUPON_EMAIL_PREVIEW', 'Confirmación');
define('TEXT_COUPON_MINORDER', 'Valor mínimo del pedido');
define('TEXT_VIEW', 'Vista de lista');
define('TEXT_VIEW_SHORT', 'Mostrar');

define('COUPON_MINORDER_INFO', "\nValor mínimo del pedido: ");
define('COUPON_RESTRICT_INFO', "\n¡Este cupón sólo es válido para determinados artículos!");
define('COUPON_INFO', "\nCouponwert: ");
define('COUPON_FREE_SHIPPING', 'Versandkostenfrei');
define('COUPON_LINK_TEXT', '\n\Detalles');
define('COUPON_CATEGORIES_RESTRICT', '\nVálido para estas categorías');
define('COUPON_PRODUCTS_RESTRICT', '\nVálido para estos artículos');
define('COUPON_NO_RESTRICT', '\nVálido para todos los artículos');

define('ERROR_NO_COUPON_NAME', 'FEHLER: Kein Couponname ');
define('ERROR_NO_COUPON_AMOUNT', 'ERROR: No hay valor de cupón');

define('COUPON_DATE_START_TT', 'Comienza a las 00:00:00');
define('COUPON_DATE_END_TT', 'Finaliza a medianoche (23:59:59)');
define('ERROR_COUPON_DATE', 'ERROR: La fecha final es anterior a la fecha de inicio');

define('TEXT_OT_COUPON_STATUS_INFO', 'Aún es necesario instalar el módulo de cupones (ot_coupon) (Módulos -&gt; <a href="' . xtc_href_link('modules.php', 'set=ordertotal') . '">Resumen</a>)');
