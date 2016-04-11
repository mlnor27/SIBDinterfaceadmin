<?php
global $content;
// content="text/plain; charset=utf-8"
require_once ('../jpgraph-3.5.0b1/src/jpgraph.php');
require_once ('../jpgraph-3.5.0b1/src/jpgraph_pie.php');
date_default_timezone_set("Europe/Paris");
//var_dump($content['counthorses'][0]);
// Some data

var_dump($content);
/*$data = array($content['counthorses'][0],50,50);

// Create the Pie Graph.
$graph = new PieGraph(350,250);

$theme_class="DefaultTheme";
//$graph->SetTheme(new $theme_class());

// Set A title for the plot
$graph->title->Set($content['counthorses']);
$graph->SetBox(true);

// Create
$p1 = new PiePlot($data);
$graph->Add($p1);

$p1->ShowBorder();
$p1->SetColor('black');
$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3'));
$graph->Stroke();*/