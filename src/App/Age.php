<?php

namespace App;

class Age {
    private $dob;
    private $currentYear;

    public function __construct($dob, $currentYear) {
        $this->dob = $dob;
        $this->currentYear = $currentYear;
    }

    public function calculate() {
        return $this->currentYear->diff($this->dob)->format("%y");
    }
}