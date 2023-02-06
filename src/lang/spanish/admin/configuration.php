<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('TABLE_HEADING_CONFIGURATION_TITLE', 'Nombre');
define('TABLE_HEADING_CONFIGURATION_VALUE', 'Valor');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_INFO_EDIT_INTRO', 'Por favor, realice todos los cambios necesarios');
define('TEXT_INFO_DATE_ADDED', 'añadido el:');
define('TEXT_INFO_LAST_MODIFIED', 'último cambio:');

define('STORE_NAME_TITLE', 'Nombre de la tienda');
define('STORE_NAME_DESC', 'El nombre de esta tienda en línea');
define('STORE_OWNER_TITLE', 'Propietario');
define('STORE_OWNER_DESC', 'El nombre del operador de la tienda');
define('STORE_OWNER_EMAIL_ADDRESS_TITLE', 'Correo electrónico');
define('STORE_OWNER_EMAIL_ADDRESS_DESC', 'La dirección de correo electrónico del operador de la tienda');

define('EMAIL_FROM_TITLE', 'Correo electrónico de');
define('EMAIL_FROM_DESC', 'Dirección de correo electrónico que se utilizará en el envío (sendmail).');

define('STORE_COUNTRY_TITLE', 'País');
define('STORE_COUNTRY_DESC', 'La ubicación de la tienda en línea <br /><br /><b>Nota: No olvide ajustar correctamente la región</b>.');
define('STORE_ZONE_TITLE', 'Región');
define('STORE_ZONE_DESC', 'La región de la tienda en línea');

define('EXPECTED_PRODUCTS_SORT_TITLE', 'Pedido de anuncios de artículos');
define('EXPECTED_PRODUCTS_SORT_DESC', 'Este es el orden en el que se muestran los elementos anunciados.');
define('EXPECTED_PRODUCTS_FIELD_TITLE', 'Campo de clasificación para anuncios de artículos');
define('EXPECTED_PRODUCTS_FIELD_DESC', 'Se trata de la columna utilizada para ordenar los artículos anunciados.');

define('PRODUCTS_NEW_SORT_TITLE', 'Pedido de nuevos artículos');
define('PRODUCTS_NEW_SORT_DESC', 'Este es el orden en el que se muestran los nuevos artículos.');
define('PRODUCTS_NEW_FIELD_TITLE', 'Campo de ordenación para nuevos artículos');
define('PRODUCTS_NEW_FIELD_DESC', 'Es la columna que se utiliza para ordenar los nuevos artículos.');

define('SPECIALS_SORT_TITLE', 'Solicitar ofertas especiales');
define('SPECIALS_SORT_DESC', 'Este es el orden en el que se muestran las ofertas especiales.');
define('SPECIALS_FIELD_TITLE', 'Campo de clasificación para ofertas especiales');
define('SPECIALS_FIELD_DESC', 'Esta es la columna utilizada para clasificar las ofertas especiales.');

define('USE_DEFAULT_LANGUAGE_CURRENCY_TITLE', 'Cambie automáticamente a la moneda nacional');
define('USE_DEFAULT_LANGUAGE_CURRENCY_DESC', 'Convertir automáticamente a la moneda nacional del cliente, si está disponible.');

define('SEND_EXTRA_ORDER_EMAILS_TO_TITLE', 'Envíe un correo electrónico de pedido adicional a:');
define('SEND_EXTRA_ORDER_EMAILS_TO_DESC', 'Si también debe enviarse una copia del correo electrónico del pedido, indique las direcciones receptoras de esta forma: Nombre 1 &lt;email@address1&gt;, Nombre 2 &lt;email@address2&gt;.');

define('SEARCH_ENGINE_FRIENDLY_URLS_TITLE', '¿Utilizar URL compatibles con los motores de búsqueda?');
define('SEARCH_ENGINE_FRIENDLY_URLS_DESC', 'Las URL de las páginas pueden optimizarse automáticamente para los motores de búsqueda.<br /><br /><strong>Atención:</strong> ¡Para las URL optimizadas para los motores de búsqueda, el archivo _.htaccess del directorio principal de la tienda debe activarse o renombrarse a .htaccess! Además, ¡el servidor web debe soportar <a href="http://www.modrewrite.de/" target="_blank">mod_rewrite</a>! (Pregunte a su proveedor de alojamiento web si no puede comprobarlo).');

define('DISPLAY_CART_TITLE', '¿Debe mostrarse la cesta de la compra tras la inserción?');
define('DISPLAY_CART_DESC', '¿Después de añadir un artículo a la cesta de la compra, o de volver al artículo?');

define('ALLOW_GUEST_TO_TELL_A_FRIEND_TITLE', '¿Permitir que los invitados informen a sus conocidos por correo electrónico?');
define('ALLOW_GUEST_TO_TELL_A_FRIEND_DESC', '¿Permitir que los invitados informen a sus conocidos sobre los artículos por correo electrónico?');

define('ADVANCED_SEARCH_DEFAULT_OPERATOR_TITLE', 'Buscar enlaces');
define('ADVANCED_SEARCH_DEFAULT_OPERATOR_DESC', 'Operador estándar para enlazar palabras de búsqueda.');

define('STORE_NAME_ADDRESS_TITLE', 'Dirección comercial y número de teléfono, etc.');
define('STORE_NAME_ADDRESS_DESC', 'Introduzca aquí la dirección de su empresa como lo haría en un membrete.');

define('SHOW_COUNTS_TITLE', '¿Número de artículos detrás de los nombres de las categorías?');
define('SHOW_COUNTS_DESC', 'Cuenta recursivamente el número de artículos diferentes por grupo de productos y muestra el número (x) después del nombre de cada categoría.');

define('DEFAULT_CUSTOMERS_STATUS_ID_ADMIN_TITLE', 'Estado del cliente(grupo de clientes) para los administradores en el frontend');
define('DEFAULT_CUSTOMERS_STATUS_ID_ADMIN_DESC', 'Seleccione el estado del cliente(grupo) con qué permisos de grupo de clientes ve el administrador el frontend.');
define('DEFAULT_CUSTOMERS_STATUS_ID_GUEST_TITLE', 'Estado del cliente(grupo de clientes) para los huéspedes');
define('DEFAULT_CUSTOMERS_STATUS_ID_GUEST_DESC', '¡Seleccione el estado del cliente(grupo) para los huéspedes en función del ID respectivo!');
define('DEFAULT_CUSTOMERS_STATUS_ID_TITLE', 'Estado de los nuevos clientes');
define('DEFAULT_CUSTOMERS_STATUS_ID_DESC', '¡Seleccione el estado del cliente(grupo) para los nuevos clientes en función del ID respectivo!<br />CONSEJO: Puede crear más grupos en el menú Grupos de clientes y, por ejemplo, hacer semanas de promoción: Esta semana 10% de descuento para todos los nuevos clientes?');

define('ALLOW_ADD_TO_CART_TITLE', 'Permite añadir artículos a la cesta de la compra');
define('ALLOW_ADD_TO_CART_DESC', 'Permite añadir artículos a la cesta de la compra aunque "Mostrar precios" esté configurado como "No" en el grupo de clientes.');
define('ALLOW_DISCOUNT_ON_PRODUCTS_ATTRIBUTES_TITLE', '¿Utilizar descuentos también en los atributos del artículo?');
define('ALLOW_DISCOUNT_ON_PRODUCTS_ATTRIBUTES_DESC', 'Permite que el descuento establecido del grupo de clientes se aplique también a los atributos del artículo (Sólo si el artículo no está designado como "oferta especial").');
define('CURRENT_TEMPLATE_TITLE', 'Templateset (Tema)');
define('CURRENT_TEMPLATE_DESC', 'Seleccione un conjunto de plantillas (tema). El tema debe estar en la carpeta www.Ihre-Domain.com/templates/.');

define('ENTRY_FIRST_NAME_MIN_LENGTH_TITLE', 'Nombre');
define('ENTRY_FIRST_NAME_MIN_LENGTH_DESC', 'Longitud mínima del nombre');
define('ENTRY_LAST_NAME_MIN_LENGTH_TITLE', 'Apellido');
define('ENTRY_LAST_NAME_MIN_LENGTH_DESC', 'Longitud mínima del apellido');
define('ENTRY_DOB_MIN_LENGTH_TITLE', 'Fecha de nacimiento');
define('ENTRY_DOB_MIN_LENGTH_DESC', 'Duración mínima de la fecha de nacimiento');
define('ENTRY_EMAIL_ADDRESS_MIN_LENGTH_TITLE', 'Correo electrónico');
define('ENTRY_EMAIL_ADDRESS_MIN_LENGTH_DESC', 'Longitud mínima de la dirección de correo electrónico');
define('ENTRY_STREET_ADDRESS_MIN_LENGTH_TITLE', 'Calle');
define('ENTRY_STREET_ADDRESS_MIN_LENGTH_DESC', 'Longitud mínima de la dirección');
define('ENTRY_COMPANY_MIN_LENGTH_TITLE', 'Empresa');
define('ENTRY_COMPANY_MIN_LENGTH_DESC', 'Longitud mínima del nombre de la empresa');
define('ENTRY_POSTCODE_MIN_LENGTH_TITLE', 'Código postal');
define('ENTRY_POSTCODE_MIN_LENGTH_DESC', 'Longitud mínima del código postal');
define('ENTRY_CITY_MIN_LENGTH_TITLE', 'Ciudad');
define('ENTRY_CITY_MIN_LENGTH_DESC', 'Longitud mínima del nombre de la ciudad');
define('ENTRY_STATE_MIN_LENGTH_TITLE', 'Estado');
define('ENTRY_STATE_MIN_LENGTH_DESC', 'Longitud mínima del estado');
define('ENTRY_TELEPHONE_MIN_LENGTH_TITLE', 'Número de teléfono');
define('ENTRY_TELEPHONE_MIN_LENGTH_DESC', 'Longitud mínima del número de teléfono');
define('ENTRY_PASSWORD_MIN_LENGTH_TITLE', 'Contraseña');
define('ENTRY_PASSWORD_MIN_LENGTH_DESC', 'Longitud mínima de la contraseña');

define('REVIEW_TEXT_MIN_LENGTH_TITLE', 'Reseñas');
define('REVIEW_TEXT_MIN_LENGTH_DESC', 'Longitud mínima de la entrada de texto para las reseñas');

define('MIN_DISPLAY_BESTSELLERS_TITLE', 'Los más vendidos');
define('MIN_DISPLAY_BESTSELLERS_DESC', 'Número mínimo de bestsellers a mostrar.');
define('MIN_DISPLAY_ALSO_PURCHASED_TITLE', 'También compró');
define('MIN_DISPLAY_ALSO_PURCHASED_DESC', 'Número mínimo de artículos comprados también para que aparezcan en la vista de artículos.');

define('MAX_ADDRESS_BOOK_ENTRIES_TITLE', 'Entradas de la libreta de direcciones');
define('MAX_ADDRESS_BOOK_ENTRIES_DESC', 'Número máximo de entradas en la libreta de direcciones por cliente');
define('MAX_DISPLAY_SEARCH_RESULTS_TITLE', 'Cantidad Artículos');
define('MAX_DISPLAY_SEARCH_RESULTS_DESC', 'Número máximo de artículos que se mostrarán por página en el listado de productos (páginas de categoría)');
define('MAX_DISPLAY_PAGE_LINKS_TITLE', 'Pasar páginas');
define('MAX_DISPLAY_PAGE_LINKS_DESC', 'Número de páginas individuales para las que debe mostrarse un enlace en el menú de navegación de la página');
define('MAX_DISPLAY_SPECIAL_PRODUCTS_TITLE', 'Ofertas especiales');
define('MAX_DISPLAY_SPECIAL_PRODUCTS_DESC', 'Número máximo de ofertas especiales (specials.php) que se mostrarán por página.');
define('MAX_DISPLAY_NEW_PRODUCTS_TITLE', 'Nuevo módulo de visualización de artículos');
define('MAX_DISPLAY_NEW_PRODUCTS_DESC', 'Número máximo de nuevos artículos que se mostrarán en las categorías de productos y como "artículos TOP" en la página de inicio.');
define('MAX_DISPLAY_UPCOMING_PRODUCTS_TITLE', 'Artículos previstos Módulo de visualización');
define('MAX_DISPLAY_UPCOMING_PRODUCTS_DESC', 'Número máximo de elementos previstos que se mostrarán en la página de inicio.');
define('MAX_DISPLAY_MANUFACTURERS_IN_A_LIST_TITLE', 'Lista de fabricantes Valor umbral');
define('MAX_DISPLAY_MANUFACTURERS_IN_A_LIST_DESC', 'En la casilla del fabricante; si el número de fabricantes supera este umbral, aparecerá una lista desplegable o un cuadro de lista en lugar de la lista de enlaces habitual (en función de lo que se haya introducido en "Lista de fabricantes").');
define('MAX_MANUFACTURERS_LIST_TITLE', 'Lista de fabricantes');
define('MAX_MANUFACTURERS_LIST_DESC', 'En el cuadro de productor; Si el valor está ajustado a "1", el cuadro de productor se muestra como una lista desplegable. En caso contrario, como un cuadro de lista con el número de filas especificado.');
define('MAX_DISPLAY_MANUFACTURER_NAME_LEN_TITLE', 'Longitud del nombre del fabricante');
define('MAX_DISPLAY_MANUFACTURER_NAME_LEN_DESC', 'En la caja del fabricante; longitud máxima de los nombres en la caja del fabricante.');
define('MAX_DISPLAY_NEW_REVIEWS_TITLE', 'Nuevas revisiones');
define('MAX_DISPLAY_NEW_REVIEWS_DESC', 'Número máximo de nuevas reseñas que se mostrarán.');
define('MAX_RANDOM_SELECT_REVIEWS_TITLE', 'Revisar el grupo de selección');
define('MAX_RANDOM_SELECT_REVIEWS_DESC', '¿De cuántas reseñas deben seleccionarse las que aparecen aleatoriamente en el recuadro?');
define('MAX_RANDOM_SELECT_NEW_TITLE', 'Pool de selección de nuevos artículos');
define('MAX_RANDOM_SELECT_NEW_DESC', '¿De cuántos elementos nuevos se deben seleccionar los que aparecen aleatoriamente en la casilla?');
define('MAX_RANDOM_SELECT_SPECIALS_TITLE', 'Pool de selección de ofertas especiales');
define('MAX_RANDOM_SELECT_SPECIALS_DESC', '¿De cuántas ofertas especiales se deben seleccionar las que aparecen aleatoriamente en la casilla?');
define('MAX_DISPLAY_CATEGORIES_PER_ROW_TITLE', 'Número de categorías por línea');
define('MAX_DISPLAY_CATEGORIES_PER_ROW_DESC', 'Número de categorías que se mostrarán por línea en los resúmenes.');
define('MAX_DISPLAY_PRODUCTS_NEW_TITLE', 'Nueva lista de artículos');
define('MAX_DISPLAY_PRODUCTS_NEW_DESC', 'Número máximo de artículos nuevos que se mostrarán por página de "Artículos nuevos" (products_new.php)."');
define('MAX_DISPLAY_BESTSELLERS_TITLE', 'Los más vendidos');
define('MAX_DISPLAY_BESTSELLERS_DESC', 'Número máximo de bestsellers que se mostrarán.');
define('MAX_DISPLAY_BESTSELLERS_DAYS_TITLE', 'Número de días para los más vendidos');
define('MAX_DISPLAY_BESTSELLERS_DAYS_DESC', 'Número máximo de días que deben mostrarse los artículos más vendidos.');
define('MAX_DISPLAY_ALSO_PURCHASED_TITLE', 'También compró');
define('MAX_DISPLAY_ALSO_PURCHASED_DESC', 'Número máximo de artículos también comprados que se mostrarán en la vista de artículos.');
define('MAX_DISPLAY_ALSO_PURCHASED_ORDERS_TITLE', 'Número de pedidos También comprados');
define('MAX_DISPLAY_ALSO_PURCHASED_ORDERS_DESC', 'Número máximo de pedidos buscados para determinar los artículos también comprados.');
define('MAX_DISPLAY_PRODUCTS_IN_ORDER_HISTORY_BOX_TITLE', 'Cuadro sinóptico de pedidos');
define('MAX_DISPLAY_PRODUCTS_IN_ORDER_HISTORY_BOX_DESC', 'Número máximo de artículos que se mostrarán en el cuadro de resumen del pedido personal del cliente.');
define('MAX_DISPLAY_ORDER_HISTORY_TITLE', 'Resumen de pedidos');
define('MAX_DISPLAY_ORDER_HISTORY_DESC', 'Número máximo de pedidos que se mostrarán en la vista general del área de clientes de la tienda.');
define('MAX_PRODUCTS_QTY_TITLE', 'Número máximo de productos');
define('MAX_PRODUCTS_QTY_DESC', 'Número máximo de un artículo en la cesta de la compra');
define('MAX_DISPLAY_NEW_PRODUCTS_DAYS_TITLE', 'Número de días para nuevos productos');
define('MAX_DISPLAY_NEW_PRODUCTS_DAYS_DESC', 'Número máximo de días que deben mostrarse los nuevos artículos.');

