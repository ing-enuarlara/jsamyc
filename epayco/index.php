<?php
    $publicKey="5df50b1565f8fe68b0d52cb237fdc914";
    $privateKey="a52c13a3367cbfef5d02ee16bf6e913e";
?>
<form>
    <script
        src="https://checkout.epayco.co/checkout.js"
        class="epayco-button"
        data-epayco-key=<?=$publicKey?>
        data-epayco-amount="50000"
        data-epayco-name="Vestido Mujer Primavera"
        data-epayco-description="Vestido Mujer Primavera"
        data-epayco-currency="cop"
        data-epayco-country="co"
        data-epayco-test="true"
        data-epayco-external="true"
        data-epayco-response="http://localhost/ing-enuarlara.co/tienda/epayco/respuesta.php"
        data-epayco-autoclick="true"
        data-epayco-confirmation="http://localhost/ing-enuarlara.co/tienda/epayco/confirmacion.php"
        data-epayco-methodconfirmation="get">
    </script>
</form>