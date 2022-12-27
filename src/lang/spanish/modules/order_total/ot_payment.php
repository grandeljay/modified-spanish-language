<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

define('MODULE_ORDER_TOTAL_PAYMENT_HELP_LINK', ' <a onclick="window.open(\'popup_help.php?type=order_total&modul=ot_payment&lng=spanish\', \'Hilfe\', \'scrollbars=yes,resizable=yes,menubar=yes,width=800,height=600\'); return false" target="_blank" href="popup_help.php?type=order_total&modul=ot_payment&lng=spanish"><b>[HILFE]</b></a>');
define(
    'MODULE_ORDER_TOTAL_PAYMENT_HELP_TEXT',
    '<h2>Descuento y recargo en los tipos de pago</h2>
    Si se desea disponer de más escalas de descuento (la predeterminada es <b>3</b>), el valor de la variable $num (archivos de idioma) o $this-&gt;num (archivo de módulo) debe cambiarse al valor deseado en todos los archivos antes de la instalación.
    <hr>
    <h3>Campos de escala de descuento</h3>
    <p class="red">Nota: La dirección de entrega es determinante para los códigos de país. Si un descuento/recargo debe aplicarse a todos los países, utilice 00 como código u omita por completo la especificación del código de país (¡incluido el &quot;|&quot;!).</p>
    <h4>Utilice la siguiente notación para los descuentos:</h4>
    <pre>  <span class="blue">DE|100</span>:<span class="red">4</span>,<span class="green">200</span>:<span class="red">5</span></pre>
    <p>Significado:</p>
    <p>Para los clientes de <span class="blue">Alemania</span>, se concede un descuento del <span class="red">4%</span> a partir de <span class="green">100 euros</span>, y un descuento <span class="red">del 5%</span> a partir de <span class="green">200 euros.</span></p>
    <pre>  <span class="green">100</span>:<span class="red">2</span>,<span class="green">200</span>:<span class="red">3</span></pre>
    <p>Significado:</p>
    <p>Para los clientes de todos los países se concede un descuento <span class="red">del 2%</span> a partir de <span class="green">100 euros,</span> a partir de <span class="green">200 euros</span> un descuento <span class="red">del 3%</span>.</p>
    <h4>Utilice la siguiente notación para los recargos:</h4>
    <pre>  <span class="blue">DE|100</span>:<span class="red">-3</span></pre>
    <p>Significado:</p>
    <p>Para los clientes de <span class="blue">Alemania</span>, se cobrará un recargo del <span class="red">3%</span> a partir de <span class="green">100 euros.</span></p>
    <h4>Ejemplo para Paypal</h4>
    1. escala de descuento
    <pre>  <span class="blue">DE|0</span>:<span class="red">-1,9&amp;</span><span class="lila">-0,35</span></pre>
    2ª escala de descuentos
    <pre>  <span class="blue">00|0</span>:<span class="red">-3.4&amp;</span><span class="lila">-0.35</span></pre>
    <p>Significado:</p>
    <p>Para los clientes de <span class="blue">Alemania</span>, se aplica un recargo del <span class="red">1,9%</span> más 0 <span class="lila">,35</span> euros a partir de <span class="lila">0 euros</span> (es decir, siempre).</p>
    <p>Para los clientes de <span class="blue">todos los demás países (00=todos</span> ) se cobrará un recargo del <span class="red">3,4%</span> más 0 <span class="lila">,35</span> euros a partir de <span class="green">0 euros.</span></p>
    <p>Es importante que las entradas se realicen en el orden correcto (el resto de países siempre en último lugar) y que &quot;Cálculo múltiple&quot; se establezca en &quot;falso&quot;, ya que de lo contrario se calcularán ambos recargos.</p>
    <h4>Ejemplo para importes fijos</h4>
    <pre>  <span class="green">0</span>:<span class="red">0&amp;</span><span class="lila">-2</span></pre>
    <p>Significado:</p>
    <p>Para los clientes de todos los países, se calcula un recargo del <span class="red">0%</span> (es decir, sin recargo porcentual) más <span class="lila">2,00 euros</span> (el recargo fijo) a partir de <span class="lila">0 euros</span> (es decir, siempre).</p>
    <hr>
    <h3>Campos del tipo de pago</h3>
    <p>Introduzca el <b>código interno</b> del método de pago en los campos, por ejemplo, <b>giro postal</b> para el pago por adelantado o <b>bacalao</b> para el pago contra reembolso.</p> <p>Separe varios tipos de pago con comasVea la</p>columna Módulos -&gt; Opciones de pago -&gt; &quot;Nombre del módulo (para uso interno)&quot;.<br/><br/>
    <hr>
    <h3>Visualización del tipo de pago en el proceso de pedido</h3>
    Si desea que el descuento correspondiente se muestre en el proceso de pedido al seleccionar la forma de pago, ajuste la opción &quot;Mostrar en formas de pago&quot; a &quot;verdadero&quot;. <br/><br/>
    Además, puede establecer el tipo de visualización con la opción &quot;Tipo de visualización en el proceso de pedido durante la selección del pago&quot;:
    <p> -- Por defecto: porcentaje o importe, según las entradas de la escala de descuentos.</p>
    <p> -- Precio: Siempre se muestra el importe real.</p></hr></hr></hr>'
);

