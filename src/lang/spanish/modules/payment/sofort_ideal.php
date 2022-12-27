<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

$sofort_code = 'SOFORT_IDEAL';

define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_TITLE', 'iDEAL');
define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION', '<b>iDEAL</b><br />Tan pronto como el cliente haya seleccionado este método de pago y su banco, será redirigido a su banco por SOFORT GmbH. Allí realiza su pago y es redirigido de nuevo al sistema de la tienda. Si el pago se confirma con éxito, se produce una llamada de retorno al sistema de la tienda por parte de SOFORT GmbH, que modifica en consecuencia el estado de pago del pedido.<br />Proporcionado por SOFORT GmbH');
define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_INFO', 'iDEAL.nl - transferencias en línea para el comercio electrónico en los Países Bajos. Para pagar con iDEAL, necesita una cuenta en uno de los bancos mencionados. Realice la transferencia directamente en su banco. Los servicios/bienes se entregan o envían ¡INMEDIATAMENTE cuando están disponibles!');

define(
    'MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGE',
    '<table border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td valign="bottom">
                <a onclick="javascript:window.open(\'http://www.ideal.nl\',\'Información\',\'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1020, height=900\');" style="float:left; width:auto;">{{image}}</a>
            </td>
        </tr>
        <tr>
            <td class="main">{{text}}</td>
        </tr>
	</table>'
);
define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGEALT', 'iDEAL');
define(
    'MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_TEXT',
    '<ul>
        <li>Transferencias en línea para el comercio electrónico en los Países Bajos.</li>
        <li>Para pagar con iDEAL, necesita una cuenta en uno de los bancos que se indican a continuación</li>
        <li>Usted realiza la transferencia directamente en su banco</li>
        <li>Los servicios/bienes se entregan o envían SOFORT cuando están disponibles</li>
    </ul>'
);

define('MODULE_PAYMENT_' . $sofort_code . '_SELECTBOX', 'Seleccione su banco');
define('MODULE_PAYMENT_' . $sofort_code . '_STATUS_TITLE', 'Activar el módulo iDEAL');
define('MODULE_PAYMENT_' . $sofort_code . '_STATUS_DESC', '¿Desea aceptar pagos a través de iDEAL?');

include DIR_FS_CATALOG . 'lang/spanish/modules/payment/sofort_payment.php';