define('PRODUCT_IMAGE_MINI_WIDTH_TITLE', 'Anchura de la miniimagen del artículo');
define('PRODUCT_IMAGE_MINI_WIDTH_DESC', 'Anchura máxima del elemento mini en píxeles. (Por defecto: 80). Para valores mayores, puede ser necesario ajustar "productPreviewImage" en el archivo stylesheet.css de la plantilla.');
define('PRODUCT_IMAGE_MINI_HEIGHT_TITLE', 'Altura de la mini imagen del artículo');
define('PRODUCT_IMAGE_MINI_HEIGHT_DESC', 'Altura máxima del elemento mini en píxeles. (Por defecto: 80)');

define('PRODUCT_IMAGE_THUMBNAIL_WIDTH_TITLE', 'Anchura de la miniatura del artículo');
define('PRODUCT_IMAGE_THUMBNAIL_WIDTH_DESC', 'Anchura máxima de las miniaturas de los artículos en píxeles. (Por defecto: 240). Para valores mayores, puede que sea necesario ajustar "productPreviewImage" en el archivo stylesheet.css de la plantilla.');
define('PRODUCT_IMAGE_THUMBNAIL_HEIGHT_TITLE', 'Altura de la miniatura del artículo');
define('PRODUCT_IMAGE_THUMBNAIL_HEIGHT_DESC', 'Altura máxima de las miniaturas de los artículos en píxeles. (Por defecto: 240)');

define('PRODUCT_IMAGE_MIDI_WIDTH_TITLE', 'Anchura de las imágenes midi del artículo');
define('PRODUCT_IMAGE_MIDI_WIDTH_DESC', 'Anchura máxima del elemento midi en píxeles. (Por defecto: 160). Para valores mayores, puede que sea necesario ajustar "productPreviewImage" en el archivo stylesheet.css de la plantilla.');
define('PRODUCT_IMAGE_MIDI_HEIGHT_TITLE', 'Altura de las imágenes midi del artículo');
define('PRODUCT_IMAGE_MIDI_HEIGHT_DESC', 'Altura máxima del artículo midi en píxeles. (Por defecto: 160)');

define('PRODUCT_IMAGE_INFO_WIDTH_TITLE', 'Anchura de las imágenes de información del artículo');
define('PRODUCT_IMAGE_INFO_WIDTH_DESC', 'Anchura máxima de las imágenes de información del artículo en píxeles. (Por defecto: 520).');
define('PRODUCT_IMAGE_INFO_HEIGHT_TITLE', 'Altura de las imágenes de información del artículo');
define('PRODUCT_IMAGE_INFO_HEIGHT_DESC', 'Altura máxima de las imágenes de información del artículo en píxeles. (Por defecto: 520)');

define('PRODUCT_IMAGE_POPUP_WIDTH_TITLE', 'Anchura de las imágenes emergentes del artículo');
define('PRODUCT_IMAGE_POPUP_WIDTH_DESC', 'Anchura máxima de las imágenes emergentes del artículo en píxeles. (Por defecto: 800)');
define('PRODUCT_IMAGE_POPUP_HEIGHT_TITLE', 'Altura de las imágenes emergentes del artículo');
define('PRODUCT_IMAGE_POPUP_HEIGHT_DESC', 'Altura máxima de las imágenes emergentes del artículo en píxeles. (Por defecto: 800)');

define('CATEGORIES_IMAGE_WIDTH_TITLE', 'Anchura de la categoría Imágenes');
define('CATEGORIES_IMAGE_WIDTH_DESC', 'Anchura máxima de la categoría Imágenes en píxeles. (Por defecto: 985).');
define('CATEGORIES_IMAGE_HEIGHT_TITLE', 'Altura de los cuadros de categoría');
define('CATEGORIES_IMAGE_HEIGHT_DESC', 'Altura máxima de la categoría Imágenes en píxeles. (Por defecto: 370)');

define('CATEGORIES_IMAGE_MOBILE_WIDTH_TITLE', 'Anchura de la categoría Imágenes Móvil');
define('CATEGORIES_IMAGE_MOBILE_WIDTH_DESC', 'Anchura máxima de la categoría Fotos Móviles en píxeles. (Predeterminado: 600).');
define('CATEGORIES_IMAGE_MOBILE_HEIGHT_TITLE', 'Altura de la categoría Fotos Móvil');
define('CATEGORIES_IMAGE_MOBILE_HEIGHT_DESC', 'Altura máxima de la categoría Fotos Móviles en píxeles. (Por defecto: 400)');

define('CATEGORIES_IMAGE_LIST_WIDTH_TITLE', 'Anchura de la categoría Imágenes Listado');
define('CATEGORIES_IMAGE_LIST_WIDTH_DESC', 'Anchura máxima de la categoría Listado de imágenes en píxeles. (Por defecto: 225).');
define('CATEGORIES_IMAGE_LIST_HEIGHT_TITLE', 'Altura de la categoría Imágenes Listado');
define('CATEGORIES_IMAGE_LIST_HEIGHT_DESC', 'Altura máxima de la categoría Imágenes Listado en píxeles. (Por defecto: 170)');

define('MANUFACTURER_IMAGE_WIDTH_TITLE', 'Anchura de las imágenes del fabricante');
define('MANUFACTURER_IMAGE_WIDTH_DESC', 'Anchura máxima de las imágenes del fabricante en píxeles. (Predeterminado: 100).');
define('MANUFACTURER_IMAGE_HEIGHT_TITLE', 'Altura de las imágenes del fabricante');
define('MANUFACTURER_IMAGE_HEIGHT_DESC', 'Altura máxima de las imágenes del fabricante en píxeles. (Predeterminado: 60)');

define('BANNERS_IMAGE_WIDTH_TITLE', 'Anchura de las imágenes del banner');
define('BANNERS_IMAGE_WIDTH_DESC', 'Anchura máxima de las imágenes del banner en píxeles. (Por defecto: 985).');
define('BANNERS_IMAGE_HEIGHT_TITLE', 'Altura de las imágenes del banner');
define('BANNERS_IMAGE_HEIGHT_DESC', 'Altura máxima de las imágenes del banner en píxeles. (Por defecto: 400)');

define('BANNERS_IMAGE_MOBILE_WIDTH_TITLE', 'Anchura de las imágenes del banner Móvil');
define('BANNERS_IMAGE_MOBILE_WIDTH_DESC', 'Anchura máxima de las imágenes del banner Móvil en píxeles. (Predeterminado: 600).');
define('BANNERS_IMAGE_MOBILE_HEIGHT_TITLE', 'Altura de las imágenes de banner Móvil');
define('BANNERS_IMAGE_MOBILE_HEIGHT_DESC', 'Altura máxima de las imágenes del banner Móvil en píxeles. (Por defecto: 400)');

define('SMALL_IMAGE_WIDTH_TITLE', 'Anchura del artículo Imágenes');
define('SMALL_IMAGE_WIDTH_DESC', 'Anchura máxima de las imágenes del artículo en píxeles.');
define('SMALL_IMAGE_HEIGHT_TITLE', 'Altura del artículo Imágenes');
define('SMALL_IMAGE_HEIGHT_DESC', 'Altura máxima de las imágenes del artículo en píxeles.');

define('SUBCATEGORY_IMAGE_WIDTH_TITLE', 'Anchura de las imágenes de la subcategoría (grupo de productos)');
define('SUBCATEGORY_IMAGE_WIDTH_DESC', 'Anchura máxima de las imágenes de la subcategoría (grupo de productos) en píxeles.');
define('SUBCATEGORY_IMAGE_HEIGHT_TITLE', 'Altura de las imágenes de la subcategoría (grupo de productos)');
define('SUBCATEGORY_IMAGE_HEIGHT_DESC', 'Altura máxima de las imágenes de la subcategoría (grupo de productos) en píxeles.');

define('MO_PICS_TITLE', 'Número de imágenes adicionales del producto');
define('MO_PICS_DESC', 'Número de imágenes del producto que deben estar disponibles además de la imagen principal del producto.');

define('PRODUCT_IMAGE_MINI_MERGE_TITLE', 'Artículo Mini Imágenes:Fusionar<br /><img src="images/config_merge.gif">');
define('PRODUCT_IMAGE_MINI_MERGE_DESC', 'Artikel-Mini Bilder:Merge<br /><br />Standard Wert: (overlay.gif,10,-50,60,FF0000)<br /><br />imagen de fusión de superposición<br />Verwendung:<br />(imagen de fusión,inicio x [neg = desde la derecha],inicio y [neg = desde la base],opacidad, color transparente en la imagen de fusión)');

define('PRODUCT_IMAGE_THUMBNAIL_MERGE_TITLE', 'Miniaturas de artículos:Fusionar');
define('PRODUCT_IMAGE_THUMBNAIL_MERGE_DESC', 'Artikel-Thumbnails:Merge<br /><br />Standard Wert: (overlay.gif,10,-50,60,FF0000)<br /><br />imagen de fusión superpuesta<br />Verwendung:<br />(imagen de fusión,inicio x [neg = desde la derecha],inicio y [neg = desde la base],opacidad, color transparente en la imagen de fusión)');

define('PRODUCT_IMAGE_MIDI_MERGE_TITLE', 'Artículo Imágenes Midi:Fusionar');
define('PRODUCT_IMAGE_MIDI_MERGE_DESC', 'Artikel-Midi Bilder:Merge<br /><br />Standard Wert: (overlay.gif,10,-50,60,FF0000)<br /><br />imagen de fusión de superposición<br />Verwendung:<br />(imagen de fusión,inicio x [neg = desde la derecha],inicio y [neg = desde la base],opacidad, color transparente en la imagen de fusión)');

define('PRODUCT_IMAGE_INFO_MERGE_TITLE', 'Información del artículo Imágenes:Fusión');
define('PRODUCT_IMAGE_INFO_MERGE_DESC', 'Artikel-Info Bilder:Merge<br /><br />Standard Wert: (overlay.gif,10,-50,60,FF0000)<br /><br />imagen de fusión de superposición<br />Verwendung:<br />(imagen de fusión,inicio x [neg = desde la derecha],inicio y [neg = desde la base],opacidad,color transparente en la imagen de fusión)');

define('PRODUCT_IMAGE_POPUP_MERGE_TITLE', 'Imágenes emergentes del artículo:Fusionar');
define('PRODUCT_IMAGE_POPUP_MERGE_DESC', 'Artikel-Popup Bilder:Merge<br /><br />Standard Wert: (overlay.gif,10,-50,60,FF0000)<br /><br />imagen de fusión superpuesta<br />Verwendung:<br />(imagen de fusión,inicio x [neg = desde la derecha],inicio y [neg = desde la base],opacidad,color transparente en la imagen de fusión)');

define('IMAGE_MANIPULATOR_TITLE', 'Procesamiento GDlib');
define('IMAGE_MANIPULATOR_DESC', 'Image Manipulator f&uuml;r GD2 oder GD1<br /><br /><b>HINWEIS:</b> image_manipulator_GD2_advanced.php unterst&uuml;tzt transparente PNG\'s');

define('ACCOUNT_GENDER_TITLE', 'Saludo');
define('ACCOUNT_GENDER_DESC', 'Solicitar un saludo al abrir/tramitar una cuenta');
define('ACCOUNT_DOB_TITLE', 'Fecha de nacimiento');
define('ACCOUNT_DOB_DESC', 'Solicitar la fecha de nacimiento al abrir/tramitar una cuenta');
define('ACCOUNT_COMPANY_TITLE', 'Empresa');
define('ACCOUNT_COMPANY_DESC', 'Consultar a la empresa al abrir/tramitar la cuenta');
define('ACCOUNT_SUBURB_TITLE', 'Otra dirección');
define('ACCOUNT_SUBURB_DESC', 'Solicitar una dirección adicional al abrir/tramitar la cuenta');
define('ACCOUNT_STATE_TITLE', 'Estado');
define('ACCOUNT_STATE_DESC', 'Consultar el estado al abrir/tramitar la cuenta');

