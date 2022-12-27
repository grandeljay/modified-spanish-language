<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('HEADING_TITLE', 'Copia de seguridad de la base de datos');

define('TABLE_HEADING_TITLE', 'Título');
define('TABLE_HEADING_FILE_DATE', 'Fecha');
define('TABLE_HEADING_FILE_SIZE', 'Gr&ouml;sse');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'Nuevo fusible');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Restaurar localmente');
define('TEXT_INFO_NEW_BACKUP', 'Por favor, NO interrumpa el proceso de copia de seguridad. Esto puede llevar varios minutos.');
define('TEXT_INFO_UNPACK', '<br /><br />(después de haber extraído los ficheros del archivo)');
define('TEXT_INFO_RESTORE', 'NO interrumpa el proceso de restauración.<br /><br />Cuanto mayor sea el archivo de copia de seguridad, más tiempo tardará el proceso de restauración.<br /><br />Por favor, utilice el cliente mysql si es posible.<br /><br />Ejemplo:<br /><br /><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' &lt; %s %s </b> ');
define('TEXT_INFO_RESTORE_LOCAL', 'NO interrumpa el proceso de restauración.<br /><br />Cuanto mayor sea el archivo de copia de seguridad, ¡más tardará en restaurarse!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'El archivo que se cargue debe ser un archivo denominado raw sql (sólo texto).');
define('TEXT_INFO_DATE', 'Fecha:');
define('TEXT_INFO_SIZE', 'Talla:');
define('TEXT_INFO_COMPRESSION', 'Comprima:');
define('TEXT_INFO_USE_GZIP', 'Con GZIP');
define('TEXT_INFO_USE_ZIP', 'Con ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Sin compresión (SQL sin procesar)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Sólo descargar (no guardar en el servidor)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Utilice una conexión HTTPS segura');
define('TEXT_NO_EXTENSION', 'Ninguno');
define('TEXT_BACKUP_DIRECTORY', 'Directorio de copias de seguridad:');
define('TEXT_LAST_RESTORATION', 'Última restauración:');
define('TEXT_FORGET', '<u>(olvidado</u>)');
define('TEXT_DELETE_INTRO', '¿Está seguro de que desea eliminar esta copia de seguridad?');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Error: El directorio de copia de seguridad no existe.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Error: El directorio de copia de seguridad está protegido contra escritura.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Error: Enlace de descarga no aceptable.');

define('SUCCESS_LAST_RESTORE_CLEARED', 'Éxito: Se ha borrado la última fecha de restauración.');
define('SUCCESS_DATABASE_SAVED', 'Éxito: Se ha realizado una copia de seguridad de la base de datos.');
define('SUCCESS_DATABASE_RESTORED', 'Éxito: La base de datos ha sido restaurada.');
define('SUCCESS_BACKUP_DELETED', 'Éxito: El archivo de copia de seguridad ha sido eliminado.');
define('SUCCESS_BACKUP_UPLOAD', 'Correcto: El archivo de copia de seguridad se ha cargado correctamente.');

define('TEXT_COMPLETE_INSERTS', "<b>Completar 'INSERT</b><br> - Los nombres de los campos se introducen en cada línea INSERT (amplía la copia de seguridad)");
define('TEXT_INFO_TABLES_IN_BACKUP', '<br />' . "\n" . '<b>tablas en esta copia de seguridad:</b>' . "\n");
define('TEXT_INFO_NO_INFORMATION', 'No hay información disponible');
define('TEXT_CONVERT_TO_UTF', 'Convertir la base de datos a UTF-8');
define('TEXT_IMPORT_UTF', 'Restaurar base de datos UTF-8');
define('TEXT_REMOVE_COLLATE', "<b>Sin codificación de caracteres 'COLLATE' y 'DEFAULT CHARSET'.</b><br> - La información sobre la codificación de caracteres no se inserta. Útil cuando se migra a una codificación de caracteres de BD diferente.");
define('TEXT_REMOVE_ENGINE', "<b>Sin motores de almacenamiento 'MOTOR'.</b><br> - Los detalles del motor de almacenamiento (MyISAM,InnoDB) no se insertan.");

define('TEXT_IMPORT_UTF8_NOTICE', '<b>Atención:</b> la base de datos se convertirá a UTF-8.');
define('TEXT_INFO_CHARSET', 'Juego de caracteres:');

define('TEXT_TABLES_BACKUP_TYPE', '<b>Copia de seguridad</b><br> - ¿De qué tablas debe hacerse una copia de seguridad?');
define('TEXT_BACKUP_ALL', 'Todas las mesas');
define('TEXT_BACKUP_CUSTOM', 'Cuadros seleccionados');
define('TEXT_TABLES_TO_BACKUP', '<b>Las siguientes tablas deben guardarse:</b>');
define('TEXT_CHECK_ALL_TABLES', 'Seleccionar todas las tablas');
