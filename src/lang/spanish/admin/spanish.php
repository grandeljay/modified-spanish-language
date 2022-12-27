<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

/**
 * Locale
 */
define('HTML_PARAMS', 'dir="ltr" xml:lang="es" xmlns="http://www.w3.org/1999/xhtml"');

define('DATE_LOCALE', 'es_ES');
define('DATE_FORMAT_SHORT', 'd.m.Y');
define('DATE_FORMAT_LONG', 'l d F, Y');
define('DATE_FORMAT', DATE_FORMAT_SHORT);
define('PHP_DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' H:i:s');
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' H:i:s');
define('LANGUAGE_CURRENCY', 'EUR');

setlocale(LC_ALL, DATE_LOCALE);

function xtc_date_raw($date, $reverse = false): string
{
    if ($reverse) {
        return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
    } else {
        return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
    }
}

/**
 * Extra files
 */
require_once DIR_FS_INC . 'auto_include.inc.php';

$extra_files = auto_include(DIR_FS_LANGUAGES . 'spanish/extra/admin/', 'php');

foreach ($extra_files as $extra_file) {
    require $extra_file;
}

/**
 * Translations
 */
define('TITLE', defined('PROJECT_VERSION') ? PROJECT_VERSION : 'indefinido');

define('HEADER_TITLE_TOP', 'Administración');
define('HEADER_TITLE_SUPPORT_SITE', 'Página de apoyo');
define('HEADER_TITLE_ONLINE_CATALOG', 'Catálogo en línea');
define('HEADER_TITLE_ADMINISTRATION', 'Administración');

define('MALE', 'Sr.');
define('FEMALE', 'Sra.');
define('DIVERSE', 'Buceadores');

define('DOB_FORMAT_STRING', 'tt.mm.jjjj');

define('BOX_HEADING_CONFIGURATION', 'Konfiguración');
define('BOX_HEADING_MODULES', 'Módulo');
define('BOX_HEADING_PARTNER_MODULES', 'Módulos asociados');
define('BOX_HEADING_ZONE', 'Tierra/impuestos');
define('BOX_HEADING_CUSTOMERS', 'Clientes');
define('BOX_HEADING_PRODUCTS', 'Catálogo');
define('BOX_HEADING_STATISTICS', 'Estadísticas');
define('BOX_HEADING_TOOLS', 'Programas de apoyo');
define('BOX_HEADING_LOCALIZATION', 'Lenguas/Monedas');
define('BOX_HEADING_TEMPLATES', 'Plantillas');
define('BOX_HEADING_LOCATION_AND_TAXES', 'Tierra/impuestos');
define('BOX_HEADING_CATALOG', 'Catálogo');
define('BOX_MODULE_NEWSLETTER', 'Boletín de noticias');

define('BOX_CONTENT', 'Gestor de contenidos');
define('TEXT_ALLOWED', 'Permiso');
define('TEXT_ACCESS', 'Zona de acceso');
define('BOX_CONFIGURATION', 'Ajustes básicos');
define('BOX_CONFIGURATION_1', 'Mi tienda');
define('BOX_CONFIGURATION_2', 'Valores mínimos');
define('BOX_CONFIGURATION_3', 'Valores máximos');
define('BOX_CONFIGURATION_4', 'Opciones de imagen');
define('BOX_CONFIGURATION_5', 'Detalles del cliente');
define('BOX_CONFIGURATION_6', 'Opciones del módulo');
define('BOX_CONFIGURATION_7', 'Opciones de envío');
define('BOX_CONFIGURATION_8', 'Opciones de listas de artículos');
define('BOX_CONFIGURATION_9', 'Opciones de gestión de almacenes');
define('BOX_CONFIGURATION_10', 'Opciones de registro');
define('BOX_CONFIGURATION_11', 'Opciones de caché');
define('BOX_CONFIGURATION_12', 'Opciones de correo electrónico');
define('BOX_CONFIGURATION_13', 'Descargar Optionen');
define('BOX_CONFIGURATION_14', 'Compresión');
define('BOX_CONFIGURATION_15', 'Sesiones');
define('BOX_CONFIGURATION_16', 'Metaetiquetas/motores de búsqueda');
define('BOX_CONFIGURATION_17', 'Módulos adicionales');
define('BOX_CONFIGURATION_18', 'USt-IdNr.');
define('BOX_CONFIGURATION_19', 'Socio');
define('BOX_CONFIGURATION_22', 'Opciones de búsqueda');
define('BOX_CONFIGURATION_24', 'Google, Matomo y Facebook');
define('BOX_CONFIGURATION_25', 'Captcha');
define('BOX_CONFIGURATION_31', 'Skrill');
define('BOX_CONFIGURATION_40', 'Opciones de la ventana emergente');
define('BOX_CONFIGURATION_1000', 'Opciones del área de administración');