define('DEFAULT_CURRENCY_TITLE', 'Moneda estándar');
define('DEFAULT_CURRENCY_DESC', 'Moneda utilizada por defecto');
define('DEFAULT_LANGUAGE_TITLE', 'Lengua estándar');
define('DEFAULT_LANGUAGE_DESC', 'Idioma utilizado por defecto');
define('DEFAULT_ORDERS_STATUS_ID_TITLE', 'Estado estándar de los pedidos nuevos');
define('DEFAULT_ORDERS_STATUS_ID_DESC', 'Cuando se recibe un nuevo pedido, este estado se establece como estado del pedido.');

define('SHIPPING_MAX_WEIGHT_TITLE', 'Peso máximo que puede enviarse como un solo paquete');
define('SHIPPING_MAX_WEIGHT_DESC', 'Los socios de envío (Correos/UPS, etc.) tienen un peso máximo de paquete. Introduzca un valor para esto.');
define('SHIPPING_BOX_WEIGHT_TITLE', 'Peso de la piel del paquete');
define('SHIPPING_BOX_WEIGHT_DESC', '¿Cuál es el peso medio de un envase vacío pequeño o mediano?');
define('SHIPPING_BOX_PADDING_TITLE', 'Para envases vacíos más grandes - aumento de peso en %.');
define('SHIPPING_BOX_PADDING_DESC', 'Para alrededor del 10% introduzca 10');
define('SHOW_SHIPPING_TITLE', 'Mostrar gastos de envío');
define('SHOW_SHIPPING_DESC', 'Visualización vinculada de "más gastos de envío".');
define('SHIPPING_INFOS_TITLE', 'Gastos de envío');
define('SHIPPING_INFOS_DESC', 'Seleccione el contenido para mostrar los gastos de envío');
define('SHIPPING_DEFAULT_TAX_CLASS_METHOD_TITLE', 'Método de cálculo de la clase impositiva estándar');
define('SHIPPING_DEFAULT_TAX_CLASS_METHOD_DESC', 'none: no mostrar ningún impuesto de envío<br />auto proportional: mostrar el impuesto de envío proporcionalmente al pedido<br />auto max: mostrar el tipo impositivo del mayor grupo de ventas como impuesto de envío');

define('SHOW_SHIPPING_MODULE_TITLE_TITLE', 'Designación Gastos de envío');
define('SHOW_SHIPPING_MODULE_TITLE_DESC', 'Seleccione el nombre de los gastos de envío en el resumen');
define('CUSTOM_SHIPPING_TITLE_TITLE', 'Designación individual Gastos de envío');
define('CUSTOM_SHIPPING_TITLE_DESC', 'Introduzca una designación. Este ajuste sólo es efectivo si la designación de los gastos de envío está en "Definido por el usuario".');
define('CFG_TXT_SHIPPING_DEFAULT', 'Estándar');
define('CFG_TXT_SHIPPING_TITLE', 'Título');
define('CFG_TXT_SHIPPING_CUSTOM', 'A medida');

define('CAPITALIZE_ADDRESS_FORMAT_TITLE', 'Dirección en mayúsculas');
define('CAPITALIZE_ADDRESS_FORMAT_DESC', 'Escriba los nombres de países y lugares en mayúsculas');

define('PRODUCT_LIST_FILTER_TITLE', '¿Apariencia de los filtros de clasificación en las listas de productos?');
define('PRODUCT_LIST_FILTER_DESC', 'Visualización de filtros de clasificación por grupos de productos/fabricantes, etc. Filtro (false=inactivo; true=activo)');

define('STOCK_CHECK_TITLE', 'Comprobación de las existencias de mercancías');
define('STOCK_CHECK_DESC', 'Compruebe si quedan existencias suficientes para entregar los pedidos.');

define('ATTRIBUTE_STOCK_CHECK_TITLE', 'Comprobación del stock de atributos del artículo');
define('ATTRIBUTE_STOCK_CHECK_DESC', 'Comprobación de las existencias de mercancías con determinados atributos de artículo');
define('STOCK_LIMITED_TITLE', 'Deducir la cantidad de mercancías');
define('STOCK_LIMITED_DESC', 'Deducir la cantidad de mercancías en existencias si las mercancías fueron encargadas');
define('STOCK_LIMITED_DOWNLOADS_TITLE', 'Deducir las descargas de la cantidad de mercancías');
define('STOCK_LIMITED_DOWNLOADS_DESC', '¿Debe deducirse también la cantidad de mercancía para los artículos de descarga?');
define('STOCK_ALLOW_CHECKOUT_TITLE', 'Permitir la compra de productos que no estén en stock');
define('STOCK_ALLOW_CHECKOUT_DESC', '¿Desea permitir la realización de pedidos incluso si determinadas mercancías no están disponibles según el inventario?');
define('STOCK_MARK_PRODUCT_OUT_OF_STOCK_TITLE', 'Marcado de artículos agotados');
define('STOCK_MARK_PRODUCT_OUT_OF_STOCK_DESC', 'Dem Kunden kenntlich machen, welche Artikel nicht mehr verf&uuml;gbar sind.');
define('STOCK_REORDER_LEVEL_TITLE', 'Mensaje al administrador de que hay que reordenar un artículo');
define('STOCK_REORDER_LEVEL_DESC', '¿A partir de qué cantidad debe aparecer este mensaje? (FUNCIÓN PLANIFICADA)');
define('STORE_PAGE_PARSE_TIME_TITLE', 'Ahorro del tiempo de cálculo del diseño de la página de la tienda');
define('STORE_PAGE_PARSE_TIME_DESC', 'Ahorro del tiempo necesario para calcular los guiones hasta la salida de la página');
define('STORE_PARSE_DATE_TIME_FORMAT_TITLE', 'Formato de fecha en el archivo de registro');
define('STORE_PARSE_DATE_TIME_FORMAT_DESC', 'El formato de fecha para el registro (por defecto: Y-m-d H:i:s)');
define('STORE_DB_SLOW_QUERY_TITLE', 'Registro de consultas lentas');
define('STORE_DB_SLOW_QUERY_DESC', '¿Sólo deben guardarse las consultas SQL que requieren mucho tiempo?<br/><strong>Atención: ¡el guardado de las consultas a la base de datos debe estar activado!</strong><br/><strong>Precaución: ¡El archivo puede llegar a ser muy grande si tarda mucho en ejecutarse!</strong><br/><br/>El archivo de registro se guarda en la carpeta /log del directorio principal.');
define('STORE_DB_SLOW_QUERY_TIME_TITLE', 'Registro de consultas lentas - Tiempo');
define('STORE_DB_SLOW_QUERY_TIME_DESC', 'Introduzca la hora a partir de la cual las consultas SQL se escriben en el archivo de registro.');

define('DISPLAY_PAGE_PARSE_TIME_TITLE', 'Mostrar los tiempos de cálculo de las páginas');
define('DISPLAY_PAGE_PARSE_TIME_DESC', 'Si está activada la opción de guardar los tiempos de cálculo de las páginas, éstos pueden mostrarse en el pie de página.<br /><strong>desactivado</strong>: Desactiva completamente la visualización<br /><strong>admin</strong>: Sólo el administrador ve los tiempos de cálculo<br /><strong>all</strong>: Todos ven los tiempos de cálculo');
define('STORE_DB_TRANSACTIONS_TITLE', 'Guardar las consultas de la base de datos');
define('STORE_DB_TRANSACTIONS_DESC', 'Guardar las consultas individuales de la base de datos en el archivo de registro para los tiempos de cálculo<br/><strong>Atención: ¡El archivo puede llegar a ser muy grande con tiempos de ejecución más largos!</strong><br/><br/>El archivo de registro se guarda en la carpeta /log del directorio principal.');

define('USE_CACHE_TITLE', 'Utilizar la caché de plantillas');
define('USE_CACHE_DESC', 'Utilice las funciones de caché de plantillas.');

define('DB_CACHE_TITLE', 'Caché de BD');
define('DB_CACHE_DESC', 'Las consultas a la base de datos pueden ser almacenadas en caché por la tienda para reducir la carga de la base de datos y aumentar la velocidad.');

define('DB_CACHE_EXPIRE_TITLE', 'Tiempo de vida de la caché de BD');
define('DB_CACHE_EXPIRE_DESC', 'Tiempo en segundos antes de que los archivos caché se sobrescriban automáticamente con datos de la base de datos.');

define('DIR_FS_CACHE_TITLE', 'Carpeta caché');
define('DIR_FS_CACHE_DESC', 'La carpeta en la que se almacenarán los archivos en caché.');

define('ACCOUNT_OPTIONS_TITLE', 'Tipo de creación de cuenta');
define('ACCOUNT_OPTIONS_DESC', '¿Cómo le gustaría diseñar el procedimiento de registro en su tienda?<br />Puede elegir entre cuentas de cliente normales y "pedidos únicos" sin crear una cuenta de cliente (se crea una cuenta, pero esto no es evidente para el cliente).');

define('EMAIL_TRANSPORT_TITLE', 'Método de transporte del correo electrónico');
define('EMAIL_TRANSPORT_DESC', '<b>Recomendación: smtp</b> - Define si el servidor utiliza una conexión local con el "programa sendmail" o si requiere una conexión SMTP a través de TCP/IP. Los servidores que funcionan con Windows o Mac OS deben utilizar SMTP.');

define('EMAIL_LINEFEED_TITLE', 'Alimentadores de línea de correo electrónico');
define('EMAIL_LINEFEED_DESC', 'Define los caracteres que se utilizarán para separar las cabeceras de los correos electrónicos.');
define('EMAIL_USE_HTML_TITLE', 'Utilizar MIME HTML al enviar correos electrónicos');
define('EMAIL_USE_HTML_DESC', 'Envío de correos electrónicos en formato HTML');
define('ENTRY_EMAIL_ADDRESS_CHECK_TITLE', 'Comprobación de las direcciones de correo electrónico mediante DNS');
define('ENTRY_EMAIL_ADDRESS_CHECK_DESC', 'Las direcciones de correo electrónico pueden comprobarse a través de un servidor DNS');
define('SEND_EMAILS_TITLE', 'Envío de correos electrónicos');
define('SEND_EMAILS_DESC', 'Envíe correos electrónicos a los clientes (para pedidos, etc.)');
define('SENDMAIL_PATH_TITLE', 'La ruta a Sendmail');
define('SENDMAIL_PATH_DESC', 'Si utiliza Sendmail, introduzca aquí la ruta al programa Sendmail (normalmente: /usr/bin/sendmail):');
define('USE_SENDMAIL_OPTIONS_TITLE', 'Opciones de Sendmail');
define('USE_SENDMAIL_OPTIONS_DESC', 'Indica si mail() utiliza un MTA totalmente compatible con sendmail.');
define('SMTP_MAIN_SERVER_TITLE', 'Dirección del servidor SMTP');
define('SMTP_MAIN_SERVER_DESC', 'Introduzca la dirección de su servidor SMTP principal.');
define('SMTP_BACKUP_SERVER_TITLE', 'Dirección del servidor de copia de seguridad SMTP');
define('SMTP_BACKUP_SERVER_DESC', 'Introduzca la dirección de su servidor SMTP de respaldo.');
define('SMTP_USERNAME_TITLE', 'Nombre de usuario SMTP');
define('SMTP_USERNAME_DESC', 'Introduzca aquí el nombre de usuario de su cuenta SMTP.');
define('SMTP_PASSWORD_TITLE', 'Contraseña SMTP');
define('SMTP_PASSWORD_DESC', 'Introduzca aquí la contraseña de su cuenta SMTP.');
define('SMTP_AUTH_TITLE', 'SMTP-Auth');
define('SMTP_AUTH_DESC', '¿Requiere el servidor SMTP una autenticación segura?');
define('SMTP_PORT_TITLE', 'Puerto SMTP');
define('SMTP_PORT_DESC', 'Introduzca el puerto SMTP de su servidor SMTP (por defecto: 25)?');
define('SMTP_AUTO_TLS_TITLE', 'Conexión automática TLS SMTP');
define('SMTP_AUTO_TLS_DESC', '¿Conexión automática con STARTTLS si SMTP-SECURE está desactivado?<br>En caso de problemas de envío, ¡desactive la conexión automática TLS!</br>');
define('SMTP_DEBUG_TITLE', 'Nivel de registro de depuración SMTP');
define('SMTP_DEBUG_DESC', '<b>0</b>: sin salida; <b>1</b>: sólo comandos; <b>2</b>: datos y comandos; <b>3</b>: como 2 más estado de la conexión; <b>4</b>: como 3 más más informaciónSi se<br>establece en 2</br>en caso de<br>problemas de transmisión, se creará un registro en el directorio de registros</br>.');

define('EMAIL_SQL_ERRORS_TITLE', 'Enviar mensajes de error SQL como correo electrónico');
define('EMAIL_SQL_ERRORS_DESC', 'Si es "true", se envía un correo electrónico con el mensaje de error SQL a la dirección de correo electrónico del operador de la tienda. En cambio, el mensaje de error SQL se oculta al cliente.<br />Si se selecciona "false", el mensaje de error correspondiente se envía directamente y es visible para todos (por defecto).');

define('CONTACT_US_EMAIL_ADDRESS_TITLE', 'Contacto - Dirección de correo electrónico');
define('CONTACT_US_EMAIL_ADDRESS_DESC', 'Introduzca una dirección de remitente correcta para enviar los correos electrónicos a través del formulario "Contacto".');
define('CONTACT_US_NAME_TITLE', 'Contacto - dirección de correo electrónico, nombre');
define('CONTACT_US_NAME_DESC', 'Introduzca un nombre de remitente para enviar los correos electrónicos a través del formulario "Contacto".');
define('CONTACT_US_FORWARDING_STRING_TITLE', 'Contacto - Reenvío de direcciones de correo electrónico');
define('CONTACT_US_FORWARDING_STRING_DESC', 'Introduzca las direcciones de correo electrónico adicionales a las que se enviarán los mensajes del formulario "Contacto" (separadas por , ).');
define('CONTACT_US_REPLY_ADDRESS_TITLE', 'Contacto - Dirección de correo electrónico de respuesta');
define('CONTACT_US_REPLY_ADDRESS_DESC', 'Introduzca una dirección de correo electrónico a la que puedan responder sus clientes.');
define('CONTACT_US_REPLY_ADDRESS_NAME_TITLE', 'Contacto - dirección de correo electrónico de respuesta, nombre');
define('CONTACT_US_REPLY_ADDRESS_NAME_DESC', 'Nombre del remitente para los correos electrónicos de respuesta.');
define('CONTACT_US_EMAIL_SUBJECT_TITLE', 'Contacto - Asunto del correo electrónico');
define('CONTACT_US_EMAIL_SUBJECT_DESC', 'Asunto para los correos electrónicos del formulario de contacto de la tienda');

