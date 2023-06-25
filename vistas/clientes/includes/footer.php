<div class="_1fragem15 _1fragemaf">
    <div class="_1fragem15 _1fragem8q _1fragem92 _1fragem89 _1fragem9j _1fragemaf _16s97g7r _0pK7i" style="--_16s97g7q: 120rem;">
        <footer>
            <div class="_1fragem15 _1fragem3k _1fragem3g _1fragem3m _1fragem3d _1fragemaf">
                <div class="_1fragem15 _1fragem8i _1fragem97 _1fragem81 _1fragem9o _1fragemaf _16s97g72l">
                    <nav>
                        <div class="KjdTb">
                            <div class="_1fragem17 _1fragemaf _1fragem38">
                                <div class="_5uqybw2 _1fragem17 _1fragem9r _1fragem1w _1fragem2d _1fragem0 _1fragem4 _1fragem38">
                                    <?php
                                        $consultaLegales = ControladorConfigPagina::ctrListarLegales(2);
                                        while($legales = mysqli_fetch_array($consultaLegales, MYSQLI_BOTH)){
                                    ?>
                                    <button type="button" class="QT4by xk8nK eVFmT janiy mRJ8x" onclick="mostrar('PortalLegal<?=$legales['pal_id'];?>')">
                                        <span class="AjwsM">
                                            <span class="_19gi7yt0 _19gi7ytc _1fragem1i"><?=$legales['pal_nombre'];?></span>
                                        </span>
                                    </button>
                                    <?php }?>
                                    <a class="s2kwpi1 _1fragemaf _1fragemat _1fragemb2 s2kwpi2 _1fragemam" href="mailto:elitejoyeria18k@gmail.com?subject=Contactar%20desde%20la%20tienda%20online%20%C3%89lite%20Joyer%C3%ADa" target="_blank" rel="noopener noreferrer">
                                        <span class="_19gi7yt0 _19gi7ytc _1fragem1i">Contáctanos</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </footer>
    </div>
</div>