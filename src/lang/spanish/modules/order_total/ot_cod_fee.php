<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('MODULE_ORDER_TOTAL_COD_FEE_TITLE', 'Cargo por contra reembolso');
define('MODULE_ORDER_TOTAL_COD_FEE_DESCRIPTION', 'Cálculo de la carga C.O.D.');

define('MODULE_ORDER_TOTAL_COD_FEE_STATUS_TITLE', 'Cargo por contra reembolso');
define('MODULE_ORDER_TOTAL_COD_FEE_STATUS_DESC', 'Cálculo de la carga C.O.D.');

define('MODULE_ORDER_TOTAL_COD_FEE_SORT_ORDER_TITLE', 'Orden de clasificación');
define('MODULE_ORDER_TOTAL_COD_FEE_SORT_ORDER_DESC', 'Orden de visualización');

define('MODULE_ORDER_TOTAL_COD_FEE_TAX_CLASS_TITLE', 'Clase de impuestos');
define('MODULE_ORDER_TOTAL_COD_FEE_TAX_CLASS_DESC', 'Elija una clase fiscal.');

$module_keys                  = str_replace('.php', '', MODULE_SHIPPING_INSTALLED);
$installed_shipping_modules   = explode(';', $module_keys);
$installed_shipping_modules[] = 'free';

if (count($installed_shipping_modules) > 0) {
    foreach ($installed_shipping_modules as $shipping_code) {
        $module_type   = 'shipping';
        $file          = $shipping_code . '.php';
        $shipping_code = strtoupper($shipping_code);
        $title         = '';

        if (defined('DIR_FS_LANGUAGES') && file_exists(DIR_FS_LANGUAGES . 'spanish/modules/' . $module_type . '/' . $file)) {
            include_once DIR_FS_LANGUAGES . 'spanish/modules/' . $module_type . '/' . $file;

            $title = constant('MODULE_SHIPPING_' . $shipping_code . '_TEXT_TITLE');
        }

        $title = 'FREE' === $shipping_code ? 'Envío gratuito (módulo resumen ot_shipping)' : $title;

        $shipping_code = ('FREEAMOUNT' === $shipping_code) ? 'FREEAMOUNT_FREE' : 'FEE_' . $shipping_code;

        define('MODULE_ORDER_TOTAL_COD_' . $shipping_code . '_TITLE', $title);
        define(
            'MODULE_ORDER_TOTAL_COD_' . $shipping_code . '_DESC',
            '&lt;código ISO2&gt;:&lt;precio&gt;, ....<br />
            00 ya que el código ISO2 permite el pago contra reembolso en todos los países. Si
            00, éste debe introducirse como último argumento. Si
            00:9.99 no se introduce, no se cobrará el envío contra reembolso al extranjero (no es posible).
            (no es posible). Para excluir sólo un país, no introduzca un coste para ese país.
            para este país. Ejemplo: DE:4.00,CH:,00:9.99<br />-&gt; Explicación: Envío a DE: 4&euro; /
            Envío a CH: no es posible / Envío al resto del mundo: 9,99&euro;.'
        );
    }
}
