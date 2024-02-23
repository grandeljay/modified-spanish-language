<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('MODULE_SHIPCLOUD_TEXT_TITLE', 'shipcloud - la nueva generación de envío de paquetes');
define('MODULE_SHIPCLOUD_TEXT_DESCRIPTION', 'Imprima cómodamente etiquetas para paquetes desde la tienda.');
define('MODULE_SHIPCLOUD_STATUS_TITLE', 'Estado');
define('MODULE_SHIPCLOUD_STATUS_DESC', 'Activar módulo');
define('MODULE_SHIPCLOUD_API_TITLE', '<hr noshade>API');
define('MODULE_SHIPCLOUD_API_DESC', 'Clave API de shipcloud');
define('MODULE_SHIPCLOUD_PARCEL_TITLE', '<hr noshade>Tamaños de envases');
define('MODULE_SHIPCLOUD_PARCEL_DESC', 'Por favor, introduzca las medidas de los envases en cm como se indica a continuación: Longitud,Anchura,Altura;<br/>Se pueden separar varios tamaños de parcela con punto y coma (;). por ejemplo: 20,40,30;15,20,20;');
define('MODULE_SHIPCLOUD_COMPANY_TITLE', '<hr noshade>Detalles del cliente<br/>');
define('MODULE_SHIPCLOUD_COMPANY_DESC', 'Empresa:');
define('MODULE_SHIPCLOUD_FIRSTNAME_TITLE', '');
define('MODULE_SHIPCLOUD_FIRSTNAME_DESC', 'Nombre de pila:');
define('MODULE_SHIPCLOUD_LASTNAME_TITLE', '');
define('MODULE_SHIPCLOUD_LASTNAME_DESC', 'Apellido:');
define('MODULE_SHIPCLOUD_ADDRESS_TITLE', '');
define('MODULE_SHIPCLOUD_ADDRESS_DESC', 'Dirección:');
define('MODULE_SHIPCLOUD_POSTCODE_TITLE', '');
define('MODULE_SHIPCLOUD_POSTCODE_DESC', 'Código Postal:');
define('MODULE_SHIPCLOUD_CITY_TITLE', '');
define('MODULE_SHIPCLOUD_CITY_DESC', 'Ciudad:');
define('MODULE_SHIPCLOUD_TELEPHONE_TITLE', '');
define('MODULE_SHIPCLOUD_TELEPHONE_DESC', 'Teléfono:');
define('MODULE_SHIPCLOUD_ACCOUNT_IBAN_TITLE', '');
define('MODULE_SHIPCLOUD_ACCOUNT_IBAN_DESC', 'IBAN:');
define('MODULE_SHIPCLOUD_ACCOUNT_BIC_TITLE', '');
define('MODULE_SHIPCLOUD_ACCOUNT_BIC_DESC', 'BIC:');
define('MODULE_SHIPCLOUD_BANK_NAME_TITLE', '<hr noshade>Detalles bancarios<br/>');
define('MODULE_SHIPCLOUD_BANK_NAME_DESC', 'Banco:');
define('MODULE_SHIPCLOUD_BANK_HOLDER_TITLE', '');
define('MODULE_SHIPCLOUD_BANK_HOLDER_DESC', 'Titular de la cuenta:');
define('MODULE_SHIPCLOUD_LOG_TITLE', '<hr noshade>Registro');
define('MODULE_SHIPCLOUD_LOG_DESC', 'el archivo de registro se almacena en la carpeta /log.');
define('MODULE_SHIPCLOUD_EMAIL_TITLE', '<hr noshade>Notificación por correo electrónico');
define('MODULE_SHIPCLOUD_EMAIL_DESC', '¿Se debe notificar al cliente por correo electrónico?');
define('MODULE_SHIPCLOUD_EMAIL_TYPE_TITLE', '<hr noshade>Notificación');
define('MODULE_SHIPCLOUD_EMAIL_TYPE_DESC', '¿El cliente debe ser notificado por la tienda o por shipcloud?<br><b>&lt;Nota:</b>Para recibir una notificación de la tienda, debe establecerse un webhook en esta URL:</br>' . ((defined('RUN_MODE_ADMIN') && function_exists('xtc_catalog_href_link')) ? xtc_catalog_href_link('callback/shipcloud/callback.php', '', 'SSL', false) : '') . ' se establecieron en shipcloud.');

define('SHIPMENT.TRACKING.SHIPCLOUD_LABEL_CREATED', 'Etiqueta de paquete creada en shipcloud');
define('SHIPMENT.TRACKING.LABEL_CREATED', 'Etiqueta de paquete creada');
define('SHIPMENT.TRACKING.PICKED_UP', 'Paquete recogido por el repartidor');
define('SHIPMENT.TRACKING.TRANSIT', 'El paquete está en camino');
define('SHIPMENT.TRACKING.OUT_FOR_DELIVERY', 'Se entrega el paquete');
define('SHIPMENT.TRACKING.DELIVERED', 'Paquete entregado');
define('SHIPMENT.TRACKING.AWAITS_PICKUP_BY_RECEIVER', 'En espera de recogida por los clientes');
define('SHIPMENT.TRACKING.CANCELED', 'La etiqueta del paquete estaba lustrada');
define('SHIPMENT.TRACKING.DELAYED', 'Entrega retrasada');
define('SHIPMENT.TRACKING.EXCEPTION', 'Se ha detectado un problema');
define('SHIPMENT.TRACKING.NOT_DELIVERED', 'no entregado');
define('SHIPMENT.TRACKING.NOTIFICATION', 'Mensaje interno: Los eventos de seguimiento dentro del envío requieren una información más elaborada.');
define('SHIPMENT.TRACKING.UNKNOWN', 'Estado desconocido');
