<?php

require 'vendor/autoload.php';

use models\MaterialGroup;

if(isset($_GET['site']) && $_GET['site'] == true) $displayInTerminal = false; 
else $displayInTerminal = true;

$material_group1 = new MaterialGroup('grupa 1');
$material_group2 = new MaterialGroup('grupa 2', $material_group1);
$material_group3 = new MaterialGroup('grupa 3', $material_group1);
$material_group4 = new MaterialGroup('grupa 4', $material_group3);
$material_group5 = new MaterialGroup('grupa 5', $material_group3);
$material_group6 = new MaterialGroup('grupa 6', $material_group2);
$material_group7 = new MaterialGroup('grupa 7', $material_group4);

//wyświetlenie drzewa od węzła będącego korzeniem
$material_group1->showTreeFrom($displayInTerminal);

//wyświetlenie drzewa od węzła niebędącego korzeniem
$material_group3->showTreeFrom($displayInTerminal);