define('EMAIL_SUPPORT_ADDRESS_TITLE', 'Asistencia técnica - Dirección de correo electrónico');
define('EMAIL_SUPPORT_ADDRESS_DESC', 'Introduzca una dirección de remitente correcta para enviar los correos electrónicos a través del <b>sistema de asistencia</b> (creación de cuenta, olvido de contraseña, sistema de boletines).');
define('EMAIL_SUPPORT_NAME_TITLE', 'Asistencia técnica - dirección de correo electrónico, nombre');
define('EMAIL_SUPPORT_NAME_DESC', 'Introduzca un nombre de remitente para enviar los correos electrónicos a través del <b>sistema de asistencia</b>.');
define('EMAIL_SUPPORT_FORWARDING_STRING_TITLE', 'Soporte técnico - Reenvío de direcciones de correo electrónico');
define('EMAIL_SUPPORT_FORWARDING_STRING_DESC', 'Introduzca las direcciones de correo electrónico adicionales a las que se enviarán los correos electrónicos del <b>sistema de asistencia</b> (separadas con , ).');
define('EMAIL_SUPPORT_REPLY_ADDRESS_TITLE', 'Soporte técnico - Dirección de correo electrónico de respuesta');
define('EMAIL_SUPPORT_REPLY_ADDRESS_DESC', 'Introduzca una dirección de correo electrónico a la que puedan responder sus clientes.');
define('EMAIL_SUPPORT_REPLY_ADDRESS_NAME_TITLE', 'Asistencia técnica - dirección de correo electrónico de respuesta, nombre');
define('EMAIL_SUPPORT_REPLY_ADDRESS_NAME_DESC', 'Nombre del remitente para los correos electrónicos de respuesta.');
define('EMAIL_SUPPORT_SUBJECT_TITLE', 'Asistencia técnica - Asunto del correo electrónico');
define('EMAIL_SUPPORT_SUBJECT_DESC', 'Asunto para los correos electrónicos del <b>sistema de asistencia</b>.');

define('EMAIL_BILLING_ADDRESS_TITLE', 'Liquidación - Dirección de correo electrónico');
define('EMAIL_BILLING_ADDRESS_DESC', 'Por favor, introduzca una dirección de remitente correcta para el envío de correos electrónicos a través del <b>sistema de facturación</b> (confirmación de pedido, cambios de estado,..).');
define('EMAIL_BILLING_NAME_TITLE', 'Facturación - dirección de correo electrónico, nombre');
define('EMAIL_BILLING_NAME_DESC', 'Introduzca un nombre de remitente para enviar los correos electrónicos a través del <b>sistema de facturación</b> (confirmación de pedido, cambios de estado,..).');
define('EMAIL_BILLING_FORWARDING_STRING_TITLE', 'Facturación - Reenvío de direcciones de correo electrónico');
define('EMAIL_BILLING_FORWARDING_STRING_DESC', 'Introduzca las direcciones de correo electrónico adicionales a las que se enviarán los correos electrónicos del <b>sistema contable</b> (separadas con , ).');
define('EMAIL_BILLING_REPLY_ADDRESS_TITLE', 'Liquidación - Dirección de correo electrónico de respuesta');
define('EMAIL_BILLING_REPLY_ADDRESS_DESC', 'Introduzca una dirección de correo electrónico a la que puedan responder sus clientes.');
define('EMAIL_BILLING_REPLY_ADDRESS_NAME_TITLE', 'Compensación - dirección de correo electrónico de respuesta, nombre');
define('EMAIL_BILLING_REPLY_ADDRESS_NAME_DESC', 'Nombre del remitente para los correos electrónicos de respuesta.');
define('EMAIL_BILLING_SUBJECT_TITLE', 'Liquidación - cambios de estado del asunto del correo electrónico');
define('EMAIL_BILLING_SUBJECT_DESC', 'Introduzca un asunto para los mensajes de correo electrónico del <b>sistema de facturación</b> (cambios de estado). (por ejemplo: <b>Su pedido {$nr} de {$date}</b>)<br />Las siguientes variables están disponibles: {$nr},{$fecha},{$nombre},{$apellido}');
define('EMAIL_BILLING_SUBJECT_ORDER_TITLE', 'Facturación - asunto del correo electrónico para los pedidos');
define('EMAIL_BILLING_SUBJECT_ORDER_DESC', 'Por favor, introduzca un asunto para los correos electrónicos de sus pedidos. (por ejemplo: <b>Su pedido {$nr} de {$date}</b>)<br />Las siguientes variables están disponibles: {$nr},{$fecha},{$nombre},{$apellido}');
define('MODULE_ORDER_MAIL_STEP_SUBJECT_TITLE', 'Facturación - asunto del correo electrónico para la confirmación del pedido');
define('MODULE_ORDER_MAIL_STEP_SUBJECT_DESC', 'Introduzca un asunto de correo electrónico para los mensajes de confirmación de su pedido. (por ejemplo: <b>Su pedido {$nr} de {$date}</b>)<br />Las siguientes variables están disponibles: {$nr},{$fecha},{$nombre},{$apellido}');

define('DOWNLOAD_ENABLED_TITLE', 'Permitir la descarga de artículos');
define('DOWNLOAD_ENABLED_DESC', 'Active las funciones de descarga de elementos (software, etc.).');
define('DOWNLOAD_BY_REDIRECT_TITLE', 'Descarga mediante redirección');
define('DOWNLOAD_BY_REDIRECT_DESC', 'Utilice la redirección del navegador para las descargas de artículos. Apagar en sistemas que no sean Linux/Unix.');
define('DOWNLOAD_MAX_DAYS_TITLE', 'Fecha de caducidad de los enlaces de descarga (días)');
define('DOWNLOAD_MAX_DAYS_DESC', 'Número de días que un enlace de descarga permanece activo para el cliente. 0 significa sin límite.');
define('DOWNLOAD_MAX_COUNT_TITLE', 'Número máximo de descargas de un producto multimedia adquirido');
define('DOWNLOAD_MAX_COUNT_DESC', 'Establezca el número máximo de descargas que permite al cliente que ha comprado un artículo de este tipo. 0 significa ninguna descarga.');
define('DOWNLOAD_MULTIPLE_ATTRIBUTES_ALLOWED_TITLE', 'Múltiples atributos para las descargas');
define('DOWNLOAD_MULTIPLE_ATTRIBUTES_ALLOWED_DESC', '¿Deben permitirse atributos múltiples para los artículos de descarga de forma que se omita el método de envío?');

define('GZIP_COMPRESSION_TITLE', 'Activar la compresión GZip');
define('GZIP_COMPRESSION_DESC', 'Active la compresión HTTP GZip para optimizar la velocidad de carga de las páginas.');
define('GZIP_LEVEL_TITLE', 'Nivel de compresión');
define('GZIP_LEVEL_DESC', 'Seleccione un nivel de compresión entre 0-9 (0 = mínimo, 9 = máximo).');

define('SESSION_WARNING', '<br /><br /><span class="col-red"><strong>ATENCIÓN:</strong></span> Esta función puede influir posiblemente en la funcionalidad de la tienda. Por favor, ¡sólo cambie si es consciente de las posibles consecuencias y el servidor realmente admite esta función!');
define('SESSION_WRITE_DIRECTORY_TITLE', 'Lugar de la sesión');
define('SESSION_WRITE_DIRECTORY_DESC', 'Si las sesiones deben guardarse como archivos, utilice la siguiente carpeta.');
define('SESSION_FORCE_COOKIE_USE_TITLE', 'Cookie de sesión forcieren');
define('SESSION_FORCE_COOKIE_USE_DESC', 'Iniciar sesión si las cookies están permitidas por el navegador. (Por defecto &quot;true&quot;)<br/><br/><span class="col-red"><strong>ATENCIÓN:</strong></span> Esta función evita que el identificador de sesión esté presente en la URL.');
define('SESSION_CHECK_SSL_SESSION_ID_TITLE', 'Comprobación del identificador de sesión SSL');
define('SESSION_CHECK_SSL_SESSION_ID_DESC', 'Compruebe el SSL_SESSION_ID para cada llamada a la página HTTPS. (por defecto &quot;false&quot;)' . SESSION_WARNING);
define('SESSION_CHECK_USER_AGENT_TITLE', 'Comprobación del agente de usuario');
define('SESSION_CHECK_USER_AGENT_DESC', 'Compruebe el agente de usuario del navegador del usuario en cada vista de página. (por defecto &quot;false&quot;)' . SESSION_WARNING);
define('SESSION_CHECK_IP_ADDRESS_TITLE', 'Comprobación de la dirección IP');
define('SESSION_CHECK_IP_ADDRESS_DESC', 'Compruebe la dirección IP del usuario cada vez que acceda a la página. (por defecto &quot;false&quot;)' . SESSION_WARNING);
define('SESSION_RECREATE_TITLE', 'Renovar sesión');
define('SESSION_RECREATE_DESC', 'Renueve la sesión y asigne un nuevo ID de sesión en cuanto un usuario se conecte o se registre (se necesita PHP &gt;=4.1). (por defecto &quot;false&quot;)' . SESSION_WARNING);
define('SESSION_DELETE_OLD_COOKIES_TITLE', 'Session Cookie l&ouml;schen');
define('SESSION_DELETE_OLD_COOKIES_DESC', '¿Deben eliminarse las cookies de sesión antiguas? Tras una actualización desde la versión de tienda &lt;= 2.0.1.0 se recomienda activar esta opción. (Por defecto &quot;false&quot;)' . SESSION_WARNING);

define('DISPLAY_CONDITIONS_ON_CHECKOUT_TITLE', 'Visualización del GTC');
define('DISPLAY_CONDITIONS_ON_CHECKOUT_DESC', 'Visualice las CGC durante el proceso de pedido.');
define('SIGN_CONDITIONS_ON_CHECKOUT_TITLE', 'Firma de las CGC');
define('SIGN_CONDITIONS_ON_CHECKOUT_DESC', 'Firme las CGC durante el proceso de pedido.<br/><b>Nota:</b> "Visualizar GTC" debe estar activo.');

define('META_MIN_KEYWORD_LENGTH_TITLE', 'Longitud mínima de las metapalabras clave');
define('META_MIN_KEYWORD_LENGTH_DESC', 'Longitud mínima de las metapalabras clave generadas automáticamente (descripción del artículo)');
define('META_KEYWORDS_NUMBER_TITLE', 'Número de meta palabras clave');
define('META_KEYWORDS_NUMBER_DESC', 'Número de meta palabras clave');
define('META_AUTHOR_TITLE', 'autor');
define('META_AUTHOR_DESC', '<meta name="author">');
define('META_PUBLISHER_TITLE', 'editor');
define('META_PUBLISHER_DESC', '<meta name="publisher">');
define('META_COMPANY_TITLE', 'empresa');
define('META_COMPANY_DESC', '<meta name="company">');
define('META_TOPIC_TITLE', 'página-tema');
define('META_TOPIC_DESC', '<meta name="page-topic">');
define('META_REPLY_TO_TITLE', 'responder a');
define('META_REPLY_TO_DESC', '<meta name="reply-to">');
define('META_REVISIT_AFTER_TITLE', 'revisit-after');
define('META_REVISIT_AFTER_DESC', '<meta name="revisit-after">');
define('META_ROBOTS_TITLE', 'robots');
define('META_ROBOTS_DESC', '<meta name="robots">');
define('META_DESCRIPTION_TITLE', 'Descripción');
define('META_DESCRIPTION_DESC', '<meta name="description">');
define('META_KEYWORDS_TITLE', 'Palabras clave');
define('META_KEYWORDS_DESC', '<meta name="keywords">');

define('MODULE_PAYMENT_INSTALLED_TITLE', 'Módulos de pago instalados');
define('MODULE_PAYMENT_INSTALLED_DESC', 'Lista de nombres de ficheros de módulos de pago (separados por punto y coma (;)). Se actualiza automáticamente, por lo que no es necesario editarlo. (Ejemplo: cc.php;cod.php;paypal.php)');
define('MODULE_ORDER_TOTAL_INSTALLED_TITLE', 'Pedido instalado Total módulos');
define('MODULE_ORDER_TOTAL_INSTALLED_DESC', 'Lista de nombres de archivo del módulo Orden-Total (separados por punto y coma (;)). Se actualiza automáticamente, por lo que no es necesario editarlo. (Ejemplo: ot_subtotal.php;ot_tax.php;ot_shipping.php;ot_total.php)');
define('MODULE_SHIPPING_INSTALLED_TITLE', 'Módulos de envío instalados');
define('MODULE_SHIPPING_INSTALLED_DESC', 'Lista de nombres de archivo del módulo de envío (separados por punto y coma (;)). Se actualiza automáticamente, por lo que no es necesario editarlo. (Ejemplo: ups.php;flat.php;item.php)');

define('CACHE_LIFETIME_TITLE', 'Duración de la caché de plantillas');
define('CACHE_LIFETIME_DESC', 'Tiempo en segundos antes de que los archivos de la caché de plantillas se sobrescriban automáticamente.');
define('CACHE_CHECK_TITLE', 'Comprobar caché de plantilla');
define('CACHE_CHECK_DESC', 'Cuando está activado, se tienen en cuenta las cabeceras If-Modified-Since para el contenido almacenado en caché y se emiten las cabeceras HTTP coincidentes. Esto significa que las páginas a las que se accede con regularidad no se reenvían al cliente cada vez.');

define('PRODUCT_REVIEWS_VIEW_TITLE', 'Comentarios en los detalles del artículo');
define('PRODUCT_REVIEWS_VIEW_DESC', 'Número de reseñas mostradas en la vista detallada del artículo');

define('DELETE_GUEST_ACCOUNT_TITLE', 'Eliminación de cuentas de invitados');
define('DELETE_GUEST_ACCOUNT_DESC', '¿Deben eliminarse las cuentas de invitados después de realizar un pedido? (Los datos del pedido permanecen)');

define('USE_WYSIWYG_TITLE', 'Activar el editor WYSIWYG');
define('USE_WYSIWYG_DESC', '¿Activar el editor WYSIWYG para CMS y artículos?');

define('PRICE_IS_BRUTTO_TITLE', 'Ugly Admin');
define('PRICE_IS_BRUTTO_DESC', 'Permite la introducción de precios brutos en la Admin.');

define('PRICE_PRECISION_TITLE', 'Decimales brutos/netos');
define('PRICE_PRECISION_DESC', 'Precisión de conversión (no influye en la visualización en la tienda, en ella siempre aparecen 2 decimales).');

define('CHECK_CLIENT_AGENT_TITLE', '¿Evitar las sesiones de araña?');
define('CHECK_CLIENT_AGENT_DESC', 'Permita que las arañas conocidas de los motores de búsqueda accedan al sitio sin una sesión.');
define('SHOW_IP_LOG_TITLE', '¿Registro IP en la caja?');
define('SHOW_IP_LOG_DESC', '¿Mostrar el texto "Su IP se guardará por motivos de seguridad" al realizar el pago?');