define('BOX_MODULES', 'Módulos de pago/envío/facturación');
define('BOX_PAYMENT', 'Formas de pago');
define('BOX_SHIPPING', 'Método de envío');
define('BOX_ORDER_TOTAL', 'Resumen');
define('BOX_CATEGORIES', 'Categorías/Artículos');
define('BOX_PRODUCTS_ATTRIBUTES', 'Características del artículo');
define('BOX_MANUFACTURERS', 'Fabricante');
define('BOX_REVIEWS', 'Reseñas de productos');
define('BOX_CAMPAIGNS', 'Kampagnen');
define('BOX_XSELL_PRODUCTS', 'Marketing cruzado');
define('BOX_SPECIALS', 'Ofertas especiales');
define('BOX_PRODUCTS_EXPECTED', 'Artículos previstos');
define('BOX_CUSTOMERS', 'Clientes');
define('BOX_ACCOUNTING', 'Administración de derechos de administrador');
define('BOX_CUSTOMERS_STATUS', 'Grupos de clientes');
define('BOX_ORDERS', 'Pedidos');
define('BOX_COUNTRIES', 'País');
define('BOX_ZONES', 'Estados federales');
define('BOX_GEO_ZONES', 'Zonas fiscales');
define('BOX_TAX_CLASSES', 'Tramos impositivos');
define('BOX_TAX_RATES', 'Tipos impositivos');
define('BOX_HEADING_REPORTS', 'Informes');
define('BOX_PRODUCTS_VIEWED', 'Artículos visitados');
define('BOX_STOCK_WARNING', 'Informe del campamento');
define('BOX_PRODUCTS_PURCHASED', 'Artículos vendidos');
define('BOX_STATS_CUSTOMERS', 'Estadísticas de pedidos de clientes');
define('BOX_BACKUP', 'Gestor de bases de datos');
define('BOX_BANNER_MANAGER', 'Gestor de pancartas');
define('BOX_CACHE', 'Control de caché');
define('BOX_DEFINE_LANGUAGE', 'Definir las lenguas');
define('BOX_FILE_MANAGER', 'Gestor de archivos');
define('BOX_MAIL', 'Enviar correo electrónico');
define('BOX_NEWSLETTERS', 'Responsable del boletín');
define('BOX_SERVER_INFO', 'Información del servidor');
define('BOX_WHOS_ONLINE', 'Quién está en línea');
define('BOX_TPL_BOXES', 'Secuencia de cajas');
define('BOX_CURRENCIES', 'Divisas');
define('BOX_LANGUAGES', 'Idiomas');
define('BOX_ORDERS_STATUS', 'Estado del pedido');
define('BOX_ATTRIBUTES_MANAGER', 'Gestión de atributos');
define('BOX_SHIPPING_STATUS', 'Estado de la entrega');
define('BOX_SALES_REPORT', 'Estadísticas de rotación');
define('BOX_MODULE_EXPORT', 'Módulo de exportación');
define('BOX_MODULE_SYSTEM', 'Módulos del sistema');
define('BOX_HEADING_GV_ADMIN', 'Vales/Cupones');
define('BOX_GV_ADMIN_QUEUE', 'Cola de vales');
define('BOX_GV_ADMIN_MAIL', 'Correo electrónico del vale');
define('BOX_GV_ADMIN_SENT', 'Vales enviados');
define('BOX_COUPON_ADMIN', 'Administración de cupones');
define('BOX_TOOLS_BLACKLIST', 'Lista negra de tarjetas de crédito');
define('BOX_IMPORT', 'Importación y exportación');
define('BOX_PRODUCTS_VPE', 'Unidad de envasado');
define('BOX_CAMPAIGNS_REPORT', 'Informe de campaña');
define('BOX_ORDERS_XSELL_GROUP', 'Grupos de marketing cruzado');
define('BOX_REMOVEOLDPICS', 'Borrar imágenes antiguas');
define('BOX_JANOLAW', 'janolaw AGB Hosting');
define('BOX_HAENDLERBUND', 'Servicio H&auml;ndlerbund AGB');
define('BOX_SHOP', 'Tienda');
define('BOX_LOGOUT', 'Cerrar sesión');
define('BOX_CREDITS', 'Créditos');
define('BOX_UPDATE', 'Comprobación de la versión');
define('BOX_GV_CUSTOMERS', 'Crédito al cliente');
define('BOX_IT_RECHT_KANZLEI', 'Bufete de abogados informáticos');
define('BOX_PROTECTEDSHOPS', 'Tiendas protegidas - AGB Service');
define('BOX_CLEVERREACH', 'CleverReach');
define('BOX_SUPERMAILER', 'SuperMailer');
define('BOX_OFFLINE', 'Tienda fuera de línea');
define('BOX_LOGS', 'Archivos de registro');
define('BOX_SHIPCLOUD', 'shipcloud');
define('BOX_SHIPCLOUD_PICKUP', 'shipcloud - Colección');
define('BOX_PRODUCTS_TAGS', 'Propiedades del artículo');
define('BOX_TRUSTEDSHOPS', 'Tiendas de confianza');
define('BOX_NEWSLETTER_RECIPIENTS', 'Destinatarios del boletín');
define('BOX_DSGVO_EXPORT', 'Exportación GDPR');
define('BOX_SUPPORT', 'Apoye');
define('BOX_CACHING', 'Almacenamiento en caché');
define('BOX_COOKIE_CONSENT', 'Consentimiento de cookies');
define('BOX_SEMKNOX', 'Búsqueda en el sitio Búsqueda de productos 360');
define('BOX_PAGES_CONTENT', 'Páginas de contenido');
define('BOX_PRODUCTS_CONTENT', 'Apéndices del artículo');
define('BOX_CONTENT_CONTENT', 'Contenido Anh&auml;nge');
define('BOX_EMAIL_CONTENT', 'Archivos adjuntos de correo electrónico');
define('BOX_DHL', 'Envío DHL y creación de etiquetas');

define('TXT_GROUPS', '<b>Grupos</b>:');
define('TXT_SYSTEM', 'Sistema');
define('TXT_CUSTOMERS', 'Clientes/Pedidos');
define('TXT_PRODUCTS', 'Artículos/Categorías');
define('TXT_STATISTICS', 'Herramientas estadísticas');
define('TXT_TOOLS', 'Programas adicionales');
define('TEXT_ACCOUNTING', 'Ajustes de acceso para:');

