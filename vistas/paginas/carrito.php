<div class="page-width contenido__carrito">
    <h1 class="page-title centrar-texto">Carrito de compra</h1>
    <form action="/cart" method="post" novalidate="" class="cart style1">
        <table>
            <thead class="cart__row cart__header small--hide">
                <tr>
                    <th></th>
                    <th colspan="2" class="aling-left">Producto</th>
                    <th class="small--hide">Precio</th>
                    <th class="centrar-texto">Cantidad</th>
                    <th class="small--hide aling-right">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr class="cart__row border-bottom line1 cart-flex border-top">
                    <td class="delete small--hide">
                        <a href="/cart/change?line=1&amp;quantity=0" title="Quitar" class="btnCard btnCard__primary remove">
                            <i class="fa fa-solid fa-xmark"></i>
                        </a>
                    </td>
                    <td class="cart__image-wrapper cart-flex-item">
                        <a href="#">
                            <img class="cart__image" src="https://via.placeholder.com/75x100" alt="">
                        </a>
                    </td>
                    <td class="aling-left cart-flex-item">
                        <a href="#" class="grid-view-item__title">
                            <b>CADENA LAZO ITALY+1 ORO AMARILLO 2,8 MM 50 Cm 4,55 Gr </b>
                        </a>
                        <div class="cart__meta-text selling-plan-details"></div>
                        <div class="medium-up--hide">
                            $1.606.150
                        </div>
                    </td>
                    <td class="cart__price-wrapper small--hide">
                        $1.606.150
                    </td>
                    <td class="cart__update-wrapper cart-flex-item centrar-texto">
                        <div class="qtyField">
                            <a class="qtyBtn minus">
                                <i class="fa fa-solid fa-minus"></i>
                            </a>
                            <input class="qty cart__qty-input" type="text" name="updates[]" id="" value="1" min="0" pattern="[0-9]*">
                            <a class="qtyBtn plus">
                                <i class="fa fa-solid fa-plus"></i>
                            </a>
                        </div>
                        <a href="/cart/change?line=1&amp;quantity=0" title="Quitar" class="medium-up--hide removeMb">Quitar</a>
                    </td>
                    <td class="aling-right small--hide">
                        <div>$1.606.150</div>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="flex edit-shop">
            <a href="/" class="btn--link cart-continue">Seguir comprando</a>
            <button type="submit" name="update" class="btn--link cart-update">
            Actualizar carrito
            </button>
        </div>
        <footer class="grid flex cart__footer">
            <div class="grid__item">
                <div class="bdr-box">
                    <span class="cart-options-ttl">Instrucciones especiales para el vendedor</span>
                    <textarea name="note" id="CartSpecialInstructions" class="cart-note__input"></textarea>
                </div>
            </div>
            <div class="grid__item cartSummery">
                <div class="bdr-box">
                    <div class="flex cart-subtotal-row">
                        <span>Subtotal</span>
                        <span class="cart__subtotal aling-right">$1.606.150</span>
                    </div>
                    <p class="cart__shipping">Gastos de envío y descuentos calculado al momento de pagar</p>
                    <input type="submit" name="checkout" id="cartCheckout" class="btnCard btnCard__primary checkout" value="Finalizar pedido">
                </div>
            </div>
        </footer>
    </form>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="page-width">
    <div class="sec-ttl centrar-texto">
        <h3 class="h3 ft1">
            <span class="dbi pr">
                <strong>PRODUCTOS RECOMENDADOS</strong>
            </span>
        </h3>
    </div>
    <div class="contenedor_producto slider-container" data-slick='{"autoplay": true, "autoplaySpeed": 3000}'>
        <?php
            $filtro="";
            $limit="LIMIT 0,8";
            $orden="ORDER BY cprod_exitencia ASC";
            $consultaProductos = ControladorComercial::ctrProductos($filtro,$limit,$orden);
            while($datosProductos = mysqli_fetch_array($consultaProductos, MYSQLI_BOTH)){
                $filtroFotos =' AND cpf_principal=1';
                $consultaFotosProductos = ControladorComercial::ctrFotosProductos($datosProductos['cprod_id'],$filtroFotos);
                $datosFotosProductos = mysqli_fetch_array($consultaFotosProductos, MYSQLI_BOTH);
                $numFotosProductos=mysqli_num_rows($consultaFotosProductos);
                $rutaImg='https://via.placeholder.com/550';
                if($numFotosProductos>0){
                    $rutaImg=RUTA_ADMIN.'files/productos/'.$datosFotosProductos['cpf_fotos'];
                }
        ?>
            <div id="" class="grid grid-products carousel">
                <div class="draggable">
                    <div class="grid__item grid__item-prod item small--one-half medium--one-quarter large--one-quarter widescreen--one-fifth" style="width: 248px;" tabindex="0" data-slick-index="0" aria-hidden="false">
                        <div class="grid-view-item style5 wow fadeIn" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeIn;">
                            <div class="grid-view_image">
                                <a class="grid-view-item__link" href="<?=RUTA.'productos/'.$datosProductos['cprod_id']?>">
                                    <div class="grid-view-item__image primary lazyloaded" style="background-image: url(<?=$rutaImg?>);">
                                        <picture style="display: block;">
                                            <img alt="" class="lazyautosizes lazyloaded ls-is-cached" data-sizes="auto" data-parent-fit="cover" sizes="233px">
                                        </picture>
                                    </div>
                                </a>
                                <div class="button-set">
                                    <a class="btn btn_tienda add-to-cart" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                        </svg>
                                    </a>
                                    <a class="btn btn_tienda add-to-cart" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-zoom-in" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <circle cx="10" cy="10" r="7" />
                                            <line x1="7" y1="10" x2="13" y2="10" />
                                            <line x1="10" y1="7" x2="10" y2="13" />
                                            <line x1="21" y1="21" x2="15" y2="15" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="details">
                                <a href="<?=RUTA.'productos/'.$datosProductos['cprod_id']?>" class="grid-view-item__title" tabindex="0"><?=$datosProductos['cprod_nombre']?></a>
                                <div class="grid-view-item__meta">
                                    <!-- Show min to max price -->
                                    <span class="visually-hidden">Precio habitual</span>
                                    <span class="product-price__price">$<?=number_format($datosProductos['cprod_costo'],0,",",".")?></span>
                                </div>
                                <div class="flatbtn">
                                    <a class="btnCard btnCard__primary add-to-cart" href="#">Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>