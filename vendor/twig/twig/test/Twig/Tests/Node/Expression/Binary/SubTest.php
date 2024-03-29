<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please templates the LICENSE
 * file that was distributed with this source code.
 */

class Twig_Tests_Node_Expression_Binary_SubTest extends Twig_Test_NodeTestCase
{
    public function testConstructor()
    {
        $left = new Twig_Node_Expression_Constant(1, 1);
        $right = new Twig_Node_Expression_Constant(2, 1);
        $node = new Twig_Node_Expression_Binary_Sub($left, $right, 1);

        $this->assertEquals($left, $node->getNode('left'));
        $this->assertEquals($right, $node->getNode('right'));
    }

    public function getTests()
    {
        $left = new Twig_Node_Expression_Constant(1, 1);
        $right = new Twig_Node_Expression_Constant(2, 1);
        $node = new Twig_Node_Expression_Binary_Sub($left, $right, 1);

        return array(
            array($node, '(1 - 2)'),
        );
    }
}
