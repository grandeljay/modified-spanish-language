<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('MODULE_SEMKNOX_SYSTEM_TEXT_TITLE', 'Búsqueda en el sitio Búsqueda de productos 360');
define('MODULE_SEMKNOX_SYSTEM_TEXT_DESCRIPTION', 'Una revolucionaria generación de búsqueda de productos para su empresa con una preparación de datos totalmente automatizada.');
define('MODULE_SEMKNOX_SYSTEM_STATUS_TITLE', 'Estado del módulo');
define('MODULE_SEMKNOX_SYSTEM_STATUS_DESC', 'Activar la búsqueda en el sitio 360 Búsqueda de productos');
define('MODULE_SEMKNOX_SYSTEM_DEFAULT_CSS_TITLE', 'CSS estándar');
define('MODULE_SEMKNOX_SYSTEM_DEFAULT_CSS_DESC', '¿Se debe cargar el CSS estándar de Site Search 360?');
define('MODULE_SEMKNOX_SYSTEM_COLOR_TITLE', 'Color de acento');
define('MODULE_SEMKNOX_SYSTEM_COLOR_DESC', 'Especifique el color de acento para títulos y botones (el ajuste sólo se aplica si se carga el CSS estándar).');

$languages = xtc_get_languages();

foreach ($languages as $language) {
    define('MODULE_SEMKNOX_SYSTEM_API_' . $language['id'] . '_TITLE', '[' . strtoupper($language['code']) . '] Clave API');
    define('MODULE_SEMKNOX_SYSTEM_API_' . $language['id'] . '_DESC', 'Clave API para ' . strtoupper($language['code']));

    define('MODULE_SEMKNOX_SYSTEM_PROJECT_' . $language['id'] . '_TITLE', '[' . strtoupper($language['code']) . '] Identificación del proyecto');
    define('MODULE_SEMKNOX_SYSTEM_PROJECT_' . $language['id'] . '_DESC', 'Proyecto ID f&uuml;r ' . strtoupper($language['code']));
}
