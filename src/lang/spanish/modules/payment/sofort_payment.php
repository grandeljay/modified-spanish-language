<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

defined('MODULE_PAYMENT_' . $sofort_code . '_TEXT_TITLE')       || define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_TITLE', 'Sofort.');
defined('MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION') || define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION', 'Sofort. es el servicio de pago gratuito y certificado por T&Uuml;V de SOFORT GmbH.');
defined('MODULE_PAYMENT_' . $sofort_code . '_TEXT_INFO')        || define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_INFO', 'Pague c�modamente con el sistema bancario en l�nea certificado y probado Sofort. de SOFORT GmbH.');

defined('MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGE') || define(
    'MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGE',
    '<table border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td valign="bottom">
                <a onclick="javascript:window.open(\'https://images.sofort.com/de/su/landing.php\',\'Kundeninformationen\',\'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1020, height=900\');" style="float:left; width:auto;">{{image}}</a>
            </td>
        </tr>
        <tr>
            <td class="main">{{text}}</td>
        </tr>
    </table>'
);
defined('MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGEALT') || define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGEALT', 'Sofort.');
defined('MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_TEXT')     || define(
    'MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_TEXT',
    '<ul>
        <li>Einfach und direkt bezahlen per Online Banking.</li>
    </ul>'
);

