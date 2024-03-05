<?php
// CodeBuilderTest.php

require_once('CodeBuilder.php');

use PHPUnit\Framework\TestCase;

class CodeBuilderTest extends TestCase {
    public function testAddLine() {
        $builder = new CodeBuilder();
        $builder->addLine('echo "Hello, world!";');
        $this->assertEquals('echo "Hello, world!";', $builder->getGeneratedCode());
    }

    public function testAddControlFlow() {
        $builder = new CodeBuilder();
        $builder->addControlFlow('if', 'condition', 'echo "Condition is true";');
        $this->assertEquals("if {\n    echo \"Condition is true\";\n}", $builder->getGeneratedCode());
    }
}
?>
