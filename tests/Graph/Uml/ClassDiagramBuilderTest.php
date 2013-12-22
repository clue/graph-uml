<?php

class ClassDiagramBuilderTest extends TestCase
{
    public function setup()
    {
        $this->graph = new Fhaculty\Graph\Graph();
        $this->builder = new Fhaculty\Graph\Uml\ClassDiagramBuilder($graph);
    }

    public function testParentChildSuccess()
    {
        $this->builder->createVertexClass('Fhaculty\Graph\Edge\Base');
        $this->builder->createVertexClass('Fhaculty\Graph\Edge\Directed');
    }

    /**
     * Test to show failing code
     *
     * Adding a sub-class (Edge\Directed) also automatically adds its parent (Edge\Base).
     * So trying to add the parent (Edge\Base) again fails because of a duplicate class name.
     *
     * @expectedException RuntimeException
     */
    public function testChildParentFail()
    {
        $this->builder->createVertexClass('Fhaculty\Graph\Edge\Directed');
        $this->builder->createVertexClass('Fhaculty\Graph\Edge\Base');
    }

}
