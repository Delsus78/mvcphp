<?php
declare(strict_types=1);
require_once('Vue.php');

class VueAccueil extends Vue {

    public function afficherCorp() {
        echo 
        "Bienvenue
        <button onclick=\"window.location.href = 'index.php?page=Parc';\">Parc</button>";
    }
}

?>