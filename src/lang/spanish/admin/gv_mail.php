<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('HEADING_TITLE', 'Enviar el vale a los clientes');
define('HEADING_COUPON_TITLE', 'Enviar cupón a los clientes');

define('TEXT_CUSTOMER_GROUP', 'Grupo de clientes:');
define('TEXT_SUBJECT', 'Asunto:');
define('TEXT_FROM', 'Remitente:');
define('TEXT_TO', 'Correo electrónico a:');
define('TEXT_AMOUNT', 'Valor:');
define('TEXT_MESSAGE', 'Mensaje:');
define('TEXT_SINGLE_EMAIL', '<span class="smallText">Utilice este campo sólo para direcciones de correo electrónico únicas o múltiples separadas por comas. En caso contrario, utilice el campo Grupo de clientes.</span>');
define('TEXT_SELECT_CUSTOMER_GROUP', 'Seleccionar grupo de clientes');
define('TEXT_CUSTOMERS_GROUP_EMAIL', '<span class="smallText">¿Debe enviarse un vale a todos los clientes del grupo de clientes seleccionado? De lo contrario, no seleccione nada y rellene el campo "Correo electrónico a:". Precaución: Si se envían muchos correos electrónicos repetidamente al mismo tiempo, la dirección de correo electrónico de la tienda puede acabar en las denominadas listas negras y ser considerada spam. Se recomienda que se encargue de ello un proveedor de boletines informativos.</span>');
define('TEXT_ALL_CUSTOMERS', 'Todos los clientes');
define('TEXT_NEWSLETTER_CUSTOMERS', 'A todos los suscriptores del boletín');

define('NOTICE_EMAIL_SENT_TO', 'Nota: El correo electrónico se envió a: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Error: No se ha seleccionado ningún cliente.');
define('ERROR_NO_AMOUNT_SELECTED', 'Error: No ha introducido un importe para el vale.');

define('TEXT_GV_WORTH', 'El valor del vale es ');
define('TEXT_TO_REDEEM', 'Para reservar su vale, haga clic en el siguiente enlace. Por favor, anote su código personal del vale por seguridad.');
define('TEXT_WHICH_IS', 'Su código de vale es: ');
define('TEXT_IN_CASE', ' Si, en contra de lo esperado, surgieran problemas al contabilizar.');
define('TEXT_OR_VISIT', 'visite nuestro sitio web ');
define('TEXT_ENTER_CODE', ' e introduzca el código del vale manualmente ');

define('TEXT_REDEEM_COUPON_MESSAGE_HEADER', 'Ha adquirido recientemente un vale en nuestra tienda en línea, que no se activó inmediatamente por motivos de seguridad. Este crédito está ahora a su disposición.');
define('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', "\n\n" . 'El valor de su vale es %s');
define('TEXT_REDEEM_COUPON_MESSAGE_BODY', "\n\n" . 'Ahora puede enviar el vale a alguien a través de su cuenta personal.');
define('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', "\n\n");

define('COUPON_INFO', "\nCouponwert: ");
define('COUPON_FREE_SHIPPING', 'Envío gratuito');
define('COUPON_MINORDER_INFO', "\nValor mínimo del pedido: ");
define('COUPON_RESTRICT_INFO', "\n¡Este cupón sólo es válido para determinados artículos!");
