<?php

    require_once('controleurs/ControleurPrincipal.php');

    if(isset($_GET['page'])) {
        $page = $_GET['page'];
        $controleurPrincipal = new ControleurPrincipal($page);
    }
?>
    