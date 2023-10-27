<?php

class __Mustache_95642b231360abaf41e8b7dc74f14e2a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core_form/element-group')) {
            $context->pushBlockContext(array(
                'element' => array($this, 'block391e826cd161a7a7e4ec1c281b507d19'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function sectionB4351f404ced7bc819a606b09246b60d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{{separator}}}
                        {{{html}}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('separator'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('html'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block391e826cd161a7a7e4ec1c281b507d19($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <fieldset class="w-100 m-0 p-0 border-0" id="';
        $value = $this->resolveValue($context->findDot('element.id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '            <legend class="sr-only">';
        $value = $this->resolveValue($context->find('label'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</legend>
';
        $buffer .= $indent . '            <div class="d-flex flex-wrap align-items-center">
';
        $buffer .= $indent . '                <span class="fdefaultcustom">
';
        $value = $context->findDot('element.elements');
        $buffer .= $this->sectionB4351f404ced7bc819a606b09246b60d($context, $indent, $value);
        $buffer .= $indent . '                </span>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </fieldset>
';
    
        return $buffer;
    }
}
