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

$extra_files = auto_include(DIR_WS_LANGUAGES . 'spanish/extra/', 'php');

foreach ($extra_files as $extra_file) {
    require $extra_file;
}

/**
 * Translations
 */
define('TITLE', STORE_NAME);
define('HEADER_TITLE_TOP', 'Página principal');
define('HEADER_TITLE_CATALOG', 'Catálogo');

define('MALE', 'Sr.');
define('FEMALE', 'Sra./Srta.');
define('DIVERSE', 'Diverso');

/**
 * Boxes
 */
define('IMAGE_REDEEM_GIFT', 'Canjee su cheque regalo');

define('BOX_TITLE_STATISTICS', 'Estadísticas:');
define('BOX_ENTRY_CUSTOMERS', 'Clientes:');
define('BOX_ENTRY_PRODUCTS', 'Productos:');
define('BOX_ENTRY_REVIEWS', 'Reseñas:');
define('TEXT_VALIDATING', 'No validado');

define('BOX_MANUFACTURER_INFO_HOMEPAGE', 'Página de inicio de %s');
define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Más productos');

define('BOX_HEADING_ADD_PRODUCT_ID', 'Añadir a la cesta');

define('BOX_LOGINBOX_STATUS', 'Grupo de clientes:');
define('BOX_LOGINBOX_DISCOUNT', 'Descuento del producto');
define('BOX_LOGINBOX_DISCOUNT_TEXT', 'Descuento');
define('BOX_LOGINBOX_DISCOUNT_OT', '');

define('BOX_REVIEWS_WRITE_REVIEW', 'Revisar este producto');
define('BOX_REVIEWS_NO_WRITE_REVIEW', 'No hay revisión posible.');
define('BOX_REVIEWS_TEXT_OF_5_STARS', '¡%s de 5 estrellas!');

define('PULL_DOWN_DEFAULT', 'Por favor, elija');

define('JS_ERROR', 'Falta información necesaria. Por favor, rellene todo.\n\n');
define('JS_REVIEW_TEXT', '* El texto debe constar de al menos ' . REVIEW_TEXT_MIN_LENGTH . ' caracteres.\n\n');
define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Elija una forma de pago para su pedido.\n');
define('ERROR_NO_PAYMENT_MODULE_SELECTED', '* Elija una forma de pago para su pedido.');
define('JS_ERROR_NO_SHIPPING_MODULE_SELECTED', '* Elija un método de envío para su pedido.\n');
define('JS_ERROR_CONDITIONS_NOT_ACCEPTED', '* Si no tiene en cuenta nuestras condiciones generales, lamentamos no poder aceptar su pedido.\n\n');
define('JS_ERROR_REVOCATION_NOT_ACCEPTED', '* Si no acepta la renuncia al derecho de desistimiento para los artículos virtuales, lamentamos no poder aceptar su pedido.\n\n');
define('JS_ERROR_PRIVACY_NOTICE_NOT_ACCEPTED', '* Si no tiene en cuenta nuestras normas de protección de datos, lamentamos no poder aceptar su pedido.\n\n');

/**
 * Account forms
 */
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER_ERROR', 'Seleccione su saludo.');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME_ERROR', 'Su nombre debe constar de al menos ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres.');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME_ERROR', 'Su apellido debe constar de al menos ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres.');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Su fecha de nacimiento debe introducirse en el formato DD.MM.AAAA (por ejemplo, 21.05.1970).');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (por ejemplo, 21.05.1970)');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Su dirección de correo electrónico debe tener al menos ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caracteres.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'La dirección de correo electrónico introducida es incorrecta o ya está registrada.');
define('ENTRY_EMAIL_ERROR_NOT_MATCHING', 'Sus direcciones de correo electrónico no son correctas.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'La dirección de correo electrónico que ha introducido ya existe - por favor, compruébela.');
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_STREET_ADDRESS_ERROR', 'La calle/número debe constar de al menos ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres.');
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE_ERROR', 'Su código postal debe constar de al menos ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres.');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY_ERROR', 'El lugar debe constar de al menos ' . ENTRY_CITY_MIN_LENGTH . ' caracteres.');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE_ERROR', 'Su estado debe constar de al menos ' . ENTRY_STATE_MIN_LENGTH . ' caracteres.');
define('ENTRY_STATE_ERROR_SELECT', 'Seleccione su Estado federado en la lista.');
define('ENTRY_STATE_TEXT', '*');
define('ENTRY_COUNTRY_ERROR', 'Seleccione su país en la lista.');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Su número de teléfono debe constar de al menos ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caracteres.');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_PASSWORD_ERROR', 'Su contraseña debe tener al menos ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.');
define('ENTRY_PASSWORD_ERROR_MIN_LOWER', 'Su contraseña debe contener al menos %s letras minúsculas.');
define('ENTRY_PASSWORD_ERROR_MIN_UPPER', 'Su contraseña debe contener al menos %s letras mayúsculas.');
define('ENTRY_PASSWORD_ERROR_MIN_NUM', 'Su contraseña debe contener al menos el número %s.');
define('ENTRY_PASSWORD_ERROR_MIN_CHAR', 'Su contraseña debe contener al menos %s caracteres especiales.');
define('ENTRY_PASSWORD_ERROR_INVALID_CHAR', 'Su contraseña contiene caracteres no válidos. Utilice una contraseña diferente.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Sus contraseñas no son correctas.');
define('ENTRY_PASSWORD_TEXT', '*');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'Su contraseña actual no debe estar en blanco.');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'Tu nueva contraseña debe tener al menos ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Sus contraseñas no son correctas.');

