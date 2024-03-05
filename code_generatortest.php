<?php
// CodeGeneratorTest.php

require_once('CodeGenerator.php');

use PHPUnit\Framework\TestCase;

class CodeGeneratorTest extends TestCase {
    public function testGenerateFunction() {
        $result = CodeGenerator::generateFunction('add', '$a, $b', 'return $a + $b;');
        $expected = "function add(\$a, \$b) {\nreturn \$a + \$b;\n}";
        $this->assertEquals($expected, $result);
    }

    public function testGenerateClass() {
        $result = CodeGenerator::generateClass(
            'MyClass',
            ['attribute1', 'attribute2'],
            ['public function method1() { echo "Method 1"; }']
        );
        $expected = "class MyClass {\n    public function __construct() {\n        \$this->attribute1 = null;\n        \$this->attribute2 = null;\n    }\n    public function method1() { echo \"Method 1\"; }\n}";
        $this->assertEquals($expected, $result);
    }
}
?>
