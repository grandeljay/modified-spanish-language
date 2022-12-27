<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('HEADING_TITLE', 'Divisas');

define('TABLE_HEADING_CURRENCY_NAME', 'Moneda');
define('TABLE_HEADING_CURRENCY_CODES', 'Abreviatura');
define('TABLE_HEADING_CURRENCY_VALUE', 'Valor');
define('TABLE_HEADING_ACTION', 'Acción');
define('TABLE_HEADING_CURRENCY_STATUS', 'Estado');

define('TEXT_INFO_EDIT_INTRO', 'Por favor, realice todos los cambios necesarios');
define('TEXT_INFO_CURRENCY_TITLE', 'Nombre:');
define('TEXT_INFO_CURRENCY_CODE', 'Código de moneda según la norma ISO 4217:');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', 'Símbolo a la izquierda:');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', 'Símbolo derecho:');
define('TEXT_INFO_CURRENCY_DECIMAL_POINT', 'Punto decimal:');
define('TEXT_INFO_CURRENCY_THOUSANDS_POINT', 'Mil puntos:');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', 'Decimales:');
define('TEXT_INFO_CURRENCY_LAST_UPDATED', 'último cambio:');
define('TEXT_INFO_CURRENCY_VALUE', 'Valor:');
define('TEXT_INFO_CURRENCY_EXAMPLE', 'Ejemplo:');
define('TEXT_INFO_INSERT_INTRO', 'Por favor, introduzca la nueva moneda con todos los datos relevantes');
define('TEXT_INFO_DELETE_INTRO', '¿Está seguro de que desea eliminar esta moneda?');
define('TEXT_INFO_HEADING_NEW_CURRENCY', 'nueva moneda');
define('TEXT_INFO_HEADING_EDIT_CURRENCY', 'Editar moneda');
define('TEXT_INFO_HEADING_DELETE_CURRENCY', 'Borrar moneda');
define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . ' (es necesario actualizar manualmente los tipos de cambio).');
define('TEXT_INFO_CURRENCY_UPDATED', 'El tipo de cambio %s (%s) se ha actualizado correctamente');

define('ERROR_REMOVE_DEFAULT_CURRENCY', 'Error: No se puede borrar la moneda por defecto. Por favor, defina una nueva moneda por defecto y repita el proceso.');
define('ERROR_CURRENCY_INVALID', 'Error: El tipo de cambio para %s (%s) no ha sido actualizado. ¿Es una abreviatura de moneda válida?');
define('WARNING_PRIMARY_SERVER_FAILED', 'El servicio primario "%s" no ha podido determinar el tipo de cambio %s (%s) o no está disponible. Se vuelve a intentar a través del servicio secundario.');
