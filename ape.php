<?php
class ape extends animal {
    public function yell() {
        return "Auooo";
    }

    public function setLegs($legs) {
        $this->legs = $legs;
    }
}
?>
