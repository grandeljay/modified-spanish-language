<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

$klarna_code = 'KLARNA_DIRECTDEBIT';

include DIR_FS_CATALOG . 'lang/spanish/modules/payment/klarna.php';

$lang_array['MODULE_PAYMENT_' . $klarna_code . '_TEXT_TITLE']         = 'Carga Klarna';
$lang_array['MODULE_PAYMENT_' . $klarna_code . '_TEXT_ERROR_MESSAGE'] = 'Se canceló el pago por domiciliación bancaria.';

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
