<?php

namespace models;

class Measure {

    public $name;
    public $shortcut;

    public function __construct($name, $shortcut) {
        $this->name = $name;
        $this->shortcut = $shortcut;
    }

    static function createMeasure($name, $shortcut) {
        return new Measure($name, $shortcut);
    }

    public function updateMeasureName($name) {
        $this->name = $name;
    }
    
    public function updateMeasureShortcut($shortcut) {
        $this->shortcut = $shortcut;
    }
}