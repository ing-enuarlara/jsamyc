<div id="PortalHost">
    <div id="Portal1" style="opacity: 0; visibility: hidden;">
        <div class="xoxyfm1 _1fragemad _1fragemb9" id="Overlay6" style="transform: translate(1205px, 80px);">
            <div class="xhuvqp1 _1fragemaf xhuvqpa xhuvqp6 xhuvqpl">
                <div class="xhuvqpk _1fragem64 _1fragem6n _1fragem5l _1fragem76 _1fragemaf _1fragemb6 _1fragembe">
                    <div class="_1fragem15 _1fragem47 _1fragem4c _1fragem4m _1fragem4h _1fragem8a _1fragem8r _1fragem7t _1fragem98 _1fragembq _1fragemaf _16s97g7v" style="--_16s97g7u: 30rem;">
                        <ul class="_1ip0g651 _1fragem1b _1fragemaf _1fragem1o _1fragem25">
                            <li class="_1fragem15 _1fragem8f _1fragem8r _1fragem7y _1fragem98 _1fragemaf">
                                <div class="_1fragemaf _1fragem1b _1mrl40q3 _1fragem1o _1fragem25 _1fragem0 _1fragem4 _16s97g73 _16s97g75 _16s97g7b _16s97g7d" style="--_16s97g72: 1fr; --_16s97g74: minmax(0, 1fr); --_16s97g7a: minmax(auto, max-content) minmax(0, 1fr) minmax(auto, max-content); --_16s97g7c: minmax(0, 1fr);">
                                    <div class="_1fragem17 _1fragem1d _1fragem3j _1fragem3g _1fragem3m _1fragem3d _1fragem5c _1fragem57 _1fragem5h _1fragem52 _1fragembu _1fragem36 _1fragemaf _16s97g7r _16s97g7t _16s97g7v hYZG4" style="--_16s97g7q: 3.4rem; --_16s97g7s: 3.4rem; --_16s97g7u: 3.4rem;"><span class="_1fragem34 _1fragem10 _1fragem9q _1fragem9p _1fragem15 a8x1wuk a8x1wum"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="a8x1wuo _1fragem15 _1fragem34 _1fragem9q _1fragem9p" focusable="false" aria-hidden="true">
                                                <circle cx="7" cy="7" r="5.6"></circle>
                                                <circle cx="7" cy="5.6" r="1.4"></circle>
                                                <path stroke-linecap="round" d="M3.014 10.558C4.04 9.656 5.448 9.1 7 9.1s2.959.556 3.986 1.458"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="_1ip0g651 _1fragem1b _1fragemaf _1fragem1q _1fragem27">
                                        <span class="_19gi7yt0 _19gi7yte _1fragem1j">Enuar Dvd Lara Rjs</span>
                                        <span class="_19gi7yt0 _19gi7ytc _1fragem1i _19gi7yt7">enuar2110@gmail.com</span>
                                    </div>
                                </div>
                            </li>
                            <li class="_1fragem15 _1fragem3k _1fragem3g _1fragem3m _1fragem3d _1fragemaf" role="separator"></li>
                            <li class="_1fragem15 _1fragem8f _1fragem8r _1fragem7y _1fragem98 _1fragemaf">
                                <a class="wz5gc" href="<?= RUTA ?>vistas/clientes/perfil.php">Información de la cuenta</a>
                            </li>
                            <li class="_1fragem15 _1fragem8f _1fragem8r _1fragem7y _1fragem98 _1fragemaf">
                                <button type="button" class="_1xqelvi1 _1fragem13 _1fragem15 _1fragemaf _1fragemak _1fragemat _1fragemap _1fragemb2 _1fragem47 _1fragem4c _1fragem4m _1fragem4h _1fragem17 _1fragem7 wz5gc">
                                    <span class="_1xqelvi2">Cerrar sesión</span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        $consultaLegales = ControladorConfigPagina::ctrListarLegales(2);
        while($legales = mysqli_fetch_array($consultaLegales, MYSQLI_BOTH)){
    ?>
    <div id="PortalLegal<?=$legales['pal_id'];?>" style="opacity: 0; visibility: hidden;">
        <div class="_1fragem64 _1fragem6n _1fragem5l _1fragem76 _1fragem7p _1fragem7r _1fragem8l _1fragem92 _1fragem84 _1fragem9j _1fragemae _1fragemb9 _1fragem17">
            <div class="u2pextb _1fragem64 _1fragem6n _1fragem5l _1fragem76 _1fragemae _1fragemb8 _1fragem9v _1fragemax _1fragemap _1fragemaz u2pext3"></div>
            <button class="_1fragemae _1fragemac _1fragem9v" aria-hidden="true"></button>
            <div class="u2pextf _1fragem7q _1fragem7s _1fragembe _1fragem17 _1fragem1d _1fragem34 _1fragemat _1fragemaq _1fragemaz u2pext3 u2pextn _1fragem10" role="dialog" aria-modal="true" aria-label="Política de reembolso" tabindex="-1">
                <header class="u2pexth _1fragem8i _1fragem81 _1fragem9g _1fragem8z _1fragem17 _1fragem39 _1fragem4">
                    <div id="Modal10Title" class="_1fragem1g">
                        <h1 class="_1fragemaf n8k95w2"><?=$legales['pal_nombre'];?></h1>
                    </div>
                    <button type="button" class="u2pextl _1fragem8f _1fragem8w _1fragem7y _1fragem9d _1fragemad _1fragem6w _1fragem6d _1fragem15" aria-label="closeModal" onclick="ocultar('PortalLegal<?=$legales['pal_id'];?>')">
                        <span class="_1fragem34 _1fragem10 _1fragem9q _1fragem9p a8x1wu5 _1fragem15 a8x1wuj a8x1wum">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="a8x1wuo _1fragem15 _1fragem34 _1fragem9q _1fragem9p" focusable="false" aria-hidden="true">
                                <path stroke-linecap="round" d="M2.8 2.8 7 7m4.2 4.2L7 7m0 0 4.2-4.2M7 7l-4.2 4.2"></path>
                            </svg>
                        </span>
                    </button>
                </header>
                <iframe src="<?= RUTA ?>vistas/clientes/includes/legales.php?id=<?=$legales['pal_id'];?>" title="<?=$legales['pal_nombre'];?>" class="u2pextr _1fragem3j _1fragem3g _1fragem3m _1fragem3d _1fragem8q _1fragem81 _1fragem9g _1fragem8z _1fragem15"></iframe>
            </div>
            <button class="_1fragemae _1fragemac _1fragem9v" aria-hidden="true"></button>
        </div>
    </div>
    <?php }?>
    <div id="Portal6" style="opacity: 0; visibility: hidden;">
        <div class="_1fragem64 _1fragem6n _1fragem5l _1fragem76 _1fragem7p _1fragem7r _1fragem8l _1fragem92 _1fragem84 _1fragem9j _1fragemae _1fragemb9 _1fragem17 u2pext2">
            <div class="u2pextb _1fragem64 _1fragem6n _1fragem5l _1fragem76 _1fragemae _1fragemb8 _1fragem9v _1fragemax _1fragemap _1fragemaz u2pext3"></div>
            <button class="_1fragemae _1fragemac _1fragem9v" aria-hidden="true"></button>
            <div class="u2pextf _1fragem7q _1fragem7s _1fragembe _1fragem17 _1fragem1d _1fragem34 _1fragemat _1fragemaq _1fragemaz u2pext3" role="dialog" aria-modal="true" aria-label="Editar perfil" tabindex="-1">
                <header class="u2pexth _1fragem8i _1fragem81 _1fragem9g _1fragem8z _1fragem17 _1fragem39 _1fragem4">
                    <div id="Modal13Title" class="_1fragem1g">
                        <div class="_1fragem15 _1fragem8i _1fragem8z _1fragem89 _1fragem9g _1fragemaf">
                            <div class="_1fragemaf _1fragem1b _1mrl40q3 _1fragem24 _1fragem2l _16s97g73 _16s97g75 _16s97g7b _16s97g7d" style="--_16s97g72: 1fr; --_16s97g74: minmax(0, 1fr); --_16s97g7a: minmax(0, 1fr) minmax(auto, max-content); --_16s97g7c: minmax(0, 1fr);">
                                <h2 class="_1fragemaf n8k95w2">Editar perfil</h2>
                                <button type="button" class="u2pextl _1fragem8f _1fragem8w _1fragem7y _1fragem9d _1fragemad _1fragem6w _1fragem6d _1fragem15" aria-label="closeModal" onclick="ocultar('Portal6')">
                                    <span class="_1fragem34 _1fragem10 _1fragem9q _1fragem9p a8x1wu5 _1fragem15 a8x1wuj a8x1wum">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="a8x1wuo _1fragem15 _1fragem34 _1fragem9q _1fragem9p" focusable="false" aria-hidden="true">
                                            <path stroke-linecap="round" d="M2.8 2.8 7 7m4.2 4.2L7 7m0 0 4.2-4.2M7 7l-4.2 4.2"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="u2pextp _1fragem7p _1fragem7r _1fragem8q _1fragem81 _1fragem9g _1fragem8z">
                    <div class="_1ip0g651 _1fragem1b _1fragemaf _1fragem1o _1fragem25 _1fragem8i _1fragem8z _1fragem81 _1fragem9g">
                        <form action="" method="POST" novalidate="" class="_1fragem16" id="Form6">
                            <div class="_1fragemaf">
                                <div class="_1ip0g651 _1fragem1b _1fragemaf _1fragem1o _1fragem25">
                                    <div class="_1fragemaf _1fragem1b _1mrl40q2 _1fragem1o _1fragem25 _16s97g73 _16s97g75 _16s97g7b _16s97g7d" style="--_16s97g72: 1fr; --_16s97g74: minmax(auto, max-content); --_16s97g7a: minmax(0, 1fr) minmax(0, 1fr); --_16s97g7c: minmax(auto, max-content);">
                                        <div class="_7ozb2u2 _1fragem1r _1fragem28 _1fragemaf _1fragem1b _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                            <div class="_1fragemaf">
                                                <label id="TextField30-label" for="TextField30" class="cektnc3 _1fragemad _1fragemac _1fragem9v _1fragemb4 _1fragemat _1fragemap _1fragemb2 cektnc6 _1fragema7">
                                                    <span class="cektnc9">
                                                        <span class="rermvf1 _1fragem7q _1fragem7s _1fragem15">Nombre</span>
                                                    </span>
                                                </label>
                                                <div class="_7ozb2u4 _1fragemaf _1fragem1b _1fragem14 _1fragemat _1fragemap _1fragemb2 _1fragemb3 _7ozb2uc _7ozb2un _7ozb2up _7ozb2uj">
                                                    <input id="TextField30" class="_7ozb2uu _1fragemaf _1fragemb4 _1fragem34 _1fragemab _7ozb2uv _7ozb2uz _1fragemat _1fragemap _1fragemb2 _7ozb2u15 _7ozb2u1n" type="text" aria-labelledby="TextField30-label" value="Enuar Dvd">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_7ozb2u2 _1fragem1r _1fragem28 _1fragemaf _1fragem1b _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                            <div class="_1fragemaf">
                                                <label id="TextField31-label" for="TextField31" class="cektnc3 _1fragemad _1fragemac _1fragem9v _1fragemb4 _1fragemat _1fragemap _1fragemb2 cektnc6 _1fragema7">
                                                    <span class="cektnc9">
                                                        <span class="rermvf1 _1fragem7q _1fragem7s _1fragem15">Apellido</span>
                                                    </span>
                                                </label>
                                                <div class="_7ozb2u4 _1fragemaf _1fragem1b _1fragem14 _1fragemat _1fragemap _1fragemb2 _1fragemb3 _7ozb2uc _7ozb2un _7ozb2up _7ozb2uj">
                                                    <input id="TextField31" class="_7ozb2uu _1fragemaf _1fragemb4 _1fragem34 _1fragemab _7ozb2uv _7ozb2uz _1fragemat _1fragemap _1fragemb2 _7ozb2u15 _7ozb2u1n" type="text" aria-labelledby="TextField31-label" value="Lara Rjs">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_1ip0g651 _1fragem1b _1fragemaf _1fragem24 _1fragem2l">
                                        <div class="_7ozb2u2 _1fragem1r _1fragem28 _1fragemaf _1fragem1b _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                            <div class="_1fragemaf">
                                                <label id="TextField32-label" for="TextField32" class="cektnc3 _1fragemad _1fragemac _1fragem9v _1fragemb4 _1fragemat _1fragemap _1fragemb2 cektnc6 _1fragema7">
                                                    <span class="cektnc9">
                                                        <span class="rermvf1 _1fragem7q _1fragem7s _1fragem15">Correo electrónico</span>
                                                    </span>
                                                </label>
                                                <div class="_7ozb2u4 _1fragemaf _1fragem1b _1fragem14 _1fragemat _1fragemap _1fragemb2 _1fragemb3 _7ozb2uc _7ozb2un _7ozb2up _7ozb2uj _7ozb2ug _1fragem12 _1fragemac _1fragema8">
                                                    <div class="_1fragem15 _1fragemah _1fragemaf" id="TextField32-description">El correo electrónico utilizado para iniciar sesión no se puede cambiar.</div>
                                                    <input id="TextField32" class="_7ozb2uu _1fragemaf _1fragemb4 _1fragem34 _1fragemab _7ozb2uv _7ozb2uz _1fragemat _1fragemap _1fragemb2 _7ozb2u16 _7ozb2u1n" type="email" disabled="" aria-describedby="TextField32-description" aria-labelledby="TextField32-label" value="enuar2110@gmail.com">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_1fragem15 _1fragemaf" aria-hidden="true">
                                            <span class="_19gi7yt0 _19gi7ytc _1fragem1i _19gi7yt7">El correo electrónico utilizado para iniciar sesión no se puede cambiar.</span>
                                        </div>
                                    </div>
                                    <div class="_1fragem17 _1fragemaf _1fragem37">
                                        <div class="_5uqybw2 _1fragem17 _1fragem9r _1fragem1o _1fragem25 _1fragem2 _1fragem6 _1fragem37">
                                            <div class="_1fragem17 _1fragemaf _1fragem38">
                                                <div class="_5uqybw2 _1fragem17 _1fragem9r _1fragem1o _1fragem25 _1fragem0 _1fragem4 _1fragem38">
                                                    <button type="button" class="QT4by eVFmT janiy mRJ8x" aria-label="Cancelar edición del perfil" onclick="ocultar('Portal6')">
                                                        <span class="AjwsM">Cancelar</span>
                                                    </button>
                                                    <button type="submit" class="QT4by rqC98 EbLsk VDIfJ janiy" aria-label="Guardar perfil">
                                                        <span class="AjwsM">Guardar</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="Portal7" style="opacity: 0; visibility: hidden;">
        <div class="_1fragem64 _1fragem6n _1fragem5l _1fragem76 _1fragem7p _1fragem7r _1fragem8l _1fragem92 _1fragem84 _1fragem9j _1fragemae _1fragemb9 _1fragem17 u2pext2">
            <div class="u2pextb _1fragem64 _1fragem6n _1fragem5l _1fragem76 _1fragemae _1fragemb8 _1fragem9v _1fragemax _1fragemap _1fragemaz u2pext3"></div>
            <button class="_1fragemae _1fragemac _1fragem9v" aria-hidden="true"></button>
            <div class="u2pextf _1fragem7q _1fragem7s _1fragembe _1fragem17 _1fragem1d _1fragem34 _1fragemat _1fragemaq _1fragemaz u2pext3" role="dialog" aria-modal="true" aria-label="Agregar dirección" tabindex="-1">
                <header class="u2pexth _1fragem8i _1fragem81 _1fragem9g _1fragem8z _1fragem17 _1fragem39 _1fragem4">
                    <div id="Modal14Title" class="_1fragem1g">
                        <div class="_1fragem15 _1fragem8i _1fragem8z _1fragem89 _1fragem9g _1fragemaf">
                            <div class="_1fragemaf _1fragem1b _1mrl40q3 _1fragem24 _1fragem2l _16s97g73 _16s97g75 _16s97g7b _16s97g7d" style="--_16s97g72: 1fr; --_16s97g74: minmax(0, 1fr); --_16s97g7a: minmax(0, 1fr) minmax(auto, max-content); --_16s97g7c: minmax(0, 1fr);">
                                <h3 class="_1fragemaf n8k95w2">Agregar dirección</h3>
                                <button type="button" class="u2pextl _1fragem8f _1fragem8w _1fragem7y _1fragem9d _1fragemad _1fragem6w _1fragem6d _1fragem15" aria-label="closeModal" onclick="ocultar('Portal7')">
                                    <span class="_1fragem34 _1fragem10 _1fragem9q _1fragem9p a8x1wu5 _1fragem15 a8x1wuj a8x1wum">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="a8x1wuo _1fragem15 _1fragem34 _1fragem9q _1fragem9p" focusable="false" aria-hidden="true">
                                            <path stroke-linecap="round" d="M2.8 2.8 7 7m4.2 4.2L7 7m0 0 4.2-4.2M7 7l-4.2 4.2"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="u2pextp _1fragem7p _1fragem7r _1fragem8q _1fragem81 _1fragem9g _1fragem8z">
                    <div class="_1fragem15 _1fragem8i _1fragem8z _1fragem81 _1fragem9g _1fragemaf">
                        <div class="_1ip0g651 _1fragem1b _1fragemaf _1fragem1o _1fragem25">
                            <form action="" method="POST" novalidate="" class="_1fragem16" id="Form7">
                                <div class="_1fragemaf">
                                    <div class="_1ip0g651 _1fragem1b _1fragemaf _1fragem1o _1fragem25">
                                        <div>
                                            <div class="_1fragemaf _1fragem17">
                                                <div class="_1mmswk95 _1fragemaf">
                                                    <input type="checkbox" id="Checkbox1" name="default" class="_1mmswk97 _1fragem40 _1fragem3w _1fragem44 _1fragem3s _1fragem4w _1fragem4t _1fragem4z _1fragem4q _1fragem5b _1fragem56 _1fragem5g _1fragem51 _1fragem13 _1fragem15 _1fragem34 _1fragem10 _1fragemat _1fragemao _1fragemaz _1mmswk9a _1mmswk9c">
                                                    <div class="_1mmswk9o _1fragemac _1fragem9v _1fragemad _1fragemao _1fragemb2 _1fragemat">
                                                        <span class="_1fragem34 _1fragem10 _1fragem9q _1fragem9p _1fragem15 a8x1wug a8x1wum">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="a8x1wuo _1fragem15 _1fragem34 _1fragem9q _1fragem9p" focusable="false" aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="m12.1 2.8-5.877 8.843a.35.35 0 0 1-.54.054L1.4 7.4"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                <label for="Checkbox1" class="_1mmswk9k _1fragem15 _1fragem9q _1fragem13 _1fragem9e">Esta es mi dirección predeterminada.</label>
                                            </div>
                                        </div>
                                        <div class="_1fragemaf _1fragem1b _1mrl40q2 _1fragem1o _1fragem25 _16s97g73 _16s97g75 _16s97g7b _16s97g7d" style="--_16s97g72: 1fr; --_16s97g74: minmax(auto, max-content); --_16s97g7a: minmax(0, 1fr); --_16s97g7c: minmax(auto, max-content);">
                                            <div class="vTXBW _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                                <div>
                                                    <div class="j2JE7">
                                                        <label class="QOQ2V NKh24" for="Select6">
                                                            <span class="KBYKh">
                                                                <span class="rermvf1 _1fragem7q _1fragem7s _1fragem15">País/región</span>
                                                            </span>
                                                        </label>
                                                        <select id="Select6" class="_b6uH RR8sg vYo81 RGaKd" autocomplete="billing country">
                                                            <option value="AF">Afganistán</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DE">Alemania</option>
                                                            <option value="AD">Andorra</option>
                                                            <option value="AO">Angola</option>
                                                            <option value="AI">Anguila</option>
                                                            <option value="AG">Antigua y Barbuda</option>
                                                            <option value="SA">Arabia Saudí</option>
                                                            <option value="DZ">Argelia</option>
                                                            <option value="AR">Argentina</option>
                                                            <option value="AM">Armenia</option>
                                                            <option value="AW">Aruba</option>
                                                            <option value="AU">Australia</option>
                                                            <option value="AT">Austria</option>
                                                            <option value="AZ">Azerbaiyán</option>
                                                            <option value="BS">Bahamas</option>
                                                            <option value="BD">Bangladés</option>
                                                            <option value="BB">Barbados</option>
                                                            <option value="BH">Baréin</option>
                                                            <option value="BE">Bélgica</option>
                                                            <option value="BZ">Belice</option>
                                                            <option value="BJ">Benín</option>
                                                            <option value="BM">Bermudas</option>
                                                            <option value="BY">Bielorrusia</option>
                                                            <option value="BO">Bolivia</option>
                                                            <option value="BA">Bosnia y Herzegovina</option>
                                                            <option value="BW">Botsuana</option>
                                                            <option value="BR">Brasil</option>
                                                            <option value="BN">Brunéi</option>
                                                            <option value="BG">Bulgaria</option>
                                                            <option value="BF">Burkina Faso</option>
                                                            <option value="BI">Burundi</option>
                                                            <option value="BT">Bután</option>
                                                            <option value="CV">Cabo Verde</option>
                                                            <option value="KH">Camboya</option>
                                                            <option value="CM">Camerún</option>
                                                            <option value="CA">Canadá</option>
                                                            <option value="BQ">Caribe neerlandés</option>
                                                            <option value="QA">Catar</option>
                                                            <option value="TD">Chad</option>
                                                            <option value="CZ">Chequia</option>
                                                            <option value="CL">Chile</option>
                                                            <option value="CN">China</option>
                                                            <option value="CY">Chipre</option>
                                                            <option value="VA">Ciudad del Vaticano</option>
                                                            <option value="CO">Colombia</option>
                                                            <option value="KM">Comoras</option>
                                                            <option value="CG">Congo</option>
                                                            <option value="KR">Corea del Sur</option>
                                                            <option value="CR">Costa Rica</option>
                                                            <option value="HR">Croacia</option>
                                                            <option value="CW">Curazao</option>
                                                            <option value="CI">Côte d’Ivoire</option>
                                                            <option value="DK">Dinamarca</option>
                                                            <option value="DM">Dominica</option>
                                                            <option value="EC">Ecuador</option>
                                                            <option value="EG">Egipto</option>
                                                            <option value="SV">El Salvador</option>
                                                            <option value="AE">Emiratos Árabes Unidos</option>
                                                            <option value="ER">Eritrea</option>
                                                            <option value="SK">Eslovaquia</option>
                                                            <option value="SI">Eslovenia</option>
                                                            <option value="ES">España</option>
                                                            <option value="US">Estados Unidos</option>
                                                            <option value="EE">Estonia</option>
                                                            <option value="SZ">Esuatini</option>
                                                            <option value="ET">Etiopía</option>
                                                            <option value="PH">Filipinas</option>
                                                            <option value="FI">Finlandia</option>
                                                            <option value="FJ">Fiyi</option>
                                                            <option value="FR">Francia</option>
                                                            <option value="GA">Gabón</option>
                                                            <option value="GM">Gambia</option>
                                                            <option value="GE">Georgia</option>
                                                            <option value="GH">Ghana</option>
                                                            <option value="GI">Gibraltar</option>
                                                            <option value="GD">Granada</option>
                                                            <option value="GR">Grecia</option>
                                                            <option value="GL">Groenlandia</option>
                                                            <option value="GP">Guadalupe</option>
                                                            <option value="GT">Guatemala</option>
                                                            <option value="GF">Guayana Francesa</option>
                                                            <option value="GG">Guernesey</option>
                                                            <option value="GN">Guinea</option>
                                                            <option value="GQ">Guinea Ecuatorial</option>
                                                            <option value="GW">Guinea-Bisáu</option>
                                                            <option value="GY">Guyana</option>
                                                            <option value="HT">Haití</option>
                                                            <option value="HN">Honduras</option>
                                                            <option value="HU">Hungría</option>
                                                            <option value="IN">India</option>
                                                            <option value="ID">Indonesia</option>
                                                            <option value="IQ">Irak</option>
                                                            <option value="IE">Irlanda</option>
                                                            <option value="NF">Isla Norfolk</option>
                                                            <option value="IM">Isla de Man</option>
                                                            <option value="CX">Isla de Navidad</option>
                                                            <option value="AC">Isla de la Ascensión</option>
                                                            <option value="IS">Islandia</option>
                                                            <option value="AX">Islas Aland</option>
                                                            <option value="KY">Islas Caimán</option>
                                                            <option value="CC">Islas Cocos</option>
                                                            <option value="CK">Islas Cook</option>
                                                            <option value="FO">Islas Feroe</option>
                                                            <option value="GS">Islas Georgia del Sur y Sandwich del Sur</option>
                                                            <option value="FK">Islas Malvinas</option>
                                                            <option value="PN">Islas Pitcairn</option>
                                                            <option value="SB">Islas Salomón</option>
                                                            <option value="TC">Islas Turcas y Caicos</option>
                                                            <option value="VG">Islas Vírgenes Británicas</option>
                                                            <option value="UM">Islas menores alejadas de EE. UU.</option>
                                                            <option value="IL">Israel</option>
                                                            <option value="IT">Italia</option>
                                                            <option value="JM">Jamaica</option>
                                                            <option value="JP">Japón</option>
                                                            <option value="JE">Jersey</option>
                                                            <option value="JO">Jordania</option>
                                                            <option value="KZ">Kazajistán</option>
                                                            <option value="KE">Kenia</option>
                                                            <option value="KG">Kirguistán</option>
                                                            <option value="KI">Kiribati</option>
                                                            <option value="XK">Kosovo</option>
                                                            <option value="KW">Kuwait</option>
                                                            <option value="LA">Laos</option>
                                                            <option value="LS">Lesoto</option>
                                                            <option value="LV">Letonia</option>
                                                            <option value="LB">Líbano</option>
                                                            <option value="LR">Liberia</option>
                                                            <option value="LY">Libia</option>
                                                            <option value="LI">Liechtenstein</option>
                                                            <option value="LT">Lituania</option>
                                                            <option value="LU">Luxemburgo</option>
                                                            <option value="MK">Macedonia del Norte</option>
                                                            <option value="MG">Madagascar</option>
                                                            <option value="MY">Malasia</option>
                                                            <option value="MW">Malaui</option>
                                                            <option value="MV">Maldivas</option>
                                                            <option value="ML">Mali</option>
                                                            <option value="MT">Malta</option>
                                                            <option value="MA">Marruecos</option>
                                                            <option value="MQ">Martinica</option>
                                                            <option value="MU">Mauricio</option>
                                                            <option value="MR">Mauritania</option>
                                                            <option value="YT">Mayotte</option>
                                                            <option value="MX">México</option>
                                                            <option value="MD">Moldavia</option>
                                                            <option value="MC">Mónaco</option>
                                                            <option value="MN">Mongolia</option>
                                                            <option value="ME">Montenegro</option>
                                                            <option value="MS">Montserrat</option>
                                                            <option value="MZ">Mozambique</option>
                                                            <option value="MM">Myanmar (Birmania)</option>
                                                            <option value="NA">Namibia</option>
                                                            <option value="NR">Nauru</option>
                                                            <option value="NP">Nepal</option>
                                                            <option value="NI">Nicaragua</option>
                                                            <option value="NE">Níger</option>
                                                            <option value="NG">Nigeria</option>
                                                            <option value="NU">Niue</option>
                                                            <option value="NO">Noruega</option>
                                                            <option value="NC">Nueva Caledonia</option>
                                                            <option value="NZ">Nueva Zelanda</option>
                                                            <option value="OM">Omán</option>
                                                            <option value="NL">Países Bajos</option>
                                                            <option value="PK">Pakistán</option>
                                                            <option value="PA">Panamá</option>
                                                            <option value="PG">Papúa Nueva Guinea</option>
                                                            <option value="PY">Paraguay</option>
                                                            <option value="PE">Perú</option>
                                                            <option value="PF">Polinesia Francesa</option>
                                                            <option value="PL">Polonia</option>
                                                            <option value="PT">Portugal</option>
                                                            <option value="HK">RAE de Hong Kong (China)</option>
                                                            <option value="MO">RAE de Macao (China)</option>
                                                            <option value="GB">Reino Unido</option>
                                                            <option value="CF">República Centroafricana</option>
                                                            <option value="CD">República Democrática del Congo</option>
                                                            <option value="DO">República Dominicana</option>
                                                            <option value="RE">Reunión</option>
                                                            <option value="RW">Ruanda</option>
                                                            <option value="RO">Rumanía</option>
                                                            <option value="RU">Rusia</option>
                                                            <option value="EH">Sáhara Occidental</option>
                                                            <option value="WS">Samoa</option>
                                                            <option value="BL">San Bartolomé</option>
                                                            <option value="KN">San Cristóbal y Nieves</option>
                                                            <option value="SM">San Marino</option>
                                                            <option value="MF">San Martín</option>
                                                            <option value="PM">San Pedro y Miquelón</option>
                                                            <option value="VC">San Vicente y las Granadinas</option>
                                                            <option value="SH">Santa Elena</option>
                                                            <option value="LC">Santa Lucía</option>
                                                            <option value="ST">Santo Tomé y Príncipe</option>
                                                            <option value="SN">Senegal</option>
                                                            <option value="RS">Serbia</option>
                                                            <option value="SC">Seychelles</option>
                                                            <option value="SL">Sierra Leona</option>
                                                            <option value="SG">Singapur</option>
                                                            <option value="SX">Sint Maarten</option>
                                                            <option value="SO">Somalia</option>
                                                            <option value="LK">Sri Lanka</option>
                                                            <option value="ZA">Sudáfrica</option>
                                                            <option value="SD">Sudán</option>
                                                            <option value="SS">Sudán del Sur</option>
                                                            <option value="SE">Suecia</option>
                                                            <option value="CH">Suiza</option>
                                                            <option value="SR">Surinam</option>
                                                            <option value="SJ">Svalbard y Jan Mayen</option>
                                                            <option value="TH">Tailandia</option>
                                                            <option value="TW">Taiwán</option>
                                                            <option value="TZ">Tanzania</option>
                                                            <option value="TJ">Tayikistán</option>
                                                            <option value="IO">Territorio Británico del Océano Índico</option>
                                                            <option value="TF">Territorios Australes Franceses</option>
                                                            <option value="PS">Territorios Palestinos</option>
                                                            <option value="TL">Timor-Leste</option>
                                                            <option value="TG">Togo</option>
                                                            <option value="TK">Tokelau</option>
                                                            <option value="TO">Tonga</option>
                                                            <option value="TT">Trinidad y Tobago</option>
                                                            <option value="TA">Tristán de Acuña</option>
                                                            <option value="TN">Túnez</option>
                                                            <option value="TM">Turkmenistán</option>
                                                            <option value="TR">Turquía</option>
                                                            <option value="TV">Tuvalu</option>
                                                            <option value="UA">Ucrania</option>
                                                            <option value="UG">Uganda</option>
                                                            <option value="UY">Uruguay</option>
                                                            <option value="UZ">Uzbekistán</option>
                                                            <option value="VU">Vanuatu</option>
                                                            <option value="VE">Venezuela</option>
                                                            <option value="VN">Vietnam</option>
                                                            <option value="WF">Wallis y Futuna</option>
                                                            <option value="YE">Yemen</option>
                                                            <option value="DJ">Yibuti</option>
                                                            <option value="ZM">Zambia</option>
                                                            <option value="ZW">Zimbabue</option>
                                                        </select>
                                                        <div class="TUEJq">
                                                            <span class="_1fragem34 _1fragem10 _1fragem9q _1fragem9p _1fragem15 a8x1wug a8x1wum">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="a8x1wuo _1fragem15 _1fragem34 _1fragem9q _1fragem9p" focusable="false" aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m11.9 5.6-4.653 4.653a.35.35 0 0 1-.495 0L2.1 5.6"></path>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_1fragemaf _1fragem1b _1mrl40q2 _1fragem1o _1fragem25 _16s97g73 _16s97g75 _16s97g7b _16s97g7d" style="--_16s97g72: 1fr; --_16s97g74: minmax(auto, max-content); --_16s97g7a: minmax(0, 1fr) minmax(0, 1fr); --_16s97g7c: minmax(auto, max-content);">
                                            <div class="_7ozb2u2 _1fragem1r _1fragem28 _1fragemaf _1fragem1b _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                                <div class="_1fragemaf">
                                                    <label id="TextField33-label" for="TextField33" class="cektnc3 _1fragemad _1fragemac _1fragem9v _1fragemb4 _1fragemat _1fragemap _1fragemb2">
                                                        <span class="cektnc9">
                                                            <span class="rermvf1 _1fragem7q _1fragem7s _1fragem15">Nombre</span>
                                                        </span>
                                                    </label>
                                                    <div class="_7ozb2u4 _1fragemaf _1fragem1b _1fragem14 _1fragemat _1fragemap _1fragemb2 _1fragemb3 _7ozb2uc _7ozb2un _7ozb2up _7ozb2uj">
                                                        <input id="TextField33" placeholder="Nombre" class="_7ozb2uu _1fragemaf _1fragemb4 _1fragem34 _1fragemab _7ozb2uv _7ozb2u15 _7ozb2u1n" type="text" aria-labelledby="TextField33-label" autocomplete="billing given-name" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_7ozb2u2 _1fragem1r _1fragem28 _1fragemaf _1fragem1b _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                                <div class="_1fragemaf">
                                                    <label id="TextField34-label" for="TextField34" class="cektnc3 _1fragemad _1fragemac _1fragem9v _1fragemb4 _1fragemat _1fragemap _1fragemb2">
                                                        <span class="cektnc9">
                                                            <span class="rermvf1 _1fragem7q _1fragem7s _1fragem15">Apellido</span>
                                                        </span>
                                                    </label>
                                                    <div class="_7ozb2u4 _1fragemaf _1fragem1b _1fragem14 _1fragemat _1fragemap _1fragemb2 _1fragemb3 _7ozb2uc _7ozb2un _7ozb2up _7ozb2uj">
                                                        <input id="TextField34" placeholder="Apellido" class="_7ozb2uu _1fragemaf _1fragemb4 _1fragem34 _1fragemab _7ozb2uv _7ozb2u15 _7ozb2u1n" type="text" aria-labelledby="TextField34-label" autocomplete="billing family-name" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_1fragemaf _1fragem1b _1mrl40q2 _1fragem1o _1fragem25 _16s97g73 _16s97g75 _16s97g7b _16s97g7d" style="--_16s97g72: 1fr; --_16s97g74: minmax(auto, max-content); --_16s97g7a: minmax(0, 1fr); --_16s97g7c: minmax(auto, max-content);">
                                            <div class="_7ozb2u2 _1fragem1r _1fragem28 _1fragemaf _1fragem1b _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                                <div class="_1fragemaf">
                                                    <label id="TextField35-label" for="TextField35" class="cektnc3 _1fragemad _1fragemac _1fragem9v _1fragemb4 _1fragemat _1fragemap _1fragemb2">
                                                        <span class="cektnc9">
                                                            <span class="rermvf1 _1fragem7q _1fragem7s _1fragem15">Empresa</span>
                                                        </span>
                                                    </label>
                                                    <div class="_7ozb2u4 _1fragemaf _1fragem1b _1fragem14 _1fragemat _1fragemap _1fragemb2 _1fragemb3 _7ozb2uc _7ozb2un _7ozb2up _7ozb2uj">
                                                        <input id="TextField35" placeholder="Empresa" class="_7ozb2uu _1fragemaf _1fragemb4 _1fragem34 _1fragemab _7ozb2uv _7ozb2u15 _7ozb2u1n" type="text" aria-labelledby="TextField35-label" autocomplete="billing organization" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_1fragemaf _1fragem1b _1mrl40q2 _1fragem1o _1fragem25 _16s97g73 _16s97g75 _16s97g7b _16s97g7d" style="--_16s97g72: 1fr; --_16s97g74: minmax(auto, max-content); --_16s97g7a: minmax(0, 1fr); --_16s97g7c: minmax(auto, max-content);">
                                            <div>
                                                <div class="_7ozb2u2 _1fragem1r _1fragem28 _1fragemaf _1fragem1b _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                                    <div class="_1fragemaf">
                                                        <label id="Autocomplete3-label" for="Autocomplete3" class="cektnc3 _1fragemad _1fragemac _1fragem9v _1fragemb4 _1fragemat _1fragemap _1fragemb2">
                                                            <span class="cektnc9">
                                                                <span class="rermvf1 _1fragem7q _1fragem7s _1fragem15">Dirección</span>
                                                            </span>
                                                        </label>
                                                        <div class="_7ozb2u4 _1fragemaf _1fragem1b _1fragem14 _1fragemat _1fragemap _1fragemb2 _1fragemb3 _7ozb2uc _7ozb2un _7ozb2up _7ozb2uj">
                                                            <input id="Autocomplete3" placeholder="Dirección" class="_7ozb2uu _1fragemaf _1fragemb4 _1fragem34 _1fragemab _7ozb2uv _7ozb2u15 _7ozb2u1n" type="text" aria-autocomplete="list" aria-controls="Autocomplete3-options" aria-owns="Autocomplete3-options" aria-expanded="false" aria-labelledby="Autocomplete3-label" aria-haspopup="listbox" role="combobox" autocomplete="billing address-line1" autocorrect="off" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_1fragemaf _1fragem1b _1mrl40q2 _1fragem1o _1fragem25 _16s97g73 _16s97g75 _16s97g7b _16s97g7d" style="--_16s97g72: 1fr; --_16s97g74: minmax(auto, max-content); --_16s97g7a: minmax(0, 1fr); --_16s97g7c: minmax(auto, max-content);">
                                            <div class="_7ozb2u2 _1fragem1r _1fragem28 _1fragemaf _1fragem1b _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                                <div class="_1fragemaf">
                                                    <label id="TextField36-label" for="TextField36" class="cektnc3 _1fragemad _1fragemac _1fragem9v _1fragemb4 _1fragemat _1fragemap _1fragemb2">
                                                        <span class="cektnc9">
                                                            <span class="rermvf1 _1fragem7q _1fragem7s _1fragem15">Apartamento, local, etc.</span>
                                                        </span>
                                                    </label>
                                                    <div class="_7ozb2u4 _1fragemaf _1fragem1b _1fragem14 _1fragemat _1fragemap _1fragemb2 _1fragemb3 _7ozb2uc _7ozb2un _7ozb2up _7ozb2uj">
                                                        <input id="TextField36" placeholder="Apartamento, local, etc." class="_7ozb2uu _1fragemaf _1fragemb4 _1fragem34 _1fragemab _7ozb2uv _7ozb2u15 _7ozb2u1n" type="text" aria-labelledby="TextField36-label" autocomplete="billing address-line2" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_1fragemaf _1fragem1b _1mrl40q2 _1fragem1o _1fragem25 _16s97g73 _16s97g75 _16s97g7b _16s97g7d" style="--_16s97g72: 1fr; --_16s97g74: minmax(auto, max-content); --_16s97g7a: minmax(0, 1fr) minmax(0, 1fr) minmax(0, 1fr); --_16s97g7c: minmax(auto, max-content);">
                                            <div class="_7ozb2u2 _1fragem1r _1fragem28 _1fragemaf _1fragem1b _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                                <div class="_1fragemaf">
                                                    <label id="TextField37-label" for="TextField37" class="cektnc3 _1fragemad _1fragemac _1fragem9v _1fragemb4 _1fragemat _1fragemap _1fragemb2">
                                                        <span class="cektnc9">
                                                            <span class="rermvf1 _1fragem7q _1fragem7s _1fragem15">Ciudad</span>
                                                        </span>
                                                    </label>
                                                    <div class="_7ozb2u4 _1fragemaf _1fragem1b _1fragem14 _1fragemat _1fragemap _1fragemb2 _1fragemb3 _7ozb2uc _7ozb2un _7ozb2up _7ozb2uj">
                                                        <input id="TextField37" placeholder="Ciudad" class="_7ozb2uu _1fragemaf _1fragemb4 _1fragem34 _1fragemab _7ozb2uv _7ozb2u15 _7ozb2u1n" type="text" aria-labelledby="TextField37-label" autocomplete="billing address-level2" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vTXBW _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                                <div>
                                                    <div class="j2JE7">
                                                        <label class="QOQ2V NKh24" for="Select7">
                                                            <span class="KBYKh">
                                                                <span class="rermvf1 _1fragem7q _1fragem7s _1fragem15">Provincia</span>
                                                            </span>
                                                        </label>
                                                        <select id="Select7" class="_b6uH RR8sg vYo81 RGaKd" autocomplete="billing address-level1">
                                                            <option value="DC">Bogotá</option>
                                                            <option value="AMA">Amazonas</option>
                                                            <option value="ANT">Antioquia</option>
                                                            <option value="ARA">Arauca</option>
                                                            <option value="ATL">Atlántico</option>
                                                            <option value="BOL">Bolívar</option>
                                                            <option value="BOY">Boyacá</option>
                                                            <option value="CAL">Caldas</option>
                                                            <option value="CAQ">Caquetá</option>
                                                            <option value="CAS">Casanare</option>
                                                            <option value="CAU">Cauca</option>
                                                            <option value="CES">Cesar</option>
                                                            <option value="CHO">Chocó</option>
                                                            <option value="COR">Córdoba</option>
                                                            <option value="CUN">Cundinamarca</option>
                                                            <option value="GUA">Guainía</option>
                                                            <option value="GUV">Guaviare</option>
                                                            <option value="HUI">Huila</option>
                                                            <option value="LAG">La Guajira</option>
                                                            <option value="MAG">Magdalena</option>
                                                            <option value="MET">Meta</option>
                                                            <option value="NAR">Nariño</option>
                                                            <option value="NSA">Norte de Santander</option>
                                                            <option value="PUT">Putumayo</option>
                                                            <option value="QUI">Quindío</option>
                                                            <option value="RIS">Risaralda</option>
                                                            <option value="SAP">Archipiélago de San Andrés, Providencia y Santa Catalina</option>
                                                            <option value="SAN">Santander</option>
                                                            <option value="SUC">Sucre</option>
                                                            <option value="TOL">Tolima</option>
                                                            <option value="VAC">Valle del Cauca</option>
                                                            <option value="VAU">Vaupés</option>
                                                            <option value="VID">Vichada</option>
                                                        </select>
                                                        <div class="TUEJq">
                                                            <span class="_1fragem34 _1fragem10 _1fragem9q _1fragem9p _1fragem15 a8x1wug a8x1wum">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="a8x1wuo _1fragem15 _1fragem34 _1fragem9q _1fragem9p" focusable="false" aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m11.9 5.6-4.653 4.653a.35.35 0 0 1-.495 0L2.1 5.6"></path>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_7ozb2u2 _1fragem1r _1fragem28 _1fragemaf _1fragem1b _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                                <div class="_1fragemaf">
                                                    <label id="TextField38-label" for="TextField38" class="cektnc3 _1fragemad _1fragemac _1fragem9v _1fragemb4 _1fragemat _1fragemap _1fragemb2">
                                                        <span class="cektnc9">
                                                            <span class="rermvf1 _1fragem7q _1fragem7s _1fragem15">Código postal</span>
                                                        </span>
                                                    </label>
                                                    <div class="_7ozb2u4 _1fragemaf _1fragem1b _1fragem14 _1fragemat _1fragemap _1fragemb2 _1fragemb3 _7ozb2uc _7ozb2un _7ozb2up _7ozb2uj">
                                                        <input id="TextField38" placeholder="Código postal" class="_7ozb2uu _1fragemaf _1fragemb4 _1fragem34 _1fragemab _7ozb2uv _7ozb2u15 _7ozb2u1n" type="text" aria-labelledby="TextField38-label" autocomplete="billing postal-code" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_1fragemaf _1fragem1b _1mrl40q2 _1fragem1o _1fragem25 _16s97g73 _16s97g75 _16s97g7b _16s97g7d" style="--_16s97g72: 1fr; --_16s97g74: minmax(auto, max-content); --_16s97g7a: minmax(0, 1fr); --_16s97g7c: minmax(auto, max-content);">
                                            <div class="_7ozb2u2 _1fragem1r _1fragem28 _1fragemaf _1fragem1b _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                                <div class="_1fragemaf">
                                                    <label id="TextField39-label" for="TextField39" class="cektnc3 _1fragemad _1fragemac _1fragem9v _1fragemb4 _1fragemat _1fragemap _1fragemb2 cektnc6 _1fragema7">
                                                        <span class="cektnc9">
                                                            <span class="rermvf1 _1fragem7q _1fragem7s _1fragem15">Teléfono</span>
                                                        </span>
                                                    </label>
                                                    <div class="_7ozb2u4 _1fragemaf _1fragem1b _1fragem14 _1fragemat _1fragemap _1fragemb2 _1fragemb3 _7ozb2uc _7ozb2un _7ozb2up _7ozb2uj">
                                                        <input id="TextField39" class="_7ozb2uu _1fragemaf _1fragemb4 _1fragem34 _1fragemab _7ozb2uv _7ozb2uz _1fragemat _1fragemap _1fragemb2 _1fragem4a _1fragem4k _7ozb2u14 _7ozb2u1n" type="tel" aria-labelledby="TextField39-label" autocomplete="billing tel" value="+57">
                                                        <div class="_1fragemaf _1fragemb4 _1fragem9 _1fragem11 _7ozb2u1k">
                                                            <div class="_1fragem17 _1fragemaf _1fragem38">
                                                                <div class="_5uqybw2 _1fragem17 _1fragem9r _1fragem1o _1fragem25 _1fragem0 _1fragem4 _1fragem38">
                                                                    <div class="_1fragem15 _1fragemaf B70r7 sgJs+">
                                                                        <div class="_1fragem17 _1fragemaf _1fragem8f _1fragem8w _1fragem7y _1fragem9d _1fragem38 _16s97g722">
                                                                            <div class="_5uqybw2 _1fragem17 _1fragem9r _1fragem1t _1fragem2a _1fragem0 _1fragem4 _1fragem38">
                                                                                <div class="_1fragem15 _1fragemaf Ou41p">
                                                                                    <img alt="CO" class="_1fragem15 _1fragem9p _1fragem9q" src="https://cdn.shopify.com/shopifycloud/customer-account-web/production/assets/27d656.svg" role="img">
                                                                                </div>
                                                                                <span class="_1fragem34 _1fragem10 _1fragem9q _1fragem9p a8x1wu5 _1fragem15 a8x1wug a8x1wul">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="a8x1wuo _1fragem15 _1fragem34 _1fragem9q _1fragem9p" focusable="false" aria-hidden="true">
                                                                                        <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m11.303 6.198-4.056 4.055a.35.35 0 0 1-.495 0L2.697 6.198a.35.35 0 0 1 .248-.598h8.11a.35.35 0 0 1 .248.598Z"></path>
                                                                                    </svg>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <select aria-label="País/región CO" class="CFZhz">
                                                                            <option value="AF">Afganistán (+93)</option>
                                                                            <option value="AL">Albania (+355)</option>
                                                                            <option value="DE">Alemania (+49)</option>
                                                                            <option value="AD">Andorra (+376)</option>
                                                                            <option value="AO">Angola (+244)</option>
                                                                            <option value="AI">Anguila (+1)</option>
                                                                            <option value="AG">Antigua y Barbuda (+1)</option>
                                                                            <option value="SA">Arabia Saudí (+966)</option>
                                                                            <option value="DZ">Argelia (+213)</option>
                                                                            <option value="AR">Argentina (+54)</option>
                                                                            <option value="AM">Armenia (+374)</option>
                                                                            <option value="AW">Aruba (+297)</option>
                                                                            <option value="AU">Australia (+61)</option>
                                                                            <option value="AT">Austria (+43)</option>
                                                                            <option value="AZ">Azerbaiyán (+994)</option>
                                                                            <option value="BS">Bahamas (+1)</option>
                                                                            <option value="BD">Bangladés (+880)</option>
                                                                            <option value="BB">Barbados (+1)</option>
                                                                            <option value="BH">Baréin (+973)</option>
                                                                            <option value="BE">Bélgica (+32)</option>
                                                                            <option value="BZ">Belice (+501)</option>
                                                                            <option value="BJ">Benín (+229)</option>
                                                                            <option value="BM">Bermudas (+1)</option>
                                                                            <option value="BY">Bielorrusia (+375)</option>
                                                                            <option value="BO">Bolivia (+591)</option>
                                                                            <option value="BA">Bosnia y Herzegovina (+387)</option>
                                                                            <option value="BW">Botsuana (+267)</option>
                                                                            <option value="BR">Brasil (+55)</option>
                                                                            <option value="BN">Brunéi (+673)</option>
                                                                            <option value="BG">Bulgaria (+359)</option>
                                                                            <option value="BF">Burkina Faso (+226)</option>
                                                                            <option value="BI">Burundi (+257)</option>
                                                                            <option value="BT">Bután (+975)</option>
                                                                            <option value="CV">Cabo Verde (+238)</option>
                                                                            <option value="KH">Camboya (+855)</option>
                                                                            <option value="CM">Camerún (+237)</option>
                                                                            <option value="CA">Canadá (+1)</option>
                                                                            <option value="BQ">Caribe neerlandés (+599)</option>
                                                                            <option value="QA">Catar (+974)</option>
                                                                            <option value="TD">Chad (+235)</option>
                                                                            <option value="CZ">Chequia (+420)</option>
                                                                            <option value="CL">Chile (+56)</option>
                                                                            <option value="CN">China (+86)</option>
                                                                            <option value="CY">Chipre (+357)</option>
                                                                            <option value="VA">Ciudad del Vaticano (+39)</option>
                                                                            <option value="CO">Colombia (+57)</option>
                                                                            <option value="KM">Comoras (+269)</option>
                                                                            <option value="CG">Congo (+242)</option>
                                                                            <option value="KR">Corea del Sur (+82)</option>
                                                                            <option value="CR">Costa Rica (+506)</option>
                                                                            <option value="HR">Croacia (+385)</option>
                                                                            <option value="CW">Curazao (+599)</option>
                                                                            <option value="CI">Côte d’Ivoire (+225)</option>
                                                                            <option value="DK">Dinamarca (+45)</option>
                                                                            <option value="DM">Dominica (+1)</option>
                                                                            <option value="EC">Ecuador (+593)</option>
                                                                            <option value="EG">Egipto (+20)</option>
                                                                            <option value="SV">El Salvador (+503)</option>
                                                                            <option value="AE">Emiratos Árabes Unidos (+971)</option>
                                                                            <option value="ER">Eritrea (+291)</option>
                                                                            <option value="SK">Eslovaquia (+421)</option>
                                                                            <option value="SI">Eslovenia (+386)</option>
                                                                            <option value="ES">España (+34)</option>
                                                                            <option value="US">Estados Unidos (+1)</option>
                                                                            <option value="EE">Estonia (+372)</option>
                                                                            <option value="SZ">Esuatini (+268)</option>
                                                                            <option value="ET">Etiopía (+251)</option>
                                                                            <option value="PH">Filipinas (+63)</option>
                                                                            <option value="FI">Finlandia (+358)</option>
                                                                            <option value="FJ">Fiyi (+679)</option>
                                                                            <option value="FR">Francia (+33)</option>
                                                                            <option value="GA">Gabón (+241)</option>
                                                                            <option value="GM">Gambia (+220)</option>
                                                                            <option value="GE">Georgia (+995)</option>
                                                                            <option value="GH">Ghana (+233)</option>
                                                                            <option value="GI">Gibraltar (+350)</option>
                                                                            <option value="GD">Granada (+1)</option>
                                                                            <option value="GR">Grecia (+30)</option>
                                                                            <option value="GL">Groenlandia (+299)</option>
                                                                            <option value="GP">Guadalupe (+590)</option>
                                                                            <option value="GT">Guatemala (+502)</option>
                                                                            <option value="GF">Guayana Francesa (+594)</option>
                                                                            <option value="GG">Guernesey (+44)</option>
                                                                            <option value="GN">Guinea (+224)</option>
                                                                            <option value="GQ">Guinea Ecuatorial (+240)</option>
                                                                            <option value="GW">Guinea-Bisáu (+245)</option>
                                                                            <option value="GY">Guyana (+592)</option>
                                                                            <option value="HT">Haití (+509)</option>
                                                                            <option value="HN">Honduras (+504)</option>
                                                                            <option value="HU">Hungría (+36)</option>
                                                                            <option value="IN">India (+91)</option>
                                                                            <option value="ID">Indonesia (+62)</option>
                                                                            <option value="IQ">Irak (+964)</option>
                                                                            <option value="IE">Irlanda (+353)</option>
                                                                            <option value="NF">Isla Norfolk (+672)</option>
                                                                            <option value="IM">Isla de Man (+44)</option>
                                                                            <option value="CX">Isla de Navidad (+61)</option>
                                                                            <option value="AC">Isla de la Ascensión (+247)</option>
                                                                            <option value="IS">Islandia (+354)</option>
                                                                            <option value="AX">Islas Aland (+358)</option>
                                                                            <option value="KY">Islas Caimán (+1)</option>
                                                                            <option value="CC">Islas Cocos (+891)</option>
                                                                            <option value="CK">Islas Cook (+682)</option>
                                                                            <option value="FO">Islas Feroe (+298)</option>
                                                                            <option value="GS">Islas Georgia del Sur y Sandwich del Sur (+500)</option>
                                                                            <option value="FK">Islas Malvinas (+500)</option>
                                                                            <option value="PN">Islas Pitcairn (+64)</option>
                                                                            <option value="SB">Islas Salomón (+677)</option>
                                                                            <option value="TC">Islas Turcas y Caicos (+1)</option>
                                                                            <option value="VG">Islas Vírgenes Británicas (+1)</option>
                                                                            <option value="UM">Islas menores alejadas de EE. UU. (+1)</option>
                                                                            <option value="IL">Israel (+972)</option>
                                                                            <option value="IT">Italia (+39)</option>
                                                                            <option value="JM">Jamaica (+1)</option>
                                                                            <option value="JP">Japón (+81)</option>
                                                                            <option value="JE">Jersey (+44)</option>
                                                                            <option value="JO">Jordania (+962)</option>
                                                                            <option value="KZ">Kazajistán (+7)</option>
                                                                            <option value="KE">Kenia (+254)</option>
                                                                            <option value="KG">Kirguistán (+996)</option>
                                                                            <option value="KI">Kiribati (+686)</option>
                                                                            <option value="XK">Kosovo (+383)</option>
                                                                            <option value="KW">Kuwait (+965)</option>
                                                                            <option value="LA">Laos (+856)</option>
                                                                            <option value="LS">Lesoto (+266)</option>
                                                                            <option value="LV">Letonia (+371)</option>
                                                                            <option value="LB">Líbano (+961)</option>
                                                                            <option value="LR">Liberia (+231)</option>
                                                                            <option value="LY">Libia (+218)</option>
                                                                            <option value="LI">Liechtenstein (+423)</option>
                                                                            <option value="LT">Lituania (+370)</option>
                                                                            <option value="LU">Luxemburgo (+352)</option>
                                                                            <option value="MK">Macedonia del Norte (+389)</option>
                                                                            <option value="MG">Madagascar (+261)</option>
                                                                            <option value="MY">Malasia (+60)</option>
                                                                            <option value="MW">Malaui (+265)</option>
                                                                            <option value="MV">Maldivas (+960)</option>
                                                                            <option value="ML">Mali (+223)</option>
                                                                            <option value="MT">Malta (+356)</option>
                                                                            <option value="MA">Marruecos (+212)</option>
                                                                            <option value="MQ">Martinica (+596)</option>
                                                                            <option value="MU">Mauricio (+230)</option>
                                                                            <option value="MR">Mauritania (+222)</option>
                                                                            <option value="YT">Mayotte (+262)</option>
                                                                            <option value="MX">México (+52)</option>
                                                                            <option value="MD">Moldavia (+373)</option>
                                                                            <option value="MC">Mónaco (+377)</option>
                                                                            <option value="MN">Mongolia (+976)</option>
                                                                            <option value="ME">Montenegro (+382)</option>
                                                                            <option value="MS">Montserrat (+1)</option>
                                                                            <option value="MZ">Mozambique (+258)</option>
                                                                            <option value="MM">Myanmar (Birmania) (+95)</option>
                                                                            <option value="NA">Namibia (+264)</option>
                                                                            <option value="NR">Nauru (+674)</option>
                                                                            <option value="NP">Nepal (+977)</option>
                                                                            <option value="NI">Nicaragua (+505)</option>
                                                                            <option value="NE">Níger (+227)</option>
                                                                            <option value="NG">Nigeria (+234)</option>
                                                                            <option value="NU">Niue (+683)</option>
                                                                            <option value="NO">Noruega (+47)</option>
                                                                            <option value="NC">Nueva Caledonia (+687)</option>
                                                                            <option value="NZ">Nueva Zelanda (+64)</option>
                                                                            <option value="OM">Omán (+968)</option>
                                                                            <option value="NL">Países Bajos (+31)</option>
                                                                            <option value="PK">Pakistán (+92)</option>
                                                                            <option value="PA">Panamá (+507)</option>
                                                                            <option value="PG">Papúa Nueva Guinea (+675)</option>
                                                                            <option value="PY">Paraguay (+595)</option>
                                                                            <option value="PE">Perú (+51)</option>
                                                                            <option value="PF">Polinesia Francesa (+689)</option>
                                                                            <option value="PL">Polonia (+48)</option>
                                                                            <option value="PT">Portugal (+351)</option>
                                                                            <option value="HK">RAE de Hong Kong (China) (+852)</option>
                                                                            <option value="MO">RAE de Macao (China) (+853)</option>
                                                                            <option value="GB">Reino Unido (+44)</option>
                                                                            <option value="CF">República Centroafricana (+236)</option>
                                                                            <option value="CD">República Democrática del Congo (+243)</option>
                                                                            <option value="DO">República Dominicana (+1)</option>
                                                                            <option value="RE">Reunión (+262)</option>
                                                                            <option value="RW">Ruanda (+250)</option>
                                                                            <option value="RO">Rumanía (+40)</option>
                                                                            <option value="RU">Rusia (+7)</option>
                                                                            <option value="EH">Sáhara Occidental (+212)</option>
                                                                            <option value="WS">Samoa (+685)</option>
                                                                            <option value="BL">San Bartolomé (+590)</option>
                                                                            <option value="KN">San Cristóbal y Nieves (+1)</option>
                                                                            <option value="SM">San Marino (+378)</option>
                                                                            <option value="MF">San Martín (+590)</option>
                                                                            <option value="PM">San Pedro y Miquelón (+508)</option>
                                                                            <option value="VC">San Vicente y las Granadinas (+1)</option>
                                                                            <option value="SH">Santa Elena (+290)</option>
                                                                            <option value="LC">Santa Lucía (+1)</option>
                                                                            <option value="ST">Santo Tomé y Príncipe (+239)</option>
                                                                            <option value="SN">Senegal (+221)</option>
                                                                            <option value="RS">Serbia (+381)</option>
                                                                            <option value="SC">Seychelles (+248)</option>
                                                                            <option value="SL">Sierra Leona (+232)</option>
                                                                            <option value="SG">Singapur (+65)</option>
                                                                            <option value="SX">Sint Maarten (+1)</option>
                                                                            <option value="SO">Somalia (+252)</option>
                                                                            <option value="LK">Sri Lanka (+94)</option>
                                                                            <option value="ZA">Sudáfrica (+27)</option>
                                                                            <option value="SD">Sudán (+249)</option>
                                                                            <option value="SS">Sudán del Sur (+211)</option>
                                                                            <option value="SE">Suecia (+46)</option>
                                                                            <option value="CH">Suiza (+41)</option>
                                                                            <option value="SR">Surinam (+597)</option>
                                                                            <option value="SJ">Svalbard y Jan Mayen (+47)</option>
                                                                            <option value="TH">Tailandia (+66)</option>
                                                                            <option value="TW">Taiwán (+886)</option>
                                                                            <option value="TZ">Tanzania (+255)</option>
                                                                            <option value="TJ">Tayikistán (+992)</option>
                                                                            <option value="IO">Territorio Británico del Océano Índico (+246)</option>
                                                                            <option value="TF">Territorios Australes Franceses (+262)</option>
                                                                            <option value="PS">Territorios Palestinos (+970)</option>
                                                                            <option value="TL">Timor-Leste (+670)</option>
                                                                            <option value="TG">Togo (+228)</option>
                                                                            <option value="TK">Tokelau (+690)</option>
                                                                            <option value="TO">Tonga (+676)</option>
                                                                            <option value="TT">Trinidad y Tobago (+1)</option>
                                                                            <option value="TA">Tristán de Acuña (+2908)</option>
                                                                            <option value="TN">Túnez (+216)</option>
                                                                            <option value="TM">Turkmenistán (+993)</option>
                                                                            <option value="TR">Turquía (+90)</option>
                                                                            <option value="TV">Tuvalu (+688)</option>
                                                                            <option value="UA">Ucrania (+380)</option>
                                                                            <option value="UG">Uganda (+256)</option>
                                                                            <option value="UY">Uruguay (+598)</option>
                                                                            <option value="UZ">Uzbekistán (+998)</option>
                                                                            <option value="VU">Vanuatu (+678)</option>
                                                                            <option value="VE">Venezuela (+58)</option>
                                                                            <option value="VN">Vietnam (+84)</option>
                                                                            <option value="WF">Wallis y Futuna (+681)</option>
                                                                            <option value="YE">Yemen (+967)</option>
                                                                            <option value="DJ">Yibuti (+253)</option>
                                                                            <option value="ZM">Zambia (+260)</option>
                                                                            <option value="ZW">Zimbabue (+263)</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_1fragemaf _1fragem1b _1mrl40q3 _1fragem24 _1fragem2l _1fragem37 _1fragem3b _16s97g73 _16s97g75 _16s97g7b _16s97g7d" style="--_16s97g72: 1fr; --_16s97g74: minmax(0, 1fr); --_16s97g7a: minmax(0, 1fr); --_16s97g7c: minmax(0, 1fr);">
                                            <div class="_1fragemaf _1fragem1b _1mrl40q3 _1fragem24 _1fragem2l _1fragem37 _1fragem3b _16s97g73 _16s97g75 _16s97g7b _16s97g7d" style="--_16s97g72: minmax(0, 1fr); --_16s97g74: minmax(0, 1fr); --_16s97g7a: minmax(0, 1fr); --_16s97g7c: minmax(0, 1fr);">
                                                <div class="_1fragem17 _1fragemaf _1fragem38">
                                                    <div class="_5uqybw2 _1fragem17 _1fragem9r _1fragem1o _1fragem25 _1fragem0 _1fragem4 _1fragem38">
                                                        <button type="button" class="QT4by eVFmT janiy adBMs" aria-label="Cancelar adición de dirección" onclick="ocultar('Portal7')">
                                                            <span class="AjwsM">Cancelar</span>
                                                        </button>
                                                        <button type="submit" class="QT4by rqC98 EbLsk VDIfJ janiy" aria-label="Guardar dirección">
                                                            <span class="AjwsM">Guardar</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="Portal8" style="opacity: 0; visibility: hidden;">
        <div class="_1fragem64 _1fragem6n _1fragem5l _1fragem76 _1fragem7p _1fragem7r _1fragem8l _1fragem92 _1fragem84 _1fragem9j _1fragemae _1fragemb9 _1fragem17 u2pext2">
            <div class="u2pextb _1fragem64 _1fragem6n _1fragem5l _1fragem76 _1fragemae _1fragemb8 _1fragem9v _1fragemax _1fragemap _1fragemaz u2pext3"></div>
            <button class="_1fragemae _1fragemac _1fragem9v" aria-hidden="true"></button>
            <div class="u2pextf _1fragem7q _1fragem7s _1fragembe _1fragem17 _1fragem1d _1fragem34 _1fragemat _1fragemaq _1fragemaz u2pext3" role="dialog" aria-modal="true" aria-label="Editar dirección" tabindex="-1">
                <header class="u2pexth _1fragem8i _1fragem81 _1fragem9g _1fragem8z _1fragem17 _1fragem39 _1fragem4">
                    <div id="Modal15Title" class="_1fragem1g">
                        <div class="_1fragem15 _1fragem8i _1fragem8z _1fragem89 _1fragem9g _1fragemaf">
                            <div class="_1fragemaf _1fragem1b _1mrl40q3 _1fragem24 _1fragem2l _16s97g73 _16s97g75 _16s97g7b _16s97g7d" style="--_16s97g72: 1fr; --_16s97g74: minmax(0, 1fr); --_16s97g7a: minmax(0, 1fr) minmax(auto, max-content); --_16s97g7c: minmax(0, 1fr);">
                                <h3 class="_1fragemaf n8k95w2">Editar dirección</h3>
                                <button type="button" class="u2pextl _1fragem8f _1fragem8w _1fragem7y _1fragem9d _1fragemad _1fragem6w _1fragem6d _1fragem15" aria-label="closeModal" onclick="ocultar('Portal8')">
                                    <span class="_1fragem34 _1fragem10 _1fragem9q _1fragem9p a8x1wu5 _1fragem15 a8x1wuj a8x1wum">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="a8x1wuo _1fragem15 _1fragem34 _1fragem9q _1fragem9p" focusable="false" aria-hidden="true">
                                            <path stroke-linecap="round" d="M2.8 2.8 7 7m4.2 4.2L7 7m0 0 4.2-4.2M7 7l-4.2 4.2"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="u2pextp _1fragem7p _1fragem7r _1fragem8q _1fragem81 _1fragem9g _1fragem8z">
                    <div class="_1fragem15 _1fragem8i _1fragem8z _1fragem81 _1fragem9g _1fragemaf">
                        <div class="_1ip0g651 _1fragem1b _1fragemaf _1fragem1o _1fragem25">
                            <form action="" method="POST" novalidate="" class="_1fragem16" id="Form8">
                                <div class="_1fragemaf">
                                    <div class="_1ip0g651 _1fragem1b _1fragemaf _1fragem1o _1fragem25">
                                        <div class="_1fragemaf _1fragem1b _1mrl40q2 _1fragem1o _1fragem25 _16s97g73 _16s97g75 _16s97g7b _16s97g7d" style="--_16s97g72: 1fr; --_16s97g74: minmax(auto, max-content); --_16s97g7a: minmax(0, 1fr); --_16s97g7c: minmax(auto, max-content);">
                                            <div class="vTXBW _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                                <div>
                                                    <div class="j2JE7">
                                                        <label class="QOQ2V NKh24" for="Select8">
                                                            <span class="KBYKh">
                                                                <span class="rermvf1 _1fragem7q _1fragem7s _1fragem15">País/región</span>
                                                            </span>
                                                        </label>
                                                        <select id="Select8" class="_b6uH RR8sg vYo81 RGaKd" autocomplete="country">
                                                            <option value="AF">Afganistán</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DE">Alemania</option>
                                                            <option value="AD">Andorra</option>
                                                            <option value="AO">Angola</option>
                                                            <option value="AI">Anguila</option>
                                                            <option value="AG">Antigua y Barbuda</option>
                                                            <option value="SA">Arabia Saudí</option>
                                                            <option value="DZ">Argelia</option>
                                                            <option value="AR">Argentina</option>
                                                            <option value="AM">Armenia</option>
                                                            <option value="AW">Aruba</option>
                                                            <option value="AU">Australia</option>
                                                            <option value="AT">Austria</option>
                                                            <option value="AZ">Azerbaiyán</option>
                                                            <option value="BS">Bahamas</option>
                                                            <option value="BD">Bangladés</option>
                                                            <option value="BB">Barbados</option>
                                                            <option value="BH">Baréin</option>
                                                            <option value="BE">Bélgica</option>
                                                            <option value="BZ">Belice</option>
                                                            <option value="BJ">Benín</option>
                                                            <option value="BM">Bermudas</option>
                                                            <option value="BY">Bielorrusia</option>
                                                            <option value="BO">Bolivia</option>
                                                            <option value="BA">Bosnia y Herzegovina</option>
                                                            <option value="BW">Botsuana</option>
                                                            <option value="BR">Brasil</option>
                                                            <option value="BN">Brunéi</option>
                                                            <option value="BG">Bulgaria</option>
                                                            <option value="BF">Burkina Faso</option>
                                                            <option value="BI">Burundi</option>
                                                            <option value="BT">Bután</option>
                                                            <option value="CV">Cabo Verde</option>
                                                            <option value="KH">Camboya</option>
                                                            <option value="CM">Camerún</option>
                                                            <option value="CA">Canadá</option>
                                                            <option value="BQ">Caribe neerlandés</option>
                                                            <option value="QA">Catar</option>
                                                            <option value="TD">Chad</option>
                                                            <option value="CZ">Chequia</option>
                                                            <option value="CL">Chile</option>
                                                            <option value="CN">China</option>
                                                            <option value="CY">Chipre</option>
                                                            <option value="VA">Ciudad del Vaticano</option>
                                                            <option value="CO">Colombia</option>
                                                            <option value="KM">Comoras</option>
                                                            <option value="CG">Congo</option>
                                                            <option value="KR">Corea del Sur</option>
                                                            <option value="CR">Costa Rica</option>
                                                            <option value="HR">Croacia</option>
                                                            <option value="CW">Curazao</option>
                                                            <option value="CI">Côte d’Ivoire</option>
                                                            <option value="DK">Dinamarca</option>
                                                            <option value="DM">Dominica</option>
                                                            <option value="EC">Ecuador</option>
                                                            <option value="EG">Egipto</option>
                                                            <option value="SV">El Salvador</option>
                                                            <option value="AE">Emiratos Árabes Unidos</option>
                                                            <option value="ER">Eritrea</option>
                                                            <option value="SK">Eslovaquia</option>
                                                            <option value="SI">Eslovenia</option>
                                                            <option value="ES">España</option>
                                                            <option value="US">Estados Unidos</option>
                                                            <option value="EE">Estonia</option>
                                                            <option value="SZ">Esuatini</option>
                                                            <option value="ET">Etiopía</option>
                                                            <option value="PH">Filipinas</option>
                                                            <option value="FI">Finlandia</option>
                                                            <option value="FJ">Fiyi</option>
                                                            <option value="FR">Francia</option>
                                                            <option value="GA">Gabón</option>
                                                            <option value="GM">Gambia</option>
                                                            <option value="GE">Georgia</option>
                                                            <option value="GH">Ghana</option>
                                                            <option value="GI">Gibraltar</option>
                                                            <option value="GD">Granada</option>
                                                            <option value="GR">Grecia</option>
                                                            <option value="GL">Groenlandia</option>
                                                            <option value="GP">Guadalupe</option>
                                                            <option value="GT">Guatemala</option>
                                                            <option value="GF">Guayana Francesa</option>
                                                            <option value="GG">Guernesey</option>
                                                            <option value="GN">Guinea</option>
                                                            <option value="GQ">Guinea Ecuatorial</option>
                                                            <option value="GW">Guinea-Bisáu</option>
                                                            <option value="GY">Guyana</option>
                                                            <option value="HT">Haití</option>
                                                            <option value="HN">Honduras</option>
                                                            <option value="HU">Hungría</option>
                                                            <option value="IN">India</option>
                                                            <option value="ID">Indonesia</option>
                                                            <option value="IQ">Irak</option>
                                                            <option value="IE">Irlanda</option>
                                                            <option value="NF">Isla Norfolk</option>
                                                            <option value="IM">Isla de Man</option>
                                                            <option value="CX">Isla de Navidad</option>
                                                            <option value="AC">Isla de la Ascensión</option>
                                                            <option value="IS">Islandia</option>
                                                            <option value="AX">Islas Aland</option>
                                                            <option value="KY">Islas Caimán</option>
                                                            <option value="CC">Islas Cocos</option>
                                                            <option value="CK">Islas Cook</option>
                                                            <option value="FO">Islas Feroe</option>
                                                            <option value="GS">Islas Georgia del Sur y Sandwich del Sur</option>
                                                            <option value="FK">Islas Malvinas</option>
                                                            <option value="PN">Islas Pitcairn</option>
                                                            <option value="SB">Islas Salomón</option>
                                                            <option value="TC">Islas Turcas y Caicos</option>
                                                            <option value="VG">Islas Vírgenes Británicas</option>
                                                            <option value="UM">Islas menores alejadas de EE. UU.</option>
                                                            <option value="IL">Israel</option>
                                                            <option value="IT">Italia</option>
                                                            <option value="JM">Jamaica</option>
                                                            <option value="JP">Japón</option>
                                                            <option value="JE">Jersey</option>
                                                            <option value="JO">Jordania</option>
                                                            <option value="KZ">Kazajistán</option>
                                                            <option value="KE">Kenia</option>
                                                            <option value="KG">Kirguistán</option>
                                                            <option value="KI">Kiribati</option>
                                                            <option value="XK">Kosovo</option>
                                                            <option value="KW">Kuwait</option>
                                                            <option value="LA">Laos</option>
                                                            <option value="LS">Lesoto</option>
                                                            <option value="LV">Letonia</option>
                                                            <option value="LB">Líbano</option>
                                                            <option value="LR">Liberia</option>
                                                            <option value="LY">Libia</option>
                                                            <option value="LI">Liechtenstein</option>
                                                            <option value="LT">Lituania</option>
                                                            <option value="LU">Luxemburgo</option>
                                                            <option value="MK">Macedonia del Norte</option>
                                                            <option value="MG">Madagascar</option>
                                                            <option value="MY">Malasia</option>
                                                            <option value="MW">Malaui</option>
                                                            <option value="MV">Maldivas</option>
                                                            <option value="ML">Mali</option>
                                                            <option value="MT">Malta</option>
                                                            <option value="MA">Marruecos</option>
                                                            <option value="MQ">Martinica</option>
                                                            <option value="MU">Mauricio</option>
                                                            <option value="MR">Mauritania</option>
                                                            <option value="YT">Mayotte</option>
                                                            <option value="MX">México</option>
                                                            <option value="MD">Moldavia</option>
                                                            <option value="MC">Mónaco</option>
                                                            <option value="MN">Mongolia</option>
                                                            <option value="ME">Montenegro</option>
                                                            <option value="MS">Montserrat</option>
                                                            <option value="MZ">Mozambique</option>
                                                            <option value="MM">Myanmar (Birmania)</option>
                                                            <option value="NA">Namibia</option>
                                                            <option value="NR">Nauru</option>
                                                            <option value="NP">Nepal</option>
                                                            <option value="NI">Nicaragua</option>
                                                            <option value="NE">Níger</option>
                                                            <option value="NG">Nigeria</option>
                                                            <option value="NU">Niue</option>
                                                            <option value="NO">Noruega</option>
                                                            <option value="NC">Nueva Caledonia</option>
                                                            <option value="NZ">Nueva Zelanda</option>
                                                            <option value="OM">Omán</option>
                                                            <option value="NL">Países Bajos</option>
                                                            <option value="PK">Pakistán</option>
                                                            <option value="PA">Panamá</option>
                                                            <option value="PG">Papúa Nueva Guinea</option>
                                                            <option value="PY">Paraguay</option>
                                                            <option value="PE">Perú</option>
                                                            <option value="PF">Polinesia Francesa</option>
                                                            <option value="PL">Polonia</option>
                                                            <option value="PT">Portugal</option>
                                                            <option value="HK">RAE de Hong Kong (China)</option>
                                                            <option value="MO">RAE de Macao (China)</option>
                                                            <option value="GB">Reino Unido</option>
                                                            <option value="CF">República Centroafricana</option>
                                                            <option value="CD">República Democrática del Congo</option>
                                                            <option value="DO">República Dominicana</option>
                                                            <option value="RE">Reunión</option>
                                                            <option value="RW">Ruanda</option>
                                                            <option value="RO">Rumanía</option>
                                                            <option value="RU">Rusia</option>
                                                            <option value="EH">Sáhara Occidental</option>
                                                            <option value="WS">Samoa</option>
                                                            <option value="BL">San Bartolomé</option>
                                                            <option value="KN">San Cristóbal y Nieves</option>
                                                            <option value="SM">San Marino</option>
                                                            <option value="MF">San Martín</option>
                                                            <option value="PM">San Pedro y Miquelón</option>
                                                            <option value="VC">San Vicente y las Granadinas</option>
                                                            <option value="SH">Santa Elena</option>
                                                            <option value="LC">Santa Lucía</option>
                                                            <option value="ST">Santo Tomé y Príncipe</option>
                                                            <option value="SN">Senegal</option>
                                                            <option value="RS">Serbia</option>
                                                            <option value="SC">Seychelles</option>
                                                            <option value="SL">Sierra Leona</option>
                                                            <option value="SG">Singapur</option>
                                                            <option value="SX">Sint Maarten</option>
                                                            <option value="SO">Somalia</option>
                                                            <option value="LK">Sri Lanka</option>
                                                            <option value="ZA">Sudáfrica</option>
                                                            <option value="SD">Sudán</option>
                                                            <option value="SS">Sudán del Sur</option>
                                                            <option value="SE">Suecia</option>
                                                            <option value="CH">Suiza</option>
                                                            <option value="SR">Surinam</option>
                                                            <option value="SJ">Svalbard y Jan Mayen</option>
                                                            <option value="TH">Tailandia</option>
                                                            <option value="TW">Taiwán</option>
                                                            <option value="TZ">Tanzania</option>
                                                            <option value="TJ">Tayikistán</option>
                                                            <option value="IO">Territorio Británico del Océano Índico</option>
                                                            <option value="TF">Territorios Australes Franceses</option>
                                                            <option value="PS">Territorios Palestinos</option>
                                                            <option value="TL">Timor-Leste</option>
                                                            <option value="TG">Togo</option>
                                                            <option value="TK">Tokelau</option>
                                                            <option value="TO">Tonga</option>
                                                            <option value="TT">Trinidad y Tobago</option>
                                                            <option value="TA">Tristán de Acuña</option>
                                                            <option value="TN">Túnez</option>
                                                            <option value="TM">Turkmenistán</option>
                                                            <option value="TR">Turquía</option>
                                                            <option value="TV">Tuvalu</option>
                                                            <option value="UA">Ucrania</option>
                                                            <option value="UG">Uganda</option>
                                                            <option value="UY">Uruguay</option>
                                                            <option value="UZ">Uzbekistán</option>
                                                            <option value="VU">Vanuatu</option>
                                                            <option value="VE">Venezuela</option>
                                                            <option value="VN">Vietnam</option>
                                                            <option value="WF">Wallis y Futuna</option>
                                                            <option value="YE">Yemen</option>
                                                            <option value="DJ">Yibuti</option>
                                                            <option value="ZM">Zambia</option>
                                                            <option value="ZW">Zimbabue</option>
                                                        </select>
                                                        <div class="TUEJq">
                                                            <span class="_1fragem34 _1fragem10 _1fragem9q _1fragem9p _1fragem15 a8x1wug a8x1wum">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="a8x1wuo _1fragem15 _1fragem34 _1fragem9q _1fragem9p" focusable="false" aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m11.9 5.6-4.653 4.653a.35.35 0 0 1-.495 0L2.1 5.6"></path>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_1fragemaf _1fragem1b _1mrl40q2 _1fragem1o _1fragem25 _16s97g73 _16s97g75 _16s97g7b _16s97g7d" style="--_16s97g72: 1fr; --_16s97g74: minmax(auto, max-content); --_16s97g7a: minmax(0, 1fr) minmax(0, 1fr); --_16s97g7c: minmax(auto, max-content);">
                                            <div class="_7ozb2u2 _1fragem1r _1fragem28 _1fragemaf _1fragem1b _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                                <div class="_1fragemaf">
                                                    <label id="TextField40-label" for="TextField40" class="cektnc3 _1fragemad _1fragemac _1fragem9v _1fragemb4 _1fragemat _1fragemap _1fragemb2 cektnc6 _1fragema7">
                                                        <span class="cektnc9">
                                                            <span class="rermvf1 _1fragem7q _1fragem7s _1fragem15">Nombre</span>
                                                        </span>
                                                    </label>
                                                    <div class="_7ozb2u4 _1fragemaf _1fragem1b _1fragem14 _1fragemat _1fragemap _1fragemb2 _1fragemb3 _7ozb2uc _7ozb2un _7ozb2up _7ozb2uj">
                                                        <input id="TextField40" class="_7ozb2uu _1fragemaf _1fragemb4 _1fragem34 _1fragemab _7ozb2uv _7ozb2uz _1fragemat _1fragemap _1fragemb2 _7ozb2u15 _7ozb2u1n" type="text" aria-labelledby="TextField40-label" autocomplete="given-name" value="Enuar Dvd">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_7ozb2u2 _1fragem1r _1fragem28 _1fragemaf _1fragem1b _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                                <div class="_1fragemaf">
                                                    <label id="TextField41-label" for="TextField41" class="cektnc3 _1fragemad _1fragemac _1fragem9v _1fragemb4 _1fragemat _1fragemap _1fragemb2 cektnc6 _1fragema7">
                                                        <span class="cektnc9">
                                                            <span class="rermvf1 _1fragem7q _1fragem7s _1fragem15">Apellido</span>
                                                        </span>
                                                    </label>
                                                    <div class="_7ozb2u4 _1fragemaf _1fragem1b _1fragem14 _1fragemat _1fragemap _1fragemb2 _1fragemb3 _7ozb2uc _7ozb2un _7ozb2up _7ozb2uj">
                                                        <input id="TextField41" class="_7ozb2uu _1fragemaf _1fragemb4 _1fragem34 _1fragemab _7ozb2uv _7ozb2uz _1fragemat _1fragemap _1fragemb2 _7ozb2u15 _7ozb2u1n" type="text" aria-labelledby="TextField41-label" autocomplete="family-name" value="Lara Rjs">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_1fragemaf _1fragem1b _1mrl40q2 _1fragem1o _1fragem25 _16s97g73 _16s97g75 _16s97g7b _16s97g7d" style="--_16s97g72: 1fr; --_16s97g74: minmax(auto, max-content); --_16s97g7a: minmax(0, 1fr); --_16s97g7c: minmax(auto, max-content);">
                                            <div class="_7ozb2u2 _1fragem1r _1fragem28 _1fragemaf _1fragem1b _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                                <div class="_1fragemaf">
                                                    <label id="TextField42-label" for="TextField42" class="cektnc3 _1fragemad _1fragemac _1fragem9v _1fragemb4 _1fragemat _1fragemap _1fragemb2">
                                                        <span class="cektnc9">
                                                            <span class="rermvf1 _1fragem7q _1fragem7s _1fragem15">Empresa</span>
                                                        </span>
                                                    </label>
                                                    <div class="_7ozb2u4 _1fragemaf _1fragem1b _1fragem14 _1fragemat _1fragemap _1fragemb2 _1fragemb3 _7ozb2uc _7ozb2un _7ozb2up _7ozb2uj">
                                                        <input id="TextField42" placeholder="Empresa" class="_7ozb2uu _1fragemaf _1fragemb4 _1fragem34 _1fragemab _7ozb2uv _7ozb2u15 _7ozb2u1n" type="text" aria-labelledby="TextField42-label" autocomplete="organization" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_1fragemaf _1fragem1b _1mrl40q2 _1fragem1o _1fragem25 _16s97g73 _16s97g75 _16s97g7b _16s97g7d" style="--_16s97g72: 1fr; --_16s97g74: minmax(auto, max-content); --_16s97g7a: minmax(0, 1fr); --_16s97g7c: minmax(auto, max-content);">
                                            <div>
                                                <div class="_7ozb2u2 _1fragem1r _1fragem28 _1fragemaf _1fragem1b _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                                    <div class="_1fragemaf">
                                                        <label id="Autocomplete4-label" for="Autocomplete4" class="cektnc3 _1fragemad _1fragemac _1fragem9v _1fragemb4 _1fragemat _1fragemap _1fragemb2">
                                                            <span class="cektnc9">
                                                                <span class="rermvf1 _1fragem7q _1fragem7s _1fragem15">Dirección</span>
                                                            </span>
                                                        </label>
                                                        <div class="_7ozb2u4 _1fragemaf _1fragem1b _1fragem14 _1fragemat _1fragemap _1fragemb2 _1fragemb3 _7ozb2uc _7ozb2un _7ozb2up _7ozb2uj">
                                                            <input id="Autocomplete4" placeholder="Dirección" class="_7ozb2uu _1fragemaf _1fragemb4 _1fragem34 _1fragemab _7ozb2uv _7ozb2u15 _7ozb2u1n" type="text" aria-autocomplete="list" aria-controls="Autocomplete4-options" aria-owns="Autocomplete4-options" aria-expanded="false" aria-labelledby="Autocomplete4-label" aria-haspopup="listbox" role="combobox" autocomplete="address-line1" autocorrect="off" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_1fragemaf _1fragem1b _1mrl40q2 _1fragem1o _1fragem25 _16s97g73 _16s97g75 _16s97g7b _16s97g7d" style="--_16s97g72: 1fr; --_16s97g74: minmax(auto, max-content); --_16s97g7a: minmax(0, 1fr); --_16s97g7c: minmax(auto, max-content);">
                                            <div class="_7ozb2u2 _1fragem1r _1fragem28 _1fragemaf _1fragem1b _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                                <div class="_1fragemaf">
                                                    <label id="TextField43-label" for="TextField43" class="cektnc3 _1fragemad _1fragemac _1fragem9v _1fragemb4 _1fragemat _1fragemap _1fragemb2">
                                                        <span class="cektnc9">
                                                            <span class="rermvf1 _1fragem7q _1fragem7s _1fragem15">Apartamento, local, etc.</span>
                                                        </span>
                                                    </label>
                                                    <div class="_7ozb2u4 _1fragemaf _1fragem1b _1fragem14 _1fragemat _1fragemap _1fragemb2 _1fragemb3 _7ozb2uc _7ozb2un _7ozb2up _7ozb2uj">
                                                        <input id="TextField43" placeholder="Apartamento, local, etc." class="_7ozb2uu _1fragemaf _1fragemb4 _1fragem34 _1fragemab _7ozb2uv _7ozb2u15 _7ozb2u1n" type="text" aria-labelledby="TextField43-label" autocomplete="address-line2" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_1fragemaf _1fragem1b _1mrl40q2 _1fragem1o _1fragem25 _16s97g73 _16s97g75 _16s97g7b _16s97g7d" style="--_16s97g72: 1fr; --_16s97g74: minmax(auto, max-content); --_16s97g7a: minmax(0, 1fr) minmax(0, 1fr) minmax(0, 1fr); --_16s97g7c: minmax(auto, max-content);">
                                            <div class="_7ozb2u2 _1fragem1r _1fragem28 _1fragemaf _1fragem1b _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                                <div class="_1fragemaf">
                                                    <label id="TextField44-label" for="TextField44" class="cektnc3 _1fragemad _1fragemac _1fragem9v _1fragemb4 _1fragemat _1fragemap _1fragemb2">
                                                        <span class="cektnc9">
                                                            <span class="rermvf1 _1fragem7q _1fragem7s _1fragem15">Ciudad</span>
                                                        </span>
                                                    </label>
                                                    <div class="_7ozb2u4 _1fragemaf _1fragem1b _1fragem14 _1fragemat _1fragemap _1fragemb2 _1fragemb3 _7ozb2uc _7ozb2un _7ozb2up _7ozb2uj">
                                                        <input id="TextField44" placeholder="Ciudad" class="_7ozb2uu _1fragemaf _1fragemb4 _1fragem34 _1fragemab _7ozb2uv _7ozb2u15 _7ozb2u1n" type="text" aria-labelledby="TextField44-label" autocomplete="address-level2" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vTXBW _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                                <div>
                                                    <div class="j2JE7">
                                                        <label class="QOQ2V NKh24" for="Select9">
                                                            <span class="KBYKh">
                                                                <span class="rermvf1 _1fragem7q _1fragem7s _1fragem15">Provincia</span>
                                                            </span>
                                                        </label>
                                                        <select id="Select9" class="_b6uH RR8sg vYo81 RGaKd" autocomplete="address-level1">
                                                            <option value="DC">Bogotá</option>
                                                            <option value="AMA">Amazonas</option>
                                                            <option value="ANT">Antioquia</option>
                                                            <option value="ARA">Arauca</option>
                                                            <option value="ATL">Atlántico</option>
                                                            <option value="BOL">Bolívar</option>
                                                            <option value="BOY">Boyacá</option>
                                                            <option value="CAL">Caldas</option>
                                                            <option value="CAQ">Caquetá</option>
                                                            <option value="CAS">Casanare</option>
                                                            <option value="CAU">Cauca</option>
                                                            <option value="CES">Cesar</option>
                                                            <option value="CHO">Chocó</option>
                                                            <option value="COR">Córdoba</option>
                                                            <option value="CUN">Cundinamarca</option>
                                                            <option value="GUA">Guainía</option>
                                                            <option value="GUV">Guaviare</option>
                                                            <option value="HUI">Huila</option>
                                                            <option value="LAG">La Guajira</option>
                                                            <option value="MAG">Magdalena</option>
                                                            <option value="MET">Meta</option>
                                                            <option value="NAR">Nariño</option>
                                                            <option value="NSA">Norte de Santander</option>
                                                            <option value="PUT">Putumayo</option>
                                                            <option value="QUI">Quindío</option>
                                                            <option value="RIS">Risaralda</option>
                                                            <option value="SAP">Archipiélago de San Andrés, Providencia y Santa Catalina</option>
                                                            <option value="SAN">Santander</option>
                                                            <option value="SUC">Sucre</option>
                                                            <option value="TOL">Tolima</option>
                                                            <option value="VAC">Valle del Cauca</option>
                                                            <option value="VAU">Vaupés</option>
                                                            <option value="VID">Vichada</option>
                                                        </select>
                                                        <div class="TUEJq">
                                                            <span class="_1fragem34 _1fragem10 _1fragem9q _1fragem9p _1fragem15 a8x1wug a8x1wum">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="a8x1wuo _1fragem15 _1fragem34 _1fragem9q _1fragem9p" focusable="false" aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m11.9 5.6-4.653 4.653a.35.35 0 0 1-.495 0L2.1 5.6"></path>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_7ozb2u2 _1fragem1r _1fragem28 _1fragemaf _1fragem1b _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                                <div class="_1fragemaf">
                                                    <label id="TextField45-label" for="TextField45" class="cektnc3 _1fragemad _1fragemac _1fragem9v _1fragemb4 _1fragemat _1fragemap _1fragemb2">
                                                        <span class="cektnc9">
                                                            <span class="rermvf1 _1fragem7q _1fragem7s _1fragem15">Código postal</span>
                                                        </span>
                                                    </label>
                                                    <div class="_7ozb2u4 _1fragemaf _1fragem1b _1fragem14 _1fragemat _1fragemap _1fragemb2 _1fragemb3 _7ozb2uc _7ozb2un _7ozb2up _7ozb2uj">
                                                        <input id="TextField45" placeholder="Código postal" class="_7ozb2uu _1fragemaf _1fragemb4 _1fragem34 _1fragemab _7ozb2uv _7ozb2u15 _7ozb2u1n" type="text" aria-labelledby="TextField45-label" autocomplete="postal-code" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_1fragemaf _1fragem1b _1mrl40q2 _1fragem1o _1fragem25 _16s97g73 _16s97g75 _16s97g7b _16s97g7d" style="--_16s97g72: 1fr; --_16s97g74: minmax(auto, max-content); --_16s97g7a: minmax(0, 1fr); --_16s97g7c: minmax(auto, max-content);">
                                            <div class="_7ozb2u2 _1fragem1r _1fragem28 _1fragemaf _1fragem1b _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                                <div class="_1fragemaf">
                                                    <label id="TextField46-label" for="TextField46" class="cektnc3 _1fragemad _1fragemac _1fragem9v _1fragemb4 _1fragemat _1fragemap _1fragemb2 cektnc6 _1fragema7">
                                                        <span class="cektnc9">
                                                            <span class="rermvf1 _1fragem7q _1fragem7s _1fragem15">Teléfono</span>
                                                        </span>
                                                    </label>
                                                    <div class="_7ozb2u4 _1fragemaf _1fragem1b _1fragem14 _1fragemat _1fragemap _1fragemb2 _1fragemb3 _7ozb2uc _7ozb2un _7ozb2up _7ozb2uj">
                                                        <input id="TextField46" class="_7ozb2uu _1fragemaf _1fragemb4 _1fragem34 _1fragemab _7ozb2uv _7ozb2uz _1fragemat _1fragemap _1fragemb2 _1fragem4a _1fragem4k _7ozb2u14 _7ozb2u1n" type="tel" aria-labelledby="TextField46-label" autocomplete="tel" value="+57">
                                                        <div class="_1fragemaf _1fragemb4 _1fragem9 _1fragem11 _7ozb2u1k">
                                                            <div class="_1fragem17 _1fragemaf _1fragem38">
                                                                <div class="_5uqybw2 _1fragem17 _1fragem9r _1fragem1o _1fragem25 _1fragem0 _1fragem4 _1fragem38">
                                                                    <div class="_1fragem15 _1fragemaf B70r7 sgJs+">
                                                                        <div class="_1fragem17 _1fragemaf _1fragem8f _1fragem8w _1fragem7y _1fragem9d _1fragem38 _16s97g722">
                                                                            <div class="_5uqybw2 _1fragem17 _1fragem9r _1fragem1t _1fragem2a _1fragem0 _1fragem4 _1fragem38">
                                                                                <div class="_1fragem15 _1fragemaf Ou41p">
                                                                                    <img alt="CO" class="_1fragem15 _1fragem9p _1fragem9q" src="https://cdn.shopify.com/shopifycloud/customer-account-web/production/assets/27d656.svg" role="img">
                                                                                </div>
                                                                                <span class="_1fragem34 _1fragem10 _1fragem9q _1fragem9p a8x1wu5 _1fragem15 a8x1wug a8x1wul">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="a8x1wuo _1fragem15 _1fragem34 _1fragem9q _1fragem9p" focusable="false" aria-hidden="true">
                                                                                        <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m11.303 6.198-4.056 4.055a.35.35 0 0 1-.495 0L2.697 6.198a.35.35 0 0 1 .248-.598h8.11a.35.35 0 0 1 .248.598Z"></path>
                                                                                    </svg>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <select aria-label="País/región CO" class="CFZhz">
                                                                            <option value="AF">Afganistán (+93)</option>
                                                                            <option value="AL">Albania (+355)</option>
                                                                            <option value="DE">Alemania (+49)</option>
                                                                            <option value="AD">Andorra (+376)</option>
                                                                            <option value="AO">Angola (+244)</option>
                                                                            <option value="AI">Anguila (+1)</option>
                                                                            <option value="AG">Antigua y Barbuda (+1)</option>
                                                                            <option value="SA">Arabia Saudí (+966)</option>
                                                                            <option value="DZ">Argelia (+213)</option>
                                                                            <option value="AR">Argentina (+54)</option>
                                                                            <option value="AM">Armenia (+374)</option>
                                                                            <option value="AW">Aruba (+297)</option>
                                                                            <option value="AU">Australia (+61)</option>
                                                                            <option value="AT">Austria (+43)</option>
                                                                            <option value="AZ">Azerbaiyán (+994)</option>
                                                                            <option value="BS">Bahamas (+1)</option>
                                                                            <option value="BD">Bangladés (+880)</option>
                                                                            <option value="BB">Barbados (+1)</option>
                                                                            <option value="BH">Baréin (+973)</option>
                                                                            <option value="BE">Bélgica (+32)</option>
                                                                            <option value="BZ">Belice (+501)</option>
                                                                            <option value="BJ">Benín (+229)</option>
                                                                            <option value="BM">Bermudas (+1)</option>
                                                                            <option value="BY">Bielorrusia (+375)</option>
                                                                            <option value="BO">Bolivia (+591)</option>
                                                                            <option value="BA">Bosnia y Herzegovina (+387)</option>
                                                                            <option value="BW">Botsuana (+267)</option>
                                                                            <option value="BR">Brasil (+55)</option>
                                                                            <option value="BN">Brunéi (+673)</option>
                                                                            <option value="BG">Bulgaria (+359)</option>
                                                                            <option value="BF">Burkina Faso (+226)</option>
                                                                            <option value="BI">Burundi (+257)</option>
                                                                            <option value="BT">Bután (+975)</option>
                                                                            <option value="CV">Cabo Verde (+238)</option>
                                                                            <option value="KH">Camboya (+855)</option>
                                                                            <option value="CM">Camerún (+237)</option>
                                                                            <option value="CA">Canadá (+1)</option>
                                                                            <option value="BQ">Caribe neerlandés (+599)</option>
                                                                            <option value="QA">Catar (+974)</option>
                                                                            <option value="TD">Chad (+235)</option>
                                                                            <option value="CZ">Chequia (+420)</option>
                                                                            <option value="CL">Chile (+56)</option>
                                                                            <option value="CN">China (+86)</option>
                                                                            <option value="CY">Chipre (+357)</option>
                                                                            <option value="VA">Ciudad del Vaticano (+39)</option>
                                                                            <option value="CO">Colombia (+57)</option>
                                                                            <option value="KM">Comoras (+269)</option>
                                                                            <option value="CG">Congo (+242)</option>
                                                                            <option value="KR">Corea del Sur (+82)</option>
                                                                            <option value="CR">Costa Rica (+506)</option>
                                                                            <option value="HR">Croacia (+385)</option>
                                                                            <option value="CW">Curazao (+599)</option>
                                                                            <option value="CI">Côte d’Ivoire (+225)</option>
                                                                            <option value="DK">Dinamarca (+45)</option>
                                                                            <option value="DM">Dominica (+1)</option>
                                                                            <option value="EC">Ecuador (+593)</option>
                                                                            <option value="EG">Egipto (+20)</option>
                                                                            <option value="SV">El Salvador (+503)</option>
                                                                            <option value="AE">Emiratos Árabes Unidos (+971)</option>
                                                                            <option value="ER">Eritrea (+291)</option>
                                                                            <option value="SK">Eslovaquia (+421)</option>
                                                                            <option value="SI">Eslovenia (+386)</option>
                                                                            <option value="ES">España (+34)</option>
                                                                            <option value="US">Estados Unidos (+1)</option>
                                                                            <option value="EE">Estonia (+372)</option>
                                                                            <option value="SZ">Esuatini (+268)</option>
                                                                            <option value="ET">Etiopía (+251)</option>
                                                                            <option value="PH">Filipinas (+63)</option>
                                                                            <option value="FI">Finlandia (+358)</option>
                                                                            <option value="FJ">Fiyi (+679)</option>
                                                                            <option value="FR">Francia (+33)</option>
                                                                            <option value="GA">Gabón (+241)</option>
                                                                            <option value="GM">Gambia (+220)</option>
                                                                            <option value="GE">Georgia (+995)</option>
                                                                            <option value="GH">Ghana (+233)</option>
                                                                            <option value="GI">Gibraltar (+350)</option>
                                                                            <option value="GD">Granada (+1)</option>
                                                                            <option value="GR">Grecia (+30)</option>
                                                                            <option value="GL">Groenlandia (+299)</option>
                                                                            <option value="GP">Guadalupe (+590)</option>
                                                                            <option value="GT">Guatemala (+502)</option>
                                                                            <option value="GF">Guayana Francesa (+594)</option>
                                                                            <option value="GG">Guernesey (+44)</option>
                                                                            <option value="GN">Guinea (+224)</option>
                                                                            <option value="GQ">Guinea Ecuatorial (+240)</option>
                                                                            <option value="GW">Guinea-Bisáu (+245)</option>
                                                                            <option value="GY">Guyana (+592)</option>
                                                                            <option value="HT">Haití (+509)</option>
                                                                            <option value="HN">Honduras (+504)</option>
                                                                            <option value="HU">Hungría (+36)</option>
                                                                            <option value="IN">India (+91)</option>
                                                                            <option value="ID">Indonesia (+62)</option>
                                                                            <option value="IQ">Irak (+964)</option>
                                                                            <option value="IE">Irlanda (+353)</option>
                                                                            <option value="NF">Isla Norfolk (+672)</option>
                                                                            <option value="IM">Isla de Man (+44)</option>
                                                                            <option value="CX">Isla de Navidad (+61)</option>
                                                                            <option value="AC">Isla de la Ascensión (+247)</option>
                                                                            <option value="IS">Islandia (+354)</option>
                                                                            <option value="AX">Islas Aland (+358)</option>
                                                                            <option value="KY">Islas Caimán (+1)</option>
                                                                            <option value="CC">Islas Cocos (+891)</option>
                                                                            <option value="CK">Islas Cook (+682)</option>
                                                                            <option value="FO">Islas Feroe (+298)</option>
                                                                            <option value="GS">Islas Georgia del Sur y Sandwich del Sur (+500)</option>
                                                                            <option value="FK">Islas Malvinas (+500)</option>
                                                                            <option value="PN">Islas Pitcairn (+64)</option>
                                                                            <option value="SB">Islas Salomón (+677)</option>
                                                                            <option value="TC">Islas Turcas y Caicos (+1)</option>
                                                                            <option value="VG">Islas Vírgenes Británicas (+1)</option>
                                                                            <option value="UM">Islas menores alejadas de EE. UU. (+1)</option>
                                                                            <option value="IL">Israel (+972)</option>
                                                                            <option value="IT">Italia (+39)</option>
                                                                            <option value="JM">Jamaica (+1)</option>
                                                                            <option value="JP">Japón (+81)</option>
                                                                            <option value="JE">Jersey (+44)</option>
                                                                            <option value="JO">Jordania (+962)</option>
                                                                            <option value="KZ">Kazajistán (+7)</option>
                                                                            <option value="KE">Kenia (+254)</option>
                                                                            <option value="KG">Kirguistán (+996)</option>
                                                                            <option value="KI">Kiribati (+686)</option>
                                                                            <option value="XK">Kosovo (+383)</option>
                                                                            <option value="KW">Kuwait (+965)</option>
                                                                            <option value="LA">Laos (+856)</option>
                                                                            <option value="LS">Lesoto (+266)</option>
                                                                            <option value="LV">Letonia (+371)</option>
                                                                            <option value="LB">Líbano (+961)</option>
                                                                            <option value="LR">Liberia (+231)</option>
                                                                            <option value="LY">Libia (+218)</option>
                                                                            <option value="LI">Liechtenstein (+423)</option>
                                                                            <option value="LT">Lituania (+370)</option>
                                                                            <option value="LU">Luxemburgo (+352)</option>
                                                                            <option value="MK">Macedonia del Norte (+389)</option>
                                                                            <option value="MG">Madagascar (+261)</option>
                                                                            <option value="MY">Malasia (+60)</option>
                                                                            <option value="MW">Malaui (+265)</option>
                                                                            <option value="MV">Maldivas (+960)</option>
                                                                            <option value="ML">Mali (+223)</option>
                                                                            <option value="MT">Malta (+356)</option>
                                                                            <option value="MA">Marruecos (+212)</option>
                                                                            <option value="MQ">Martinica (+596)</option>
                                                                            <option value="MU">Mauricio (+230)</option>
                                                                            <option value="MR">Mauritania (+222)</option>
                                                                            <option value="YT">Mayotte (+262)</option>
                                                                            <option value="MX">México (+52)</option>
                                                                            <option value="MD">Moldavia (+373)</option>
                                                                            <option value="MC">Mónaco (+377)</option>
                                                                            <option value="MN">Mongolia (+976)</option>
                                                                            <option value="ME">Montenegro (+382)</option>
                                                                            <option value="MS">Montserrat (+1)</option>
                                                                            <option value="MZ">Mozambique (+258)</option>
                                                                            <option value="MM">Myanmar (Birmania) (+95)</option>
                                                                            <option value="NA">Namibia (+264)</option>
                                                                            <option value="NR">Nauru (+674)</option>
                                                                            <option value="NP">Nepal (+977)</option>
                                                                            <option value="NI">Nicaragua (+505)</option>
                                                                            <option value="NE">Níger (+227)</option>
                                                                            <option value="NG">Nigeria (+234)</option>
                                                                            <option value="NU">Niue (+683)</option>
                                                                            <option value="NO">Noruega (+47)</option>
                                                                            <option value="NC">Nueva Caledonia (+687)</option>
                                                                            <option value="NZ">Nueva Zelanda (+64)</option>
                                                                            <option value="OM">Omán (+968)</option>
                                                                            <option value="NL">Países Bajos (+31)</option>
                                                                            <option value="PK">Pakistán (+92)</option>
                                                                            <option value="PA">Panamá (+507)</option>
                                                                            <option value="PG">Papúa Nueva Guinea (+675)</option>
                                                                            <option value="PY">Paraguay (+595)</option>
                                                                            <option value="PE">Perú (+51)</option>
                                                                            <option value="PF">Polinesia Francesa (+689)</option>
                                                                            <option value="PL">Polonia (+48)</option>
                                                                            <option value="PT">Portugal (+351)</option>
                                                                            <option value="HK">RAE de Hong Kong (China) (+852)</option>
                                                                            <option value="MO">RAE de Macao (China) (+853)</option>
                                                                            <option value="GB">Reino Unido (+44)</option>
                                                                            <option value="CF">República Centroafricana (+236)</option>
                                                                            <option value="CD">República Democrática del Congo (+243)</option>
                                                                            <option value="DO">República Dominicana (+1)</option>
                                                                            <option value="RE">Reunión (+262)</option>
                                                                            <option value="RW">Ruanda (+250)</option>
                                                                            <option value="RO">Rumanía (+40)</option>
                                                                            <option value="RU">Rusia (+7)</option>
                                                                            <option value="EH">Sáhara Occidental (+212)</option>
                                                                            <option value="WS">Samoa (+685)</option>
                                                                            <option value="BL">San Bartolomé (+590)</option>
                                                                            <option value="KN">San Cristóbal y Nieves (+1)</option>
                                                                            <option value="SM">San Marino (+378)</option>
                                                                            <option value="MF">San Martín (+590)</option>
                                                                            <option value="PM">San Pedro y Miquelón (+508)</option>
                                                                            <option value="VC">San Vicente y las Granadinas (+1)</option>
                                                                            <option value="SH">Santa Elena (+290)</option>
                                                                            <option value="LC">Santa Lucía (+1)</option>
                                                                            <option value="ST">Santo Tomé y Príncipe (+239)</option>
                                                                            <option value="SN">Senegal (+221)</option>
                                                                            <option value="RS">Serbia (+381)</option>
                                                                            <option value="SC">Seychelles (+248)</option>
                                                                            <option value="SL">Sierra Leona (+232)</option>
                                                                            <option value="SG">Singapur (+65)</option>
                                                                            <option value="SX">Sint Maarten (+1)</option>
                                                                            <option value="SO">Somalia (+252)</option>
                                                                            <option value="LK">Sri Lanka (+94)</option>
                                                                            <option value="ZA">Sudáfrica (+27)</option>
                                                                            <option value="SD">Sudán (+249)</option>
                                                                            <option value="SS">Sudán del Sur (+211)</option>
                                                                            <option value="SE">Suecia (+46)</option>
                                                                            <option value="CH">Suiza (+41)</option>
                                                                            <option value="SR">Surinam (+597)</option>
                                                                            <option value="SJ">Svalbard y Jan Mayen (+47)</option>
                                                                            <option value="TH">Tailandia (+66)</option>
                                                                            <option value="TW">Taiwán (+886)</option>
                                                                            <option value="TZ">Tanzania (+255)</option>
                                                                            <option value="TJ">Tayikistán (+992)</option>
                                                                            <option value="IO">Territorio Británico del Océano Índico (+246)</option>
                                                                            <option value="TF">Territorios Australes Franceses (+262)</option>
                                                                            <option value="PS">Territorios Palestinos (+970)</option>
                                                                            <option value="TL">Timor-Leste (+670)</option>
                                                                            <option value="TG">Togo (+228)</option>
                                                                            <option value="TK">Tokelau (+690)</option>
                                                                            <option value="TO">Tonga (+676)</option>
                                                                            <option value="TT">Trinidad y Tobago (+1)</option>
                                                                            <option value="TA">Tristán de Acuña (+2908)</option>
                                                                            <option value="TN">Túnez (+216)</option>
                                                                            <option value="TM">Turkmenistán (+993)</option>
                                                                            <option value="TR">Turquía (+90)</option>
                                                                            <option value="TV">Tuvalu (+688)</option>
                                                                            <option value="UA">Ucrania (+380)</option>
                                                                            <option value="UG">Uganda (+256)</option>
                                                                            <option value="UY">Uruguay (+598)</option>
                                                                            <option value="UZ">Uzbekistán (+998)</option>
                                                                            <option value="VU">Vanuatu (+678)</option>
                                                                            <option value="VE">Venezuela (+58)</option>
                                                                            <option value="VN">Vietnam (+84)</option>
                                                                            <option value="WF">Wallis y Futuna (+681)</option>
                                                                            <option value="YE">Yemen (+967)</option>
                                                                            <option value="DJ">Yibuti (+253)</option>
                                                                            <option value="ZM">Zambia (+260)</option>
                                                                            <option value="ZW">Zimbabue (+263)</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_1fragemaf _1fragem1b _1mrl40q3 _1fragem24 _1fragem2l _1fragem38 _1fragem3c _16s97g73 _16s97g75 _16s97g7b _16s97g7d" style="--_16s97g72: 1fr; --_16s97g74: minmax(0, 1fr); --_16s97g7a: minmax(0, 1fr) minmax(auto, max-content); --_16s97g7c: minmax(0, 1fr);">
                                            <button type="button" class="QT4by QLPuE eVFmT janiy adBMs" aria-label="Eliminar Dirección predeterminada: ">
                                                <span class="AjwsM">Eliminar</span>
                                            </button>
                                            <div class="_1fragemaf _1fragem1b _1mrl40q3 _1fragem24 _1fragem2l _1fragem37 _1fragem3b _16s97g73 _16s97g75 _16s97g7b _16s97g7d" style="--_16s97g72: minmax(0, 1fr); --_16s97g74: minmax(0, 1fr); --_16s97g7a: minmax(0, 1fr); --_16s97g7c: minmax(0, 1fr);">
                                                <div class="_1fragem17 _1fragemaf _1fragem38">
                                                    <div class="_5uqybw2 _1fragem17 _1fragem9r _1fragem1o _1fragem25 _1fragem0 _1fragem4 _1fragem38">
                                                        <button type="button" class="QT4by eVFmT janiy adBMs" aria-label="Cancelar la edición de la dirección Dirección predeterminada: " onclick="ocultar('Portal8')">
                                                            <span class="AjwsM">Cancelar</span>
                                                        </button>
                                                        <button type="submit" class="QT4by rqC98 EbLsk VDIfJ janiy" aria-label="Guardar la dirección Dirección predeterminada: ">
                                                            <span class="AjwsM">Guardar</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>