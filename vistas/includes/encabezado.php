<div class="encabezado">
    <div class="contenido__encabezado">
        <div class="conten__enca aling-left text">
            <span>SOLO <b>ORO 18K</b> GARANTIZADO</span>
            <a href="#" class="text__link text__menu" id="menuNav">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2"
                    viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <line x1="4" y1="6" x2="20" y2="6" />
                    <line x1="4" y1="12" x2="20" y2="12" />
                    <line x1="4" y1="18" x2="20" y2="18" />
                </svg>
            </a>
            <a href="#" class="text__link text__searchIco" id="viewSearch">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                    viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <circle cx="10" cy="10" r="7" />
                    <line x1="21" y1="21" x2="15" y2="15" />
                </svg>
            </a>
        </div>
        <div class="conten__enca centrar-texto envios"><a href="<?=RUTA?>"><img id="imgEnca" src="https://via.placeholder.com/130x109" /></a></div>
        <div class="conten__enca aling-right opciones">
            <a href="#" class="opciones__link opcion__searchIco" id="viewSearch2">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                    viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <circle cx="10" cy="10" r="7" />
                    <line x1="21" y1="21" x2="15" y2="15" />
                </svg>
            </a>
            <a href="#" class="opciones__link opcion__account" id="setting">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user"
                    viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <circle cx="12" cy="7" r="4" />
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                </svg>
            </a>
            <div id="settingsBox">
                <div class="customer-links">
                    <p>
                        <a href="<?=RUTA?>acceso" class="btnSetting btnCard">ACCESO</a>
                    </p>
                    <p class="centrar-texto">
                        ¿Nuevo usuario?
                        <a href="<?=RUTA?>registrate" class="ctLink">Regístrate ahora</a>
                    </p>
                    <p class="centrar-texto large-up--hide">
                        <a href="<?=RUTA?>deseos" class="ctLink" title="Lista de deseos">Lista de deseos</a>
                    </p>
                </div>
            </div>
            <a href="deseos" class="opciones__link opcion__wishlist">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart"
                    viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                </svg>
            </a>
            <a href="#" class="opciones__link opcion__card" id="navCar">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart"
                    viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <circle cx="6" cy="19" r="2" />
                    <circle cx="17" cy="19" r="2" />
                    <path d="M17 17h-11v-14h-2" />
                    <path d="M6 5l14 1l-1 7h-13" />
                </svg>
                <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">0</span>
            </a>
        </div>
    </div>
</div>