/**
 * Result pages
 */
define('TEXT_RESULT_PAGE', 'Sitios:');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Mostrar <strong>%d</strong> a <strong>%d</strong> (del total de <strong>%d</strong> elementos)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Mostrar <strong>%d</strong> a <strong>%d</strong> (del total de <strong>%d</strong> pedidos)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Mostrar <strong>%d</strong> a <strong>%d</strong> (de un total de <strong>%d</strong> opiniones)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Mostrar <strong>%d</strong> a <strong>%d</strong> (de un total de <strong>%d</strong> nuevos elementos)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Mostrar <strong>%d</strong> a <strong>%d</strong> (de un total de <strong>%d</strong> ofertas)');

/**
 * Site navigation
 */
define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'página anterior');
define('PREVNEXT_TITLE_NEXT_PAGE', 'página siguiente');
define('PREVNEXT_TITLE_PAGE_NO', 'Página %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Páginas %d anteriores');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Próximas %d páginas');

/**
 * Product navigation
 */
define('PREVNEXT_BUTTON_PREV', '&laquo;');
define('PREVNEXT_BUTTON_NEXT', '&raquo;');

/**
 * Image buttons
 */
define('IMAGE_BUTTON_ADD_ADDRESS', 'Nueva dirección');
define('IMAGE_BUTTON_BACK', 'Volver');
define('IMAGE_BUTTON_CHANGE_ADDRESS', 'Cambiar dirección');
define('IMAGE_BUTTON_CHECKOUT', 'Pedido');
define('IMAGE_BUTTON_CONFIRM_ORDER', 'Comprar');
define('IMAGE_BUTTON_CONTINUE', 'Continuar');
define('IMAGE_BUTTON_DELETE', 'Borrar');
define('IMAGE_BUTTON_LOGIN', 'Conectarse');
define('IMAGE_BUTTON_IN_CART', 'Añadir a la cesta');
define('IMAGE_BUTTON_SEARCH', 'Buscar');
define('IMAGE_BUTTON_UPDATE', 'Actualización');
define('IMAGE_BUTTON_UPDATE_CART', 'Actualizar la cesta de la compra');
define('IMAGE_BUTTON_WRITE_REVIEW', 'Su opinión');
define('IMAGE_BUTTON_ADMIN', 'Admin');
define('IMAGE_BUTTON_PRODUCT_EDIT', 'Editar producto');
define('IMAGE_BUTTON_SEND', 'Enviar');
define('IMAGE_BUTTON_CONTINUE_SHOPPING', 'Seguir comprando');
define('IMAGE_BUTTON_CHECKOUT_STEP2', 'Continúe en el paso 2');
define('IMAGE_BUTTON_CHECKOUT_STEP3', 'Continúe en el paso 3');

define('SMALL_IMAGE_BUTTON_DELETE', 'Borrar');
define('SMALL_IMAGE_BUTTON_EDIT', 'Cambia');
define('SMALL_IMAGE_BUTTON_VIEW', 'Ver');

define('ICON_ARROW_RIGHT', 'Ver más');
define('ICON_CART', 'Añadir a la cesta');
define('ICON_SUCCESS', 'Éxito');
define('ICON_WARNING', 'Advertencia');
define('ICON_ERROR', 'Error');

define('TEXT_PRINT', 'Imprimir');

define('BUTTON_RESET', 'Restablecer');
define('BUTTON_UPDATE', 'Actualización');

/**
 * Greetings
 */
define('TEXT_GREETING_PERSONAL', 'Me alegro de tenerte de vuelta, <span class="greetUser">%s!</span> ¿Te gustaría ver nuestros <a href="%s">nuevos artículos</a>?');
define('TEXT_GREETING_PERSONAL_RELOGON', '<small>Si no eres %s, por favor <a href="%s">conéctate aquí</a> con tus datos de acceso.</small>');
define('TEXT_GREETING_GUEST', 'Bienvenido <span class="greetUser">invitado!</span> ¿Desea <a href="%s">registrarse</a>? ¿O quieres abrir una <a href="%s">cuenta de cliente</a>?');

define('TEXT_SORT_PRODUCTS', 'La clasificación de los artículos es ');
define('TEXT_DESCENDINGLY', 'descendente');
define('TEXT_ASCENDINGLY', 'ascendente');
define('TEXT_BY', ' a ');

define('TEXT_OF_5_STARS', '¡%s de 5 estrellas!');
define('TEXT_REVIEW_BY', 'de %s');
define('TEXT_REVIEW_WORD_COUNT', '%s palabras');
define('TEXT_REVIEW_RATING', 'Clasificación: %s [%s]');
define('TEXT_REVIEW_DATE_ADDED', 'Añadido el: %s');
define('TEXT_NO_REVIEWS', 'Aún no hay opiniones disponibles.');
define('TEXT_NO_NEW_PRODUCTS', 'No han aparecido nuevos artículos en los últimos ' . MAX_DISPLAY_NEW_PRODUCTS_DAYS . ' días. En su lugar, puede ver aquí los artículos publicados más recientemente.');
define('TEXT_UNKNOWN_TAX_RATE', 'Tipo impositivo desconocido');

