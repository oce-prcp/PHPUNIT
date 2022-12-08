<?php
declare(strict_types=1);

require_once("InstrumentVent.php");

class Saxo extends InstrumentVent {
    public function __construct() {}

    public function souffle(): bool {
        printf("Le saxo souffle.\n");
        return true;
    }
}
