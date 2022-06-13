<?php

namespace models;

use models\MaterialGroup;

class Material {

    public $code;
    public $name;
    public $measure;
    public $material_group;

    public function __construct($code, $name, $measure, $material_group) {
        $this->code = $code;
        $this->name = $name;
        $this->measure = $measure;
        $this->material_group = $material_group;
    }

    public function updateMaterialCode($code) {
        $this->code = $code;
    }

    public function updateMaterialName($name) {
        $this->name = $name;
    }

    public function updateMaterialGroup($material_group) {
        $this->material_group = $material_group;
    }

    public function updateMaterialMeasure($measure) {
        $this->measure = $measure;
    }

}