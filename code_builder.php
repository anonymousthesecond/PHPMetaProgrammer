<?php
// CodeBuilder.php

class CodeBuilder {
    private $codeLines = [];
    private $indent = 0;

    public function addLine($line) {
        $this->codeLines[] = str_repeat(' ', $this->indent) . $line;
    }

    public function addControlFlow($statement, $condition = null, $body = null) {
        $this->addLine("$statement {");
        if ($body instanceof CodeBuilder) {
            $body->indent += 2;
            $this->codeLines = array_merge($this->codeLines, $body->codeLines);
        } elseif (is_string($body)) {
            $this->addLine($body);
        }
        $this->addLine("}");
    }

    public function getGeneratedCode() {
        return implode("\n", $this->codeLines);
    }
}
?>
