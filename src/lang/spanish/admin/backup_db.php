<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('HEADING_TITLE', 'Gestor de copias de seguridad de bases de datos');

define('TEXT_INFO_DO_BACKUP', '¡La base de datos tiene copia de seguridad!');
define('TEXT_INFO_DO_BACKUP_OK', 'La copia de seguridad de la base de datos se ha realizado correctamente.');
define('TEXT_INFO_DO_GZIP', '¡El archivo de copia de seguridad está empaquetado!');
define('TEXT_INFO_WAIT', '¡Por favor, espere!');

define('TEXT_INFO_DO_RESTORE', '¡La base de datos está restaurada!');
define('TEXT_INFO_DO_RESTORE_OK', '¡La base de datos ha sido restaurada con éxito!');
define('TEXT_INFO_DO_GUNZIP', '¡El archivo de copia de seguridad está descomprimido!');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Error: el directorio para la copia de seguridad no existe. Por favor, corrija el error en su configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Error: No se puede escribir en el directorio de la copia de seguridad.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Error: El enlace de descarga no es aceptable.');
define('ERROR_DECOMPRESSOR_NOT_AVAILABLE', 'Error: No hay desempaquetador adecuado disponible.');
define('ERROR_UNKNOWN_FILE_TYPE', 'Error: Tipo de archivo desconocido.');
define('ERROR_RESTORE_FAILES', 'Error: Falló la restauración.');
define('ERROR_DATABASE_SAVED', 'Error: No se ha podido guardar la base de datos.');
define('ERROR_TEXT_PATH', 'Error: ¡No se ha encontrado o especificado la ruta a mysqldump!');

define('SUCCESS_LAST_RESTORE_CLEARED', 'Correcto: Se ha borrado la última fecha de restauración.');
define('SUCCESS_DATABASE_SAVED', 'Correcto: Se ha realizado una copia de seguridad de la base de datos.');
define('SUCCESS_DATABASE_RESTORED', 'Exitoso: La base de datos ha sido restaurada.');
define('SUCCESS_BACKUP_DELETED', 'Exitoso: La copia de seguridad ha sido eliminada.');

define('TEXT_BACKUP_UNCOMPRESSED', 'El archivo de copia de seguridad ha sido descomprimido: ');

define('TEXT_SIMULATION', '<br>(Simulación con archivo de registro)');
