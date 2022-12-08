<?php
declare(strict_types=1);

require_once("Instrument.php");

abstract class InstrumentVent extends Instrument {
    public function souffle(): bool {
        return false;
    }

    public function joue(): bool {
        return $this->souffle();
    }
}

?>