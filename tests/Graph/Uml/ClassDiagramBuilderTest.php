<?php

class ClassDiagramBuilderTest extends TestCase
{

    public function setup()
    {
        parent::setup();
    }

    /**
     * This does not fail as we build bottom to top.
     */
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
     * This test will become obsolete when
     * we fix https://github.com/clue/graph/issues/85
     *
     * @todo Remove exception when ready.
     * @expectedException RuntimeException
     */
    public function testChildParentFail()
    {
        $this->builder->createVertexClass('Fhaculty\Graph\Edge\Directed');
        $this->builder->createVertexClass('Fhaculty\Graph\Edge\Base');
    }

}
