<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('TEXT_SETTINGS', 'Ajustes');

define('HEADING_TITLE', 'Tiendas de confianza');
define('HEADING_FEATURES', 'Funciones');

define('TABLE_HEADING_TRUSTEDSHOPS_ID', 'TS-ID');
define('TABLE_HEADING_LANGUAGE', 'Idioma');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_ACTION', 'Acción');

define('HEADING_TRUSTBADGE', 'Distintivo de confianza');
define('HEADING_ADVANCED', 'Ampliado');

define('TEXT_DATE_ADDED', 'Añadido el:');
define('TEXT_LAST_MODIFIED', 'Actualizado el:');
define('TEXT_TRUSTEDSHOPS_STATUS', 'Estado:');
define('TEXT_TRUSTEDSHOPS_ID', 'TS-ID:');
define('TEXT_TRUSTEDSHOPS_LANGUAGES', 'Idioma:');
define('TEXT_TRUSTBADGE_INFO', 'La insignia de confianza muestra su caché y las valoraciones de sus clientes en su tienda y puede personalizarse aquí en términos de apariencia y posicionamiento. En la variante "Estándar" sólo se muestra el caché, la variante "Valoraciones" también muestra las valoraciones de sus clientes. Se pueden personalizar otros parámetros seleccionando "Personalizado" (para ello se requieren conocimientos de programación).');

define('TEXT_TRUSTEDSHOPS_BADGE', 'Variante:');
define('TEXT_TRUSTEDSHOPS_POSITION', 'Posición:');
define('TEXT_BADGE_DEFAULT', 'Estándar');
define('TEXT_BADGE_SMALL', 'Estándar (pequeño)');
define('TEXT_BADGE_REVIEWS', 'Reseñas');
define('TEXT_BADGE_CUSTOM', 'A medida');
define('TEXT_BADGE_CUSTOM_REVIEWS', 'A medida (Reseñas)');
define('TEXT_BADGE_OFFSET', 'Posición del eje Y:');
define('TEXT_BADGE_INSTRUCTION', 'En nuestro Centro de Integración encontrará <a href="https://help.etrusted.com/hc/de/articles/360045842852-Trusted-Shops-nutzen-mit-modified" target="_blank" style="text-decoration:underline">instrucciones paso a paso</a> para la configuración e integración individual.');
define('TEXT_BADGE_CUSTOM_CODE', 'Inserte aquí el código del distintivo de confianza:');

define('TEXT_PRODUCT_STICKER_API', 'Evaluación del producto API:');
define('TEXT_PRODUCT_STICKER_API_INFO', 'Con la API de valoración de productos, las valoraciones se importan a la tienda. Para ello, es necesario configurar un cronjob en la URL ' . HTTPS_SERVER . DIR_WS_CATALOG . 'api/trustedshops/cronjob.php se crea.');
define('TEXT_PRODUCT_STICKER_API_CLIENT', 'Evaluación del producto API Cliente:');
define('TEXT_PRODUCT_STICKER_API_SECRET', 'Revisión del producto API Secret:');
define('TEXT_PRODUCT_STICKER_STATUS', 'Estado del widget de valoración del producto:');
define('TEXT_PRODUCT_STICKER', 'Edite el código del widget de revisión de productos:');
define('TEXT_PRODUCT_STICKER_INFO', 'El widget de valoración de productos muestra las valoraciones actuales de los productos de su tienda.<br/>Con nuestras <a target="_blank" href="https://help.etrusted.com/hc/de/articles/360045842852-Trusted-Shops-nutzen-mit-modified" style="text-decoration:underline">instrucciones podrá configurar</a> su widget de valoración de productos.');
define('TEXT_PRODUCT_STICKER_INTRO', 'Comentarios de los clientes');

define('TEXT_REVIEW_STICKER_STATUS', 'Revisar el estado del widget:');
define('TEXT_REVIEW_STICKER', 'Revisar Código Widget editieren:');
define('TEXT_REVIEW_STICKER_INFO', 'El widget de reseñas muestra las reseñas actuales de su tienda.<br/>Siga estas <a target="_blank" href="https://help.etrusted.com/hc/de/articles/360045842852-Trusted-Shops-nutzen-mit-modified" style="text-decoration:underline">instrucciones para configurar</a> su widget de revisión.');
define('TEXT_REVIEW_STICKER_INTRO', 'Comentarios de los clientes');

