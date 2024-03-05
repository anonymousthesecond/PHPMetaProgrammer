<?php
// CodeTemplate.php

class CodeTemplate {
    private $template;
    private $values = [];

    public function __construct($template) {
        $this->template = $template;
    }

    public function setValue($key, $value) {
        $this->values[$key] = $value;
    }

    public function render() {
        $renderedTemplate = $this->template;
        foreach ($this->values as $key => $value) {
            $renderedTemplate = str_replace('$' . $key, $value, $renderedTemplate);
        }
        return $renderedTemplate;
    }
}
?>
