<?php

class __Mustache_ec5dc27ad42fdf81db0cc73207beaafc extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="categorypagingbarcontainer ';
        $value = $this->resolveValue($context->find('extraclasses'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('pagination'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('showall');
        $buffer .= $this->section3e903b0498a0a1e4cca79efde16c1f27($context, $indent, $value);

        return $buffer;
    }

    private function section7e8fcfdf3c0ac53083688f8d9be76cab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showall, moodle, {{totalnumber}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' showall, moodle, ';
                $value = $this->resolveValue($context->find('totalnumber'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section97a6f22fe6afa37dd6f78ce826e8801e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showperpage, moodle, {{totalnumber}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' showperpage, moodle, ';
                $value = $this->resolveValue($context->find('totalnumber'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section96c6744c81ade278a8c140d3210c58d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#str}} showperpage, moodle, {{totalnumber}} {{/str}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                ';
                $value = $context->find('str');
                $buffer .= $this->section97a6f22fe6afa37dd6f78ce826e8801e($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3e903b0498a0a1e4cca79efde16c1f27(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="question-showall-text">
        <a href="{{{showallurl}}}">
            {{^biggertotal}}
                {{#str}} showall, moodle, {{totalnumber}} {{/str}}
            {{/biggertotal}}
            {{#biggertotal}}
                {{#str}} showperpage, moodle, {{totalnumber}} {{/str}}
            {{/biggertotal}}
        </a>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="question-showall-text">
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('showallurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $value = $context->find('biggertotal');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                ';
                    $value = $context->find('str');
                    $buffer .= $this->section7e8fcfdf3c0ac53083688f8d9be76cab($context, $indent, $value);
                    $buffer .= '
';
                }
                $value = $context->find('biggertotal');
                $buffer .= $this->section96c6744c81ade278a8c140d3210c58d6($context, $indent, $value);
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
