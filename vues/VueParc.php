<?php
declare(strict_types=1);
require_once('Vue.php');

class VueParc extends Vue {
    private $ordinateurs;

    public function __construct(string $titre, $ordis) {
        $this->titre = $titre;
        $this->ordinateurs = $ordis;
    }

    public function afficherCorp() {
        echo "
        <table class=\"table\">
            <thead class=\"thead-light\">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>IP</th>
                    <th>RAM</th>
                    <th>DB</th>
                    <th>Processeur</th>
                </tr>
            </thead>";

        foreach ($this->ordinateurs->getOrdinateurs() as $key => $value) {
            echo "<tr>";
            echo 
            "<td>".$value->getId()."</td>".
            "<td>".$value->getNom()."</td>".
            "<td>".$value->getIp()."</td>".
            "<td>".$value->getRam()."</td>".
            "<td>".$value->getDd()."</td>".
            "<td>".$value->getProc()."</td>";
            echo "</tr>";
        }
        echo "</table>";
        
    }

    public function getOrdinateurs() {
        return $this->ordinateurs;
    }
}

?>