define('ACTIVATE_GIFT_SYSTEM_TITLE', '¿Activar el sistema de vales?');
define('ACTIVATE_GIFT_SYSTEM_DESC', '¿Activar el sistema de cupones?<br/><b>Nota:</b> Los módulos ot_coupon <a href="' . xtc_href_link(FILENAME_MODULES, 'set=ordertotal&module=ot_coupon') . '"><b>aquí</b></a> y ot_gv <a href="' . xtc_href_link(FILENAME_MODULES, 'set=ordertotal&module=ot_gv') . '"><b>aquí</b></a> tienen que activarse.');

define('SECURITY_CODE_LENGTH_TITLE', 'Longitud del código del vale');
define('SECURITY_CODE_LENGTH_DESC', 'Introduzca aquí la longitud del código del vale. (máx. 16 caracteres)');

define('NEW_SIGNUP_GIFT_VOUCHER_AMOUNT_TITLE', 'Valor del cheque regalo de bienvenida');
define('NEW_SIGNUP_GIFT_VOUCHER_AMOUNT_DESC', 'Valor del vale de regalo de bienvenida: Si no desea enviar un vale en su correo electrónico de bienvenida, introduzca 0 aquí, de lo contrario introduzca el valor del vale, por ejemplo 10,00 o 50,00, pero sin símbolos de moneda. El código del vale será creado automáticamente por la tienda.<br /><b>Nota:</b> En "Configuración" -&gt; <a href="' . xtc_href_link(FILENAME_CONFIGURATION, 'gID=12') . '"><strong>"Opciones de correo electrónico"</strong></a> debe configurar "Correo electrónico al crear la cuenta" en "Sí".');
define('NEW_SIGNUP_DISCOUNT_COUPON_TITLE', 'Código de descuento de bienvenida');
define('NEW_SIGNUP_DISCOUNT_COUPON_DESC', 'Código de cupón de descuento de bienvenida: Si no desea enviar un cupón en su correo electrónico de bienvenida, deje este campo en blanco; de lo contrario, introduzca el código del cupón que desea utilizar.<br /><b>Nota:</b> En "Configuración" -&gt; <a href="' . xtc_href_link(FILENAME_CONFIGURATION, 'gID=12') . '"><strong>"Opciones de correo electrónico"</strong></a> tiene que poner "Correo electrónico al crear la cuenta" en "Sí" y el código del cupón tiene que estar creado de antemano en el <a href="' . xtc_href_link(FILENAME_COUPON_ADMIN) . '"><b>Administración de cupones</b></a> debe crearse.');

define('ACTIVATE_SHIPPING_STATUS_TITLE', '¿Activar la visualización del estado del envío?');
define('ACTIVATE_SHIPPING_STATUS_DESC', '¿Activar la visualización del estado del envío? (Se pueden establecer diferentes plazos de envío para artículos individuales. Tras la activación, aparece un nuevo artículo <b>Estado de entrega</b> en la entrada de artículos).');

define('IMAGE_QUALITY_TITLE', 'Calidad de imagen');
define('IMAGE_QUALITY_DESC', 'Calidad de imagen (0=máxima compresión, 100=mejor calidad)');

define('GROUP_CHECK_TITLE', 'Comprobación del grupo de clientes');
define('GROUP_CHECK_DESC', '¿Permitir sólo a determinados grupos de clientes el acceso a categorías individuales, productos, elementos de contenido? (Tras la activación, aparecen opciones de entrada para artículos, categorías y en el gestor de contenidos).');

define('ACTIVATE_NAVIGATOR_TITLE', '¿Activar el navegador de artículos?');
define('ACTIVATE_NAVIGATOR_DESC', 'Activar/desactivar el navegador de artículos en la vista detallada de artículos. (por razones de rendimiento con un número elevado de elementos)');

define('QUICKLINK_ACTIVATED_TITLE', 'Activar la función multienlace/copia');
define('QUICKLINK_ACTIVATED_DESC', 'La función multilink/copy facilita la copia/vinculación de un artículo en varias categorías, mediante la posibilidad de seleccionar categorías individuales por casilla de verificación.');

define('ACTIVATE_REVERSE_CROSS_SELLING_TITLE', 'Marketing cruzado inverso');
define('ACTIVATE_REVERSE_CROSS_SELLING_DESC', '¿Activar la función de marketing cruzado inverso?');
define('ACTIVATE_CROSS_SELLING_TITLE', 'Comercialización cruzada');
define('ACTIVATE_CROSS_SELLING_DESC', '¿Activar la función de marketing cruzado?');

define('DOWNLOAD_UNALLOWED_PAYMENT_TITLE', 'Módulos de pago de descargas no autorizadas');
define('DOWNLOAD_UNALLOWED_PAYMENT_DESC', 'Métodos de pago <strong>NO</strong> permitidos para productos de descarga.');
define('DOWNLOAD_MIN_ORDERS_STATUS_TITLE', 'Estado del pedido');
define('DOWNLOAD_MIN_ORDERS_STATUS_DESC', 'Estado del pedido con el que se liberan las descargas solicitadas.');

define('STORE_OWNER_VAT_ID_TITLE', 'Número de IVA del operador de la tienda');
define('STORE_OWNER_VAT_ID_DESC', 'El número de IVA de su empresa');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_TITLE', 'Estado del cliente para el número de IVA de los clientes verificados (en el extranjero)');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_DESC', 'Seleccione el estado del cliente (grupo) para los clientes con número de IVA verificado.');
define('ACCOUNT_COMPANY_VAT_CHECK_TITLE', 'Solicitar número de IVA');
define('ACCOUNT_COMPANY_VAT_CHECK_DESC', 'Los clientes deben poder introducir el número de IVA. Si es false, el campo de entrada deja de mostrarse.');
define('ACCOUNT_COMPANY_VAT_LIVE_CHECK_TITLE', 'Compruebe en línea la plausibilidad del número de registro del IVA');
define('ACCOUNT_COMPANY_VAT_LIVE_CHECK_DESC', 'El número de registro del IVA se comprueba en línea para verificar su verosimilitud. Para ello se utiliza el servicio web del portal fiscal de la UE<a href="http://ec.europa.eu/taxation_customs" style="font-style:italic">(http://ec.europa.eu/taxation_customs)</a>.<br/>¡Requiere PHP5 con soporte "SOAP" activado!<br/><br/><span class="messageStackSuccess">El soporte "PHP5 SOAP" es actualmente ' . (in_array('soap', get_loaded_extensions()) ? '' : '<span class="messageStackError">NOT</span>') . '¡ habilitado!</span><br/><br/>');
define('ACCOUNT_COMPANY_VAT_GROUP_TITLE', '¿Ajustar la comprobación del grupo de clientes por número de IVA?');
define('ACCOUNT_COMPANY_VAT_GROUP_DESC', 'La activación de esta opción modifica el grupo de clientes tras una comprobación positiva del número de IVA.');
define('ACCOUNT_VAT_BLOCK_ERROR_TITLE', '¿Bloquear el registro de números de IVA incorrectos o no verificados?');
define('ACCOUNT_VAT_BLOCK_ERROR_DESC', 'Al activar esta opción, sólo se introducen los números de IVA verificados y correctos.');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_LOCAL_TITLE', 'Estado del cliente para el número de IVA de los clientes verificados (nacional)');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_LOCAL_DESC', 'Seleccione el estado del cliente (grupo) para los clientes con número de IVA verificado.');

define('GOOGLE_CONVERSION_TITLE', 'Seguimiento de conversiones de Google');
define('GOOGLE_CONVERSION_DESC', 'El registro de las palabras clave de conversión de los pedidos');
define('GOOGLE_CONVERSION_ID_TITLE', 'ID de conversión');
define('GOOGLE_CONVERSION_ID_DESC', 'Su ID de conversión de Google');
define('GOOGLE_LANG_TITLE', 'Google Idioma');
define('GOOGLE_LANG_DESC', 'Código ISO de la lengua utilizada');
define('GOOGLE_CONVERSION_LABEL_TITLE', 'Etiqueta de conversión de Google');
define('GOOGLE_CONVERSION_LABEL_DESC', 'Su etiqueta de conversión de Google');

define('AFTERBUY_ACTIVATED_TITLE', 'Activo');
define('AFTERBUY_ACTIVATED_DESC', 'Activar interfaz postcompra');
define('AFTERBUY_PARTNERID_TITLE', 'ID de socio');
define('AFTERBUY_PARTNERID_DESC', 'Su ID de socio de Afterbuy');
define('AFTERBUY_PARTNERPASS_TITLE', 'Contraseña de socio');
define('AFTERBUY_PARTNERPASS_DESC', 'Su contraseña de socio para la interfaz XML de Afterbuy');
define('AFTERBUY_USERID_TITLE', 'ID de usuario');
define('AFTERBUY_USERID_DESC', 'Su ID de usuario de Afterbuy');
define('AFTERBUY_ORDERSTATUS_TITLE', 'Estado del pedido');
define('AFTERBUY_ORDERSTATUS_DESC', 'Estado del pedido tras la transmisión correcta de los datos del pedido');
define('AFTERBUY_URL', 'Puede encontrar una descripción de Afterbuy aquí: <a href="http://www.afterbuy.de" target="new">http://www.afterbuy.de</a>');
define('AFTERBUY_DEALERS_TITLE', 'Marcar como comerciante');
define('AFTERBUY_DEALERS_DESC', 'Introduzca los identificadores de grupo de los comerciantes que se introducirán como comerciantes en Afterbuy.<br />Ejemplo: <em>6,5,8</em>. ¡No debe haber espacios!');
define('AFTERBUY_IGNORE_GROUPE_TITLE', 'Ignorar grupo de clientes');
define('AFTERBUY_IGNORE_GROUPE_DESC', '¿Qué grupos de clientes hay que ignorar?<br />Ejemplo: <em>6,5,8</em>. ¡No debe haber espacios!');

define('SEARCH_MIN_LENGTH_TITLE', 'Buscar número de caracteres');
define('SEARCH_MIN_LENGTH_DESC', 'Número mínimo de caracteres para la búsqueda');
define('SEARCH_IN_DESC_TITLE', 'Buscar en las descripciones de los productos');
define('SEARCH_IN_DESC_DESC', 'Activar para habilitar la búsqueda en las descripciones de los productos (corta + larga).');
define('SEARCH_IN_ATTR_TITLE', 'Búsqueda en los atributos del producto');
define('SEARCH_IN_ATTR_DESC', 'Actívelo para permitir la búsqueda en los atributos del producto (por ejemplo, color, longitud).');
define('SEARCH_IN_MANU_TITLE', 'Buscar en fabricante');
define('SEARCH_IN_MANU_DESC', 'Activar para habilitar la búsqueda en los fabricantes.');

define('ADMIN_SEARCH_IN_DESC_TITLE', 'Buscar en las descripciones de los productos');
define('ADMIN_SEARCH_IN_DESC_DESC', 'Activar para habilitar la búsqueda en las descripciones de los productos (corta + larga).');
define('ADMIN_SEARCH_IN_ATTR_TITLE', 'Buscar en los atributos del producto');
define('ADMIN_SEARCH_IN_ATTR_DESC', 'Actívelo para permitir la búsqueda en los atributos del producto (por ejemplo, color, longitud).');

define('REVOCATION_ID_TITLE', 'Derecho de retractación');
define('REVOCATION_ID_DESC', 'Seleccione el contenido para mostrar el derecho de desistimiento.');
define('DISPLAY_REVOCATION_ON_CHECKOUT_TITLE', 'Mostrar el derecho de desistimiento');
define('DISPLAY_REVOCATION_ON_CHECKOUT_DESC', 'Mostrar derecho de desistimiento en checkout_confirmation.<br/><b>Nota:</b> "Mostrar GTC" debe estar activo.');

define('USE_ADMIN_TOP_MENU_TITLE', 'Admin Navegación superior');
define('USE_ADMIN_TOP_MENU_DESC', '¿Activar la navegación superior del administrador? De lo contrario, el menú aparece en el borde izquierdo (clásico)');
define('USE_ADMIN_LANG_TABS_TITLE', 'Fichas de idioma para categorías/artículos');
define('USE_ADMIN_LANG_TABS_DESC', '¿Activar las pestañas de idioma en los campos de entrada de categorías/artículos?');
define('USE_ADMIN_THUMBS_IN_LIST_TITLE', 'Listas de productos imágenes');
define('USE_ADMIN_THUMBS_IN_LIST_DESC', '¿Mostrar una columna adicional con imágenes de las categorías / artículos en la lista de productos del administrador?');
define('USE_ADMIN_THUMBS_IN_LIST_STYLE_TITLE', 'Listas de productos Imágenes Estilo CSS');
define('USE_ADMIN_THUMBS_IN_LIST_STYLE_DESC', 'Aquí pueden introducirse especificaciones de estilo CSS sencillas - por ejemplo, para la anchura máxima: max-width:90px;');

define('DELETE_CACHE_SUCCESSFUL', 'Caché borrada con éxito.');
define('DELETE_TEMP_CACHE_SUCCESSFUL', 'Caché de plantillas borrada con éxito.');

define('PRODUCT_IMAGE_NO_ENLARGE_UNDER_DEFAULT_TITLE', 'Escalado de imágenes de baja resolución');
define('PRODUCT_IMAGE_NO_ENLARGE_UNDER_DEFAULT_DESC', 'Active la opción <strong>No para</strong> evitar que las imágenes de productos de menor resolución se escalen a los valores predeterminados de anchura y altura. Si activa la opción <strong>Sí</strong>, las imágenes de menor resolución también se escalarán a los valores de tamaño de imagen estándar establecidos. En este caso, sin embargo, estas imágenes pueden mostrarse muy borrosas y pixeladas.');

define('SHOW_BUTTON_BUY_NOW_TITLE', 'Mostrar el botón "cesta de la compra" en las listas de productos');
define('SHOW_BUTTON_BUY_NOW_DESC', '<span class="col-red"><strong>ATENCIÓN:</strong></span> Esto puede dar lugar a advertencias si no se muestran al cliente todas las características esenciales del artículo en las páginas de la lista de productos.');

define('MAX_DISPLAY_LIST_PRODUCTS_TITLE', 'Número de artículos por página');
define('MAX_DISPLAY_LIST_PRODUCTS_DESC', 'Número máximo de artículos que se mostrarán en el resumen por página.');

