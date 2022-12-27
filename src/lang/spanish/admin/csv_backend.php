<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('IMPORT', 'Importar');
define('EXPORT', 'Exportar');
define('UPLOAD', 'Cargar el archivo en el servidor');
define('SELECT', 'Seleccione el archivo a importar y realice la importación (directorio /import)');
define('SAVE', 'Guardar en el servidor (directorio /exportar)');
define('LOAD', 'Enviar archivo al navegador');
define('CSV_TEXTSIGN_TITLE', 'Identificador de texto');
define('CSV_TEXTSIGN_DESC', '¡Por ejemplo, " | <span style="color:#c00;">Si se utiliza un punto y coma como separador, el identificador de texto debe ser "!</span>');
define('CSV_SEPERATOR_TITLE', 'Separador');
define('CSV_SEPERATOR_DESC', 'Por ejemplo ; | <span style="color:#c00;">¡Si el campo de entrada se deja vacío, se utilizará \t (= Tabulador) por defecto durante la exportación/importación!</span>');
define('COMPRESS_EXPORT_TITLE', 'Kompresión');
define('COMPRESS_EXPORT_DESC', 'Compresión de los datos exportados');
define('CSV_SETUP', 'Ajustes');
define('TEXT_IMPORT', '');
define('TEXT_PRODUCTS', 'Productos');
define('TEXT_EXPORT', 'El archivo exportado se guarda en el directorio /export');
define('CSV_CATEGORY_DEFAULT_TITLE', 'Categoría de importación');
define('CSV_CATEGORY_DEFAULT_DESC', 'Todos los artículos a los que <b>no</b> se haya asignado una categoría en el archivo de importación CSV y que aún no existan en la tienda se importarán a esta categoría.<br/><b>Importante:</b> Si no desea importar artículos sin categoría en el archivo de importación CSV, seleccione la categoría "Arriba", ya que no se importará ningún artículo en esta categoría.');
define('CSV_CAT_DEPTH_TITLE', 'Kategorietiefe');
define('CSV_CAT_DEPTH_DESC', '¿Hasta dónde debe llegar el árbol de categorías? (por ejemplo, configuración estándar 4: categoría principal y tres subcategorías)<br />Esta configuración es importante para importar correctamente las categorías creadas en el CSV. Lo mismo ocurre con la exportación.<br /><span style="color:#c00;">Más de 4 puede dar lugar a pérdidas de rendimiento y puede no ser agradable para el cliente.</span>');