define('TEXT_HEADING_DELETE_TRUSTEDSHOPS', 'Borrar TS-ID');
define('TEXT_DELETE_INTRO', '¿Está seguro de que desea eliminar este TS-ID?');

define('TEXT_DISABLED', 'desactivado');
define('TEXT_ENABLED', 'activa');

define('TEXT_LEFT', 'enlaces');
define('TEXT_RIGHT', 'derecha');
define('TEXT_CENTER', 'centrado');

define('TEXT_DISPLAY_NUMBER_OF_TRUSTEDSHOPS', 'Se muestran de <b>%d</b> a <b>%d</b> (del total de <b>%d</b> TS-ID)');

define(
    'TEXT_TS_MAIN_INFO',
    '<img src="images/trustedshops/illustration-ts-products-profile-page.png" style="width:160px;float:right;margin-top:30px;padding-left:30px;"/>
   <h2>Tiendas de confianza</h2>
    Más de 30.000 empresas de toda Europa utilizan el sello de calidad de Trusted Shops, la protección del comprador y las reseñas auténticas para conseguir más tráfico, mayores ventas y mejores tasas de conversión. Con Trusted Shops Trustbadge puede integrar las soluciones de confianza de forma rápida y sencilla en el software modificado de su tienda de comercio electrónico.<br/>
    <br/>
   <b>Genere confianza - ¡en sólo 5 minutos!</b><br/>
    <br/>
    El sello de calidad, la protección del comprador y las valoraciones auténticas de Trusted Shops son sinónimo de confianza desde hace más de 20 años y constituyen la palanca de más de 30.000 tiendas en línea de toda Europa para conseguir más tráfico, mayores ventas y mejores tasas de conversión.
   <br/>
    Para convencer a los visitantes de forma rápida y sencilla de la fiabilidad de su tienda en línea, existe este módulo de Trusted Shops. La sencilla instalación garantiza el uso del producto en sólo 5 minutos y no suele requerir apenas conocimientos técnicos previos. Con nuestro módulo siempre estará técnicamente al día y no tendrá que realizar ningún esfuerzo adicional de mantenimiento.<br/>
    <br/>
   <b>Su ventaja:</b> con sólo unos clics, los visitantes de su tienda en línea pueden ver elementos de confianza como la insignia de confianza u otros widgets in situ, pueden beneficiarse de la protección del comprador y se les pide automáticamente su opinión tras realizar un pedido.'
);
define(
    'TEXT_TS_FEATURES_INFO',
    '<img src="images/trustedshops/illustration-ts-badge.png" style="width:160px;float:right;margin-top:30px;padding-left:30px;"/>
   <h2>Funciones</h2>
   <b>Las funciones de un vistazo:</b><br/>
    <br/>
    <ul>
      <li>Muestre la insignia de confianza, integre la protección del comprador y recopile opiniones de la tienda</li>
      <li>Recopilar y mostrar valoraciones de productos</li>
      <li>Configurar multitiendas (por ejemplo, varias tiendas de idiomas) con diferentes ID de Trusted Shops</li>
    </ul>
   <br/>
    Nota: Para utilizar el módulo Trusted Shops, necesita una suscripción existente a Trusted Shops. Puede obtener más información sobre los productos y las ventajas de Trusted Shops en nuestra página web o llamando por teléfono: +49 221 7753658<br/>
    <br/>
    ¿Necesita ayuda con la integración? Encontrará instrucciones detalladas sobre la integración en nuestro Centro de ayuda.<br/>
    <br/>
    Enlace: <a href="https://help.etrusted.com/hc/de/articles/360045842852-Trusted-Shops-nutzen-mit-modified" target="_blank" style="text-decoration:underline">https://help.etrusted.com/hc/de/articles/360045842852-Trusted-Shops-nutzen-mit-modified</a>'
);
define(
    'TEXT_TS_SPECIAL_INFO',
    '<b>Nuestro especial para usted: ¡<br/>permanentemente más barato para los usuarios modificados!</b><br/>
    <a class="btnSmall btnCuracao fitting" target="_blank" href="https://checkout.trustedshops.com/?a_aid=modified-shop">Hágase socio ahora</a>'
);
