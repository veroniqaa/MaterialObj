<?php

namespace models;

use models\Material;

class MaterialGroup {

    static $material_groups = array();
    public $name;
    public $parent = NULL;

    public function __construct($name, $parent = null) {
        $this->name = $name;
        $this->parent = $parent;
        self::$material_groups[] = $this;
    }

    public function updateMaterialGroupName($name) {
        $this->name = $name;
    }

    public function changeParent($parent) {
        $this->parent = $parent;
    }

    public function showTreeFrom($displayInTerminal = false, $level = 0, &$tree = array()) {
        
        $material_groups = array_reverse(self::$material_groups);

        foreach($material_groups as $material_group) {
            if($material_group->parent != NULL && $material_group->parent == $this) {
                $material_group->showTreeFrom($displayInTerminal, $level+1, $tree);
            }
        }
        
        if($displayInTerminal == true) $line = str_repeat("\t", $level) . ' -> ' . $this->name . "\n";
        else $line = str_repeat('&emsp;', $level) . ' -> ' . $this->name . '</br>';
        
        array_push($tree, $line);
        
        if($level == 0) {
            $tree = array_reverse($tree);
            foreach($tree as $t) print_r($t);
            echo $displayInTerminal ? "\n" : "</br>";
        }
    }

    public function addMaterial($code, $name, $measure) {
        $material = new Material($code, $name, $measure, $this);
        return $material;
    }
}