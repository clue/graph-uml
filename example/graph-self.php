<?php

require __DIR__ . '/../vendor/autoload.php';

// initialize empty graph and an UML builder
$graph = new Fhaculty\Graph\Graph();
$builder = new Fhaculty\Graph\Uml\ClassDiagramBuilder($graph);

// add something to the diagram
$builder->createVertexClass('Fhaculty\Graph\Uml\ClassDiagramBuilder');

// display graph as svg image
$graphviz = new Fhaculty\Graph\GraphViz($graph);
$graphviz->setFormat('svg');
$graphviz->display();
