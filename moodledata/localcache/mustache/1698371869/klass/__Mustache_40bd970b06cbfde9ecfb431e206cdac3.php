<?php

class __Mustache_40bd970b06cbfde9ecfb431e206cdac3 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<a href="';
        $value = $this->resolveValue($context->find('sorturl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" title="';
        $value = $this->resolveValue($context->find('sorttip'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('sortcontent'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</a>
';
        $buffer .= $indent . '
';

        return $buffer;
    }
}
