<?php
declare(strict_types=1);

require_once("Accordable.php");
require_once("InstrumentCorde.php");

class Violon extends InstrumentCorde implements Accordable {
    public function __construct() {}

    // Cet instrument ce jou en grattant les corde, car il hérite de InstrumentCorde.
    public function gratte(): bool {
        printf("Le violon gratte.\n");
        return true;
    }

    // Tendre cet instrument car il hérite de Accordable.
    public function tendre(): bool {
        printf("Le violon a été accordée.\n");
        return true;
    }

    // Utilisation d'un arché pour jouer de cet instrument, car il hérite de Accordable.
    public function utiliserArche(): bool {
        printf("Le violon utilise un arché.\n");
        return true;
    }
}

?>