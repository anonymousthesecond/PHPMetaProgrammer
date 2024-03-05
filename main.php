<?php
// main.php

require_once('CodeTemplate.php');
require_once('CodeBuilder.php');
require_once('CodeGenerator.php');

// Example usage
$template = new CodeTemplate('Hello, $name!');
$template->setValue('name', 'World');
echo $template->render() . "\n";

$builder = new CodeBuilder();
$builder->addLine('echo "Hello, world!";');
echo $builder->getGeneratedCode() . "\n";

$functionDefinition = CodeGenerator::generateFunction('add', '$a, $b', 'return $a + $b;');
echo $functionDefinition . "\n";

$classDefinition = CodeGenerator::generateClass(
    'MyClass',
    ['attribute1', 'attribute2'],
    ["public function method1() { echo \"Method 1\"; }"]
);
echo $classDefinition . "\n";
?>