/**
 * Warnings
 */
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Advertencia: El directorio de instalación todavía existe en: %s. Por favor, elimine el directorio por razones de seguridad.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Advertencia: Este software de tienda de comercio electrónico modificado puede escribir en el fichero de configuración: %s. Esto es un riesgo potencial para la seguridad - por favor, establezca los permisos de usuario correctos en este archivo.');
define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'Advertencia: El directorio para las sesiones no existe: ' . xtc_session_save_path() . '. Las sesiones no funcionarán hasta que se haya creado el directorio.');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'Advertencia: El software modificado de la tienda de comercio electrónico no puede escribir en el directorio de sesiones: ' . xtc_session_save_path() . '. Las sesiones no funcionarán hasta que se hayan establecido los permisos de usuario correctos.');
define('WARNING_SESSION_AUTO_START', 'Advertencia: session.auto_start está activado - Por favor, desactive esta función de PHP en php.ini y reinicie el servidor WEB.');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Advertencia: El directorio para la descarga del artículo no existe: ' . DIR_FS_DOWNLOAD . '. Esta función no funcionará hasta que se haya creado el directorio.');

define('SUCCESS_ACCOUNT_UPDATED', 'Su cuenta se ha actualizado correctamente.');
define('SUCCESS_PASSWORD_UPDATED', 'Su contraseña ha sido modificada correctamente.');
define('ERROR_CURRENT_PASSWORD_NOT_MATCHING', 'La contraseña introducida no coincide con la contraseña guardada. Por favor, inténtelo de nuevo.');
define('TEXT_MAXIMUM_ENTRIES', '<strong>Nota:</strong> Dispone de %s entradas en su libreta de direcciones.');
define('SUCCESS_ADDRESS_BOOK_ENTRY_DELETED', 'La entrada seleccionada se ha eliminado correctamente.');
define('SUCCESS_ADDRESS_BOOK_ENTRY_UPDATED', 'Su libreta de direcciones se ha actualizado correctamente.');
define('WARNING_PRIMARY_ADDRESS_DELETION', 'La dirección por defecto no se puede borrar. Por favor, seleccione primero otra dirección por defecto. A continuación, se puede eliminar la entrada.');
define('ERROR_NONEXISTING_ADDRESS_BOOK_ENTRY', 'Esta entrada de la libreta de direcciones no existe.');
define('ERROR_ADDRESS_BOOK_FULL', 'Su libreta de direcciones no puede contener más direcciones. Por favor, elimine una dirección que ya no sea necesaria. A continuación, puede guardar una nueva entrada.');
define('ERROR_CHECKOUT_SHIPPING_NO_METHOD', 'No se ha seleccionado ningún método de envío.');
define('ERROR_CHECKOUT_SHIPPING_NO_MODULE', 'No hay ningún método de envío disponible.');

define('ERROR_CONDITIONS_NOT_ACCEPTED', '* Si no tiene en cuenta nuestras Condiciones Generales, lamentamos no poder aceptar su pedido.');
define('ERROR_REVOCATION_NOT_ACCEPTED', '* A menos que acepte la expiración del derecho de desistimiento para los artículos virtuales, lamentamos no poder aceptar su pedido.');
define('ERROR_PRIVACY_NOTICE_NOT_ACCEPTED', '* Si no tiene en cuenta nuestra normativa sobre protección de datos, lamentamos no poder aceptar su pedido.');

define('SUB_TITLE_OT_DISCOUNT', 'Descuento:');

define('NOT_ALLOWED_TO_SEE_PRICES', 'No puede ver los precios como invitado (o con su estado actual).');
define('NOT_ALLOWED_TO_SEE_PRICES_TEXT', 'No tiene permiso para ver los precios. Cree una cuenta de cliente.');

define('TEXT_DOWNLOAD', 'Descargar');
define('TEXT_VIEW', 'Ver');

define('TEXT_BUY', '%s x \'');
define('TEXT_NOW', '\' pedir');
define('TEXT_GUEST', ' Invitado');
define('TEXT_SEARCH_ENGINE_AGENT', 'Motor de búsqueda');

/**
 * Advanced search
 */
define('TEXT_AC_ALL_CATEGORIES', 'Todos');
define('TEXT_ALL_CATEGORIES', 'Todas las categorías');
define('TEXT_ALL_MANUFACTURERS', 'Todos los fabricantes');
define('JS_AT_LEAST_ONE_INPUT', '* Debe rellenar uno de los siguientes campos:\nPalabras clave\nPrecio desde\nPrecio hasta\n');
define('AT_LEAST_ONE_INPUT', 'Debe rellenar uno de los siguientes campos:<br />Palabras clave con al menos tres caracteres<br />Precio a partir de<br />Precio hasta<br />');
define('TEXT_SEARCH_TERM', 'Su búsqueda de: ');
define('JS_INVALID_FROM_DATE', '* fecha no válida (desde)\n');
define('JS_INVALID_TO_DATE', '* fecha no válida (hasta)\n');
define('JS_TO_DATE_LESS_THAN_FROM_DATE', '* La fecha(desde) debe ser mayor o igual que la fecha(hasta)\n');
define('JS_PRICE_FROM_MUST_BE_NUM', '* \"El precio\" desde debe ser un número\n\n');
define('JS_PRICE_TO_MUST_BE_NUM', '* \"Precio hasta\" debe ser un número\n\n');
define('JS_PRICE_TO_LESS_THAN_PRICE_FROM', '* El precio al alza debe ser mayor o igual que el precio a la baja.\n');
define('JS_INVALID_KEYWORDS', '* Buscar término inadmisible\n');
define('TEXT_LOGIN_ERROR', '<b>ERROR:</b> No coincide la dirección de correo electrónico y/o la contraseña introducidas.');
define('TEXT_RELOGIN_NEEDED', 'Por favor, conéctese de nuevo.');
define('TEXT_PASSWORD_SENT', 'Se ha enviado una nueva contraseña por correo electrónico.');
define('TEXT_PRODUCT_NOT_FOUND', 'Artículo no encontrado.');
define('TEXT_MORE_INFORMATION', 'Para más información, visite la <a href="%s" onclick="window.open(this.href); return false;">página de inicio</a> de este artículo.');
define('TEXT_DATE_ADDED', 'Este Producto fue añadido a nuestro Catálogo el %s.');
define('TEXT_DATE_AVAILABLE', '<span class="color_error_message">Se espera que este producto vuelva a estar disponible a partir de %s.</span>');
define('SUB_TITLE_SUB_TOTAL', 'Subtotal:');

