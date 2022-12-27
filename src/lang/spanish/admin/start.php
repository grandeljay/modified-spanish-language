<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('ATTENTION_TITLE', '¡Atención!');

if (!defined('APS_INSTALL')) {
    define('TEXT_FILE_WARNING_WRITABLE', '<b>ADVERTENCIA:</b><br />El servidor puede escribir en los siguientes archivos. Por favor, cambie los derechos de acceso (permisos) de este archivo por razones de seguridad. ( <b>444)</b> en unix, <b>(sólo lectura)</b> en Win32.');
} else {
    define('TEXT_FILE_WARNING_WRITABLE', '<b>ADVERTENCIA:</b><br />El servidor puede escribir en los siguientes archivos. Por favor, cambie los derechos de acceso (permisos) de este archivo por razones de seguridad. <b>(444)</b> en unix, <b>(sólo lectura)</b> en Win32.<br />Si la instalación se ha realizado mediante un paquete de software de un proveedor, es posible que los derechos de acceso deban ajustarse de forma diferente (HostEurope: <b>CHMOD 400</b> o <b>CHMOD 440</b>).');
}

define('TEXT_FILE_WARNING', '<b>ADVERTENCIA:</b><br />El servidor debe poder escribir en los siguientes archivos. Por favor, cambie los derechos de acceso (permisos) de estos archivos. <b>(777)</b> en unix, <b>(lectura-escritura)</b> en Win32.');
define('TEXT_FOLDER_WARNING', '<b>ADVERTENCIA:</b><br />El servidor debe poder escribir en los siguientes directorios. Por favor, cambie los derechos de acceso (permisos) de estos directorios. <b>(777)</b> en unix, <b>(lectura-escritura)</b> en Win32.');
define('REPORT_GENERATED_FOR', 'Informe para:');
define('REPORT_GENERATED_ON', 'Creado el:');
define('FIRST_VISIT_ON', 'Primera visita:');
define('HEADING_QUICK_STATS', 'Breve resumen');
define('VISITS_TODAY', 'Visitas hoy:');
define('UNIQUE_TODAY', 'Visitantes individuales:');
define('DAILY_AVERAGE', 'Media diaria:');
define('TOTAL_VISITS', 'Visitas en total:');
define('TOTAL_UNIQUE', 'Visitantes individuales en total:');
define('TOP_REFFERER', 'Top Refferer:');
define('TOP_ENGINE', 'El mejor motor de búsqueda:');
define('DAY_SUMMARY', 'Resumen de 30 días:');
define('VERY_LAST_VISITORS', 'Últimos 10 visitantes:');
define('TODAY_VISITORS', 'Visitantes a partir de hoy:');
define('LAST_VISITORS', 'Últimos 100 visitantes:');
define('ALL_LAST_VISITORS', 'Todos los visitantes:');
define('DATE_TIME', 'Fecha / Hora:');
define('IP_ADRESS', 'Dirección IP:');
define('OPERATING_SYSTEM', 'Sistema operativo:');
define('REFFERING_HOST', 'Anfitrión remitente:');
define('ENTRY_PAGE', 'Página de entrada:');
define('HOURLY_TRAFFIC_SUMMARY', 'Resumen horario de tráfico');
define('WEB_BROWSER_SUMMARY', 'Visión general del navegador web');
define('OPERATING_SYSTEM_SUMMARY', 'Visión general del sistema operativo');
define('TOP_REFERRERS', 'Los 10 principales remitentes');
define('TOP_HOSTS', 'Los diez mejores anfitriones');
define('LIST_ALL', 'Mostrar todo');
define('SEARCH_ENGINE_SUMMARY', 'Visión general de los motores de búsqueda');
define('SEARCH_ENGINE_SUMMARY_TEXT', ' ( Los porcentajes se basan en el número total de visitas a través de buscadores. )');
define('SEARCH_QUERY_SUMMARY', 'Visión general de las consultas de búsqueda');
define('SEARCH_QUERY_SUMMARY_TEXT', ' ) ( Los porcentajes se basan en el número total de búsquedas que se registraron. )');
define('REFERRING_URL', 'Refferrer Url');
define('HITS', 'Hits');
define('PERCENTAGE', 'Porcentaje');
define('HOST', 'Anfitrión');

define('HEADING_TITLE_SEARCH', 'Nº de pedido');
define('HEADING_TITLE_STATUS', 'Estado:');
define('TABLE_HEADING_AFTERBUY', 'Después de la compra');
define('TABLE_HEADING_CUSTOMERS', 'Clientes');
define('TABLE_HEADING_ORDER_TOTAL', 'Valor total');
define('TABLE_HEADING_DATE_PURCHASED', 'Fecha del pedido');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_QUANTITY', 'Número');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Nº de artículo');
define('TABLE_HEADING_PRODUCTS', 'Artículo');
define('TABLE_HEADING_TAX', 'IVA');
define('TABLE_HEADING_TOTAL', 'Total');
define('TABLE_HEADING_DATE_ADDED', 'añadido el:');
define('ENTRY_CUSTOMER', 'Cliente:');
define('TEXT_DATE_ORDER_CREATED', 'Fecha de pedido:');
define('TEXT_INFO_PAYMENT_METHOD', 'Forma de pago:');
define('TEXT_VALIDATING', 'No confirmado');
define('TEXT_ALL_ORDERS', 'Todos los pedidos');
define('TEXT_NO_ORDER_HISTORY', 'No hay historial de pedidos disponible');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Último cambio');

