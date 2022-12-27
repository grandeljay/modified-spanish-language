<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

$klarna_code = 'KLARNA_PAYNOW';

include DIR_FS_CATALOG . 'lang/spanish/modules/payment/klarna.php';

$lang_array['MODULE_PAYMENT_' . $klarna_code . '_TEXT_TITLE']         = 'Klarna Pague ahora';
$lang_array['MODULE_PAYMENT_' . $klarna_code . '_TEXT_ERROR_MESSAGE'] = 'Se canceló el pago por pago inmediato.';

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
