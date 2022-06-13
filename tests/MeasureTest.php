<?php

use models\Measure;
use PHPUnit\Framework\TestCase;

class MeasureTest extends TestCase {

    public function testCreateMeasure() {

        $name = 'metre';
        $shortcut = 'm';
        $measure = Measure::createMeasure($name, $shortcut);
        
        $this->assertInstanceOf(Measure::class, $measure);
    }

    public function testUpdateMeasureName() {

        $name = 'metre';
        $newName = 'centimetre';
        $shortcut = 'm';
        $measure = new Measure($name, $shortcut);
        
        $this->assertNotEquals($measure->name, $newName);

        $measure->updateMeasureName($newName);
        $this->assertEquals($measure->name, $newName);
    }

    public function testUpdateMeasureShortcut() {

        $name = 'metre';
        $shortcut = 'm';
        $newShortcut = 'cm';
        $measure = new Measure($name, $shortcut);
        
        $this->assertNotEquals($measure->shortcut, $newShortcut);

        $measure->updateMeasureShortcut($newShortcut);
        $this->assertEquals($measure->shortcut, $newShortcut);
    }
}