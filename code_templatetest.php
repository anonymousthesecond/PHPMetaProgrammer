<?php
// CodeTemplateTest.php

require_once('CodeTemplate.php');

use PHPUnit\Framework\TestCase;

class CodeTemplateTest extends TestCase {
    public function testRenderWithValues() {
        $template = new CodeTemplate('Hello, $name!');
        $template->setValue('name', 'World');
        $this->assertEquals('Hello, World!', $template->render());
    }

    public function testRenderWithMultipleValues() {
        $template = new CodeTemplate('$name1 + $name2 = $result');
        $template->setValue('name1', '2');
        $template->setValue('name2', '3');
        $template->setValue('result', '5');
        $this->assertEquals('2 + 3 = 5', $template->render());
    }
}
?>
