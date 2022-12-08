<?php
declare(strict_types=1);

require_once("Instrument.php");

abstract class InstrumentCorde extends Instrument {
    public function gratte(): bool {
        return false;
    }

    public function joue(): bool {
        return $this->gratte();
    }
}

?>