define('JS_ERROR', 'Se han producido errores durante la introducción!\nPor favor, corrija lo siguiente:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* Debe asignar un precio a este valor\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* Debe especificar un signo para el precio (+/-)\n');

define('JS_PRODUCTS_NAME', '* El nuevo artículo debe tener un nombre\n');
define('JS_PRODUCTS_DESCRIPTION', '* El nuevo artículo debe tener una descripción\n');
define('JS_PRODUCTS_PRICE', '* El nuevo artículo debe tener un precio\n');
define('JS_PRODUCTS_WEIGHT', '* El nuevo artículo debe tener una indicación de peso\n');
define('JS_PRODUCTS_QUANTITY', '* Debe asignar una cantidad disponible al nuevo artículo\n');
define('JS_PRODUCTS_MODEL', '* Debe asignar un número de artículo al nuevo artículo.\n');
define('JS_PRODUCTS_IMAGE', '* Debe asignar una imagen al artículo\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Debe fijarse un nuevo precio para este artículo\n');

define('JS_ORDER_DOES_NOT_EXIST', '¡El número de pedido %s no existe!');

define('CATEGORY_PERSONAL', 'Datos personales');
define('CATEGORY_ADDRESS', 'Dirección');
define('CATEGORY_CONTACT', 'Póngase en contacto con');
define('CATEGORY_COMPANY', 'Empresa');
define('CATEGORY_OPTIONS', 'Más opciones');

