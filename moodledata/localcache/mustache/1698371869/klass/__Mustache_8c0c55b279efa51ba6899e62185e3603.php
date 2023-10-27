<?php

class __Mustache_8c0c55b279efa51ba6899e62185e3603 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('core_form/element-selectgroups')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }
}
