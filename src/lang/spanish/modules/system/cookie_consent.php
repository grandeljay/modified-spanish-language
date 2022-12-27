<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('MODULE_COOKIE_CONSENT_STATUS_TITLE', 'Módulo de estado');
define('MODULE_COOKIE_CONSENT_STATUS_DESC', '¿Activar módulo?');
define('MODULE_COOKIE_CONSENT_SET_READABLE_COOKIE_TITLE', 'Establecer cookie legible');
define('MODULE_COOKIE_CONSENT_SET_READABLE_COOKIE_DESC', '');

define('MODULE_COOKIE_CONSENT_SET_READABLE_COOKIE_DETAIL', 'Si utiliza el Google Tag Manager u otro software, éste también sólo podrá insertar scripts y establecer cookies si el visitante lo permite. Se puede establecer una cookie adicional legible para que el gestor de etiquetas pueda leer la solicitud del cliente.<br /><br />Configuración en Google Tag Manager:<br />Vaya al menú &quot;Variables&quot; y cree una nueva variable en &quot;Variables personalizadas&quot;. Por ejemplo, nómbrelo &quot;Cookieconsent&quot;.<br />A continuación, haga clic en &quot;Configurar variable&quot; y seleccione el tipo &quot;First-Party-Cookie&quot;. Introduzca el nombre de la cookie &quot;MODOilTrack&quot;.<br /><br />A continuación, podrá editar su &quot;Activador&quot;.<br />Establezca el tipo de activación &quot;Llamada de página&quot; y seleccione la opción &quot;Algunas llamadas de página&quot;.<br />Como condición, especifique: &quot; <em>Cookieconsent&quot;</em> (nombre de la variable) contiene <em>[&quot;1&quot;:true]</em>. Puede encontrar el valor contenido por cookie en la configuración de cookieconsent.<br /><br />Puede encontrar instrucciones ilustradas aquí: <a href="https://www.dair-media.net/blog/dsgvo-cookie-einwilligung-im-google-tag-manager-beruecksichtigen/" target="_blank">https://www.dair-media.net/blog/dsgvo-cookie-einwilligung-im-google-tag-manager-beruecksichtigen/</a>');

define('MODULE_COOKIE_CONSENT_EXTENDED_DESCRIPTION', '<strong><font color="red">ATENCIÓN:</font></strong> Por favor, siga realizando los ajustes en "Configuración" -&gt; <a href="' . ((defined('FILENAME_COOKIE_CONSENT') && function_exists('xtc_href_link')) ? xtc_href_link(FILENAME_COOKIE_CONSENT) : '#') . '"><strong>"Consentimiento de cookies"</strong></a> ¡Hágalo!');
define('MODULE_COOKIE_CONSENT_MORE_INFO', 'Más información:');
