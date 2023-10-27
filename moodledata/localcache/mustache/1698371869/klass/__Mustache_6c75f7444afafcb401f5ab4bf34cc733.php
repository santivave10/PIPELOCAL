<?php

class __Mustache_6c75f7444afafcb401f5ab4bf34cc733 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('core_form/element-text')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }
}
