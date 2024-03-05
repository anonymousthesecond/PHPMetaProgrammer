<?php
// CodeGenerator.php

require_once('CodeTemplate.php');
require_once('CodeBuilder.php');

class CodeGenerator {
    public static function generateFunction($name, $args, $body) {
        $template = new CodeTemplate("function $name($args) {\n$body\n}");
        return $template->render();
    }

    public static function generateClass($name, $attributes, $methods) {
        $builder = new CodeBuilder();
        $builder->addLine("class $name {");
        $builder->addLine("    public function __construct() {");
        foreach ($attributes as $attr) {
            $builder->addLine("        \$this->$attr = null;");
        }
        $builder->addLine("    }");
        foreach ($methods as $method) {
            $builder->addLine($method);
        }
        $builder->addLine("}");
        return $builder->getGeneratedCode();
    }
}
?>
