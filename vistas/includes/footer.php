<footer class="site-footer style1" role="contentinfo">
    <div class="page-width">
        <div class="footer-top footer-block">
            <div id="text-713b35d2-3b4a-4fa4-859d-a2c9f25e064a" class="footer-block__item medium-up--one-quarter contact-box">
                <h4 class="h4">Visítanos</h4>
                <ul class="addressFooter">
                    <li>
                        <i class="fa-solid fa-location-dot"></i>
                        <?=$configuracion['conf_direccion'];?>
                    </li>
                    <li class="phone">
                        <i class="fa-sharp fa-solid fa-phone"></i>
                        <a href="tel:+57<?=$configuracion['conf_telefono'];?>">+57<?=$configuracion['conf_telefono'];?></a>
                    </li>
                    <li class="email">
                        <i class="fa-sharp fa-solid fa-envelope"></i>
                        <a href="mailto:<?=$configuracion['conf_email'];?>"><?=$configuracion['conf_email'];?></a>
                    </li>
                </ul>
                <h5 class="h4">Síguenos:</h5>
                <ul class="list--inline social-icons">
                    <li>
                        <a class="social-icons__link" href="<?=$configuracion['conf_facebook'];?>" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                            </svg>
                            <span class="icon__fallback-text">Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a class="social-icons__link" href="<?=$configuracion['conf_instagram'];?>" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <rect x="4" y="4" width="16" height="16" rx="4" />
                                <circle cx="12" cy="12" r="3" />
                                <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
                            </svg>
                            <span class="icon__fallback-text">Instagram</span>
                        </a>
                    </li>
                    <li>
                        <a class="social-icons__link" href="<?=$configuracion['conf_tiktok'];?>" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-tiktok" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 12a4 4 0 1 0 4 4v-12a5 5 0 0 0 5 5" />
                            </svg>
                            <span class="icon__fallback-text">TikTok</span>
                        </a>
                    </li>
                    <li>
                        <a class="social-icons__link" href="<?=$configuracion['conf_whatsapp'];?>" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
                            </svg>
                            <span class="icon__fallback-text">Whatsapp</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="nav_menu-1561381006670" class="footer-block__item medium-up--one-quarter footer-links">
                <h4 class="h4 h4Flex" id="Cat">Categorías <i id="plusCat" class="fa-solid fa-plus"></i></h4>
                <ul id="menCat">
                    <li><a href="<?=RUTA?>tienda/cadenas">Cadenas</a></li>
                    <li><a href="<?=RUTA?>tienda/dijes">Dijes</a></li>
                    <li><a href="<?=RUTA?>tienda/aretes">Aretes</a></li>
                    <li><a href="<?=RUTA?>tienda/pulseras">Pulseras</a></li>
                    <li><a href="<?=RUTA?>tienda/anillos">Anillos</a></li>
                    <li><a href="<?=RUTA?>tienda/tobilleras">Tobilleras</a></li>
                </ul>
            </div>
            <div id="nav_menu-1561381031703" class="footer-block__item medium-up--one-fifth footer-links">
                <h4 class="h4 h4Flex" id="Usu">Usuario <i id="plusUsu" class="fa-solid fa-plus"></i></h4>
                <ul id="menUsu">
                    <li><a href="<?= RUTA ?>acceso">Iniciar Sesión</a></li>
                    <li><a href="<?= RUTA ?>vistas/clientes/">Mi Cuenta</a></li>
                    <li><a href="<?=RUTA?>carrito">Carrito de Compras</a></li>
                    <li><a href="<?=RUTA?>deseos">Lista de Deseos</a></li>
                    <li><a href="<?=RUTA_ADMIN?>" target="_blank">AdminZEFE</a></li>
                </ul>
            </div>
            <div id="nav_menu-1561381058776" class="footer-block__item medium-up--one-fifth footer-links">
                <h4 class="h4 h4Flex" id="Leg">Legales <i id="plusLeg" class="fa-solid fa-plus"></i></h4>
                <ul id="menLeg">
                    <?php
                        $consultaLegales = ControladorConfigPagina::ctrListarLegales(2);
                        while($legales = mysqli_fetch_array($consultaLegales, MYSQLI_BOTH)){
                    ?>
                    <li><a href="<?=RUTA?>legales/<?=$legales['pal_id'];?>"><?=$legales['pal_nombre'];?></a></li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="flex page-width ">
            <div class="aling-left small--text-center">
                © 2023 <?=$configuracion['conf_empresa'];?> - Todos los derechos reservados | Desarrollado por <a href="https://ing-enuarlara.netlify.app/" target="_blank">@ing_enuarlara.co</a>
            </div>
            <div class="paymentCall aling-right small--text-center">
                <p class="footer-img">
                    <img class="autoHt lazyloaded" data-src="<?=RUTA?>dist/img/logos-pagos_646c6440-0b3c-4818-8241-f06bb4ee76d8.png" alt="" width="450" height="0.0" src="<?=RUTA?>dist/img/logos-pagos_646c6440-0b3c-4818-8241-f06bb4ee76d8.png">
                </p>
            </div>
        </div>
    </div>
</footer>