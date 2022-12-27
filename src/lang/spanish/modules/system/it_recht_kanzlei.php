<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

require_once DIR_FS_CATALOG . 'api/it-recht-kanzlei/classes/class.api_it_recht_kanzlei.php';

$api_it_recht_kanzlei = new api_it_recht_kanzlei();

define('MODULE_API_IT_RECHT_KANZLEI_TEXT_TITLE', 'IT Law Firm T&amp;C Interface v' . $api_it_recht_kanzlei->modulversion);
define('MODULE_API_IT_RECHT_KANZLEI_TEXT_DESCRIPTION', 'IT-Recht Kanzlei - Auto Updater para textos legales automáticos<br/><br/><b>IMPORTANTE:</b> Antes de utilizar el módulo, debe realizarse la asignación de las páginas de contenido.<hr noshade>');
define('MODULE_API_IT_RECHT_KANZLEI_STATUS_TITLE', 'Estado');
define('MODULE_API_IT_RECHT_KANZLEI_STATUS_DESC', 'Estado del módulo');
define('MODULE_API_IT_RECHT_KANZLEI_TOKEN_TITLE', 'Ficha de autenticación');
define('MODULE_API_IT_RECHT_KANZLEI_TOKEN_DESC', 'Token de autenticación que usted proporciona a IT-Recht Kanzlei.');
define('MODULE_API_IT_RECHT_KANZLEI_VERSION_TITLE', 'Versión API');
define('MODULE_API_IT_RECHT_KANZLEI_VERSION_DESC', 'Sólo deberá modificarlo si así se lo solicita IT-Recht Kanzlei. (Por defecto: 1,0)');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_AGB_TITLE', '<hr noshade>Texto legal CGC');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_AGB_DESC', 'Por favor, indique en qué página debe insertarse automáticamente este texto legal.');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_DSE_TITLE', 'Texto legal protección de datos');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_DSE_DESC', 'Por favor, indique en qué página debe insertarse automáticamente este texto legal.');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_WRB_TITLE', 'Revocación del texto legal');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_WRB_DESC', 'Por favor, indique en qué página debe insertarse automáticamente este texto legal.');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_IMP_TITLE', 'Impresión de texto legal');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_IMP_DESC', 'Por favor, indique en qué página debe insertarse automáticamente este texto legal.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_AGB_TITLE', '<hr noshade>Selección CGC PDF Texto legal');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_AGB_DESC', 'Indicación de si las CGC deben estar disponibles en formato PDF.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_DSE_TITLE', 'Selección Protección de datos PDF Texto legal');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_DSE_DESC', 'Especifique si el texto de protección de datos debe estar disponible en formato PDF.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_WRB_TITLE', 'Revocación de la selección PDF Texto jurídico');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_WRB_DESC', 'Indicación de si el texto de revocación debe estar disponible en formato PDF.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_FILE_TITLE', '<hr noshade>Almacén PDF');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_FILE_DESC', 'Indicación de la ubicación de los textos jurídicos en PDF.');
