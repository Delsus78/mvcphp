<?php
declare(strict_types=1);

require_once('./vues/Vue.php');
require_once('./vues/VueAccueil.php');
require_once('./vues/VueParc.php');
require_once('./modeles/ordinateurs.php');

class ControleurPrincipal {
    private $vue;

    public function __construct(string $page) {
        $this->traiterDonneesGet($page);
        $this->afficher();
    }

    public function traiterDonneesGet(string $page) {
        $pageUPPER = strtoupper($page);
        switch ($pageUPPER) {
            case 'ACCUEIL':
                $this->vue = new VueAccueil("Accueil");
                break;
            case 'PARC':
                    $this->vue = new VueParc("Parc", new Ordinateurs());
                break;

            default:
                $this->vue = new Vue("Erreur");
                break;
        }
            
    }

    public function afficher() {
        $this->vue->afficher();
    }
}

?>