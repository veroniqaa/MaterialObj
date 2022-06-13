<?php

use models\MaterialGroup;
use PHPUnit\Framework\TestCase;

class MaterialGroupTest extends TestCase {

    public function testCreateMaterialGroup() {

        $material_group1 = new MaterialGroup('group 1');
        $material_group2 = new MaterialGroup('group 2');

        $this->assertInstanceOf(MaterialGroup::class, $material_group1);
        $this->assertInstanceOf(MaterialGroup::class, $material_group2);
        $this->assertNotEquals($material_group1, $material_group2);
    }

    public function testCreateMaterialGroupWithParent() {

        $material_group1 = new MaterialGroup('group 1');
        $material_group2 = new MaterialGroup('group 2', $material_group1);

        $this->assertEquals($material_group2->parent, $material_group1);
    }

    public function testUpdateMaterialGroupName() {

        $name = 'group AB';
        $newName = 'group 1';
        $material_group = new MaterialGroup($name);
        
        $this->assertNotEquals($material_group->name, $newName);

        $material_group->updateMaterialGroupName($newName);
        $this->assertEquals($material_group->name, $newName);
    }

    public function testChangeParent() {

        $parent = new MaterialGroup('group 1');
        $newParent = new MaterialGroup('group 2');
        $material_group = new MaterialGroup('group 3', $parent);
        
        $this->assertNotEquals($material_group->parent, $newParent);

        $material_group->changeParent($newParent);
        
        $this->assertEquals($material_group->parent, $newParent);
    }
}