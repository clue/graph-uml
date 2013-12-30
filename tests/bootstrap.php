<?php

(include_once __DIR__ . '/../vendor/autoload.php') OR die(PHP_EOL . 'ERROR: composer autoloader not found, run "composer install" or see README for instructions' . PHP_EOL);

use \Fhaculty\Graph\Graph;
use \Fhaculty\Graph\Uml\ClassDiagramBuilder;

/**
 * TestClass to place utility functions in.
 */
abstract class TestCase extends PHPUnit_Framework_TestCase
{
    protected $graph;

    protected $builder;

    public function setup()
    {
        $this->graph = new Graph();
        $this->builder = new ClassDiagramBuilder($this->graph);
    }

}