define('ENTRY_GENDER', 'Anrede:');
define('ENTRY_GENDER_ERROR', ' <span class="errorText">aportación necesaria</span>');
define('ENTRY_FIRST_NAME', 'Nombre de pila:');
define('ENTRY_FIRST_NAME_ERROR', ' <span class="errorText">al menos ' . (defined('ENTRY_FIRST_NAME_MIN_LENGTH') ? ENTRY_FIRST_NAME_MIN_LENGTH : 0) . ' cartas</span>');
define('ENTRY_LAST_NAME', 'Apellido:');
define('ENTRY_LAST_NAME_ERROR', ' <span class="errorText">al menos ' . (defined('ENTRY_LAST_NAME_MIN_LENGTH') ? ENTRY_LAST_NAME_MIN_LENGTH : 0) . ' cartas</span>');
define('ENTRY_DATE_OF_BIRTH', 'Fecha de nacimiento:');
define('ENTRY_DATE_OF_BIRTH_ERROR', ' <span class="errorText">(por ejemplo, 21.05.1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'Dirección de correo electrónico:');
define('ENTRY_EMAIL_ADDRESS_ERROR', ' <span class="errorText">al menos ' . (defined('ENTRY_EMAIL_ADDRESS_MIN_LENGTH') ? ENTRY_EMAIL_ADDRESS_MIN_LENGTH : 0) . ' cartas</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '¡ <span class="errorText">dirección de correo electrónico no válida! (Actualmente no se admiten las diéresis en las direcciones de correo electrónico).</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '¡ <span class="errorText">Esta dirección de correo electrónico ya existe!</span>');
define('ENTRY_COMPANY', 'Nombre de la empresa:');
define('ENTRY_STREET_ADDRESS', 'Stra&szlig;e:');
define('ENTRY_STREET_ADDRESS_ERROR', ' <span class="errorText">al menos ' . (defined('ENTRY_STREET_ADDRESS_MIN_LENGTH') ? ENTRY_STREET_ADDRESS_MIN_LENGTH : 0) . ' cartas</span>');
define('ENTRY_SUBURB', 'Otras direcciones:');
define('ENTRY_POST_CODE', 'Código postal:');
define('ENTRY_POST_CODE_ERROR', ' <span class="errorText">al menos ' . (defined('ENTRY_POSTCODE_MIN_LENGTH') ? ENTRY_POSTCODE_MIN_LENGTH : 0) . ' Números</span>');
define('ENTRY_CITY', 'Ciudad:');
define('ENTRY_CITY_ERROR', ' <span class="errorText">al menos ' . (defined('ENTRY_CITY_MIN_LENGTH') ? ENTRY_CITY_MIN_LENGTH : 0) . ' cartas</span>');
define('ENTRY_STATE', 'Estado:');
define('ENTRY_STATE_ERROR', '<span class="errorText">aportación necesaria</font></small>');
define('ENTRY_COUNTRY', 'País:');
define('ENTRY_COUNTRY_ERROR', 'Seleccione su país en la lista.');
define('ENTRY_TELEPHONE_NUMBER', 'Número de teléfono:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', ' <span class="errorText">al menos ' . (defined('ENTRY_TELEPHONE_MIN_LENGTH') ? ENTRY_TELEPHONE_MIN_LENGTH : 0) . ' Números</span>');
define('ENTRY_FAX_NUMBER', 'Número de fax:');
define('ENTRY_NEWSLETTER', 'Boletín de noticias:');
define('ENTRY_CUSTOMERS_STATUS', 'Grupo de clientes:');
define('ENTRY_NEWSLETTER_YES', 'suscrito');
define('ENTRY_NEWSLETTER_NO', 'No suscrito');
define('ENTRY_MAIL_ERROR', 'Por <span class="errorText">favor, haga una selección</span>');
define('ENTRY_PASSWORD', 'Contraseña (creada autom.)');
define('ENTRY_PASSWORD_ERROR', ' <span class="errorText">Su contraseña debe constar al menos de ' . (defined('ENTRY_PASSWORD_MIN_LENGTH') ? ENTRY_PASSWORD_MIN_LENGTH : 0) . ' personajes.</span>');
define('ENTRY_MAIL_COMMENTS', 'Texto adicional del correo electrónico:');

define('ENTRY_MAIL', '¿Enviar correo electrónico con contraseña a los clientes?');
define('YES', 'ja');
define('NO', 'no');
define('SAVE_ENTRY', '¿Guardar cambios?');
define('TEXT_CHOOSE_INFO_TEMPLATE', 'Plantilla de detalles del artículo');
define('TEXT_CHOOSE_OPTIONS_TEMPLATE', 'Plantilla de opciones de artículos');
define('TEXT_SELECT', '-- Por favor, seleccione --');
define('PULL_DOWN_DEFAULT', 'Por favor, seleccione');

define('ICON_ARROW_RIGHT', 'marcas');
define('ICON_BIG_WARNING', '¡Atención!');
define('ICON_CROSS', 'Incorrecto');
define('ICON_CURRENT_FOLDER', 'Carpeta actual');
define('ICON_DELETE', 'Borrar');
define('ICON_EDIT', 'Edite');
define('ICON_ERROR', 'Error');
define('ICON_FILE', 'Archivo');
define('ICON_FILE_DOWNLOAD', 'Descargar');
define('ICON_FOLDER', 'Carpeta');
define('ICON_LOCKED', 'Bloqueado');
define('ICON_POPUP', 'Vista previa del banner');
define('ICON_PREVIOUS_LEVEL', 'Nivel anterior');
define('ICON_PREVIEW', 'Vista previa');
define('ICON_STATISTICS', 'Estadísticas');
define('ICON_SUCCESS', 'Éxito');
define('ICON_TICK', 'Verdadero');
define('ICON_UNLOCKED', 'Desbloqueado');
define('ICON_WARNING', 'Advertencia');

define('TEXT_RESULT_PAGE', 'Página %s de %d');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Se muestran de <b>%d</b> a <b>%d</b> (de un total de <b>%d</b> banners)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Se muestran de <b>%d</b> a <b>%d</b> (de un total de <b>%d</b> países)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Se muestran de <b>%d</b> a <b>%d</b> (de un total de <b>%d</b> clientes)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Se muestran de <b>%d</b> a <b>%d</b> (de un total de <b>%d</b> monedas).');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Se muestran de <b>%d</b> a <b>%d</b> (de un total de <b>%d</b> lenguas)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Se muestran de <b>%d</b> a <b>%d</b> (de un total de <b>%d</b> fabricantes)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Se muestran de <b>%d</b> a <b>%d</b> (de un total de <b>%d</b> boletines)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS_RECIPIENTS', 'Se muestran de <b>%d</b> a <b>%d</b> (de un total de <b>%d</b> destinatarios del boletín).');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Se muestran de <b>%d</b> a <b>%d</b> (de un total de <b>%d</b> pedidos).');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Se muestran de <b>%d</b> a <b>%d</b> (de un total de <b>%d</b> estados de pedido)');
define('TEXT_DISPLAY_NUMBER_OF_XSELL_GROUP', 'Se muestran de <b>%d</b> a <b>%d</b> (de un total de <b>%d</b> grupos de comercialización cruzada)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_VPE', 'Se muestran de <b>%d</b> a <b>%d</b> (de un total de <b>%d</b> unidades de envasado).');
define('TEXT_DISPLAY_NUMBER_OF_SHIPPING_STATUS', 'Se muestran de <b>%d</b> a <b>%d</b> (de un total de <b>%d</b> estados de entrega).');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Se muestran de <b>%d</b> a <b>%d</b> (de un total de <b>%d</b> elementos)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Se muestran de <b>%d</b> a <b>%d</b> (de un total de <b>%d</b> elementos previstos)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Se muestran de <b>%d</b> a <b>%d</b> (de un total de <b>%d</b> reseñas)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Se muestran de <b>%d</b> a <b>%d</b> (de un total de <b>%d</b> ofertas especiales)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Se muestran de <b>%d</b> a <b>%d</b> (de un total de <b>%d</b> clases de impuestos)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Se muestran de <b>%d</b> a <b>%d</b> (de un total de <b>%d</b> zonas fiscales).');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Se muestran de <b>%d</b> a <b>%d</b> (de un total de <b>%d</b> tipos impositivos).');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Se muestran de <b>%d</b> a <b>%d</b> (de un total de <b>%d</b> estados federales)');
define('TEXT_DISPLAY_NUMBER_OF_WHOS_ONLINE', 'Se muestran de <b>%d</b> a <b>%d</b> (de un total de <b>%d</b> clientes que están en línea)');

define('PREVNEXT_BUTTON_PREV', '&laquo;');
define('PREVNEXT_BUTTON_NEXT', '&raquo;');

define('TEXT_DEFAULT', 'Estándar');
define('TEXT_SET_DEFAULT', 'Definir como estándar');
define('TEXT_FIELD_REQUIRED', ' <span class="fieldRequired">* Requerido</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Error: No se ha definido ninguna moneda por defecto. Por favor, defina una moneda por defecto en Administración -&gt; Idiomas/Monedas -&gt; Monedas.');

define('TEXT_CACHE_CATEGORIES', 'Categorías Caja');
define('TEXT_CACHE_MANUFACTURERS', 'Caja del fabricante');
define('TEXT_CACHE_ALSO_PURCHASED', 'Módulo también adquirido');

