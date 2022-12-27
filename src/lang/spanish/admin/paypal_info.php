<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

$lang_array = array(
    'TEXT_PAYPAL_INFO_HEADING_TITLE' => 'Información sobre PayPal',
);

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
