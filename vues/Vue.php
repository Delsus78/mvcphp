<?php
declare(strict_types=1);

class Vue {
    private $titre;

    public function __construct(string $titre) {
        $this->titre = $titre;
    }

    public function afficherEntete() {
        echo "
        <!doctype html>
        <html lang=\"fr\">
        <head>
            <meta charset=\"utf-8\">
            <title>".$this->titre."</title>
        </head>
        <body>
        ";
    }
    
    public function afficherPied() {
        echo "
        </body>
        </html>
        ";
    }

    public function afficherCorp() {
        echo "
        Page introuvable
        ";
    }

    public function afficher() {
        $this->afficherEntete();
        $this->afficherCorp();
        $this->afficherPied();
    }

    public function getTitre() {
        return $this->titre;
    }
}

?>