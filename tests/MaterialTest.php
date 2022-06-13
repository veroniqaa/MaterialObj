<?php

use models\Material;
use models\Measure;
use models\MaterialGroup;
use PHPUnit\Framework\TestCase;

class MaterialTest extends TestCase {

    public function testAddMaterialToGroup() {
        $material_group = new MaterialGroup('group 1');
        $measure = new Measure('metre', 'm');

        $material = $material_group->addMaterial('A', 'Material A', $measure);
        $this->assertInstanceOf(Material::class, $material);
    }

    public function testUpdateMaterialCode() {
        $material_group = new MaterialGroup('group 1');
        $measure = new Measure('metre', 'm');

        $material = $material_group->addMaterial('A', 'Material A', $measure);
        $newCode = 'AB';

        $this->assertNotEquals($material->code, $newCode);

        $material->updateMaterialCode($newCode);

        $this->assertEquals($material->code, $newCode);
    }

    public function testUpdateMaterialName() {
        $material_group = new MaterialGroup('group 1');
        $measure = new Measure('metre', 'm');

        $material = $material_group->addMaterial('A', 'Material A', $measure);
        $newName = 'Material AB';

        $this->assertNotEquals($material->name, $newName);

        $material->updateMaterialName($newName);

        $this->assertEquals($material->name, $newName);
    }

    public function testUpdateMaterialGroup() {
        $material_group = new MaterialGroup('group 1');
        $measure = new Measure('metre', 'm');

        $material = $material_group->addMaterial('A', 'Material A', $measure);
        $new_material_group = new MaterialGroup('group 2');

        $this->assertNotEquals($material->material_group, $new_material_group);

        $material->updateMaterialGroup($new_material_group);

        $this->assertEquals($material->material_group, $new_material_group);
    }

    public function testUpdateMaterialMeasure() {
        $material_group = new MaterialGroup('group 1');
        $measure = new Measure('metre', 'm');

        $material = $material_group->addMaterial('A', 'Material A', $measure);
        $new_measure = new Measure('centimetre', 'cm');

        $this->assertNotEquals($material->measure, $new_measure);

        $material->updateMaterialMeasure($new_measure);

        $this->assertEquals($material->measure, $new_measure);
    }

}