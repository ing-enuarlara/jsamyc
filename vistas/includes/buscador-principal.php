<div id="searchPopup" class="">
    <a class="closeSearch" id="closeSearch" href="#">
        <i class="fa-solid fa-xmark"></i>
    </a>
    <h4>Buscar nuestro sitio</h4>
    <form action="#" method="get" class="pr search-header search" role="search">
        <div class="input__group">
            <input class="input-group__field search__input" type="search" id="search" name="search" placeholder="Buscar" value="">
            <span class="input-group__btn">
                <button class="btnSearch search__submit" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <circle cx="10" cy="10" r="7" />
                        <line x1="21" y1="21" x2="15" y2="15" />
                    </svg>
                    <span class="icon__fallback-text">Buscar</span>
                </button>
            </span>
        </div>
        <ul class="search-results" id="contenedorSearch" style="display:none;">
        </ul>
    </form>
</div>
<script>
    $(document).ready(function() {
        $('#search').on('input', function() {
            var search = $(this).val();

            if (search.length > 2) {
                $.ajax({
                    type: "POST",
                    url: "<?=RUTA?>vistas/ajax/ajax-buscador.php",
                    data: { search: search },
                    success: function(response) {
                        if (search === '') {
                            // Si el término de búsqueda está vacío, vaciar el contenedor de resultados y ocultarlo
                            $("#contenedorSearch").empty().hide();
                        } else {
                            // Limpiar los resultados anteriores
                            $("#contenedorSearch").empty();

                            if (response.length > 0) {
                                // Agregar los nuevos productos a la lista
                                $("#contenedorSearch").show();
                                $.each(response, function(index, item) {
                                    var rutaImg = 'https://via.placeholder.com/550';
                                    if (item.numFotosProductos > 0) {
                                        rutaImg = '<?=RUTA_ADMIN?>files/productos/' + item.datosFotosProductos.cpf_fotos;
                                    }

                                    var html = '<li>' +
                                        '<a href="<?=RUTA?>productos/' + item.datosProductos.cprod_id + '">' +
                                        '<span class="img">' +
                                        '<img src="' + rutaImg + '">' +
                                        '</span>' +
                                        '<span class="details">' + item.datosProductos.cprod_nombre +
                                        '<span class="price">$' + item.datosProductos.cprod_costo.toLocaleString() + '</span>' +
                                        '</span>' +
                                        '</a>' +
                                        '</li>';

                                    $("#contenedorSearch").append(html);
                                });
                            } else {
                                $("#contenedorSearch").hide();
                            }
                        }
                    }
                });
            } else {
                // Si el término de búsqueda tiene dos letras, vaciar el contenedor de resultados y ocultarlo
                $("#contenedorSearch").empty().hide();
            }
        });
    });
</script>