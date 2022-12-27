<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('HEADING_TITLE', 'Gestor de pancartas');

define('TABLE_HEADING_BANNERS', 'Banner');
define('TABLE_HEADING_GROUPS', 'Grupo');
define('TABLE_HEADING_STATISTICS', 'Anuncios / Clics');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_ACTION', 'Acción');
define('TABLE_HEADING_LANGUAGE', 'Idioma');
define('TABLE_HEADING_SORT', 'Pida');
define('TABLE_HEADING_IMAGE', 'Imagen');

define('TEXT_BANNERS_TITLE', 'Título de la pancarta:');
define('TEXT_BANNERS_URL', 'URL del banner:');
define('TEXT_BANNERS_URL_NOTE', 'URL de destino cuando se hace clic en el banner.');
define('TEXT_BANNERS_REDIRECT', 'Enlace directo:');
define('TEXT_BANNERS_REDIRECT_NOTE', 'El banner se enlaza directamente con la URL del banner especificada y no utilizando "redirect.php?action=banner&amp;goto=xxx".<br /><strong>ATENCIÓN:</strong> ¡Los "anuncios / clics" ya no se pueden contabilizar si está activada la "vinculación directa"!');
define('TEXT_BANNERS_GROUP', 'Grupo Banner:');
define('TEXT_BANNERS_NEW_GROUP', 'Seleccione el grupo de banners deseado en el cuadro desplegable (si está disponible) o introduzca un nuevo grupo de banners a continuación.');
define('TEXT_BANNERS_NEW_GROUP_NOTE', 'Para que aparezca un banner en la plantilla, ésta debe ampliarse.<br/>Ejemplo: El grupo Banner es banner, entonces se puede mostrar en la plantilla en el index.html con {$BANNER}.');
define('TEXT_BANNERS_IMAGE', 'Imagen (archivo):');
define('TEXT_BANNERS_IMAGE_MOBILE', 'Imagen móvil (archivo):');
define('TEXT_BANNERS_IMAGE_LOCAL', 'Seleccione la imagen deseada haciendo clic en "Examinar" o seleccione un banner existente.<br /><strong>Tipos de archivo permitidos:</strong> jpg, jpeg, jpe, gif, png, bmp, tiff, tif, bmp, swf, cab');
define('TEXT_BANNERS_IMAGE_TARGET', 'Destino de la imagen (Guardar en):');
define('TEXT_BANNERS_HTML_TEXT', 'Texto HTML:');
define('TEXT_BANNERS_HTML_TEXT_NOTE', 'Aquí puede introducir directamente el código HTML de un servicio de afiliación para la visualización del banner.');
define('TEXT_BANNERS_EXPIRES_ON', 'Válido hasta:');
define('TEXT_BANNERS_OR_AT', 'o con');
define('TEXT_BANNERS_IMPRESSIONS', 'Impresiones/anuncios.');
define('TEXT_BANNERS_SCHEDULED_AT', 'Validez desde:');
define('TEXT_BANNERS_BANNER_NOTE', '<b>Comentario de la pancarta:</b><ul><li>Puede utilizar banners de imagen o de texto HTML, ambos no son posibles al mismo tiempo.</li><li>Si utiliza ambos tipos de banner al mismo tiempo, sólo se mostrará el banner de texto HTML.</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>Observación:</b><ul><li>Debe tener acceso de escritura al directorio de imágenes.</li><li>No rellene el campo \'Destino de la imagen (guardar en)\N si no desea copiar una imagen en su servidor (por ejemplo, si la imagen ya se encuentra en el servidor).</li><li>El campo \'Destino de la imagen (guardar en)\' debe ser un directorio ya existente con \'/\' al final (por ejemplo, banners/).</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>Comentario sobre la validez:</b><ul><li>Rellene sólo un campo</li><li>Si el banner debe mostrarse indefinidamente, no introduzca nada en estos campos.</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>Validez a partir del comentario:</b><ul><li>Al utilizar esta función, el banner sólo se mostrará a partir de la fecha especificada.</li><li>Todos los banners con esta función se muestran como desactivados hasta que se activan.</li></ul>');

define('TEXT_BANNERS_DATE_ADDED', 'añadido el:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Validez desde: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Válido hasta: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'Validez hasta: <b>%s</b> impresiones/anuncios');
define('TEXT_BANNERS_STATUS_CHANGE', 'Estado modificado: %s');

define('TEXT_BANNERS_DATA', 'D<br />A<br />T<br />E<br />N');
define('TEXT_BANNERS_LAST_3_DAYS', 'Últimos 3 días');
define('TEXT_BANNERS_BANNER_VIEWS', 'Anuncios');
define('TEXT_BANNERS_BANNER_CLICKS', 'Clics en el banner');
define('TEXT_BANNERS_SORT', 'Secuencia:');
define('TEXT_BANNERS_SORT_NOTE', 'La orden sólo afecta a los deslizadores dinámicos y no a los banners estáticos.');

define('TEXT_INFO_DELETE_INTRO', '¿Está seguro de que desea eliminar este banner?');
define('TEXT_INFO_DELETE_IMAGE', 'Borrar imagen de banner');

define('SUCCESS_BANNER_INSERTED', 'Éxito: El banner ha sido insertado.');
define('SUCCESS_BANNER_UPDATED', 'Éxito: El banner ha sido actualizado.');
define('SUCCESS_BANNER_REMOVED', 'Éxito: El banner ha sido eliminado.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Éxito: Se ha actualizado el estado de la pancarta.');

define('ERROR_BANNER_TITLE_REQUIRED', 'Error: Se requiere un título de banner.');
define('ERROR_BANNER_GROUP_REQUIRED', 'Error: Se requiere un grupo de banners.');
define('ERROR_BANNER_IMAGE_HTML_REQUIRED', 'Error: Se requiere una imagen de banner o texto HTML.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Error: El directorio de destino %s no existe.');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Error: El directorio de destino %s no es escribible.');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Error: La imagen no existe.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Error: No se puede borrar la imagen.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Error: Bandera de estado desconocida.');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Error: ¡El directorio \'graphs\' no existe! Por favor, cree un directorio \'gráficos\' en el directorio \'imágenes\'.');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Error: ¡El directorio \'graphs\' está protegido contra escritura!');

define('TEXT_BANNERS_DATE_FORMAT', 'AAAA-MM-DD');
define('TEXT_BANNERS_LANGUAGE', 'Idioma:');
define('TEXT_BANNERS_LANGUAGE_NOTE', '¿En qué idioma debe aparecer el banner?');
define('TEXT_NO_FILE', '-- sin archivo --');
define('TEXT_BANNERS_LATEST_STATISTICS', '%s días Estadísticas');
