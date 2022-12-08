<?php
declare(strict_types=1);

require_once("Accordable.php");
require_once("InstrumentCorde.php");

class Guitare extends InstrumentCorde implements Accordable {
    public function __construct() {}

    // Cet instrument ce jou en grattant les corde, car il hérite de InstrumentCorde.
    public function gratte(): bool {
        printf("La guitare gratte.\n");
        return true;
    }

    // Tendre cet instrument car il hérite de Accordable.
    public function tendre(): bool {
        printf("La guitare a été accordée.\n");
        return true;
    }

    // Les guitares n'utilisent pas d'arché, mais il hérite de Accordable.
    public function utiliserArche(): bool {
        return false;
    }
}
