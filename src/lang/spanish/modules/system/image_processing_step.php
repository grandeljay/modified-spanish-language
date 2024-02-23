<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define(
    'MODULE_STEP_IMAGE_PROCESS_TEXT_DESCRIPTION',
    'Todas las imágenes de los directorios<br /><br />
        /images/product_images/popup_images/<br />
        /images/product_images/info_images/<br />
        /images/product_images/midi_images/<br />
        /images/product_images/thumbnail_images/<br />
        /images/product_images/mini_images/<br />
        /images/categories/<br />
        /images/manufacturers/<br />
        /images/banner/<br />

    se recrea.<br /> <br />
    Para ello, el script sólo procesa un número limitado de imágenes %s y luego se vuelve a llamar a sí mismo.<br /><br />'
);
define('MODULE_STEP_IMAGE_PROCESS_TEXT_TITLE', 'Saludo de imágenes');
define('MODULE_STEP_IMAGE_PROCESS_STATUS_DESC', 'Estado del módulo');
define('MODULE_STEP_IMAGE_PROCESS_STATUS_TITLE', 'Estado');
define('IMAGE_EXPORT', 'Pulse Inicio para iniciar el procesamiento por lotes. Este proceso puede llevar algún tiempo - ¡no lo interrumpa!');
define('IMAGE_EXPORT_TYPE', '<hr noshade><strong>Procesamiento por lotes:</strong>');

define('IMAGE_STEP_INFO', 'Imágenes creadas: ');
define('IMAGE_STEP_INFO_READY', ' - ¡Listo!');
define('TEXT_MAX_IMAGES', '<b>Imágenes por recarga de página:</b>');
define('TEXT_PROCESS_TYPE', '<b>Saludo de imágenes:</b>');
define('TEXT_SETTINGS', '<b>Ajustes:</b>');
define('TEXT_LOGGING', '<b>Registro:</b>');
define('TEXT_ONLY_MISSING_IMAGES', 'Crear sólo las imágenes que faltan');
define('MODULE_STEP_READY_STYLE_TEXT', '<div class="ready_info">%s</div>');
define('MODULE_STEP_READY_STYLE_BACK', MODULE_STEP_READY_STYLE_TEXT);
define('TEXT_LOWER_FILE_EXT', 'Convertir la extensión del archivo a minúsculas Ej: <b> JPG -&gt; jpg</b>');
define('IMAGE_COUNT_INFO', 'Número de imágenes en %s: %s pcs. ');

define('TEXT_PRODUCTS_MINI_IMAGES', 'Minicuadros');
define('TEXT_PRODUCTS_THUMBNAIL_IMAGES', 'Imágenes en miniatura');
define('TEXT_PRODUCTS_MIDI_IMAGES', 'Imágenes Midi');
define('TEXT_PRODUCTS_INFO_IMAGES', 'Fotos informativas');
define('TEXT_PRODUCTS_POPUP_IMAGES', 'Popup Bilder');

define('TEXT_CATEGORIES_IMAGES', 'Categoría Imágenes');
define('TEXT_CATEGORIES_LIST_IMAGES', 'Listado de imágenes de categoría');
define('TEXT_CATEGORIES_MOBILE_IMAGES', 'Categoría Fotos Móvil');

define('TEXT_BANNERS_IMAGES', 'Imágenes de banner');
define('TEXT_BANNERS_MOBILE_IMAGES', 'Imágenes de banner móvil');

define('TEXT_MANUFACTURERS_IMAGES', 'Imágenes del fabricante');

define('TEXT_PRODUCTS', 'Artículo');
define('TEXT_CATEGORIES', 'Categorías');
define('TEXT_MANUFACTURERS', 'Fabricante');
define('TEXT_BANNERS', 'Banner');

define('TEXT_LOGFILE', 'Activar el registro, útil para la resolución de problemas. El archivo de registro se guarda en la carpeta /log del directorio principal.');
