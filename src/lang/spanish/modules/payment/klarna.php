<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

$lang_array = array(
    'MODULE_PAYMENT_' . $klarna_code . '_TEXT_TITLE'            => '',
    'MODULE_PAYMENT_' . $klarna_code . '_TEXT_DESCRIPTION'      => 'Antes de poder configurar los métodos de pago de Klarna Payments, debe abrir una cuenta de comerciante con Klarna. A continuación, recibirá la información y los datos de acceso necesarios para configurar su cuenta. Si ya tiene un número de cliente de Klarna, pero no es Kxxxxxx, envíe un correo electrónico a <a href="mailto:vertrieb@klarna.com">vertrieb@klarna.com.</a><br /><br />
    <img src="../lang/spanish/admin/images/icon.gif" border="0" />
   <a href="https://www.klarna.com/de/verkaeufer/" target="_blank" style="text-decoration: underline; font-weight: bold;">Cree una cuenta Klarna aquí.</a>
   <img src="images/icon_popup.gif" border="0" />',
    'MODULE_PAYMENT_' . $klarna_code . '_TEXT_INFO'             => '',
    'MODULE_PAYMENT_' . $klarna_code . '_ALLOWED_TITLE'         => 'Zonas permitidas',
    'MODULE_PAYMENT_' . $klarna_code . '_ALLOWED_DESC'          => 'Especifique <b>individualmente</b> las zonas que deben permitirse para este módulo. (por ejemplo, AT,DE (si está vacía, se permiten todas las zonas))',
    'MODULE_PAYMENT_' . $klarna_code . '_STATUS_TITLE'          => 'Activar módulo',
    'MODULE_PAYMENT_' . $klarna_code . '_STATUS_DESC'           => '¿Desea aceptar pagos con este módulo?',
    'MODULE_PAYMENT_' . $klarna_code . '_SORT_ORDER_TITLE'      => 'Orden de visualización',
    'MODULE_PAYMENT_' . $klarna_code . '_SORT_ORDER_DESC'       => 'Orden de visualización. El dígito más pequeño aparece primero',
    'MODULE_PAYMENT_' . $klarna_code . '_ZONE_TITLE'            => 'Zona de pago',
    'MODULE_PAYMENT_' . $klarna_code . '_ZONE_DESC'             => 'Cuando se selecciona una zona, el método de pago sólo se aplica a esa zona.',
    'MODULE_PAYMENT_' . $klarna_code . '_ORDER_STATUS_ID_TITLE' => 'Establecer el estado del pedido',
    'MODULE_PAYMENT_' . $klarna_code . '_ORDER_STATUS_ID_DESC'  => 'Establezca en este estado los pedidos realizados con este módulo.',
    'MODULE_PAYMENT_' . $klarna_code . '_CAPTURE_TITLE'         => 'Active',
    'MODULE_PAYMENT_' . $klarna_code . '_CAPTURE_DESC'          => '¿La orden debe activarse automáticamente?',

    'MODULE_PAYMENT_' . $klarna_code . '_TEXT_ERROR_HEADING'    => 'Klarna',
    'MODULE_PAYMENT_' . $klarna_code . '_TEXT_ERROR_MESSAGE'    => 'El pago fue cancelado.',

    'MODULE_PAYMENT_' . $klarna_code . '_TEXT_VERSION'          => '<b>Versión del módulo</b><br/>',

    'MODULE_PAYMENT_KLARNA_MERCHANT_ID_TITLE'                   => 'Nombre de usuario',
    'MODULE_PAYMENT_KLARNA_MERCHANT_ID_DESC'                    => 'Nombre de usuario API de Klarna',
    'MODULE_PAYMENT_KLARNA_SHARED_SECRET_TITLE'                 => 'Contraseña',
    'MODULE_PAYMENT_KLARNA_SHARED_SECRET_DESC'                  => 'Pasaporte API de Klarna',
    'MODULE_PAYMENT_KLARNA_MODE_TITLE'                          => 'Modo',
    'MODULE_PAYMENT_KLARNA_MODE_DESC'                           => 'Moda Klarna',
    'MODULE_PAYMENT_KLARNA_TEXT'                                => 'Klarna',
);
