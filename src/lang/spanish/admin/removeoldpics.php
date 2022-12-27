<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('HEADING_TITLE', 'Alte Artikelbilder l&ouml;schen');
define(
    'LINK_INFO_TEXT',
    '<p>Esta función puede utilizarse para eliminar imágenes de artículos superfluas en los directorios:</p>
    - /images/product_images/info_images<br/>
    - /images/product_images/midi_images<br/>
    - /images/product_images/mini_images<br/>
    - /images/product_images/original_images<br/>
    - /images/product_images/popup_images<br/>
    - /images/product_images/thumbnail_images<br/>
    <p>se borrarán del servidor web si ya no hay ninguna referencia a estas imágenes de artículos en la base de datos.<br/>Si una imagen ya no es utilizada por ningún producto, puede eliminarse de forma segura del servidor web.</p><br/>'
);
define('LINK_ORIGINAL', 'Borrar imágenes originales antiguas');
define('LINK_POPUP', 'Borrar imágenes emergentes antiguas');
define('LINK_INFO', 'Borrar fotos informativas antiguas');
define('LINK_MIDI', 'Borrar imágenes Midi antiguas');
define('LINK_THUMBNAIL', 'Borrar imágenes en miniatura antiguas');
define('LINK_MINI', 'Borrar fotos antiguas del Mini');
define('LINK_MESSAGE', 'Se han eliminado las imágenes superfluas del artículo del directorio "/images/product_images/%s_images".');
define('LINK_MESSAGE_NO_DELETE', 'No se han encontrado imágenes de artículos superfluos en el directorio "/images/product_images/%s_images".');