define('TEXT_NONE', '--ninguno--');
define('TEXT_AUTO_PROPORTIONAL', '--autoproporcional--');
define('TEXT_AUTO_MAX', '--auto max--');
define('TEXT_TOP', 'Top');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Error: El almacén no existe.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Error: La ubicación de almacenamiento no es escribible.');
define('ERROR_FILE_NOT_SAVED', 'Error: El archivo no se ha guardado.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Error: El tipo de archivo no está permitido.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Éxito: El archivo cargado se ha guardado correctamente.');
define('WARNING_NO_FILE_UPLOADED', 'Advertencia: No se ha cargado ningún archivo.');
define('ERROR_FILE_NOT_REMOVEABLE', 'Error: No se ha podido eliminar el archivo.');

define('DELETE_ENTRY', '¿Borrar entrada?');
define('TEXT_PAYMENT_ERROR', '<b>ATENCIÓN:</b> ¡Active un <a href="%s">módulo de pago</a>!');
define('TEXT_SHIPPING_ERROR', '<b>ADVERTENCIA:</b> ¡Active un <a href="%s">módulo de envío</a>!');
define('TEXT_PAYPAL_CONFIG', '<b>ADVERTENCIA:</b> Por favor, configure el módulo de pago de PayPal para el "modo activo": <a href="%s"><strong>Socio -&gt; PayPal</strong></a>'); //DokuMan - 2012-05-31 - mostrar advertencia si el módulo de pago de PayPal está activado, pero no está configurado para el modo en directo yet
define('TEXT_NETTO', 'Neto: ');
define('TEXT_DUPLICATE_CONFIG_ERROR', '<b>ADVERTENCIA:</b> Clave de configuración duplicada: ');

define('ENTRY_CID', 'Número de cliente:');
define('IP', 'Pedir IP:');
define('CUSTOMERS_MEMO', 'Memos:');
define('DISPLAY_MEMOS', 'Visualización/Escritura');
define('TITLE_MEMO', 'Clientes MEMO');
define('ENTRY_LANGUAGE', 'Idioma:');
define('CATEGORIE_NOT_FOUND', 'Categoría no disponible');

define('IMAGE_RELEASE', 'Canjear vale');
define('IMAGE_ICON_STATUS_GREEN_STOCK', 'en stock');
define('IMAGE_ICON_STATUS_GREEN', 'activo');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'active');
define('IMAGE_ICON_STATUS_RED', 'inactivo');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'desactivar');
define('IMAGE_ICON_INFO', 'seleccione');

define('_JANUARY', 'Enero');
define('_FEBRUARY', 'Febrero');
define('_MARCH', 'Marzo');
define('_APRIL', 'Abril');
define('_MAY', 'Mai');
define('_JUNE', 'Junio');
define('_JULY', 'Julio');
define('_AUGUST', 'Agosto');
define('_SEPTEMBER', 'Septiembre');
define('_OCTOBER', 'Octubre');
define('_NOVEMBER', 'Noviembre');
define('_DECEMBER', 'Diciembre');

define('TEXT_NEWSLETTER_REMOVE', 'Para darse de baja de nuestro boletín pulse aquí:');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Se muestran de <b>%d</b> a <b>%d</b> (de un total de <b>%d</b> vales)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Se muestran de <b>%d</b> a <b>%d</b> (de un total de <b>%d</b> cupones)');
define('TEXT_VALID_PRODUCTS_LIST', 'Listas de artículos');
define('TEXT_VALID_PRODUCTS_ID', 'ID del artículo');
define('TEXT_VALID_PRODUCTS_NAME', 'Nombre del artículo');
define('TEXT_VALID_PRODUCTS_MODEL', 'Nº de artículo');

define('TEXT_VALID_CATEGORIES_LIST', 'Lista de categorías');
define('TEXT_VALID_CATEGORIES_ID', 'Categoría ID');
define('TEXT_VALID_CATEGORIES_NAME', 'Nombre de la categoría');

define('TXT_ALL', 'Todos');

define('HEADING_TITLE_VAT', 'USt-IdNr.');
define('ENTRY_VAT_ID', 'USt-IdNr:');
define('ENTRY_CUSTOMERS_VAT_ID', 'USt-IdNr:');
define('TEXT_VAT_FALSE', '<span class="messageStackError">Comprobado/¡USt-IdNr. no es válido!</span>');
define('TEXT_VAT_TRUE', '<span class="messageStackSuccess">Auditado/USt-IdNr. es válido</span>');
define('TEXT_VAT_UNKNOWN_COUNTRY', '<span class="messageStackError">No probado/país desconocido</span>');
define('TEXT_VAT_INVALID_INPUT', '<span class="messageStackError">No comprobado/El código de país transferido no es válido o el número de identificación a efectos del IVA está vacío.</span>');
define('TEXT_VAT_SERVICE_UNAVAILABLE', '<span class="messageStackError">No comprobado/El servicio SOAP no está localizable, inténtelo de nuevo más tarde.</span>');
define('TEXT_VAT_MS_UNAVAILABLE', '<span class="messageStackError">No comprobado/Servicio del estado miembro no disponible, inténtelo de nuevo más tarde o con otro estado miembro.</span>');
define('TEXT_VAT_TIMEOUT', '<span class="messageStackError">No comprobado/No se ha podido contactar con el servicio del estado miembro (tiempo de espera), inténtelo de nuevo más tarde o con otro estado miembro.</span>');
define('TEXT_VAT_SERVER_BUSY', '<span class="messageStackError">No marcado/El servicio no puede procesar su solicitud. Vuelva a intentarlo más tarde.</span>');
define('TEXT_VAT_NO_PHP5_SOAP_SUPPORT', '<span class="messageStackError">¡No comprobado/el soporte para PHP5 SOAP no está disponible!</span>');
define('TEXT_VAT_CONNECTION_NOT_POSSIBLE', '<span class="messageStackError">ERROR: ¡No es posible la conexión con el servicio web (ERROR SOAP)!</span>');

