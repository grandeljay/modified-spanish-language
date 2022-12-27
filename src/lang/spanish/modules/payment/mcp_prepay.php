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
    'MODULE_PAYMENT_MCP_PREPAY_TEXT_DESCRIPTION',
    'Micropayment Vorkasse Modul
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
define('MODULE_PAYMENT_MCP_PREPAY_TEXT_TITLE', 'micropago&trade; Vorkasse');
define('MODULE_PAYMENT_MCP_PREPAY_TEXT_TITLE_EXTERN', 'Pago anticipado');
define(
    'MODULE_PAYMENT_MCP_PREPAY_TEXT_INFO',
    '<div style="margin:10px; height:140px;">
        <div style="float:right;"><img src="./images/micropayment/logo_small.png" width="150"/></div>
        <div style="float:left;font-family: Arial, Helvetica, sans-serif;">
            <b>El comprobante de pago precumplimentado le será enviado por correo electrónico.</b><br />
            Para completar su pedido, ahora le redirigiremos a la página web<br /> de nuestro proveedor de servicios de pago micropayment&trade;.<br /><br />
            ✔ seguro ✔ sencillo ✔ sin registro
        </div>
    </div>'
);
define('MODULE_PAYMENT_MCP_PREPAY_STATUS_TITLE', 'Pago anticipado');
define('MODULE_PAYMENT_MCP_PREPAY_STATUS_DESC', 'Módulo de prepago de Micropayment');
define('MODULE_PAYMENT_MCP_PREPAY_MINIMUM_AMOUNT_TITLE', 'Valor mínimo de la cesta de la compra');
define('MODULE_PAYMENT_MCP_PREPAY_MINIMUM_AMOUNT_DESC', 'Valor mínimo de la cesta de la compra para este método de pago');
define('MODULE_PAYMENT_MCP_PREPAY_MAXIMUM_AMOUNT_TITLE', 'Valor máximo de la cesta de la compra');
define('MODULE_PAYMENT_MCP_PREPAY_MAXIMUM_AMOUNT_DESC', 'Valor máximo de la cesta de la compra para este método de pago');
define('MODULE_PAYMENT_MCP_PREPAY_SORT_ORDER_TITLE', 'Posicionamiento');
define('MODULE_PAYMENT_MCP_PREPAY_SORT_ORDER_DESC', 'Posicionamiento en la selección del método de pago');
define('MODULE_PAYMENT_MCP_PREPAY_ALLOWED_TITLE', 'Selección de países');
define('MODULE_PAYMENT_MCP_PREPAY_ALLOWED_DESC', 'Permitir pedidos sólo de los países (lista separada por comas, por ejemplo DE,EN)');

define('MODULE_PAYMENT_MCP_PREPAY_COMMENT_INIT', 'init:Espere a recibir el pago. Cancelación automática en %s');
define('MODULE_PAYMENT_MCP_PREPAY_COMMENT_PAYIN', '%s %s han sido pagados.');
define('MODULE_PAYMENT_MCP_PREPAY_COMMENT_EXPIRED', 'Sin recibo de pago, cancelación automática');

define('MODULE_PAYMENT_MCP_SERVICE_TRANSACTION_CANCELLED', 'cancelación:El pedido ha sido cancelado.');
