<?php

use Fhaculty\Graph\Algorithm\ConnectedComponents;

require __DIR__ . '/../vendor/autoload.php';

// initialize empty graph and an UML builder
$graph = new Fhaculty\Graph\Graph();
$builder = new Fhaculty\Graph\Uml\ClassDiagramBuilder($graph);

$all = get_loaded_extensions(false);

// adding all extensions will result in a huge graph, so just pick 2 random ones
shuffle($all);
$all = array_slice($all, 0, 2);

// $all = array('PDO');
foreach ($all as $one) {
    if (!$graph->hasVertex($one)) {
        $builder->createVertexExtension($one);
    }
}

// display graph as svg image
$graphviz = new Fhaculty\Graph\GraphViz($graph);
$graphviz->setFormat('svg');
$graphviz->display();