define('ERROR_GIF_MERGE', 'Falta soporte GDlib Gif, no es posible la marca de agua (fusión)');
define('ERROR_GIF_UPLOAD', 'Falta soporte GDlib Gif, no es posible subir imágenes GIF');

define('BOX_GOOGLE_SITEMAP', 'Mapa del sitio de Google');
define('BOX_PAYPAL', 'PayPal');

define('_PAYMENT_MONEYBOOKERS_EMAILID_TITLE', 'Dirección de correo electrónico de Skrill');
define('_PAYMENT_MONEYBOOKERS_EMAILID_DESC', 'Dirección de correo electrónico con la que está registrado en Skrill.com.<br />Si aún no tiene una cuenta, <b>regístrese</b> ahora en <a href="https://account.skrill.com/signup/page1" target="_blank"><b>Skrill</b></a> <b>gratis</b>.');
define('_PAYMENT_MONEYBOOKERS_MERCHANTID_TITLE', 'ID de comerciante de Skrill');
define('_PAYMENT_MONEYBOOKERS_MERCHANTID_DESC', 'Su ID de comerciante de Skrill.com');
define('_PAYMENT_MONEYBOOKERS_PWD_TITLE', 'Palabra secreta de Skrill');
define('_PAYMENT_MONEYBOOKERS_PWD_DESC', '<span>Al introducir la palabra secreta, la conexión se encripta durante el proceso de pago. Esto garantiza el máximo nivel de seguridad. Introduzca su palabra secreta de Skrill (¡no es su contraseña!). La palabra secreta sólo puede constar de letras minúsculas y números. Puede</span> definir<span>su palabra secreta <b><span class="col-red">tras la activación en</span></b></span> su cuenta de usuario de Skrill (configuración del comerciante).<br /><br /><span class="col-red">¡Cómo activar su cuenta Skrill.com para el procesamiento de pagos!</span><br /><br />Envíe un correo electrónico con:<br/>- el dominio de su tienda<br/>- su dirección de correo electrónico de Skrill<br /><br />A: <a href="mailto:ecommerce@skrill.com?subject=modified eCommerce Shopsoftware: Aktivierung fuer Skrill Quick Checkout">ecommerce@skrill.com</a>');
define('_PAYMENT_MONEYBOOKERS_TMP_STATUS_ID_TITLE', 'Estado del pedido - Proceso de pago');
define('_PAYMENT_MONEYBOOKERS_TMP_STATUS_ID_DESC', ' En cuanto el cliente pulsa "Enviar pedido" en la tienda, se crea un "pedido temporal". Esto tiene la ventaja de que se registra un pedido para los clientes que cancelan el proceso de pago en Moneybookes.');
define('_PAYMENT_MONEYBOOKERS_PROCESSED_STATUS_ID_TITLE', 'Estado del pedido - Pago OK');
define('_PAYMENT_MONEYBOOKERS_PROCESSED_STATUS_ID_DESC', 'Aparece cuando el pago ha sido confirmado por Skrill.');
define('_PAYMENT_MONEYBOOKERS_PENDING_STATUS_ID_TITLE', 'Estado del pedido - pago en espera');
define('_PAYMENT_MONEYBOOKERS_PENDING_STATUS_ID_DESC', 'Si el cliente no tiene fondos en su cuenta, el pago se mantiene pendiente hasta que se liquide la cuenta de Skrill.');
define('_PAYMENT_MONEYBOOKERS_CANCELED_STATUS_ID_TITLE', 'Estado del pedido - Pago cancelado');
define('_PAYMENT_MONEYBOOKERS_CANCELED_STATUS_ID_DESC', 'Aparecerá si, por ejemplo, se ha rechazado una tarjeta de crédito');
define('MB_ERROR_NO_MERCHANT', 'No existe ninguna cuenta de Skrill.com con esta dirección de correo electrónico.');
define('MB_MERCHANT_OK', 'Cuenta de Skrill.com correcta, ID de comerciante %s recibido y almacenado por Skrill.com.');
define('MB_INFO', '<img src="../images/icons/moneybookers/MBbanner.jpg" /><br /><br />Ahora puede aceptar directamente tarjetas de crédito, débito directo, Sofort, Giropay y todas las demás opciones de pago locales importantes, con una simple activación en la tienda. Con Skrill como solución "todo en uno", no necesitará concluir contratos individuales para cada método de pago. Sólo necesita uno <a href="https://account.skrill.com/signup/page1" target="_blank"><b>cuenta Skrill gratuita</b></a>para aceptar todas las opciones de pago importantes en su tienda. Las formas de pago adicionales son gratuitas, el módulo no incluye <b>costes fijos mensuales ni costes de instalación</b>.<br /><br /><b>Sus ventajas:</b><br />-La aceptación de las opciones de pago más importantes aumenta su volumen de negocio<br />-Un solo proveedor reduce sus esfuerzos y sus costes<br />-Su cliente paga directamente y sin procedimiento de registro<br />-Activación e integración con un solo clic<br />-Muy atractivo <a href="https://www.skrill.com/de/fees/" target="_blank"><b>Condiciones</b></a> <br /> Confirmación inmediata del pago y verificación de los datos del cliente<br />-Procesamiento de pagos también en el extranjero y sin costes adicionales<br />-6 millones de clientes en todo el mundo confían en Skrill');

