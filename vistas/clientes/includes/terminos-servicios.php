<html lang="es">
<head>
    <title>Términos del servicio</title>
    <meta charset="UTF-8">
    <script nonce="">
        const debounce = function (func, wait, immediate) {
            var timeout;
            return function () {
                var context = this, args = arguments;
                clearTimeout(timeout);
                timeout = setTimeout(function () {
                    timeout = null;
                    if (!immediate) func.apply(context, args);
                }, wait);
                if (immediate && !timeout) func.apply(context, args);
            };
        };

        const sendMessage = function () {
            parent.postMessage({ action: 'checkoutModalIframeResized', height: document.body.scrollHeight + 'px' }, '*');
        };

        document.addEventListener('DOMContentLoaded', sendMessage, false);
        window.addEventListener('resize', debounce(sendMessage, 200), false);
    </script>

    <link rel="stylesheet" crossorigin="anonymous" href="C:/xampp/htdocs/ing-enuarlara.co/jsamyc/vistas/clientes/dist/css/standalone.css" integrity="sha256-ZKO7Cn+f0tkGoi8J3rtkMos52cSvyTRJuux1p8BBUAE=">  
</head>
<body class="page-policies default-background text-container">
    <p><strong>Pago</strong></p>
    <p>Los pagos realizados a través de nuestras pasarelas de pago y/o transferencias bancarias están sujetas a
        verificación de ÉLITE JOYERÍA, nos reservamos el derecho a ajustar, reversar y/o cancelar cualquier compra si
        detectamos errores en&nbsp;los precios publicados en esta tienda online bien sea por errores tecnológicos o de
        cualquier otra índole.</p>
    <p>Están disponibles las siguientes opciones de pago:&nbsp;</p>
    <p>Tarjeta Debito<br> Tarjetas de crédito (Expedidas en Colombia):<br> Visa<br> American Express<br> Mastercard<br>
        Diners Club</p>
    <p><strong>Seguimiento de tu pedido</strong></p>
    <p>Puedes realizar el seguimiento de tu pedido accediendo a tu historial de pedidos en Mi cuenta. Ve a los detalles
        del pedido que deseas seguir y pulsa el número de seguimiento en la columna “Detalles”. Aquí accederás al sitio
        web del transportista, donde podrás encontrar la información más actualizada. Ten en cuenta que hasta que el
        transportista actualice sus sistemas con la información de tu pedido, no podrás seguirlo a través de la web. Por
        tanto, es posible que no dispongas de información de seguimiento cuando te proporcionemos el enlace de
        seguimiento al día siguiente de que hayas realizado el pedido. No obstante, los transportistas suelen actualizar
        la información un día (hábiles) después de que te enviemos el enlace, por tanto, si todavía no disponen de la
        información, vuelve a intentarlo más tarde. Algunos pedidos se embalan en más de una caja. Cada caja tendrá su
        número de seguimiento exclusivo.</p>
    <p><strong>Los posibles estados son:</strong></p>
    <p>RECIBIDO: Este estado significa que el sistema ha recibido tu pedido, pero nuestro equipo de gestión de pedidos
        aún no lo ha procesado. También recibirás un e-mail para confirmar que hemos recibido el pedido.</p>
    <p>TRANSFERIDO: Este estado significa que tu pedido ha sido transferido al almacén y que tus artículos están siendo
        recogidos y preparados para el envío.</p>
    <p>PEDIDO ENVIADO: Este estado significa que tu pedido ha salido de nuestro almacén y está en manos del
        transportista o este ya lo ha entregado. Cuando tu pedido salga de nuestro almacén recibirás un e-mail con el
        enlace de seguimiento del mismo.</p>
    <p>DEVOLUCIÓN RECIBIDA: Este es un estado adicional que aparecerá en caso que hayas decidido devolver tu pedido o
        parte de él. Indica que la devolución ha sido recibida y aceptada. También recibirás un e-mail cuando recibamos
        y aceptemos tu devolución.</p>
    <p>PEDIDO FINALIZADO: Este estado indica que el pedido ya no puede seguirse en el sitio web del transportista ya que
        se realizó hace mucho tiempo.</p>
    <p><strong>Historial de pedidos</strong></p>
    <p>Para consultar los pedidos que has realizado, ve a “Mi cuenta” y selecciona “Historial de pedidos”. Deberás
        iniciar sesión con tu nombre de usuario y contraseña.</p>
    <div class="hidden">
        <span class="visually-hidden" id="forwarding-external-new-window-message">
            Abre sitio externo externo en una nueva ventana.
        </span>
        <span class="visually-hidden" id="forwarding-new-window-message">
            Abre en una nueva ventana.
        </span>
        <span class="visually-hidden" id="forwarding-external-message">
            Abre sitio externo.
        </span>
        <span class="visually-hidden" id="checkout-context-step-one">
            Contacto - Élite Joyería - Caja
        </span>
    </div>
</body>
</html>