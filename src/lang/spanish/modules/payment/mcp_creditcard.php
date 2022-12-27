<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

require_once 'mcp_service.php';
define(
    'MODULE_PAYMENT_MCP_CREDITCARD_TEXT_DESCRIPTION',
    'micropayment&trade; Kreditkarten Modul
    <br /><br />
    Enlaces<br />
    <b>Herramientas</b><br />
    <a target="_new" href="../callback/micropayment/cleanup.php">
        <input type="button" value="Ordenar los pedidos" />
    </a>
    <br /><br />
    <b>Extern</b><br />
    <a href="http://ecommerce.micropayment.de/download/modified/micropayment_modified-shop_2.x.pdf?version=2.1.0">
        <input type="button" value="Manual" />
    </a>

    <a target="_new" href="https://r120.micropayment.de">
        <input type="button" value="Registro de micropagos" />
    </a>'
);
define('MODULE_PAYMENT_MCP_CREDITCARD_TEXT_TITLE', 'micropago&trade; Kreditkarte');
define('MODULE_PAYMENT_MCP_CREDITCARD_TEXT_TITLE_EXTERN', 'Tarjeta de crédito');
define(
    'MODULE_PAYMENT_MCP_CREDITCARD_TEXT_INFO',
    '<div style="margin:10px; height:140px;">
        <div style="float:right;"><img src="./images/micropayment/logo_small.png" width="150"/></div>
        <div style="float:left;">
           <b>Tenga a mano los datos de su tarjeta de crédito.</b></br />
            Para completar su pedido, ahora le redirigiremos a la página web<br /> de nuestro proveedor de servicios de pago micropayment&trade;.<br /><br />
            ✔ seguro ✔ sencillo ✔ sin registro
        </div>
    </div>'
);
define('MODULE_PAYMENT_MCP_CREDITCARD_STATUS_TITLE', 'Tarjeta de crédito');
define('MODULE_PAYMENT_MCP_CREDITCARD_STATUS_DESC', 'Módulo de tarjeta de crédito de micropayment&trade;.');
define('MODULE_PAYMENT_MCP_CREDITCARD_MINIMUM_AMOUNT_TITLE', 'Valor mínimo del pedido');
define('MODULE_PAYMENT_MCP_CREDITCARD_MINIMUM_AMOUNT_DESC', 'Valor mínimo del pedido');
define('MODULE_PAYMENT_MCP_CREDITCARD_MAXIMUM_AMOUNT_TITLE', 'Valor máximo del pedido');
define('MODULE_PAYMENT_MCP_CREDITCARD_MAXIMUM_AMOUNT_DESC', 'Valor máximo del pedido');
define('MODULE_PAYMENT_MCP_CREDITCARD_SORT_ORDER_TITLE', 'Posicionamiento');
define('MODULE_PAYMENT_MCP_CREDITCARD_SORT_ORDER_DESC', 'Posición en la lista de métodos de pago');
define('MODULE_PAYMENT_MCP_CREDITCARD_ALLOWED_TITLE', 'Selección de países');
define('MODULE_PAYMENT_MCP_CREDITCARD_ALLOWED_DESC', 'Permitir pedidos sólo de los países (lista separada por comas, por ejemplo DE,EN)');
