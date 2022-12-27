<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

$klarna_code = 'KLARNA_PAYLATER';

include DIR_FS_CATALOG . 'lang/spanish/modules/payment/klarna.php';

$lang_array['MODULE_PAYMENT_' . $klarna_code . '_TEXT_TITLE']         = 'Factura Klarna';
$lang_array['MODULE_PAYMENT_' . $klarna_code . '_TEXT_ERROR_MESSAGE'] = 'El pago por factura fue anulado.';

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