define('BOX_CUSTOMERS_GROUP', 'Autorizaciones KG');

define('TEXT_ADMIN_START', 'Inicie');
define('BOX_HEADING_CONFIGURATION2', 'Configuración avanzada');

define('ASB_QUICK_SEARCH_CUSTOMER', 'Buscar clientes...');
define('ASB_QUICK_SEARCH_ORDER', 'Orden de búsqueda...');
define('ASB_QUICK_SEARCH_ORDER_ID', 'Buscar número de pedido...');
define('ASB_QUICK_SEARCH_ARTICLE', 'Buscar artículo/categoría...');
define('ASB_QUICK_SEARCH_EMAIL', 'Buscar dirección de correo electrónico...');
define('ASB_QUICK_SEARCH_ARTICLE_ID', 'Buscar artículo/categoría ID...');
define('ASB_QUICK_SEARCH_ORDER_OR_INVOICE', 'Número de orden de búsqueda /Rg.No....');

define('BUTTON_SET', 'Activar todos');
define('BUTTON_UNSET', 'Desactivar todo');

define('TEXT_ROWS', 'Línea');
define('TABLE_HEADING_RESET', 'Restablecer estadísticas');

define('BUTTON_CLOSE_WINDOW', 'Cerrar ventana');

define('ENTRY_INVOICE_NUMBER', 'Número de factura:');
define('ENTRY_INVOICE_DATE', 'Fecha de la factura:');

define('ENTRY_VAT_ERROR', '&nbsp;<span class="errorText">Número de IVA no válido</span>');

define('CONFIG_INT_VALUE_ERROR', '"%s" ERROR: ¡Introduzca sólo números! ¡La entrada %s ha sido ignorada!');
define('CONFIG_MAX_VALUE_WARNING', '"%s" ADVERTENCIA: ¡La entrada %s ha sido ignorada! [Máximo: %s]');
define('CONFIG_MIN_VALUE_WARNING', '"%s" ADVERTENCIA: ¡La entrada %s ha sido ignorada! [Mínimo: %s]');

define('WHOS_ONLINE_TIME_LAST_CLICK_INFO', 'Periodo de visualización en segundos: %s. Transcurrido este tiempo, las entradas se borran.');

define('TEXT_GLOBAL_PRODUCTS_MODEL', 'Nº de artículo');

define('TEXT_INFO_MODULE_RESTORE', '¿Desea restaurar los ajustes guardados?<br /><br /><b>ATENCIÓN</b>: ¡Todos los ajustes actuales se sobrescribirán!');
define('TEXT_INFO_MODULE_REMOVE', '¿Desea desinstalar el módulo?<br /><br /><b>ATENCIÓN</b>: ¡También se borrarán todos los ajustes del módulo!');
define('TEXT_INFO_MODULE_BACKUP', '¿Desea guardar la configuración del módulo?');
define('MODULE_BACKUP_CONFIRM', '¡Los ajustes del módulo se han guardado correctamente!');
define('MODULE_RESTORE_CONFIRM', '¡Los ajustes del módulo se han restaurado con éxito!');
define('MODULE_UPDATE_CONFIRM', '¡La configuración del módulo se ha actualizado correctamente!');

define('BOX_HEADING_MAGNALISTER', 'magnalister');
define('BOX_MAGNALISTER', 'magnalister Admin');

define('CHARS_LEFT', 'Zeichen &uuml;brig');
define('CHARS_MAX', 'von max.');

define('DISPLAY_PER_PAGE', 'Anzeige pro Seite: ');

define('SPECIALS_DATE_START_TT', 'Angebote starten um 00:00:00 Uhr');
define('SPECIALS_DATE_END_TT', 'Angebote enden um Mitternacht (23:59:59 Uhr)');

define('BOX_PARCEL_CARRIERS', 'Paketdienstleister');
define('TEXT_DISPLAY_NUMBER_OF_CARRIERS', 'Angezeigt werden <b>%d</b> bis <b>%d</b> (von insgesamt <b>%d</b> Paketdienstleister)');

define('RSS_FEED_TITLE', 'Aktuelle Information von modified eCommerce Shopsoftware Blog');
define('RSS_FEED_DESCRIPTION', 'Aktuelle Information von modified eCommerce Shopsoftware Support Forum');
define('RSS_FEED_LINK', 'http://www.modified-shop.org/blog');
define('RSS_FEED_ALTERNATIVE', 'Leider k&ouml;nnen die aktuellen Neuigkeiten nicht im RSS Feed dargestellt werden. Bitte besuchen Sie unseren Blog unter <a href="' . RSS_FEED_LINK . '">www.modified-shop.org/blog</a> um wichtige Informationen f&uuml;r Shopbetreiber zu diesen Themen zu erfahren: <ul><li>Wichtige Updates und Fixes</li><li>Funktionserweiterungen</li><li>Rechtsprechungen</li><li>Neuigkeiten</li><li>Klatsch und Tratsch</li></ul>');
define('RSS_FEED_NOT_REACHABLE', 'Der Newsfeed konnte seit einem l&auml;ngeren Zeitraum nicht aktualisiert werden.<br>Verpassen Sie keine wichtigen Nachrichten, Angebote, uvm. und besuchen uns unter <a target="_blank" href="https://www.modified-shop.org/blog">www.modified-shop.org/blog</a><br>');
define('TEXT_DISPLAY_NUMBER_OF_NEWSFEED', 'Angezeigt werden <b>%d</b> bis <b>%d</b> (von insgesamt <b>%d</b> News)');

