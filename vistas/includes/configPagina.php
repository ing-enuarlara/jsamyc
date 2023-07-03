<?php
    $configuracion = ControladorConfigPagina::ctrConfigPagina();

    $default = 'files/default.png';
    $rutaLogo = $default;
    if (!empty($configuracion['conf_logo'])) {
      $rutaLogo = 'files/logo/' . $configuracion['conf_logo'];
    }
    $rutaImgMenu = $default;
    if (!empty($configuracion['conf_imgMenu'])) {
      $rutaImgMenu = 'files/'.$configuracion['conf_imgMenu'];
    }
    $bannerP1 = $default;
    if (!empty($configuracion['conf_banner_p1'])) {
      $bannerP1 = 'files/banner/' . $configuracion['conf_banner_p1'];
    }
    $bannerP2 = $default;
    if (!empty($configuracion['conf_banner_p2'])) {
      $bannerP2 = 'files/banner/' . $configuracion['conf_banner_p2'];
    }
    $bannerP3 = $default;
    if (!empty($configuracion['conf_banner_p3'])) {
      $bannerP3 = 'files/banner/' . $configuracion['conf_banner_p3'];
    }
    $bannerP4 = $default;
    if (!empty($configuracion['conf_banner_p4'])) {
      $bannerP4 = 'files/banner/' . $configuracion['conf_banner_p4'];
    }
    $bannerP5 = $default;
    if (!empty($configuracion['conf_banner_p5'])) {
      $bannerP5 = 'files/banner/' . $configuracion['conf_banner_p5'];
    }
    $bannerP6 = $default;
    if (!empty($configuracion['conf_banner_p6'])) {
      $bannerP6 = 'files/banner/' . $configuracion['conf_banner_p6'];
    }
    $bannerG1 = $default;
    if (!empty($configuracion['conf_banner_g1'])) {
      $bannerG1 = 'files/banner/' . $configuracion['conf_banner_g1'];
    }