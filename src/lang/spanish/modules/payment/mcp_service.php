<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('MODULE_PAYMENT_MCP_SERVICE_TEXT_TITLE', 'micropagos - Pasarela');
define('MODULE_PAYMENT_MCP_SERVICE_TEXT_DESCRIPTION', 'Bla Blub ding dong');
define('MODULE_PAYMENT_MCP_SERVICE_TEXT_INFO', 'INFOTEXT de MCP_SERVICE');
define('MODULE_PAYMENT_MCP_SERVICE_STATUS_TITLE', ' Estado');
define('MODULE_PAYMENT_MCP_SERVICE_STATUS_DESC', 'Encendido de los módulos micropayment&trade;.');
define('MODULE_PAYMENT_MCP_SERVICE_SORT_ORDER_TITLE', ' Posicionamiento');
define('MODULE_PAYMENT_MCP_SERVICE_SORT_ORDER_DESC', 'Posición en la lista');
define('MODULE_PAYMENT_MCP_SERVICE_ACCOUNT_ID_TITLE', '<div style="color:#850000;font-style: italic;">Los siguientes ajustes son válidos para todos los módulos de pago micropayment&trade; y sólo deben introducirse una vez.</div><br /> ID de cuenta');
define('MODULE_PAYMENT_MCP_SERVICE_ACCOUNT_ID_DESC', 'Cuenta-ID von micropayment&trade;');
define('MODULE_PAYMENT_MCP_SERVICE_ACCESS_KEY_TITLE', ' Tecla de acceso');
define('MODULE_PAYMENT_MCP_SERVICE_ACCESS_KEY_DESC', 'Access-Key von micropayment&trade;');
define('MODULE_PAYMENT_MCP_SERVICE_PROJECT_CODE_TITLE', ' Código del proyecto');
define('MODULE_PAYMENT_MCP_SERVICE_PROJECT_CODE_DESC', 'Código de proyecto de micropayment&trade;.');
define('MODULE_PAYMENT_MCP_SERVICE_PAYTEXT_TITLE', ' Texto de pago');
define('MODULE_PAYMENT_MCP_SERVICE_PAYTEXT_DESC', 'Aparece en la factura o como título en la ventana de pago. Con el marcador de posición #ORDEN# puede insertar el OrderID del pedido. Por ejemplo, "Pedido #ORDEN#" mostraría "Pedido 0000023".');
define('MODULE_PAYMENT_MCP_SERVICE_THEME_TITLE', ' Tema');
define('MODULE_PAYMENT_MCP_SERVICE_THEME_DESC', 'Tema para la ventana de pago, por defecto es x1');

define('MODULE_PAYMENT_MCP_SERVICE_GFX_TITLE', ' Código del logotipo');
define('MODULE_PAYMENT_MCP_SERVICE_GFX_DESC', 'Introduzca aquí el código de su logotipo.');

define('MODULE_PAYMENT_MCP_SERVICE_BGGFX_TITLE', ' Código gráfico de fondo');
define('MODULE_PAYMENT_MCP_SERVICE_BGGFX_DESC', 'Introduzca aquí el código del gráfico de fondo.');

define('MODULE_PAYMENT_MCP_SERVICE_BGCOLOR_TITLE', ' Color de fondo');
define('MODULE_PAYMENT_MCP_SERVICE_BGCOLOR_DESC', 'Introduzca aquí el color de fondo.');

define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_TITLE', ' Campo de seguridad Nombre');
define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_DESC', 'Para mayor seguridad en la comunicación entre servidores, introduzca aquí un nombre que sólo usted conozca.');

define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_VALUE_TITLE', ' Valor del campo de seguridad');
define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_VALUE_DESC', 'Introduzca aquí un valor que el servidor micropayment&trade; debe dar a su tienda para mejorar la seguridad.');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_ID_TITLE', ' Estado del pedido: en pago');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_ID_DESC', 'El cliente paga el pedido');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_ID_TITLE', ' Estado del pedido: pagado');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_ID_DESC', 'El cliente ha pagado correctamente.');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_ID_TITLE', ' Estado del pedido: Cancelado');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_ID_DESC', 'Cuando se cancela un pedido, se establece este estado');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_REFUNDED_ID_TITLE', ' Estado del pedido: Reembolsado');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_REFUNDED_ID_DESC', 'Cuando se activa un reembolso, se establece este estado');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_ID_TITLE', ' Estado del pedido: Comprobar pago');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_ID_DESC', 'Si hay problemas, se establece este estado para que pueda comprobarlo.');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_ID_TITLE', ' Estado del pedido: Conflicto');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_ID_DESC', 'Si hay un flujo de trabajo de eventos desviados, se establece este estado.');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_ID_TITLE', ' Estado del pedido: Prepago - Pago parcial');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_ID_DESC', 'Si se notifica un recibo de pago por pago anticipado pero el pedido no está totalmente pagado, se establece este estado.');

