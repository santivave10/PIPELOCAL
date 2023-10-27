<?php

class __Mustache_8da1ba1beb266a459d84e40f09026b37 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="hover-tooltip-container">
';
        $buffer .= $indent . '    ';
        $blockFunction = $context->findInBlock('anchor');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '
';
        $buffer .= $indent . '    <div class="hover-tooltip">
';
        $buffer .= $indent . '        ';
        $blockFunction = $context->findInBlock('tooltip');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
