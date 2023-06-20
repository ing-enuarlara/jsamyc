<html lang="es">
    <head>
        <title>Política de envío</title>
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
        <p><strong>Formas de envío</strong></p>
        <p>Cada método de envío tiene restricciones y costes propios, los cuales serán aplicados en tu pedido. Cuando pases
            por caja, se te solicitará que indiques una forma de envío para tu(s) producto(s). Antes de finalizar tu pedido,
            los costes totales de envío se calcularán automáticamente.</p>
        <p><strong>Normas y restricciones de envío</strong></p>
        <p>Los pedidos se envían solo en días hábiles. Los días hábiles son de lunes a viernes, excluyendo los festivos
            nacionales de Colombia.</p>
        <p>No podemos realizar entregas en apartados de correos.</p>
        <p>Todas las entregas irán acompañadas con un acuse de recibo.</p>
        <p>No reembolsamos los costes de envío urgente en el caso de devolución de artículos.</p>
        <p>Para cualquier consulta, llama a nuestro servicio de atención al cliente al número +573156570420</p>
        <p>Debido a dificultades logísticas a la hora de realizar envíos a determinadas áreas remotas, nos reservamos el
            derecho a cancelar tu pedido y/o a aplicar términos y condiciones adicionales a dicho pedido (incluyendo, sin
            limitación, la condición de que cada pedido alcance un importe mínimo). Nuestro servicio de atención al cliente
            te notificará la cancelación y/o la aplicación de estas condiciones tan pronto como sea posible después de que
            realices tu pedido.</p>
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