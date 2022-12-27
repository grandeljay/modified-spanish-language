<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_TITLE', 'Zettle de PayPal');
define(
    'MODULE_CATEGORIES_ZETTLE_CATEGORIES_DESCRIPTION',
    'Los modernos sistemas de caja registradora como aplicación para la aceptación de pagos y el seguimiento de las ventas: Haga más fácil su día a día con Zettle.<br>
    <br>Actualmente se admiten las siguientes funciones:
    <ul style="padding-left: 20px;">
    <li>Los artículos se transfieren de la tienda a Zettle</li>
    <li>Posibilidad de un grupo de clientes propio para los precios de los artículos</li>
    <li>Las existencias se sincronizan entre la tienda y Zettle previa solicitud</li>
    </ul>'
);

define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_BULK_TITLE', 'Importación a granel');
define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_BULK_DESC', '¿Debe activarse la importación masiva?<br><b>Nota:</b> Para ello, es necesario que se establezca un cronjob en la URL ' . HTTP_SERVER . DIR_WS_CATALOG . 'api/zettle/cronjob.php está creado.</br>');

define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_API_KEY_TITLE', 'Clave API');
define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_API_KEY_DESC', 'Introduzca la clave API de Zettle.');

define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_LANGUAGE_TITLE', 'Idioma');
define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_LANGUAGE_DESC', 'Seleccione el idioma para la transmisión de los artículos.');

define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_CUSTOMERS_STATUS_TITLE', 'Grupo de clientes');
define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_CUSTOMERS_STATUS_DESC', 'Seleccione el grupo de clientes para la transferencia de precios.');

define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_BUTTON_API', 'Zettle API Key erstellen');