define('MODULE_PAYMENT_MCP_SERVICE_REFUND_COMMENT', 'Se activó un reembolso.');
define('MODULE_PAYMENT_MCP_SERVICE_SUCCESS_TRANSACTION', 'El pedido ha sido pagado. El código de autentificación es: %s');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_TERMINATED', 'La solicitud no es válida.');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_UNKNOWN_ORDER_ID', 'La orden no existe');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_SECRET_FIELD_MISSMATCH', 'El campo de seguridad no coincide');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_AMOUNT_MISSMATCH', '¡El total no coincide con el valor pagado! Actual: %s Objetivo: %s');
define('MODULE_PAYMENT_MCP_SERVICE_UNKNOWN_FUNCTION', 'Se desconoce su función.');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_INVALID_AUTH_CODE', 'El código Auth es incorrecto');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_INVALID_AMOUNT_VALUE', 'El importe es incorrecto');

define('MODULE_PAYMENT_MCP_SERVICE_EXPIRE_DAYS_TITLE', 'Borrar pedidos impagados');
define('MODULE_PAYMENT_MCP_SERVICE_EXPIRE_DAYS_DESC', '¿Cuánto tiempo puede estar un pedido en el estado "Pendiente de pago" antes de que se elimine del botón "Limpiar pedido"? Por favor, establezca el número de días. IMPORTANTE: Esto no eliminará ningún pedido prepagado.');

define('MODULE_PAYMENT_MCP_SERVICE_NEW_VERSION', '<div class="mcp_notice_register">Ya está</div> disponible<div class="mcp_notice_register">una nueva versión del módulo micropayment&trade; con nuevas funciones y características para su sistema de tienda. <a href="http://ecommerce.micropayment.de/modifiedshop/" target="_new">A la nueva versión del módulo.</a></div>');

define('MODULE_PAYMENT_MCP_SERVICE_NO_ACCOUNT', '%Para que los<div class="mcp_notice_register">módulos de pago Micropayment&trade; funcionen, debe crear una cuenta en Micropayment&trade; y crear un proyecto. <a href="https://%s.micropayment.de" target="blank">Pulse aquí para inscribirse.</a></div>');
define(
    'MODULE_PAYMENT_MCP_SERVICE_CSS',
    '<style type="text/css">
        .mcp_notice_register {
            margin-bottom: 5px;
            background-image: url("../images/micropayment/logo_small.png");
            background-position: 10px 10px;
            background-color: #ffdede;
            background-repeat: no-repeat;
            background-size: 100px;
            height: 40px;
            padding-left:130px;
            padding-top: 24px;
            border: 1px #cdcdcd solid;
            font-family: verdana, tahoma, sans-serif;
            font-size: 12px;
        }
        .mcp_notice_register a {
            font-family: verdana, tahoma, sans-serif;
            font-size: 12px;
            font-weight: bold;
            color: #8d005d;
        }
    </style>'
);
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_SPANISH_TITLE', 'Pago pendiente');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_SPANISH_TITLE', 'Anticipo, pago parcial');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_SPANISH_TITLE', 'en curso');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_SPANISH_TITLE', 'Cancelado');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_SPANISH_TITLE', 'Comprobar pedido');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_SPANISH_TITLE', 'Evento ¡Problema!');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_ENGLISH_TITLE', 'pending payment');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_ENGLISH_TITLE', 'prepay, partpay');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_ENGLISH_TITLE', 'processing');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_ENGLISH_TITLE', 'cancelled');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_ENGLISH_TITLE', 'payment review');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_ENGLISH_TITLE', 'event-conflict!');