define('WHOS_ONLINE_TIME_LAST_CLICK_TITLE', 'Quién está en línea - período de visualización en seg.');
define('WHOS_ONLINE_TIME_LAST_CLICK_DESC', 'Muestra la duración de los usuarios conectados en la tabla "Quién está conectado", pasado este tiempo se borran las entradas. (valor mínimo: 900)');

define('SESSION_LIFE_ADMIN_TITLE', 'Duración de la sesión Admin');
define('SESSION_LIFE_ADMIN_DESC', 'Duración en segundos tras la cual expira el tiempo de sesión para admins (se cerrará la sesión) - por defecto 7200<br />El valor establecido aquí sólo se aplica si el manejo de la sesión está basado en db. (configure.php =&gt; define(\'STORE_SESSIONS\', \'mysql\');)<br />Valor máximo: 14400');
define('SESSION_LIFE_CUSTOMERS_TITLE', 'Duración de la sesión Clientes');
define('SESSION_LIFE_CUSTOMERS_DESC', 'Duración en segundos tras la cual expira el tiempo de sesión para los clientes (se cerrará la sesión) - por defecto 1440<br />El valor establecido aquí sólo se aplica si el manejo de la sesión está basado en db. (configure.php =&gt; define(\'STORE_SESSIONS\', \'mysql\');)<br />Valor máximo: 14400');

define('CHECKOUT_USE_PRODUCTS_SHORT_DESCRIPTION_TITLE', '¿Descripción breve en el pedido/confirmación del pedido y en la página de confirmación del pedido?');
define('CHECKOUT_USE_PRODUCTS_SHORT_DESCRIPTION_DESC', 'Si se selecciona "Sí", la descripción breve se mostrará en los puntos mencionados si la descripción del pedido está vacía.<br />Si la descripción corta también está vacía, se utiliza la descripción larga, acortada al número de caracteres indicado más abajo en "Longitud de la descripción si la descripción corta está vacía".');
define('CHECKOUT_USE_PRODUCTS_DESCRIPTION_FALLBACK_LENGTH_TITLE', 'Longitud de la descripción, si la descripción corta está vacía');
define('CHECKOUT_USE_PRODUCTS_DESCRIPTION_FALLBACK_LENGTH_DESC', '¿A qué longitud debe cortarse la descripción si no se dispone de una descripción breve? (El texto se completa con [...])<br />Sólo se aplica si<i>"Breve descripción en la confirmación del pedido/pedido y en la página de confirmación del pedido</i>" está ajustado a "Sí" más arriba.');
define('CHECKOUT_SHOW_PRODUCTS_IMAGES_TITLE', 'Página de confirmación del pedido: Imágenes del producto');
define('CHECKOUT_SHOW_PRODUCTS_IMAGES_DESC', '¿Deben mostrarse las imágenes de los artículos en la página de confirmación del pedido?');
define('CHECKOUT_SHOW_PRODUCTS_MODEL_TITLE', 'Página de confirmación del pedido: Nº de artículo');
define('CHECKOUT_SHOW_PRODUCTS_MODEL_DESC', '¿Debe aparecer el número de artículo en la página de confirmación del pedido?');

define('EMAIL_BILLING_ATTACHMENTS_TITLE', 'Facturación de pedidos por correo electrónico ');
define('EMAIL_BILLING_ATTACHMENTS_DESC', 'Ejemplo para archivos adjuntos - siempre que los archivos se encuentren en el directorio de la tienda <b>/media/content/</b>. Separe los archivos adjuntos múltiples con comas sin espacios:<br />media/content/agb.pdf,media/content/widerruf.pdf,media/content/datenschutz.pdf');

define('SHOW_IMAGES_IN_EMAIL_TITLE', 'Insertar imágenes de artículos en el correo electrónico de pedido');
define('SHOW_IMAGES_IN_EMAIL_DESC', 'Insertar imágenes de artículos en el correo electrónico HTML de confirmación del pedido (aumenta el riesgo de que el correo electrónico sea clasificado como SPAM)');
define('SHOW_IMAGES_IN_EMAIL_DIR_TITLE', 'Carpeta de imágenes de correo electrónico ');
define('SHOW_IMAGES_IN_EMAIL_DIR_DESC', 'Selección de carpetas de imágenes de correo electrónico');
define('SHOW_IMAGES_IN_EMAIL_STYLE_TITLE', 'Estilo CSS de las imágenes de correo electrónico');
define('SHOW_IMAGES_IN_EMAIL_STYLE_DESC', 'Aquí pueden introducirse especificaciones de estilo CSS sencillas - por ejemplo, para la anchura máxima: max-width:90px;');

define('POPUP_SHIPPING_LINK_PARAMETERS_TITLE', 'Parámetros URL de la ventana emergente de gastos de envío');
define('POPUP_SHIPPING_LINK_PARAMETERS_DESC', 'Los parámetros de la URL pueden introducirse aquí - por defecto: &amp;KeepThis=true&amp;TB_iframe=true&amp;height=400&amp;width=600');
define('POPUP_SHIPPING_LINK_CLASS_TITLE', 'Ventana emergente de gastos de envío Clase CSS');
define('POPUP_SHIPPING_LINK_CLASS_DESC', 'Las clases CSS se pueden introducir aquí - por defecto: thickbox');
define('POPUP_CONTENT_LINK_PARAMETERS_TITLE', 'Páginas de contenido Ventana emergente Parámetros URL');
define('POPUP_CONTENT_LINK_PARAMETERS_DESC', 'Los parámetros de la URL pueden introducirse aquí - por defecto: &amp;KeepThis=true&amp;TB_iframe=true&amp;height=400&amp;width=600');
define('POPUP_CONTENT_LINK_CLASS_TITLE', 'Clase CSS de la ventana emergente de las páginas de contenido');
define('POPUP_CONTENT_LINK_CLASS_DESC', 'Las clases CSS se pueden introducir aquí - por defecto: thickbox');
define('POPUP_PRODUCT_LINK_PARAMETERS_TITLE', 'Parámetros URL de la ventana emergente de las páginas de productos');
define('POPUP_PRODUCT_LINK_PARAMETERS_DESC', 'Los parámetros de la URL pueden introducirse aquí - por defecto: &amp;KeepThis=true&amp;TB_iframe=true&amp;height=450&amp;width=750');
define('POPUP_PRODUCT_LINK_CLASS_TITLE', 'Clase CSS de la ventana emergente de las páginas de productos');
define('POPUP_PRODUCT_LINK_CLASS_DESC', 'Las clases CSS se pueden introducir aquí - por defecto: thickbox');
define('POPUP_COUPON_HELP_LINK_PARAMETERS_TITLE', 'Parámetros URL de la ventana emergente de ayuda del cupón');
define('POPUP_COUPON_HELP_LINK_PARAMETERS_DESC', 'Los parámetros de la URL pueden introducirse aquí - por defecto: &amp;KeepThis=true&amp;TB_iframe=true&amp;height=400&amp;width=600');
define('POPUP_COUPON_HELP_LINK_CLASS_TITLE', 'Clase CSS de la ventana emergente de ayuda del cupón');
define('POPUP_COUPON_HELP_LINK_CLASS_DESC', 'Las clases CSS se pueden introducir aquí - por defecto: thickbox');
define('POPUP_PRODUCT_PRINT_SIZE_TITLE', 'Producto Vista de impresión Tamaño de la ventana');
define('POPUP_PRODUCT_PRINT_SIZE_DESC', 'Aquí puede definir el tamaño de la ventana emergente - por defecto: width=640, height=600');
define('POPUP_PRINT_ORDER_SIZE_TITLE', 'Orden Imprimir Ver Tamaño de la ventana');
define('POPUP_PRINT_ORDER_SIZE_DESC', 'Aquí puede definir el tamaño de la ventana emergente - por defecto: width=640, height=600');

define('TRACKING_COUNT_ADMIN_ACTIVE_TITLE', 'Contar las impresiones de página del operador de la tienda');
define('TRACKING_COUNT_ADMIN_ACTIVE_DESC', 'Si esta opción está activada, también se contabilizan todos los accesos del administrador, lo que (debido a la mayor frecuencia de accesos a la tienda) puede falsear las estadísticas de visitas.');
define('TRACKING_GOOGLEANALYTICS_ACTIVE_TITLE', 'Activar el seguimiento de Google Analytics');
define('TRACKING_GOOGLEANALYTICS_ACTIVE_DESC', 'Si se activa esta opción, todas las visitas a la página se transmiten a Google Analytics y pueden evaluarse posteriormente. Esto requiere la creación previa de una cuenta con <a href="http://www.google.com/analytics/" target="_blank"><b>Google Analytics</b></a> es necesario.');
define('TRACKING_GOOGLEANALYTICS_ID_TITLE', 'Número de cuenta de Google Analytics');
define('TRACKING_GOOGLEANALYTICS_ID_DESC', 'Introduzca el número de cuenta de Google Analytics en el formato "UA-XXXXXX-X" que recibió tras crear correctamente una cuenta.');
define('TRACKING_PIWIK_ACTIVE_TITLE', 'Habilitar el seguimiento de Matomo Web Analytics');
define('TRACKING_PIWIK_ACTIVE_DESC', 'Para utilizar Matomo, primero debe descargarlo e instalarlo en su espacio web, véase también <a href="https://matomo.org/" target="_blank"><b>Matomo Analítica Web</b></a>. A diferencia de Google Analytics, los datos se almacenan localmente, es decir, usted como operador de la tienda tiene la soberanía de los datos.');
define('TRACKING_PIWIK_LOCAL_PATH_TITLE', 'Directorio de instalación de Matomo (sin "http://")');
define('TRACKING_PIWIK_LOCAL_PATH_DESC', 'Introduzca aquí el directorio una vez que Matomo se haya instalado correctamente. Introduzca el nombre de dominio completo sin "http://" como ruta, por ejemplo, "www.example.com/matomo".');
define('TRACKING_PIWIK_ID_TITLE', 'ID de la página Matomo');
define('TRACKING_PIWIK_ID_DESC', 'En la interfaz de administración de Matomo, se asigna un ID a cada dominio creado (normalmente "1").');
define('TRACKING_PIWIK_GOAL_TITLE', 'Número de campaña de Matomo (opcional)');
define('TRACKING_PIWIK_GOAL_DESC', 'Introduzca aquí un número de campaña si desea realizar un seguimiento de objetivos predefinidos. Detalles ver <a href="https://matomo.org/docs/tracking-goals-web-analytics/" target="_blank"><b>Matomo: Seguimiento de las conversiones de objetivos</b></a>');

define('CONFIRM_SAVE_ENTRY_TITLE', 'Aviso de confirmación al guardar artículos/categorías');
define('CONFIRM_SAVE_ENTRY_DESC', '¿Debería haber un aviso de confirmación al guardar artículos/categorías? Por defecto: true (sí)');

define('WHOS_ONLINE_IP_WHOIS_SERVICE_TITLE', 'Quién está en línea - URL de búsqueda Whois');
define('WHOS_ONLINE_IP_WHOIS_SERVICE_DESC', 'https://utrace.me/?query= o https://whois.domaintools.com/');

define('STOCK_CHECKOUT_UPDATE_PRODUCTS_STATUS_TITLE', 'Finalización del pedido - Desactivar artículos agotados');
define('STOCK_CHECKOUT_UPDATE_PRODUCTS_STATUS_DESC', '¿Debe desactivarse automáticamente un artículo agotado (cantidad de existencias 0) al final del pedido? Entonces, ¡el artículo ya no estará visible en la tienda!<br />Para los artículos que pronto volverán a estar disponibles, la opción debe fijarse en "false".');

define('SEND_EMAILS_DOUBLE_OPT_IN_TITLE', 'Doble opt-in para el registro en el boletín de noticias');
define('SEND_EMAILS_DOUBLE_OPT_IN_DESC', 'Si es "true", se envía un correo electrónico al cliente en el que debe confirmar el registro en el boletín. Para ello debe activar el envío de correos electrónicos.');

define('USE_ADMIN_FIXED_TOP_TITLE', 'Admin ¿Arreglar la cabecera de la página?');
define('USE_ADMIN_FIXED_TOP_DESC', '¿Debe estar siempre visible la cabecera de la página al desplazarse?');
define('USE_ADMIN_FIXED_SEARCH_TITLE', '¿Mostrar la barra de búsqueda del administrador?');
define('USE_ADMIN_FIXED_SEARCH_DESC', '¿Debe estar siempre visible la barra de búsqueda?');

define('SMTP_SECURE_TITLE', 'SMTP SEGURO');
define('SMTP_SECURE_DESC', '¿Requiere el servidor SMTP una conexión segura? Puede averiguar los ajustes necesarios a través de su proveedor.');

define('DISPLAY_ERROR_REPORTING_TITLE', 'Notificación de errores');
define('DISPLAY_ERROR_REPORTING_DESC', '¿Debe mostrarse el informe de errores como una lista formateada en el pie de página?');

define('DISPLAY_BREADCRUMB_OPTION_TITLE', 'Navegación con migas de pan');
define('DISPLAY_BREADCRUMB_OPTION_DESC', '<strong>nombre</strong><strong>:</strong> El nombre completo del artículo se muestra en la navegación de migas de pan.<br /><strong>modelo:</strong> El número del artículo se muestra en la navegación de migas de pan si está disponible. En caso contrario, vuelva al nombre del artículo.');

define('EMAIL_WORD_WRAP_TITLE', 'WordWrap para correos electrónicos de texto');
define('EMAIL_WORD_WRAP_DESC', 'Introduzca el número de caracteres de una línea en los mensajes de correo electrónico de texto antes de que se envuelva el texto (sólo números enteros).<br /><strong>Atención:</strong> ¡Un número de caracteres superior a 76 puede hacer que los correos electrónicos de la tienda sean clasificados como SPAM por SpamAssassin! Más información <a href="http://wiki.apache.org/spamassassin/Rules/MIME_QP_LONG_LINE" target="_blank">aquí</a>.');

define('ORDER_STATUSES_FOR_SALES_STATISTICS_TITLE', 'Filtro de estadísticas de rotación');
define('ORDER_STATUSES_FOR_SALES_STATISTICS_DESC', 'Seleccione los estados de pedido que deben tenerse en cuenta para las estadísticas de rotación en la página de inicio del administrador y en el desplegable de estados cuando utilice el estado "Filtro de estadísticas de rotación".<br />(Para mostrar sólo la facturación real, seleccione el estado que se utiliza cuando se completa el pedido.)<br /><b>Nota:</b> Deben seleccionarse al menos dos estados para que aparezca el "Filtro de estadísticas de facturación" en el desplegable de estadísticas de facturación. De lo contrario, el estado deseado puede seleccionarse directamente a través del desplegable.');