define('CFG_TXT_YES', 'Ja');
define('CFG_TXT_NO', 'Nein');
define('CFG_TXT_OR', 'oder');
define('CFG_TXT_AND', 'und');
define('CFG_TXT_ASC', 'aufsteigend');
define('CFG_TXT_DESC', 'absteigend');
define('CFG_TXT_PRODUCTS_NAME', 'Artikelname');
define('CFG_TXT_PRODUCTS_MODEL', 'Artikelnummer');
define('CFG_TXT_DATE_EXPECTED', 'verf&uuml;gbar ab');
define('CFG_TXT_ACCOUNT', 'Kundenkonto');
define('CFG_TXT_GUEST', 'Gastkonto');
define('CFG_TXT_BOTH', 'beides');
define('CFG_TXT_NONE', 'deaktiviert');
define('CFG_TXT_ADMIN', 'Admin');
define('CFG_TXT_ALL', 'alle');
define('CFG_TXT_WEIGHT', 'Gewicht');
define('CFG_TXT_PRICE', 'Preis');
define('CFG_TXT_ITEM', 'St&uuml;ck');
define('CFG_TXT_WHOS_ONLINE', 'Online');
define('CFG_TXT_ORDERS', 'Bestellungen');
define('CFG_TXT_CUSTOMERS', 'Kunden');
define('CFG_TXT_SALES_REPORT', 'Statistik');
define('CFG_TXT_BLOG', 'Blog');
define('CFG_TXT_P.PRODUCTS_PRICE', 'Preis');
define('CFG_TXT_PD.PRODUCTS_NAME', 'Artikelname');
define('CFG_TXT_P.PRODUCTS_DATE_ADDED', 'Einstelldatum');
define('CFG_TXT_P.PRODUCTS_MODEL', 'Artikelnummer');
define('CFG_TXT_P.PRODUCTS_ORDERED', 'Bestellte Artikel');
define('CFG_TXT_P.PRODUCTS_SORT', 'Sortierreihenfolge');
define('CFG_TXT_P.PRODUCTS_WEIGHT', 'Gewicht');
define('CFG_TXT_P.PRODUCTS_QUANTITY', 'Auf Lager');
define('CFG_TXT_S.SPECIALS_DATE_ADDED', 'Einstelldatum');

define('CSRF_TOKEN_MANIPULATION', 'CSRFToken Manipulation (Aus Sicherheits-Aspekten ist es nicht mehr erlaubt im Adminbereich in verschiedenen Tabs zu arbeiten.)');
define('CSRF_TOKEN_NOT_DEFINED', 'CSRFToken nicht definiert (Aus Sicherheits-Aspekten ist es nicht mehr erlaubt im Adminbereich in verschiedenen Tabs zu arbeiten.)');

define('TEXT_ACCOUNTING_INFO', 'Dem Hauptadmin [1] k&ouml;nnen die Zugriffsrechte nicht entzogen werden!');

define('JAVASCRIPT_DISABLED_INFO', 'JavaScript ist in Ihrem Browser deaktiviert. Aktivieren Sie JavaScript, um alle Funktionen dieser Webseite nutzen und alle Inhalte sehen zu k&ouml;nnen.');

define('BOX_MODULE_TYPE', 'Klassenerweiterungen Module');

define('MULTIPLE_INSTALLATION', '<span style="color:red">[Mehrfachinstallation: %s]</span>');

define('FILEUPLOAD_INPUT_TXT', 'Keine Datei');
define('FILEUPLOAD_BTN_TXT', 'Durchsuchen');

define('CHECK_LABEL_PRICE', 'Preis abfragen');

define('TEXT_PAYPAL_TAB_CONFIG', 'PayPal Konfiguration');
define('TEXT_PAYPAL_TAB_PROFILE', 'PayPal Profil');
define('TEXT_PAYPAL_TAB_WEBHOOK', 'PayPal Webhook');
define('TEXT_PAYPAL_TAB_MODULE', 'PayPal Produkte');
define('TEXT_PAYPAL_TAB_INFO', 'PayPal Informationen');

define('TEXT_DEFAULT_SORT_ORDER_TITLE', 'Sortierreihenfolge');
define('TEXT_DEFAULT_SORT_ORDER_DESC', 'Reihenfolge der Verarbeitung. Kleinste Ziffer wird zuerst ausgef&uuml;hrt.');
define('TEXT_DEFAULT_STATUS_TITLE', 'Modul aktivieren?');
define('TEXT_DEFAULT_STATUS_DESC', 'Modul Status');

define('TEXT_HOUR', 'Stunde');
define('TEXT_HOURS', 'Stunden');

define('DELETE_LOGS_SUCCESSFUL', 'Logfiles erfolgreich gel&ouml;scht.');

define('BOX_BLACKLIST_LOGS', 'Blacklist Logs');

define('CONTINUE_WITHOUT_SAVE', 'Nicht gespeicherte &Auml;nderungen gehen verloren.');

define('TEXT_SORT_ASC', 'aufsteigend');
define('TEXT_SORT_DESC', 'absteigend');

define('MSRP', 'UVP');
define('YOUR_PRICE', 'Ihr Preis ');
define('UNIT_PRICE', 'St&uuml;ckpreis ');
define('ONLY', ' Jetzt nur ');
define('FROM', 'ab ');
define('YOU_SAVE', 'Sie sparen ');
define('INSTEAD', 'Unser bisheriger Preis ');
define('TXT_PER', ' pro ');
define('TEXT_NO_PAYMENT', 'Keine Zahlart');