defined('MODULE_PAYMENT_' . $sofort_code . '_STATUS_TITLE') || define('MODULE_PAYMENT_' . $sofort_code . '_STATUS_TITLE', 'Sofort. Activar');
defined('MODULE_PAYMENT_' . $sofort_code . '_STATUS_DESC')  || define('MODULE_PAYMENT_' . $sofort_code . '_STATUS_DESC', '�Desea aceptar pagos por Sofort.');
define('MODULE_PAYMENT_' . $sofort_code . '_ALLOWED_TITLE', 'Zonas permitidas');
define('MODULE_PAYMENT_' . $sofort_code . '_ALLOWED_DESC', 'Especifique <b>individualmente</b> las zonas que deben permitirse para este m�dulo. (por ejemplo, AT,DE (si est� vac�a, se permiten todas las zonas))');
define('MODULE_PAYMENT_' . $sofort_code . '_TMP_ORDER_TITLE', 'Orden temporal');
define('MODULE_PAYMENT_' . $sofort_code . '_TMP_ORDER_DESC', '�Desea crear una orden temporal?');
define('MODULE_PAYMENT_' . $sofort_code . '_LOGGING_TITLE', 'Activar el registro');
define('MODULE_PAYMENT_' . $sofort_code . '_LOGGING_DESC', '�Desea activar el registro?<br/>Los archivos de registro se almacenan en la carpeta /log.');
define('MODULE_PAYMENT_' . $sofort_code . '_KEY_TITLE', 'Clave de configuraci�n');
define('MODULE_PAYMENT_' . $sofort_code . '_KEY_DESC', 'Encontrar� la clave de configuraci�n en los ajustes de Sofort.');
define('MODULE_PAYMENT_' . $sofort_code . '_SORT_ORDER_TITLE', 'Orden de visualizaci�n');
define('MODULE_PAYMENT_' . $sofort_code . '_SORT_ORDER_DESC', 'Orden de visualizaci�n. El d�gito m�s peque�o aparece primero');
define('MODULE_PAYMENT_' . $sofort_code . '_ZONE_TITLE', 'Zona de pago');
define('MODULE_PAYMENT_' . $sofort_code . '_ZONE_DESC', 'Cuando se selecciona una zona, el m�todo de pago s�lo se aplica a esa zona.');
define('MODULE_PAYMENT_' . $sofort_code . '_CURRENCY_TITLE', 'Moneda de transacci�n');
define('MODULE_PAYMENT_' . $sofort_code . '_CURRENCY_DESC', 'Recepci�n de divisas de acuerdo con Inmediatamente. Configuraci�n del proyecto');
define('MODULE_PAYMENT_' . $sofort_code . '_ORDER_STATUS_ID_TITLE', 'Estado confirmado del pedido');
define('MODULE_PAYMENT_' . $sofort_code . '_ORDER_STATUS_ID_DESC', 'Estado del pedido tras la recepci�n de un pedido para el que se ha enviado una confirmaci�n de pago correcta');
define('MODULE_PAYMENT_' . $sofort_code . '_TMP_STATUS_ID_TITLE', 'Estado de la orden temporal');
define('MODULE_PAYMENT_' . $sofort_code . '_TMP_STATUS_ID_DESC', 'Estado del pedido para transacciones a�n no completadas');
define('MODULE_PAYMENT_' . $sofort_code . '_UNC_STATUS_ID_TITLE', 'Estado del pedido a comprobar');
define('MODULE_PAYMENT_' . $sofort_code . '_UNC_STATUS_ID_DESC', 'Estado del pedido tras la recepci�n de un pedido para el que se envi� una confirmaci�n de pago incorrecta');
define('MODULE_PAYMENT_' . $sofort_code . '_REC_STATUS_ID_TITLE', 'Estado del pedido tras la recepci�n del dinero');
define('MODULE_PAYMENT_' . $sofort_code . '_REC_STATUS_ID_DESC', 'Estado del pedido una vez abonado el dinero en su cuenta. (Requisito: cuenta con el <u><a href="https://www.handelsbank.com/" target="_blank">Banco mercantil alem�n</a></u>)');
define('MODULE_PAYMENT_' . $sofort_code . '_REF_STATUS_ID_TITLE', 'Estado del pedido tras la devoluci�n');
define('MODULE_PAYMENT_' . $sofort_code . '_REF_STATUS_ID_DESC', 'Estado del pedido tras la devoluci�n del cargo.');
define('MODULE_PAYMENT_' . $sofort_code . '_LOSS_STATUS_ID_TITLE', 'Estado del pedido cuando no ha llegado el dinero');
define('MODULE_PAYMENT_' . $sofort_code . '_LOSS_STATUS_ID_DESC', 'Estado del pedido si no se ha recibido dinero en su cuenta. (Requisito previo: cuenta con el <u><a href="https://www.handelsbank.com/" target="_blank">Banco mercantil alem�n</a></u>)');
define('MODULE_PAYMENT_' . $sofort_code . '_REASON_1_TITLE', 'Uso previsto l�nea 1');
define('MODULE_PAYMENT_' . $sofort_code . '_REASON_1_DESC', 'Si no se crea ning�n pedido temporal, el n�mero de pedido no estar� disponible. Por lo tanto, debe ajustarse a -TRANSACCI�N-.');
define('MODULE_PAYMENT_' . $sofort_code . '_REASON_2_TITLE', 'Uso previsto l�nea 2');
define('MODULE_PAYMENT_' . $sofort_code . '_REASON_2_DESC', 'En la finalidad de uso (m�ximo 27 caracteres), se sustituyen los siguientes marcadores de posici�n:<br /> {{order_id}}<br />{{order_date}}<br />{{customer_id}}<br />{{customer_name}}<br />{{customer_company}}<br />{{customer_email}}');
define('MODULE_PAYMENT_' . $sofort_code . '_IMAGE_TITLE', 'Selecci�n de pago gr�fico / texto');
define('MODULE_PAYMENT_' . $sofort_code . '_IMAGE_DESC', 'Gr�fico / texto mostrado al seleccionar las opciones de pago');
define('MODULE_PAYMENT_' . $sofort_code . '_USER_ID_TITLE', 'N�mero de cliente');
define('MODULE_PAYMENT_' . $sofort_code . '_USER_ID_DESC', 'Su n�mero de cliente en Sofort.');
define('MODULE_PAYMENT_' . $sofort_code . '_PROJECT_ID_TITLE', 'N�mero de proyecto');
define('MODULE_PAYMENT_' . $sofort_code . '_PROJECT_ID_DESC', 'El n�mero de proyecto responsable en Sofort. al que pertenece el pago');
define('MODULE_PAYMENT_' . $sofort_code . '_PROJECT_PASS_TITLE', 'Contrase�a del proyecto');
define('MODULE_PAYMENT_' . $sofort_code . '_PROJECT_PASS_DESC', 'La contrase�a del proyecto (en Configuraci�n avanzada / Contrase�as y funciones hash)');
define('MODULE_PAYMENT_' . $sofort_code . '_NOTIFY_PASS_TITLE', 'Contrase�a de notificaci�n');
define('MODULE_PAYMENT_' . $sofort_code . '_NOTIFY_PASS_DESC', 'La contrase�a de notificaci�n (en Ajustes avanzados / Contrase�as y funciones hash)');
define('MODULE_PAYMENT_' . $sofort_code . '_HASH_ALGORITHM_TITLE', 'Algoritmo hash:');
define('MODULE_PAYMENT_' . $sofort_code . '_HASH_ALGORITHM_DESC', 'El algoritmo hash (en Configuraci�n avanzada / Contrase�as y funciones hash)');
define('MODULE_PAYMENT_' . $sofort_code . '_DESCRIPTION_INSTALL', '<br/><br/>�Desea instalar estados de pedido adecuados?<br/>Esto sobrescribir� los estados establecidos actualmente.');