define('MODULE_ORDER_TOTAL_PAYMENT_TITLE', 'Descuento y recargo en los métodos de pago');
define('MODULE_ORDER_TOTAL_PAYMENT_DESCRIPTION', 'Descuento y recargo en los métodos de pago' . MODULE_ORDER_TOTAL_PAYMENT_HELP_LINK);

define('MODULE_ORDER_TOTAL_PAYMENT_STATUS_TITLE', 'Mostrar descuento');
define('MODULE_ORDER_TOTAL_PAYMENT_STATUS_DESC', '¿Desea activar el descuento por forma de pago?');

define('MODULE_ORDER_TOTAL_PAYMENT_SORT_ORDER_TITLE', '<hr>Orden de clasificación');
define('MODULE_ORDER_TOTAL_PAYMENT_SORT_ORDER_DESC', 'Orden de visualización');

if (defined('MODULE_ORDER_TOTAL_PAYMENT_NUMBER')) {
    for ($j = 1; $j <= MODULE_ORDER_TOTAL_PAYMENT_NUMBER; $j++) {
        define('MODULE_ORDER_TOTAL_PAYMENT_PERCENTAGE' . $j . '_TITLE', '<hr>' . $j . '. Escala de descuentos');
        define('MODULE_ORDER_TOTAL_PAYMENT_PERCENTAGE' . $j . '_DESC', 'Descuento (valor mínimo:porcentaje)');
        define('MODULE_ORDER_TOTAL_PAYMENT_TYPE' . $j . '_TITLE', $j . '. Forma de pago');
        define('MODULE_ORDER_TOTAL_PAYMENT_TYPE' . $j . '_DESC', 'Formas de pago sobre las que se aplicará el descuento');
    }
}

define('MODULE_ORDER_TOTAL_PAYMENT_INC_SHIPPING_TITLE', '<hr>Gastos de envío incluidos');
define('MODULE_ORDER_TOTAL_PAYMENT_INC_SHIPPING_DESC', 'Se descuentan los gastos de envío');

define('MODULE_ORDER_TOTAL_PAYMENT_INC_TAX_TITLE', '<hr>IVA incluido');
define('MODULE_ORDER_TOTAL_PAYMENT_INC_TAX_DESC', 'El IVA se descuenta con');

define('MODULE_ORDER_TOTAL_PAYMENT_CALC_TAX_TITLE', '<hr>Cálculo del IVA');
define('MODULE_ORDER_TOTAL_PAYMENT_CALC_TAX_DESC', 'Recalcular el total del IVA');

define('MODULE_ORDER_TOTAL_PAYMENT_ALLOWED_TITLE', '<hr>Zonas permitidas');
define('MODULE_ORDER_TOTAL_PAYMENT_ALLOWED_DESC', 'Especifique <b>individualmente</b> las zonas que deben permitirse para este módulo. (por ejemplo, AT,DE (si está vacía, se permiten todas las zonas))');

define('MODULE_ORDER_TOTAL_PAYMENT_DISCOUNT', 'Rabatt');
define('MODULE_ORDER_TOTAL_PAYMENT_FEE', 'Recargo');

define('MODULE_ORDER_TOTAL_PAYMENT_TAX_CLASS_TITLE', '<hr>Clase de impuestos');
define('MODULE_ORDER_TOTAL_PAYMENT_TAX_CLASS_DESC', 'La clase de impuesto es irrelevante y sólo sirve para evitar un mensaje de error.');

define('MODULE_ORDER_TOTAL_PAYMENT_BREAK_TITLE', '<hr>Cálculo múltiple');
define('MODULE_ORDER_TOTAL_PAYMENT_BREAK_DESC', '¿Deben ser posibles los cálculos múltiples? Si no, se anulará tras el primer descuento correspondiente.');

define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_IN_CHECKOUT_PAYMENT_TITLE', '<hr>Visualización con los métodos de pago');
define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_IN_CHECKOUT_PAYMENT_DESC', 'Visualización en el proceso de pedido durante la selección del pago');

define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_TYPE_TITLE', '<hr>Tipo de visualización de los métodos de pago');
define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_TYPE_DESC', 'Tipo de visualización en el proceso de pedido al seleccionar el pago <br />-- por defecto: porcentaje o importe, dependiendo de las entradas en la escala de descuentos<br />-- precio: siempre se muestra el importe real');

define('MODULE_ORDER_TOTAL_PAYMENT_NUMBER_TITLE', 'Número de métodos de pago');
define('MODULE_ORDER_TOTAL_PAYMENT_NUMBER_DESC', 'Número de descuentos y recargos en los métodos de pago');