define('OUT_OF_STOCK_CANT_CHECKOUT', 'Los artículos marcados con ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' lamentablemente no están en stock en la cantidad que solicitó.<br />Por favor, reduzca la cantidad de su pedido para los artículos marcados. Muchas gracias');
define('OUT_OF_STOCK_CAN_CHECKOUT', 'Los artículos marcados con ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' lamentablemente no están en stock en la cantidad solicitada.<br />Entregaremos la cantidad pedida a corto plazo. Si lo desea, también realizaremos una entrega parcial.');

define('MINIMUM_ORDER_VALUE_NOT_REACHED_1', 'Ha alcanzado el valor mínimo de pedido de: ');
define('MINIMUM_ORDER_VALUE_NOT_REACHED_2', ' lamentablemente aún no se ha alcanzado.<br />Por favor, pida por lo menos más: ');
define('MAXIMUM_ORDER_VALUE_REACHED_1', 'Tiene el importe máximo de pedido de: ');
define('MAXIMUM_ORDER_VALUE_REACHED_2', 'excedido.<br /> Por favor, reduzca su pedido por lo menos: ');

define('ERROR_INVALID_PRODUCT', 'No se ha encontrado el artículo seleccionado.');
define('JS_KEYWORDS_MIN_LENGTH', 'El término de búsqueda debe tener al menos ' . SEARCH_MIN_LENGTH . ' caracteres.\n');

/**
 * Navbar title
 */
define('NAVBAR_TITLE_ACCOUNT', 'Su cuenta');
define('NAVBAR_TITLE_1_ACCOUNT_EDIT', 'Su cuenta');
define('NAVBAR_TITLE_2_ACCOUNT_EDIT', 'Modificar sus datos personales');
define('NAVBAR_TITLE_1_ACCOUNT_HISTORY', 'Su cuenta');
define('NAVBAR_TITLE_2_ACCOUNT_HISTORY', 'Sus pedidos realizados');
define('NAVBAR_TITLE_1_ACCOUNT_HISTORY_INFO', 'Su cuenta');
define('NAVBAR_TITLE_2_ACCOUNT_HISTORY_INFO', 'Pedido realizado');
define('NAVBAR_TITLE_3_ACCOUNT_HISTORY_INFO', 'Número de pedido %s');
define('NAVBAR_TITLE_1_ACCOUNT_PASSWORD', 'Su cuenta');
define('NAVBAR_TITLE_2_ACCOUNT_PASSWORD', 'Cambiar contraseña');
define('NAVBAR_TITLE_1_ADDRESS_BOOK', 'Su cuenta');
define('NAVBAR_TITLE_2_ADDRESS_BOOK', 'Agenda');
define('NAVBAR_TITLE_1_ADDRESS_BOOK_PROCESS', 'Su cuenta');
define('NAVBAR_TITLE_2_ADDRESS_BOOK_PROCESS', 'Agenda');
define('NAVBAR_TITLE_ADD_ENTRY_ADDRESS_BOOK_PROCESS', 'Nueva entrada');
define('NAVBAR_TITLE_MODIFY_ENTRY_ADDRESS_BOOK_PROCESS', 'Modificar entrada');
define('NAVBAR_TITLE_DELETE_ENTRY_ADDRESS_BOOK_PROCESS', 'Borrar entrada');
define('NAVBAR_TITLE_ADVANCED_SEARCH', 'Búsqueda avanzada');
define('NAVBAR_TITLE1_ADVANCED_SEARCH', 'Búsqueda avanzada');
define('NAVBAR_TITLE2_ADVANCED_SEARCH', 'Resultados de la búsqueda');
define('NAVBAR_TITLE_1_CHECKOUT_CONFIRMATION', 'Pedido');
define('NAVBAR_TITLE_2_CHECKOUT_CONFIRMATION', 'Bestätigung');
define('NAVBAR_TITLE_1_CHECKOUT_PAYMENT', 'Pedido');
define('NAVBAR_TITLE_2_CHECKOUT_PAYMENT', 'Forma de pago');
define('NAVBAR_TITLE_1_PAYMENT_ADDRESS', 'Pedido');
define('NAVBAR_TITLE_2_PAYMENT_ADDRESS', 'Cambiar la dirección de facturación');
define('NAVBAR_TITLE_1_CHECKOUT_SHIPPING', 'Pedido');
define('NAVBAR_TITLE_2_CHECKOUT_SHIPPING', 'Información de envío');
define('NAVBAR_TITLE_1_CHECKOUT_SHIPPING_ADDRESS', 'Pedido');
define('NAVBAR_TITLE_2_CHECKOUT_SHIPPING_ADDRESS', 'Cambiar la dirección de envío');
define('NAVBAR_TITLE_1_CHECKOUT_SUCCESS', 'Pedido');
define('NAVBAR_TITLE_2_CHECKOUT_SUCCESS', 'Éxito');
define('NAVBAR_TITLE_CREATE_ACCOUNT', 'Crear una cuenta');
define('NAVBAR_TITLE_LOGIN', 'Conectarse');
define('NAVBAR_TITLE_LOGOFF', 'Adiós');
define('NAVBAR_TITLE_PRODUCTS_NEW', 'Nuevos artículos');
define('NAVBAR_TITLE_SHOPPING_CART', 'Cesta de la compra');
define('NAVBAR_TITLE_SPECIALS', 'Ofertas');
define('NAVBAR_TITLE_COOKIE_USAGE', 'Uso de cookies');
define('NAVBAR_TITLE_PRODUCT_REVIEWS', 'Reseñas');
define('NAVBAR_TITLE_REVIEWS_WRITE', 'Reseñas');
define('NAVBAR_TITLE_REVIEWS', 'Reseñas');
define('NAVBAR_TITLE_SSL_CHECK', 'Aviso de seguridad');
define('NAVBAR_TITLE_CREATE_GUEST_ACCOUNT', 'Dirección de su cliente');
define('NAVBAR_TITLE_PASSWORD_DOUBLE_OPT', '¿Has olvidado tu contraseña?');
define('NAVBAR_TITLE_NEWSLETTER', 'Boletín');
define('NAVBAR_GV_REDEEM', 'Canjear vale');
define('NAVBAR_GV_SEND', 'Enviar vale');
define('NAVBAR_TITLE_DOWNLOAD', 'Descargas');

/**
 * Miscellaneous
 */
define('TEXT_NEWSLETTER', 'Siempre quieres estar al día?<br />No hay problema, suscríbete a nuestro boletín y siempre estarás al día.');
define('TEXT_EMAIL_INPUT', 'Su dirección de correo electrónico ha sido introducida en nuestro sistema.<br />Al mismo tiempo, el sistema le envió un correo electrónico con un enlace de activación. Tras recibir el correo electrónico, haga clic en el enlace para confirmar su inscripción. De lo contrario, no recibirá nuestro boletín.');

define('TEXT_WRONG_CODE', 'El código de seguridad introducido no coincide con el código mostrado. Por favor, inténtelo de nuevo.');
define('TEXT_EMAIL_EXIST_NO_NEWSLETTER', 'Esta dirección de correo electrónico ya existe en nuestra base de datos, pero aún no está activada para recibir el boletín.');
define('TEXT_EMAIL_EXIST_NEWSLETTER', 'Esta dirección de correo electrónico ya existe en nuestra base de datos y ya está activada para recibir el boletín.');
define('TEXT_EMAIL_NOT_EXIST', 'Esta dirección de correo electrónico no existe en nuestra base de datos.');
define('TEXT_EMAIL_DEL', 'Su dirección de correo electrónico ha sido eliminada de nuestra base de datos de boletines.');
define('TEXT_EMAIL_DEL_ERROR', 'Se ha producido un error, ¡su dirección de correo electrónico no ha sido eliminada!');
define('TEXT_EMAIL_ACTIVE', 'Su dirección de correo electrónico se ha activado correctamente para recibir el boletín.');
define('TEXT_EMAIL_ACTIVE_ERROR', 'Se ha producido un error, ¡su dirección de correo electrónico no ha sido activada!');
define('TEXT_EMAIL_SUBJECT', 'Su suscripción al boletín de noticias');

define('TEXT_CUSTOMER_GUEST', ' Invitado');

define('TEXT_LINK_MAIL_SENDED', 'La solicitud de una nueva contraseña debe ser confirmada previamente por usted.<br />Por lo tanto, el sistema le ha enviado un correo electrónico con un enlace de confirmación. Cuando reciba el correo electrónico, haga clic en el enlace que se le envía. De lo contrario, no podrá asignar una nueva contraseña.<br/><br/>El enlace de confirmación es válido durante %s minutos.');
define('TEXT_PASSWORD_MAIL_SENDED', 'Se le acaba de enviar un correo electrónico con una nueva contraseña de acceso.<br />Por favor, cambie su contraseña como se le solicita después de su próximo inicio de sesión.');
define('TEXT_CODE_ERROR', 'Vuelva a introducir su dirección de correo electrónico y el código de seguridad.<br />¡Cuidado con los errores tipográficos!');
define('TEXT_EMAIL_ERROR', 'Vuelva a introducir su dirección de correo electrónico.<br />¡Cuidado con los errores tipográficos!');
define('TEXT_NO_ACCOUNT', 'Lamentamos informarle de que su solicitud de una nueva contraseña de acceso no era válida o ha caducado.<br />Por favor, inténtelo de nuevo.');
define('HEADING_PASSWORD_FORGOTTEN', '¿Has olvidado tu contraseña?');
define('TEXT_PASSWORD_FORGOTTEN', 'Cambia tu contraseña en tres sencillos pasos.');
define('TEXT_EMAIL_PASSWORD_FORGOTTEN', 'Correo electrónico de confirmación del cambio de contraseña');
define('TEXT_EMAIL_PASSWORD_NEW_PASSWORD', 'Su nueva contraseña');
define('ERROR_MAIL', 'Por favor, compruebe los datos que ha introducido en el formulario.');

define('CATEGORIE_NOT_FOUND', 'Categoría no encontrada');

define('GV_FAQ', 'Vales FAQ');
define('ERROR_NO_REDEEM_CODE', 'Lo sentimos, no ha introducido ningún código.');
define('ERROR_NO_INVALID_REDEEM_GV', 'Código de vale no válido');
define('TABLE_HEADING_CREDIT', 'Crédito');
define('EMAIL_GV_TEXT_SUBJECT', 'Un regalo de %s');
define('MAIN_MESSAGE', 'Ha elegido enviar un vale por valor de %s a %s, cuya dirección de correo electrónico es %s.<br /><br />El siguiente texto aparece en su correo electrónico:<br /><br />Hola %s,<br /><br /> %s te ha enviado un vale por valor de %s.');
define('REDEEMED_AMOUNT', 'Su vale ha sido abonado correctamente en su cuenta. Valor del vale: %s');
define('REDEEMED_COUPON', 'Su cupón se ha enviado correctamente y se canjeará automáticamente cuando realice su pedido.');

define('ERROR_INVALID_USES_USER_COUPON', 'Sólo puede utilizar el cupón ');
define('ERROR_INVALID_USES_COUPON', 'Los clientes sólo pueden utilizar este cupón ');
define('TIMES', ' veces.');
define('ERROR_INVALID_STARTDATE_COUPON', 'Tu cupón aún no está disponible.');
define('ERROR_INVALID_FINISDATE_COUPON', 'Tu cupón ya ha caducado.');
define('ERROR_INVALID_MINIMUM_ORDER_COUPON', '¡Este cupón sólo se puede canjear a partir de un valor mínimo de pedido de %s!');
define('ERROR_INVALID_MINIMUM_ORDER_COUPON_ADD', '<br/>Deberá volver a introducir el código del cupón cuando alcance el valor mínimo del pedido.');
define('ERROR_COUPON_REQUIRES_ACCOUNT', 'Necesita una cuenta de cliente para canjear el cupón.');
define('PERSONAL_MESSAGE', '%s escribe:');

define('TEXT_LINK_TITLE_INFORMATION', 'Información');

/**
 * Coupon popup
 */
define('TEXT_CLOSE_WINDOW', 'Cerrar ventana [x]');
define('TEXT_COUPON_HELP_HEADER', 'Su vale/cupón ha sido reservado con éxito.');
define('TEXT_COUPON_HELP_NAME', '<br /><br />Nombre del vale/cupón: %s');
define('TEXT_COUPON_HELP_SPECIALS', '<br /><br />Su cupón no puede aplicarse a ofertas especiales.');
define('TEXT_COUPON_HELP_FIXED', '<br /><br />El valor del vale/cupón es %s ');
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />El valor mínimo del pedido es %s ');
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />Vale para envío gratuito');
define('TEXT_COUPON_HELP_DESC', '<br /><br />Descripción del cupón: %s');
define('TEXT_COUPON_HELP_DATE', '<br /><br />Este cupón es válido de %s a %s');
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />Artículo / Categoría Restricciones');
define('TEXT_COUPON_HELP_CATEGORIES', 'Categoría');
define('TEXT_COUPON_HELP_PRODUCTS', 'Artículo');
define('ERROR_ENTRY_AMOUNT_CHECK', 'Importe del vale no válido');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', 'Dirección de correo electrónico no válida');
define('TEXT_COUPON_PRODUCTS_RESTRICT', 'El cupón está limitado a una selección de artículos.');
define('TEXT_COUPON_CATEGORIES_RESTRICT', 'El cupón está limitado a una selección de categorías.');

define('ENTRY_VAT_TEXT', 'Sólo para Alemania y la UE');
define('ENTRY_VAT_ERROR', 'El NIF introducido no es válido o no se puede comprobar en este momento. Por favor, introduzca una identificación válida o deje el campo en blanco por ahora.');
define('MSRP', 'UVP');
define('YOUR_PRICE', 'Su precio ');
define('UNIT_PRICE', 'Precio unitario ');
define('ONLY', ' Ahora sólo ');
define('FROM', 'ab ');
define('YOU_SAVE', 'Usted ahorra ');
define('INSTEAD', 'Nuestro precio anterior ');
define('TXT_PER', ' Para ');
define('TAX_INFO_INCL', 'incl. %s IVA.');
define('TAX_INFO_EXCL', 'excl. %s IVA');
define('TAX_INFO_ADD', 'más %s de IVA.');
define('SHIPPING_EXCL', 'más');
define('SHIPPING_INCL', 'incl.');
define('SHIPPING_COSTS', 'Gastos de envío');

define('SHIPPING_TIME', 'Plazo de entrega: ');
define('MORE_INFO', '[Más]');

define('ENTRY_PRIVACY_ERROR', 'Confirme que ha tomado nota de nuestra política de privacidad.');
define('TEXT_PAYMENT_FEE', 'Tasa de pago');

define('_MODULE_INVALID_SHIPPING_ZONE', 'Lo sentimos, el envío a este país no es posible');
define('_MODULE_UNDEFINED_SHIPPING_RATE', 'Los gastos de envío no pueden calcularse por el momento');

define('NAVBAR_TITLE_1_ACCOUNT_DELETE', 'Su cuenta');
define('NAVBAR_TITLE_2_ACCOUNT_DELETE', 'Eliminar cuenta');

define('ERROR_EMAIL', '<p><b>Su dirección de correo electrónico:</b> Ninguna entrada o no válida</p>');
define('ERROR_VVCODE', '<p><b>Código de seguridad:</b> No hay coincidencias, por favor, vuelva a introducir el código de seguridad.</p>');
define('ERROR_MSG_BODY', '<p><b>Su mensaje</b>: ¡No hay entradas!</p>');

define('HEADER_QTY', 'Número');
define('HEADER_ARTICLE', 'Artículo');
define('HEADER_SINGLE', 'Precio unitario');
define('HEADER_TOTAL', 'Summe');
define('HEADER_MODEL', 'Artículo n');

define('ERROR_ADDRESS_NOT_ACCEPTED', '* ¡Si no acepta su dirección de facturación y envío, lamentamos no poder aceptar su pedido!\n\n');
define('PAYPAL_EXP_VORL', 'Gastos de envío provisionales');

define('BASICPRICE_VPE_TEXT', 'sólo con esta cantidad ');
define('GRADUATED_PRICE_MAX_VALUE', 'ab');
define('_SHIPPING_TO', 'Envío a ');

define('ERROR_SQL_DB_QUERY', 'Lo sentimos, pero se ha producido un error en la base de datos.');
define('ERROR_SQL_DB_QUERY_REDIRECT', '¡Será redirigido a nuestra página de inicio en %s de segundos!');

define('TEXT_AGB_CHECKOUT', 'Por favor, tenga en cuenta nuestras Condiciones Generales e Información al Cliente %s así como nuestra Política de Privacidad %s.');
define('TEXT_REVOCATION_CHECKOUT', ', nuestra política de cancelación %s');
define('DOWNLOAD_NOT_ALLOWED', '<h1>ProhibidoEste</h1>servidor no pudo verificar que usted está autorizado para acceder al documento solicitado. O bien ha suministrado unas credenciales incorrectas (por ejemplo, una contraseña incorrecta), o bien su navegador no entiende cómo suministrar las credenciales requeridas.');

define('TEXT_INFO_DETAILS', ' Detalles');
define('TEXT_SAVED_BASKET', 'Por favor, compruebe su cesta de la compra. Todavía contiene objetos de una visita anterior.');

define('ERROR_REVIEW_TEXT', 'El texto de revisión debe constar al menos de ' . REVIEW_TEXT_MIN_LENGTH . ' personajes.');
define('ERROR_REVIEW_RATING', 'Por favor, dé su valoración.');
define('ERROR_REVIEW_AUTHOR', 'Por favor, introduzca su nombre.');
define('ERROR_REVIEW_PRODUCT_PURCHASED', 'Sólo se pueden valorar los artículos que también nos han sido comprados.');

define('GV_NO_PAYMENT_INFO', '<div class="infomessage">Puede utilizar su crédito para pagar el pedido en su totalidad. Si no desea canjear su crédito, desactive la selección de crédito y elija un método de pago.</div>');
define('GV_ADD_PAYMENT_INFO', '<div class="errormessage">Su crédito no es suficiente o no puede aplicarse a todos los artículos para pagar el pedido en su totalidad. Por favor, seleccione un método de pago adicional</div>');

define('_SHIPPING_FREE', 'Envío gratuito');
define('TEXT_INFO_FREE_SHIPPING_COUPON', 'Los gastos de envío están cubiertos por su cupón.');

define('TEXT_CONTENT_NOT_FOUND', 'No se ha encontrado esta página.');
define('TEXT_SITE_NOT_FOUND', 'No se ha encontrado esta página.');

define('MAX_PROD_QTY_EXCEEDED', 'El número máximo permitido de artículos por importe de ' . MAX_PRODUCTS_QTY . ' para <span style="font-style:italic;">"%s"</span> se ha superado.<br />El número de artículos se redujo automáticamente al número permitido.');

define('IMAGE_BUTTON_CONTENT_EDIT', 'Editar contenido');
define('PRINTVIEW_INFO', 'Imprimir ficha de datos del artículo');
define('PRODUCTS_REVIEW_LINK', 'Escriba un comentario');

define('TAX_INFO_SMALL_BUSINESS', 'Precio final según &sect; 19 UStG.');
define('TAX_INFO_SMALL_BUSINESS_FOOTER', 'Debido al estatus de pequeña empresa según el &sect; 19 UStG, no cobramos IVA y por lo tanto no lo mostramos.');

define('NEED_CHANGE_PWD', 'Por favor, cambie su contraseña.');
define('TEXT_REQUEST_NOT_VALID', 'El enlace ha caducado. Por favor, solicite una nueva contraseña.');

define('NAVBAR_TITLE_WISHLIST', 'Bloc de notas');
define('TEXT_TO_WISHLIST', 'En el bloc de notas');
define('IMAGE_BUTTON_TO_WISHLIST', 'En el bloc de notas');

define('GUEST_REDEEM_NOT_ALLOWED', 'Los huéspedes no pueden canjear los vales.');
define('GUEST_VOUCHER_NOT_ALLOWED', 'Los vales no pueden adquirirse como invitado.');

define('TEXT_FILTER_SETTING_DEFAULT', 'Artículos por página');
define('TEXT_FILTER_SETTING', '%s artículos por página');
define('TEXT_FILTER_SETTING_ALL', 'Mostrar todos los artículos');
define('TEXT_SHOW_ALL', ' (mostrar todo)');
define('TEXT_FILTER_SORTING_DEFAULT', 'Ordenar por ...');
define('TEXT_FILTER_SORTING_ABC_ASC', 'De la A a la Z');
define('TEXT_FILTER_SORTING_ABC_DESC', 'Z a A');
define('TEXT_FILTER_SORTING_PRICE_ASC', 'Precio ascendente');
define('TEXT_FILTER_SORTING_PRICE_DESC', 'Precio descendente');
define('TEXT_FILTER_SORTING_DATE_DESC', 'Los productos más nuevos primero');
define('TEXT_FILTER_SORTING_DATE_ASC', 'Los productos más antiguos primero');
define('TEXT_FILTER_SORTING_ORDER_DESC', 'Lo más vendido');

define('NAVBAR_TITLE_ACCOUNT_CHECKOUT_EXPRESS_EDIT', 'Ajustes para mi compra rápida');
define('SUCCESS_CHECKOUT_EXPRESS_UPDATED', 'Los ajustes de Mi Compra Rápida se han guardado.');
define('TEXT_ERROR_CHECKOUT_EXPRESS_SHIPPING_ADDRESS', 'Seleccione una dirección de envío');
define('TEXT_ERROR_CHECKOUT_EXPRESS_SHIPPING_MODULE', 'Seleccione un método de envío');
define('TEXT_ERROR_CHECKOUT_EXPRESS_PAYMENT_ADDRESS', 'Seleccione una dirección de facturación');
define('TEXT_ERROR_CHECKOUT_EXPRESS_PAYMENT_MODULE', 'Seleccione un método de pago');
define('TEXT_CHECKOUT_EXPRESS_INFO_LINK', 'Mi compra rápida');
define('TEXT_CHECKOUT_EXPRESS_INFO_LINK_MORE', 'Más información sobre My Quick Buy "');
define('TEXT_CHECKOUT_EXPRESS_CHECK_CHEAPEST', 'Elija siempre el método de envío más barato');

define('AC_SHOW_PAGE', 'Página ');
define('AC_SHOW_PAGE_OF', ' de ');

define('FREE_SHIPPING_INFO', 'a partir de %s valor del pedido enviamos su pedido sin gastos de envío');

define('MANUFACTURER_NOT_FOUND', 'Fabricante no encontrado');
define('ENTRY_TOKEN_ERROR', 'Por favor, compruebe sus entradas.');

define('IMAGE_BUTTON_CONFIRM', 'Confirme');

/**
 * Bank account
 */
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_0', 'Datos bancarios OK.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1', 'El número de cuenta y/o el código de clasificación no son válidos o no coinciden.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2', 'El número de cuenta no es verificable automáticamente.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_3', 'El número de cuenta no es verificable.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_4', 'No se puede comprobar el número de cuenta Vuelva a comprobar sus datos.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_5', 'Este código bancario no existe, por favor corrija su entrada.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_8', 'Error en el código bancario o no se ha especificado ningún código bancario.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_9', 'No se da ningún número de cuenta');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_10', 'No ha especificado un titular de cuenta.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_128', 'Error interno al comprobar los datos bancarios.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1000', 'Código de país contenido en el IBAN (1er y 2º dígito) desconocido.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1010', 'Longitud del IBAN incorrecta: se han introducido demasiados dígitos.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1020', 'Longitud del IBAN incorrecta: Se han introducido muy pocos dígitos.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1030', 'El IBAN no se corresponde con el formato especificado para el país.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1040', 'Los dígitos de control del IBAN (dígitos 3 y 4) no son correctos -&gt; error tipográfico en el IBAN.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1050', 'El BIC tiene un formato no válido.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1060', 'Longitud BIC incorrecta: Se han introducido demasiados caracteres. Se requieren 8 u 11 caracteres.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1070', 'Longitud del BIC incorrecta: Introduzca demasiados pocos caracteres. Se requieren 8 u 11 caracteres.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1080', 'La longitud del BIC no es válida: se requieren 8 u 11 caracteres.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1200', 'Lamentablemente, no podemos aceptar IBAN del país especificado (1er y 2º dígito del IBAN).');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2001', 'El número de cuenta (dígitos 13 a 22) y/o el código bancario (dígitos 5 a 12) contenidos en el IBAN no son válidos o no coinciden.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2002', 'El número de cuenta que figura en el IBAN (dígitos 13 a 22) no puede comprobarse automáticamente.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2003', 'No se define ningún procedimiento de dígito de control para los números de cuenta contenidos en el IBAN (dígitos 13 a 22).');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2004', 'No se puede comprobar el número de cuenta que figura en el IBAN (dígitos 13 a 22).');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2005', 'El código bancario (dígitos 5 a 12 del IBAN) no existe.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2008', 'Error en el código bancario (dígitos 5 a 12 del IBAN) o no se ha especificado ningún código bancario.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2009', 'No se facilita el número de cuenta (dígitos 13 a 22 del IBAN).');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2010', 'No se ha especificado el titular de la cuenta.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2020', 'BIC no válido: No existe ningún banco con este BIC.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2128', 'Error interno al comprobar los datos bancarios.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_UNKNOWN', 'Error desconocido al comprobar los datos bancarios.');

define('PRODUCT_REVIEWS_SUCCESS', 'Gracias por su reseña.');
define('PRODUCT_REVIEWS_SUCCESS_WAITING', 'Gracias por su reseña. Ahora se revisará antes de su publicación.');

define('TITLE_PRODUCTS_NEW', 'Nuevos artículos');
define('TITLE_SPECIALS', 'Ofertas');

define('SITEMAP_ERROR_400', 'Error 400: La solicitud era sintácticamente incorrecta.');
define('SITEMAP_ERROR_401', 'Error 401: Error de autenticación.');
define('SITEMAP_ERROR_403', 'Error 403: El servidor rechaza la ejecución.');
define('SITEMAP_ERROR_404', 'Error 404: ¡No se ha encontrado la página que busca!');
define('SITEMAP_ERROR_500', 'Error 500: Se ha producido un error interno en el servidor.');

define('ERROR_PRODUCTS_MISSING_CONFIGURATION_NOT_ADDED', 'Algunos artículos de su pedido ya no están disponibles en la configuración deseada y no se han añadido a la cesta de la compra.');