defined('TEXT_NO_STATUSUPDATE') || define('TEXT_NO_STATUSUPDATE', 'Sin actualizaci�n de estado');

define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_ERROR_HEADING', 'El siguiente error fue reportado por Sofort. durante el proceso:');
define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_ERROR_MESSAGE', 'El pago a trav�s de Sofort. lamentablemente no es posible o ha sido anulado a petici�n del cliente. Por favor, elija otro m�todo de pago.');

defined('TEXT_SOFORT_NOT_CREDITED_YET')            || define('TEXT_SOFORT_NOT_CREDITED_YET', 'Inmediatamente. completado con �xito');
defined('TEXT_SOFORT_NOT_CREDITED')                || define('TEXT_SOFORT_NOT_CREDITED', 'Dinero no recibido a cuenta');
defined('TEXT_SOFORT_LOSS')                        || define('TEXT_SOFORT_LOSS', 'Comprobar pedido');
defined('TEXT_SOFORT_RECEIVED')                    || define('TEXT_SOFORT_RECEIVED', 'Dinero recibido a cuenta');
defined('TEXT_SOFORT_CREDITED')                    || define('TEXT_SOFORT_CREDITED', TEXT_SOFORT_RECEIVED);
defined('TEXT_SOFORT_REFUNDED')                    || define('TEXT_SOFORT_REFUNDED', 'El dinero fue reembolsado en su totalidad');
defined('TEXT_SOFORT_CANCELED')                    || define('TEXT_SOFORT_CANCELED', 'Inmediatamente. Cancelado');
defined('TEXT_SOFORT_WAIT_FOR_MONEY')              || define('TEXT_SOFORT_WAIT_FOR_MONEY', 'Espere a recibir el pago');
defined('TEXT_SOFORT_CONFIRMATION_PERIOD_EXPIRED') || define('TEXT_SOFORT_CONFIRMATION_PERIOD_EXPIRED', 'Sofort. tiempo de espera');
defined('TEXT_SOFORT_REJECTED')                    || define('TEXT_SOFORT_REJECTED', 'Inmediatamente. Rechazado');
defined('TEXT_SOFORT_SOFORT_BANK_ACCOUNT_NEEDED')  || define('TEXT_SOFORT_SOFORT_BANK_ACCOUNT_NEEDED', TEXT_SOFORT_NOT_CREDITED_YET);

define('MODULE_PAYMENT_' . $sofort_code . '_ERROR_TRANSACTION', "Error de Callback\nTransaction-ID: %s");
define('MODULE_PAYMENT_' . $sofort_code . '_ERROR_PAYMENT', "Pago a�n no recibido\nTransaction-ID: %s");
define('MODULE_PAYMENT_' . $sofort_code . '_ERROR_UNEXPECTED_STATUS', "Error (SU204): Estado inesperado\nTransacci�n-ID: %s");
define('MODULE_PAYMENT_' . $sofort_code . '_SUCCESS_TRANSACTION', "Pago exitoso\nTransacci�n-ID: %s");
define('MODULE_PAYMENT_' . $sofort_code . '_SUCCESS_PAYMENT', "Pago recibido\nTransacci�n-ID: %s");
define('MODULE_PAYMENT_' . $sofort_code . '_SUCCESS_REFUNDED', "Pago reembolsado\nIdentificaci�n de la transacci�n: %s");

$SOFORT_INST_ORDER_STATUS_TMP_NAME   = 'Temp';
$SOFORT_INST_ORDER_STATUS_UNC_NAME   = 'Esperando';
$SOFORT_INST_ORDER_STATUS_LOSS_NAME  = 'Esperando';
$SOFORT_INST_ORDER_STATUS_REC_NAME   = 'Recepci�n del pago';
$SOFORT_INST_ORDER_STATUS_REF_NAME   = 'Pago reembolsado';
$SOFORT_INST_ORDER_STATUS_ORDER_NAME = 'Pagado';