define('SAVE_IP_LOG_TITLE', 'Guardar dirección IP');
define('SAVE_IP_LOG_DESC', '¿Debe almacenarse la dirección IP en la base de datos?<br/>Con la opción xxx, se anonimizan los últimos dígitos de la IP.');

define('META_MAX_KEYWORD_LENGTH_TITLE', 'Longitud máxima de las metapalabras clave');
define('META_MAX_KEYWORD_LENGTH_DESC', 'Longitud máxima de las metapalabras clave generadas automáticamente (descripción del artículo)');
define('META_DESCRIPTION_LENGTH_TITLE', 'L&auml;nge Meta-Descripción');
define('META_DESCRIPTION_LENGTH_DESC', 'Longitud máxima de la descripción (en letras)');
define('META_STOP_WORDS_TITLE', 'Palabras clave');
define('META_STOP_WORDS_DESC', 'Introduzca aquí las palabras clave en forma de lista separada por comas que no se vayan a utilizar.');
define('META_GO_WORDS_TITLE', 'Ir a palabras');
define('META_GO_WORDS_DESC', 'Introduzca aquí las palabras clave en forma de lista separada por comas que se permiten explícitamente.');

define('CSV_TEXTSIGN_TITLE', 'Identificador de texto');
define('CSV_TEXTSIGN_DESC', '¡Por ejemplo, " | <span style="color:#c00;">Si se utiliza un punto y coma como separador, el identificador de texto debe ser "!</span>');
define('CSV_SEPERATOR_TITLE', 'Separador');
define('CSV_SEPERATOR_DESC', 'Por ejemplo ; | <span style="color:#c00;">¡Si el campo de entrada se deja vacío, se utilizará \t (= Tabulador) por defecto durante la exportación/importación!</span>');
define('COMPRESS_EXPORT_TITLE', 'Kompresión');
define('COMPRESS_EXPORT_DESC', 'Compresión de los datos exportados');
define('CSV_CATEGORY_DEFAULT_TITLE', 'Categoría de importación');
define('CSV_CATEGORY_DEFAULT_DESC', 'Todos los artículos a los que <b>no</b> se haya asignado una categoría en el archivo de importación CSV y que aún no existan en la tienda se importarán a esta categoría.<br/><b>Importante:</b> Si no desea importar artículos sin categoría en el archivo de importación CSV, seleccione la categoría "Arriba", ya que no se importará ningún artículo en esta categoría.');
define('CSV_CAT_DEPTH_TITLE', 'Kategorietiefe');
define('CSV_CAT_DEPTH_DESC', '¿Hasta dónde debe llegar el árbol de categorías? (por ejemplo, configuración estándar 4: categoría principal y tres subcategorías)<br />Esta configuración es importante para importar correctamente las categorías creadas en el CSV. Lo mismo ocurre con la exportación.<br /><span style="color:#c00;">Más de 4 puede dar lugar a pérdidas de rendimiento y puede no ser agradable para el cliente.</span>');

define('MIN_GROUP_PRICE_STAFFEL_TITLE', 'Número adicional Escala de precios');
define('MIN_GROUP_PRICE_STAFFEL_DESC', 'Número adicional de precios graduados que se muestran');

define('MODULE_CAPTCHA_ACTIVE_TITLE', 'Captcha activieren');
define('MODULE_CAPTCHA_ACTIVE_DESC', '¿Para qué secciones de la tienda debe activarse el captcha?');
define('MODULE_CAPTCHA_LOGGED_IN_TITLE', 'Clientes registrados');
define('MODULE_CAPTCHA_LOGGED_IN_DESC', 'Visualización del captcha para los clientes registrados.');
define('MODULE_CAPTCHA_LOGIN_NUM_TITLE', 'Número de intentos de inicio de sesión');
define('MODULE_CAPTCHA_LOGIN_NUM_DESC', 'Número de intentos de inicio de sesión fallidos antes de que se muestre el captcha.');
define('CAPTCHA_MOD_CLASS_TITLE', 'Módulo Captcha');
define('CAPTCHA_MOD_CLASS_DESC', 'Seleccione el módulo captcha a utilizar. Asegúrese de que el módulo también está instalado.');
define('CFG_TXT_MODIFIED_CAPTCHA', 'Estándar');
define('CFG_TXT_PHP_CAPTCHA', 'PhpCaptcha');

define('SHIPPING_STATUS_INFOS_TITLE', 'Plazo de entrega');
define('SHIPPING_STATUS_INFOS_DESC', 'Seleccione el contenido para mostrar la información sobre el plazo de entrega.');

define('USE_SHORT_DATE_FORMAT_TITLE', 'Mostrar fecha en formato corto');
define('USE_SHORT_DATE_FORMAT_DESC', 'Mostrar siempre la fecha en formato corto: <b>01.03.2014</b> en lugar de <b>Sábado, 01 de marzo de 2014</b><br />¡Recomendado en caso de errores de visualización con el formato de fecha largo, como problemas de idioma incorrecto o diéresis!');

define('MAX_DISPLAY_PRODUCTS_CATEGORY_TITLE', 'Máximo de artículos');
define('MAX_DISPLAY_PRODUCTS_CATEGORY_DESC', 'Número máximo de artículos de la misma categoría.');
define('MAX_DISPLAY_ADVANCED_SEARCH_RESULTS_TITLE', 'Número de resultados de la búsqueda');
define('MAX_DISPLAY_ADVANCED_SEARCH_RESULTS_DESC', 'Número máximo de artículos que se mostrarán por página en los resultados de la búsqueda (advanced_search_result.php).');
define('MAX_DISPLAY_PRODUCTS_HISTORY_TITLE', 'Número de historial');
define('MAX_DISPLAY_PRODUCTS_HISTORY_DESC', 'Muestra el número máximo de artículos que se visitaron por última vez en la cuenta.');

define('PRODUCT_IMAGE_SHOW_NO_IMAGE_TITLE', 'Artículo noimage.gif');
define('PRODUCT_IMAGE_SHOW_NO_IMAGE_DESC', 'Visualización del archivo noimage.gif si no se ha especificado ninguna imagen del artículo.');
define('CATEGORIES_IMAGE_SHOW_NO_IMAGE_TITLE', 'Categoría noimage.gif');
define('CATEGORIES_IMAGE_SHOW_NO_IMAGE_DESC', 'Visualización del archivo noimage.gif si no se ha especificado ninguna imagen de categoría.');
define('MANUFACTURER_IMAGE_SHOW_NO_IMAGE_TITLE', 'Fabricante noimage.gif');
define('MANUFACTURER_IMAGE_SHOW_NO_IMAGE_DESC', 'Visualización de la imagen noimage.gif si no se ha especificado ninguna imagen productora.');

define('MODULE_SMALL_BUSINESS_TITLE', 'Pequeña empresa');
define('MODULE_SMALL_BUSINESS_DESC', '¿Debe convertirse la tienda en una pequeña empresa según el &sect; 19 UStG?<br /><b>Importante:</b> En "Módulos" -&gt; "Resumen" el módulo "ot_tax" debe estar <a href="' . xtc_href_link(FILENAME_MODULES, 'set=ordertotal&module=ot_tax') . '"><b>aquí</b></a> debe desactivarse o desinstalarse. Además, en el individuo <a href="' . xtc_href_link(FILENAME_CUSTOMERS_STATUS, '') . '"><b>Grupos de clientes</b></a> "Precios con IVA incluido" debe estar ajustado a "No".');

define('COMPRESS_HTML_OUTPUT_TITLE', 'Compresión HTML');
define('COMPRESS_HTML_OUTPUT_DESC', '¿La salida HTML de la plantilla debe entregarse comprimida?');
define('COMPRESS_STYLESHEET_TITLE', 'Compresión CSS');
define('COMPRESS_STYLESHEET_DESC', '¿Debe entregarse una hoja de estilo comprimida?<br/><b>Atención:</b> ¡Sólo funciona con una plantilla compatible con la versión 2.0.0.0 o superior de la tienda!');
define('COMPRESS_JAVASCRIPT_TITLE', 'Compresión JavaScript');
define('COMPRESS_JAVASCRIPT_DESC', '¿Se debe entregar un archivo JavaScript comprimido?<br/><b>Atención:</b> ¡Esto sólo funciona con una plantilla compatible a partir de la versión 2.0.1.0 de la tienda!');

define('USE_ATTRIBUTES_IFRAME_TITLE', 'Atributos y propiedades en el iframe');
define('USE_ATTRIBUTES_IFRAME_DESC', 'Abre la gestión de propiedades de atributos y artículos en la vista de categoría/artículo en un iframe.');

define('ADMIN_HEADER_X_FRAME_OPTIONS_TITLE', 'Admin Clickjacking Schutz');
define('ADMIN_HEADER_X_FRAME_OPTIONS_DESC', 'Proteja el área de administración con la cabecera "X-Frame-Options: SAMEORIGIN "<br>Navegadores</br>compatibles<br>: FF 3.6.9+ Chrome 4.1.249.1042+ IE 8+ Safari 4.0+ Opera 10.50+</br>');

define('SEND_MAIL_ACCOUNT_CREATED_TITLE', 'Correo electrónico de creación de cuenta');
define('SEND_MAIL_ACCOUNT_CREATED_DESC', '¿Debe enviarse un correo electrónico al cliente cuando se crea una nueva cuenta de cliente?');

define('STATUS_EMAIL_SENT_COPY_TO_ADMIN_TITLE', 'Correo electrónico sobre el cambio de estado');
define('STATUS_EMAIL_SENT_COPY_TO_ADMIN_DESC', '¿Debe enviarse un correo electrónico al administrador cuando se modifica el estado de un pedido?');

define('ORDER_EMAIL_SEND_COPY_TO_ADMIN_TITLE', 'Confirmación del pedido por correo electrónico a Admin');
define('ORDER_EMAIL_SEND_COPY_TO_ADMIN_DESC', '¿Se debe enviar una copia de la confirmación del pedido al administrador?');

define('STOCK_CHECK_SPECIALS_TITLE', 'Consulte las ofertas especiales');
define('STOCK_CHECK_SPECIALS_DESC', 'Compruebe si aún hay suficientes ofertas especiales disponibles para entregar el pedido.<br/><br/><b>ATENCIÓN:</b> Si no hay suficientes ofertas especiales disponibles, el pedido sólo podrá completarse una vez que se haya reducido la cantidad.');

define('DOWNLOAD_SHOW_LANG_DROPDOWN_TITLE', 'Desplegable de países en la cesta de la compra');
define('DOWNLOAD_SHOW_LANG_DROPDOWN_DESC', '¿Debe mostrarse el desplegable de países en la cesta de la compra cuando sólo se compran artículos de descarga?');

define('GUEST_ACCOUNT_EDIT_TITLE', 'Editar cuentas de invitados');
define('GUEST_ACCOUNT_EDIT_DESC', '¿Pueden los invitados ver y editar los datos de su cuenta?');

define('EMAIL_SIGNATURE_ID_TITLE', 'Firma de correo electrónico');
define('EMAIL_SIGNATURE_ID_DESC', 'Seleccione el contenido que se utilizará como firma en los correos electrónicos de la tienda.');

define('POLICY_MIN_LOWER_CHARS_TITLE', 'Contraseña en minúsculas');
define('POLICY_MIN_LOWER_CHARS_DESC', '¿Cuántas letras minúsculas debe tener como mínimo la contraseña?');
define('POLICY_MIN_UPPER_CHARS_TITLE', 'Contraseña Mayúsculas');
define('POLICY_MIN_UPPER_CHARS_DESC', '¿Cuántas mayúsculas debe tener como mínimo la contraseña?');
define('POLICY_MIN_NUMERIC_CHARS_TITLE', 'Números de contraseña');
define('POLICY_MIN_NUMERIC_CHARS_DESC', '¿Cuántos números debe tener como mínimo la contraseña?');
define('POLICY_MIN_SPECIAL_CHARS_TITLE', 'Caracteres especiales de la contraseña');
define('POLICY_MIN_SPECIAL_CHARS_DESC', '¿Cuántos caracteres especiales debe tener como mínimo la contraseña?');

define('SHOW_SHIPPING_EXCL_TITLE', 'Gastos de envío más.');
define('SHOW_SHIPPING_EXCL_DESC', 'Visualización de los gastos de envío más o menos');

define('ACCOUNT_TELEPHONE_OPTIONAL_TITLE', 'Número de teléfono opcional');
define('ACCOUNT_TELEPHONE_OPTIONAL_DESC', '¿Debe solicitarse el número de teléfono sólo como opción?');

define('TRACKING_GOOGLEANALYTICS_UNIVERSAL_TITLE', 'Google Universal Analytics');
define('TRACKING_GOOGLEANALYTICS_UNIVERSAL_DESC', '¿Debe utilizarse el código de Google Universal Analytics?<br/><b>Atención:</b> ¡Sólo funciona con una plantilla compatible con la versión 2.0.0.0 o superior de la tienda!');
define('TRACKING_GOOGLEANALYTICS_DOMAIN_TITLE', 'Dominio de la cookie de Google Universal Analytics');
define('TRACKING_GOOGLEANALYTICS_DOMAIN_DESC', 'Introduzca aquí el dominio de su cookie<i>(auto</i> o <i>ejemplo.com</i> o <i>www.example.com)</i>. Sólo funciona para Google Universal Analytics.');
define('TRACKING_GOOGLE_LINKID_TITLE', 'Google Universal Analytics/Google Analytics GTAG LinkID');
define('TRACKING_GOOGLE_LINKID_DESC', 'Puede ver información separada para varios enlaces de una página que tengan todos el mismo destino. Por ejemplo, si hay dos enlaces en la misma página que van ambos a la página de Contacto, verá información de clics separada para cada enlace. Sólo funciona para Google Universal Analytics y Google Analytics GTAG.');
define('TRACKING_GOOGLE_DISPLAY_TITLE', 'Google Universal Analytics/Google Analytics GTAG Displayfeature');
define('TRACKING_GOOGLE_DISPLAY_DESC', 'Las secciones demográficas y de intereses incluyen una visión general y nuevos informes sobre el rendimiento por edad, sexo y categorías de interés. Sólo funciona para Google Universal Analytics y Google Analytics GTAG.');
define('TRACKING_GOOGLE_ECOMMERCE_TITLE', 'Google E-Commerce-Tracking');
define('TRACKING_GOOGLE_ECOMMERCE_DESC', 'Utilice el seguimiento del comercio electrónico para averiguar qué compran los visitantes a través de su sitio web o aplicación. También obtendrá la siguiente información:<br><br><strong>Productos:</strong> Productos comprados, así como las cantidades y ventas generadas por estos productosTransacciones<br><strong>:</strong> Información sobre ventas, impuestos, gastos de envío y cantidades de cada transacciónTiempo<br><strong>hasta la compra:</strong> número de días y visitas, desde la campaña actual hasta que se complete la transacción</br>.</br>');
define('TRACKING_GOOGLEANALYTICS_GTAG_TITLE', 'Google Analytics GTAG');
define('TRACKING_GOOGLEANALYTICS_GTAG_DESC', '¿Debe utilizarse la etiqueta de sitio global de Google?');

