<?php

class ClassDiagramBuilderTest extends TestCase
{
    private $graph;
    private $builder;

    public function setup()
    {
        $this->graph = new Fhaculty\Graph\Graph();
        $this->builder = new Fhaculty\Graph\Uml\ClassDiagramBuilder($this->graph);
    }

    public function testParentChildSuccess()
    {
        $this->builder->createVertexClass('Fhaculty\Graph\Edge\Base');
        $this->builder->createVertexClass('Fhaculty\Graph\Edge\Directed');
    }

    /**
     * Adding a sub-class (Edge\Directed) also automatically adds its parent (Edge\Base).
     */
    public function testChildParentFail()
    {
        $this->builder->createVertexClass('Fhaculty\Graph\Edge\Directed');
        $this->builder->createVertexClass('Fhaculty\Graph\Edge\Base');
    }

}