define('TOTAL_CUSTOMERS', 'Total de clientes');
define('TOTAL_SUBSCRIBERS', 'Suscripciones a boletines');
define('TOTAL_PRODUCTS_ACTIVE', 'Artículos activos');
define('TOTAL_PRODUCTS_INACTIVE', 'Artículos inactivos');
define('TOTAL_PRODUCTS', 'Total del artículo');
define('TOTAL_SPECIALS', 'Ofertas especiales');
define('UNASSIGNED', 'No asignado');
define('TURNOVER_TODAY', 'Facturación hoy');
define('TURNOVER_YESTERDAY', 'Facturación ayer');
define('TURNOVER_THIS_MONTH', 'mes en curso');
define('TURNOVER_LAST_MONTH', 'último mes (todos)');
define('TURNOVER_LAST_MONTH_PAID', 'último mes (pagado)');
define('TOTAL_TURNOVER', 'Facturación total');

define('HEADING_TITLE', 'Bienvenido al área de administración');

define('TABLE_CAPTION_USERS_ONLINE', 'En línea');
define('TABLE_CAPTION_USERS_ONLINE_HINT', '***Para obtener información sobre un usuario, haga clic en su nombre***.');
define('TABLE_HEADING_USERS_ONLINE_SINCE', 'En línea desde');
define('TABLE_HEADING_USERS_ONLINE_NAME', 'Nombre');
define('TABLE_HEADING_USERS_ONLINE_LAST_CLICK', 'Último clic');
define('TABLE_HEADING_USERS_ONLINE_INFO', 'Información');
define('TABLE_CELL_USERS_ONLINE_INFO', 'más...');

define('TABLE_CAPTION_NEW_CUSTOMERS', 'Clientes');
define('TABLE_CAPTION_NEW_CUSTOMERS_COMMENT', '(los últimos 15)');
define('TABLE_HEADING_NEW_CUSTOMERS_LASTNAME', 'Nombre');
define('TABLE_HEADING_NEW_CUSTOMERS_FIRSTNAME', 'Nombre');
define('TABLE_HEADING_NEW_CUSTOMERS_REGISTERED', 'registrado el');
define('TABLE_HEADING_NEW_CUSTOMERS_EDIT', 'editar');
define('TABLE_HEADING_NEW_CUSTOMERS_ORDERS', 'Pedidos');
define('TABLE_CELL_NEW_CUSTOMERS_EDIT', 'editar...');
define('TABLE_CELL_NEW_CUSTOMERS_DELETE', 'borrar...');
define('TABLE_CELL_NEW_CUSTOMERS_ORDERS', 'mostrar...');

define('TABLE_CAPTION_NEW_ORDERS', 'Pedidos');
define('TABLE_CAPTION_NEW_ORDERS_COMMENT', '(los últimos 20)');
define('TABLE_HEADING_NEW_ORDERS_ORDER_NUMBER', 'Número de pedido');
define('TABLE_HEADING_NEW_ORDERS_ORDER_DATE', 'Fecha del pedido');
define('TABLE_HEADING_NEW_ORDERS_CUSTOMERS_NAME', 'Nombre del cliente');
define('TABLE_HEADING_NEW_ORDERS_EDIT', 'editar');
define('TABLE_HEADING_NEW_ORDERS_DELETE', 'borrar');

define('TABLE_CAPTION_NEWSFEED', 'Visite el');

define('TABLE_CAPTION_BIRTHDAYS', 'Lista de cumpleaños');
define('TABLE_CELL_BIRTHDAYS_TODAY', 'Clientes que cumplen años hoy');
define('TABLE_CELL_BIRTHDAYS_THIS_MONTH', 'Clientes que cumplen años este mes');

define('HEADING_CAPTION_STATISTIC', 'Estadísticas');
define('ERROR_DB_VERSION_UPDATE', '<strong>ADVERTENCIA:</strong> Su BD necesita ser actualizada, por favor ejecute el <a href="' . DIR_WS_CATALOG . '_installer/">instalador</a>:');
define('ERROR_DB_VERSION_UPDATE_INFO', 'La base de datos debe actualizarse de la versión %s a %s.');

define('ERROR_EMAIL_CHECK', '<strong>ADVERTENCIA:</strong> Las siguientes direcciones de correo electrónico parecen ser incorrectas:');
define('ERROR_EMAIL_CHECK_INFO', '%s: &lt;%s&gt;');

define('WARNING_DB_FILE_PRIVILEGES', '<strong>ADVERTENCIA:</strong> ¡Los privilegios de ARCHIVO están activados en la base de datos &rsquo;' . DB_DATABASE . '&lsquo; para el usuario de la tienda &rsquo;' . DB_SERVER_USERNAME . '&lsquo;!');

define('WARNING_REGISTER_GLOBALS', '<strong>ADVERTENCIA:</strong> Esta característica está <strong>DEPREDICADA</strong> desde PHP 5.3.0 y <strong>ELIMINADA</strong> desde PHP 5.4.0. Póngase en contacto con su hoster para desactivar &quot;register_globals&quot;.');

define('WARNING_DOMAIN_INVALID', '<strong>ADVERTENCIA:</strong> El dominio de su tienda no ha podido ser validado (Posibles causas: Error de formato de dominio o nombre de dominio internacionalizado (IDN) - dominio con diéresis).');
