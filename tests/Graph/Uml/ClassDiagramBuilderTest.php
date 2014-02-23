<?php

use Fhaculty\Graph\GraphViz;

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

    public function testRendering() {
        $path = __DIR__;

        $this->builder->createVertexClass('Fhaculty\Graph\Edge\Directed');
        foreach($this->builder->createGraphsComponents() as $graph){
            $graphviz = new GraphViz($graph);
            $result = $graphviz->createScript();
            file_put_contents(__DIR__ . '/output.dot', $result);
            var_dump($result);

        };
    }
}
