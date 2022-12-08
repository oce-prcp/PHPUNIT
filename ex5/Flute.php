<?php
declare(strict_types=1);

require_once("InstrumentVent.php");

class Flute extends InstrumentVent {
    public function __construct() {}

    public function souffle(): bool {
        printf("La flute souffle.\n");
        return true;
    }
}
