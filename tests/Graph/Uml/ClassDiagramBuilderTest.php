<?php

use Fhaculty\Graph\Graph;
use Fhaculty\Graph\Uml\ClassDiagramBuilder;

class ClassDiagramBuilderTest extends PHPUnit_Framework_TestCase
{
    public function setup()
    {
        $this->graph = new Graph();
        $this->builder = new ClassDiagramBuilder($this->graph);
    }

    public function testParentChildSuccess()
    {
        $this->builder->createVertexClass('Fhaculty\Graph\Edge\Base');
        $this->builder->createVertexClass('Fhaculty\Graph\Edge\Directed');
    }

    /**
     * Test to show failing code
     *
     * @todo remove expectedException
     * @expectedException RuntimeException
     */
    public function testChildParentFail()
    {
        $this->builder->createVertexClass('Fhaculty\Graph\Edge\Directed');
        $this->builder->createVertexClass('Fhaculty\Graph\Edge\Base');
    }

}
