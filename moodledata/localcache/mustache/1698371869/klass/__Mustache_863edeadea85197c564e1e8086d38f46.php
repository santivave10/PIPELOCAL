<?php

class __Mustache_863edeadea85197c564e1e8086d38f46 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<a
';
        $buffer .= $indent . '    class="dropdown-item menu-action"
';
        $buffer .= $indent . '    role="menuitem"
';
        $buffer .= $indent . '    data-type="lock-toggle"
';
        $buffer .= $indent . '    data-action="toggle"
';
        $buffer .= $indent . '    data-discussionid="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    data-forumid="';
        $value = $this->resolveValue($context->find('forumid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    data-state="';
        $value = $this->resolveValue($context->findDot('times.locked'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    href="#"
';
        $value = $context->find('locked');
        $buffer .= $this->section17f4f341bddc972a9e6652345e1d8f8a($context, $indent, $value);
        $value = $context->find('locked');
        if (empty($value)) {
            
            $buffer .= $indent . '        title="';
            $value = $context->find('str');
            $buffer .= $this->sectionAc03e5d229b60eb6e2b3be91aa9b13ed($context, $indent, $value);
            $buffer .= '"
';
        }
        $buffer .= $indent . '>
';
        $buffer .= $indent . '    <span class="menu-action-text">
';
        $value = $context->find('locked');
        $buffer .= $this->section90b9f9d0f699ea12981f73f5b0dee062($context, $indent, $value);
        $value = $context->find('locked');
        if (empty($value)) {
            
            $buffer .= $indent . '            ';
            $value = $context->find('str');
            $buffer .= $this->section58e7e189627cf2628c58d2069dde2549($context, $indent, $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '    </span>
';
        $buffer .= $indent . '</a>';

        return $buffer;
    }

    private function sectionDd1b6bc6db2a6c844fdf3ebb01d3519e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'clicktounlockdiscussion, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'clicktounlockdiscussion, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section17f4f341bddc972a9e6652345e1d8f8a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        title="{{#str}}clicktounlockdiscussion, forum{{/str}}"
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        title="';
                $value = $context->find('str');
                $buffer .= $this->sectionDd1b6bc6db2a6c844fdf3ebb01d3519e($context, $indent, $value);
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAc03e5d229b60eb6e2b3be91aa9b13ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'clicktolockdiscussion, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'clicktolockdiscussion, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section28f381a56f1e627d699b3faa6ab6c312(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'unlockdiscussion, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'unlockdiscussion, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section90b9f9d0f699ea12981f73f5b0dee062(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#str}}unlockdiscussion, forum{{/str}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->section28f381a56f1e627d699b3faa6ab6c312($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section58e7e189627cf2628c58d2069dde2549(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'lockdiscussion, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'lockdiscussion, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