define('NEW_ATTRIBUTES_STYLING_TITLE', 'Estilización de la gestión de atributos');
define('NEW_ATTRIBUTES_STYLING_DESC', '¿Activar el estilo de las casillas de verificación/desplegables en la gestión de atributos? Establezca no/false si hay muchos atributos y problemas de rendimiento.');

define('DB_CACHE_TYPE_TITLE', 'Motor caché');
define('DB_CACHE_TYPE_DESC', 'Seleccione uno de los motores disponibles para el almacenamiento en caché.');

define('META_PRODUCTS_KEYWORDS_LENGTH_TITLE', 'Longitud de los términos adicionales para la búsqueda');
define('META_PRODUCTS_KEYWORDS_LENGTH_DESC', 'Longitud máxima de los términos adicionales para la búsqueda (en letras).');
define('META_KEYWORDS_LENGTH_TITLE', 'Longitud meta palabras clave');
define('META_KEYWORDS_LENGTH_DESC', 'Longitud máxima de las palabras clave (en letras).');
define('META_TITLE_LENGTH_TITLE', 'Longitud Meta-Título');
define('META_TITLE_LENGTH_DESC', 'Longitud máxima del título (en letras).');
define('META_CAT_SHOP_TITLE_TITLE', 'Categorías de títulos de la tienda');
define('META_CAT_SHOP_TITLE_DESC', '¿Añadir el título de la tienda a las categorías?');
define('META_PROD_SHOP_TITLE_TITLE', 'Comprar productos de título');
define('META_PROD_SHOP_TITLE_DESC', '¿Añadir el título de la tienda a los productos?');
define('META_CONTENT_SHOP_TITLE_TITLE', 'Tienda Título Contenido');
define('META_CONTENT_SHOP_TITLE_DESC', '¿Añadir el título de la tienda al contenido?');
define('META_SPECIALS_SHOP_TITLE_TITLE', 'Ofertas especiales del título de la tienda');
define('META_SPECIALS_SHOP_TITLE_DESC', '¿Adjuntar el título de la tienda a las ofertas especiales?');
define('META_NEWS_SHOP_TITLE_TITLE', 'Título de la tienda Nuevos productos');
define('META_NEWS_SHOP_TITLE_DESC', '¿Añadir el título de la tienda a los nuevos productos?');
define('META_SEARCH_SHOP_TITLE_TITLE', 'Búsqueda de títulos en la tienda');
define('META_SEARCH_SHOP_TITLE_DESC', '¿Añadir el título de la tienda a los resultados de búsqueda de la tienda?');
define('META_OTHER_SHOP_TITLE_TITLE', 'Tienda título otras páginas');
define('META_OTHER_SHOP_TITLE_DESC', '¿Añadir el título de la tienda a todas las demás páginas?');
define('META_GOOGLE_VERIFICATION_KEY_TITLE', 'Clave de verificación de Google');
define('META_GOOGLE_VERIFICATION_KEY_DESC', '<meta name="google-site-verification">');
define('META_BING_VERIFICATION_KEY_TITLE', 'Clave de verificación de Bing');
define('META_BING_VERIFICATION_KEY_DESC', '<meta name="msvalidate.01">');

define('TRACKING_FACEBOOK_ACTIVE_TITLE', 'Activar el seguimiento de conversiones de Facebook');
define('TRACKING_FACEBOOK_ACTIVE_DESC', 'Si se activa esta opción, todas las compras se transmiten a Facebook y pueden evaluarse posteriormente. Esto requiere la creación previa de una cuenta con <a href="https://www.facebook.com" target="_blank"><b>Facebook</b></a> es necesario.<br/><b>Atención:</b> ¡Sólo funciona con una plantilla compatible con la versión 2.0.0.0 o superior de la tienda!');
define('TRACKING_FACEBOOK_ID_TITLE', 'ID de conversión de Facebook');
define('TRACKING_FACEBOOK_ID_DESC', 'Su ID de conversión de Facebook');

define('NEW_SELECT_CHECKBOX_TITLE', 'Estilo del área de administración');
define('NEW_SELECT_CHECKBOX_DESC', 'En el área de administración, active el estilo para las casillas de verificación/desplegables?');
define('CSRF_TOKEN_SYSTEM_TITLE', 'Sistema de tokens de administración');
define('CSRF_TOKEN_SYSTEM_DESC', '¿Debe utilizarse el sistema de fichas en la administración?<br/><b>Atención:</b> El sistema de fichas se introdujo para aumentar la seguridad.');

define('DISPLAY_FILTER_INDEX_TITLE', 'Visualización de filtros por página - Artículo');
define('DISPLAY_FILTER_INDEX_DESC', 'Introduzca los posibles valores de la selección separados por una coma. Para todos los artículos introduzca todos.<br/>Ej: 3,12,27,todos');
define('DISPLAY_FILTER_SPECIALS_TITLE', 'Visualización de filtros por página - Ofertas especiales');
define('DISPLAY_FILTER_SPECIALS_DESC', 'Introduzca los posibles valores de la selección separados por una coma. Para todos los artículos introduzca todos.<br/>Ej: 3,12,27,todos');
define('DISPLAY_FILTER_PRODUCTS_NEW_TITLE', 'Visualización de filtros por página - Nuevos artículos');
define('DISPLAY_FILTER_PRODUCTS_NEW_DESC', 'Introduzca los posibles valores de la selección separados por una coma. Para todos los artículos introduzca todos.<br/>Ej: 3,12,27,todos');
define('DISPLAY_FILTER_ADVANCED_SEARCH_RESULT_TITLE', 'Visualización de filtros por página - Resultados de la búsqueda');
define('DISPLAY_FILTER_ADVANCED_SEARCH_RESULT_DESC', 'Introduzca los posibles valores de la selección separados por una coma. Para todos los artículos introduzca todos.<br/>Ej: 4,12,32,todos');

define('USE_BROWSER_LANGUAGE_TITLE', 'Cambiar automáticamente al idioma del navegador');
define('USE_BROWSER_LANGUAGE_DESC', 'Cambie automáticamente el idioma al idioma del navegador del cliente.');

define('WYSIWYG_SKIN_TITLE', 'Piel del editor WYSIWYG');
define('WYSIWYG_SKIN_DESC', 'Seleccione la piel del editor WYSIWYG.');

define('CHECK_CHEAPEST_SHIPPING_MODUL_TITLE', 'Preseleccione el método de envío más barato');
define('CHECK_CHEAPEST_SHIPPING_MODUL_DESC', '¿Debe preseleccionarse en la caja el método de envío más barato para el cliente?');

define('DISPLAY_PRIVACY_CHECK_TITLE', 'Firma de la protección de datos');
define('DISPLAY_PRIVACY_CHECK_DESC', '¿Firmar la privacidad durante la creación de la cuenta, el formulario de contacto, la suscripción al boletín de noticias y el pago?');

define('SHOW_SELFPICKUP_FREE_TITLE', 'Módulo de envío "auto recogida" para "libre de gastos de envío');
define('SHOW_SELFPICKUP_FREE_DESC', '¿Debe mostrarse el módulo de envío "selfpickup" cuando se alcance el importe establecido en el módulo "gastos de envío (ot_shiping)" para "envío gratuito"?');

define('CHECK_FIRST_PAYMENT_MODUL_TITLE', 'Preseleccione la primera opción de pago');
define('CHECK_FIRST_PAYMENT_MODUL_DESC', '¿Debe preseleccionarse la primera opción de pago para el cliente en la caja?');

define('ATTRIBUTES_VALID_CHECK_TITLE', 'Atributo validieren');
define('ATTRIBUTES_VALID_CHECK_DESC', 'Comprueba los artículos de la cesta de la compra del cliente en busca de atributos que ya no sean válidos.<br/>(Esto puede ocurrir si un cliente vuelve a entrar en la tienda después de mucho tiempo y quiere comprar un artículo que quedó en la cesta de la compra de una visita anterior).<br/><b>Nota:</b> Esta comprobación debe desactivarse para las extensiones que amplíen posteriormente los atributos, por ejemplo, el campo de texto.');

define('ATTRIBUTE_MODEL_DELIMITER_TITLE', 'Artículo/atributo nº separador');
define('ATTRIBUTE_MODEL_DELIMITER_DESC', 'Separador entre el número de artículo y el número de artículo de atributo.');

define('STORE_PAGE_PARSE_TIME_THRESHOLD_TITLE', 'Valor umbral para ahorrar el tiempo de cálculo del diseño de página');
define('STORE_PAGE_PARSE_TIME_THRESHOLD_DESC', 'Establece el valor umbral en segundos a partir del cual debe escribirse una entrada para el tiempo de cálculo del diseño de página.');

define('SEARCH_IN_FILTER_TITLE', 'Buscar en las propiedades del artículo');
define('SEARCH_IN_FILTER_DESC', 'Activar para habilitar la búsqueda en las propiedades del artículo.');
define('SEARCH_AC_STATUS_TITLE', 'Autocompletar Suche');
define('SEARCH_AC_STATUS_DESC', 'Activar para activar la búsqueda Autocompletar.<br/><b>Atención:</b> ¡Sólo funciona con una plantilla compatible con la versión 2.0.0.0 o superior de la tienda!');
define('SEARCH_AC_MIN_LENGTH_TITLE', 'Número de caracteres de búsqueda de autocompletar');
define('SEARCH_AC_MIN_LENGTH_DESC', '¿A partir de qué número de caracteres deben aparecer los primeros resultados de la búsqueda?<br/><b>Atención:</b> ¡Esto sólo funciona con una plantilla compatible con la versión 2.0.0.0 de la tienda!');
define('SEARCH_AC_CATEGORIES_TITLE', 'Desplegable de categorías en el cuadro de búsqueda');
define('SEARCH_AC_CATEGORIES_DESC', 'Activar para mostrar un desplegable de categorías en el cuadro de búsqueda antes del cuadro de búsqueda.');

define('DISPLAY_PRIVACY_ON_CHECKOUT_TITLE', 'Visualización de la protección de datos en la caja');
define('DISPLAY_PRIVACY_ON_CHECKOUT_DESC', '¿Debería aparecer también una nota sobre la protección de datos en la caja?<br/><b>Atención:</b> Si además se quiere mostrar una casilla de verificación, la opción "Firmar privacidad" debe estar ajustada a "Sí".');
define('DISPLAY_REVOCATION_VIRTUAL_ON_CHECKOUT_TITLE', 'Mostrar el derecho de desistimiento Descargas');
define('DISPLAY_REVOCATION_VIRTUAL_ON_CHECKOUT_DESC', '¿Debe aparecer una casilla en la caja indicando que el derecho de desistimiento expira?');
define('ORDER_STATUSES_DISPLAY_DEFAULT_TITLE', 'Mostrar pedidos');
define('ORDER_STATUSES_DISPLAY_DEFAULT_DESC', '¿Pedidos con qué estado de pedido deben mostrarse por defecto?');

define('INVOICE_INFOS_TITLE', 'Datos de la factura');
define('INVOICE_INFOS_DESC', 'Seleccione una página de contenido. El contenido aparece en la impresión de la factura.');

define('CATEGORIES_SHOW_PRODUCTS_SUBCATS_TITLE', 'Mostrar artículos de subcategorías');
define('CATEGORIES_SHOW_PRODUCTS_SUBCATS_DESC', '¿Deben aparecer en el listado todos los artículos de las subcategorías existentes?');

define('SEO_URL_MOD_CLASS_TITLE', 'Módulo URL');
define('SEO_URL_MOD_CLASS_DESC', 'Seleccione un módulo URL.');

define('MODULE_BANNER_MANAGER_STATUS_TITLE', 'Gestor de pancartas');
define('MODULE_BANNER_MANAGER_STATUS_DESC', '¿Activar Banner Manager?');

define('MODULE_NEWSLETTER_STATUS_TITLE', 'Boletín de noticias');
define('MODULE_NEWSLETTER_STATUS_DESC', '¿Activar el sistema de boletines?');

define('EMAIL_ARCHIVE_ADDRESS_TITLE', 'Archivo - Dirección de correo electrónico');
define('EMAIL_ARCHIVE_ADDRESS_DESC', 'Introduzca una dirección de correo electrónico para archivar todos los mensajes salientes. Esto envía los correos electrónicos a un buzón de archivo a través de CCO.');

define('DISPLAY_HEADQUARTER_ON_CHECKOUT_TITLE', 'Oficina central en caja');
define('DISPLAY_HEADQUARTER_ON_CHECKOUT_DESC', '¿Debe figurar la sede de la empresa en la caja?');

define('MODULE_NEWSLETTER_VOUCHER_AMOUNT_TITLE', 'Valor del vale del boletín de noticias');
define('MODULE_NEWSLETTER_VOUCHER_AMOUNT_DESC', 'Para un vale al registrarse en el boletín, introduzca el valor del vale, de lo contrario introduzca 0 aquí.');
define('MODULE_NEWSLETTER_DISCOUNT_COUPON_TITLE', 'Código de cupón del boletín de noticias');
define('MODULE_NEWSLETTER_DISCOUNT_COUPON_DESC', 'Para obtener un cupón al registrarse en el boletín de noticias, introduzca el código del cupón; de lo contrario, deje este campo en blanco.');
define('MODULE_NEWSLETTER_INFOS_TITLE', 'Información del boletín');
define('MODULE_NEWSLETTER_INFOS_DESC', 'Seleccione el contenido que se mostrará como información del boletín.');

define('ADMIN_START_TAB_SELECTED_TITLE', 'Página de inicio de las pestañas');
define('ADMIN_START_TAB_SELECTED_DESC', '¿Qué pestaña de la página de inicio debe seleccionarse por defecto?');

define('CACHE_LIFETIME_NOTE', '<b>Atención:</b> ¡Si la caché está activada, los cambios sólo serán visibles en la tienda una vez transcurrido el tiempo de vida de la caché!');

define('REVIEWS_PURCHASED_ONLY_TITLE', 'Comprobar clasificaciones');
define('REVIEWS_PURCHASED_ONLY_DESC', '¿Las reseñas sólo deberían ser posibles si un cliente también ha comprado el artículo?');
define('REVIEWS_PURCHASED_INFOS_TITLE', 'Información');
define('REVIEWS_PURCHASED_INFOS_DESC', 'Seleccione el contenido que desea mostrar como información de calificación sobre su autenticidad.');
