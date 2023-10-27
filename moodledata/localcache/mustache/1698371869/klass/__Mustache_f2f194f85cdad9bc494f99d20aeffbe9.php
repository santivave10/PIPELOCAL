<?php

class __Mustache_f2f194f85cdad9bc494f99d20aeffbe9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->findDot('capabilities.pin');
        $buffer .= $this->section2862960330e6df0dd4609f02ab3788f4($context, $indent, $value);

        return $buffer;
    }

    private function section463b2884cfb99a4861939d28dbc2476d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'unpindiscussion, mod_forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'unpindiscussion, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBcf4229413e4b16ba6d4238f98ecfa2b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            data-targetstate="0"
            title="{{#str}}unpindiscussion, mod_forum{{/str}}"
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            data-targetstate="0"
';
                $buffer .= $indent . '            title="';
                $value = $context->find('str');
                $buffer .= $this->section463b2884cfb99a4861939d28dbc2476d($context, $indent, $value);
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEe3e6eb9add57664cabefa8cbfb96b38(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'pindiscussion, mod_forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'pindiscussion, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section461585f4ae2eaddff36033779de34d24(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#str}}unpindiscussion, mod_forum{{/str}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                ';
                $value = $context->find('str');
                $buffer .= $this->section463b2884cfb99a4861939d28dbc2476d($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2862960330e6df0dd4609f02ab3788f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a
        class="dropdown-item menu-action"
        role="menuitem"
        data-type="pin-toggle"
        data-action="toggle"
        data-discussionid="{{id}}"
        data-forumid="{{forumid}}"
        href="{{urls.pin}}"
        tabindex="-1"
        {{#pinned}}
            data-targetstate="0"
            title="{{#str}}unpindiscussion, mod_forum{{/str}}"
        {{/pinned}}
        {{^pinned}}
            data-targetstate="1"
            title="{{#str}}pindiscussion, mod_forum{{/str}}"
        {{/pinned}}
    >
        <span class="menu-action-text">
            {{#pinned}}
                {{#str}}unpindiscussion, mod_forum{{/str}}
            {{/pinned}}
            {{^pinned}}
                {{#str}}pindiscussion, mod_forum{{/str}}
            {{/pinned}}
        </span>
    </a>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <a
';
                $buffer .= $indent . '        class="dropdown-item menu-action"
';
                $buffer .= $indent . '        role="menuitem"
';
                $buffer .= $indent . '        data-type="pin-toggle"
';
                $buffer .= $indent . '        data-action="toggle"
';
                $buffer .= $indent . '        data-discussionid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '        data-forumid="';
                $value = $this->resolveValue($context->find('forumid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '        href="';
                $value = $this->resolveValue($context->findDot('urls.pin'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '        tabindex="-1"
';
                $value = $context->find('pinned');
                $buffer .= $this->sectionBcf4229413e4b16ba6d4238f98ecfa2b($context, $indent, $value);
                $value = $context->find('pinned');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            data-targetstate="1"
';
                    $buffer .= $indent . '            title="';
                    $value = $context->find('str');
                    $buffer .= $this->sectionEe3e6eb9add57664cabefa8cbfb96b38($context, $indent, $value);
                    $buffer .= '"
';
                }
                $buffer .= $indent . '    >
';
                $buffer .= $indent . '        <span class="menu-action-text">
';
                $value = $context->find('pinned');
                $buffer .= $this->section461585f4ae2eaddff36033779de34d24($context, $indent, $value);
                $value = $context->find('pinned');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                ';
                    $value = $context->find('str');
                    $buffer .= $this->sectionEe3e6eb9add57664cabefa8cbfb96b38($context, $indent, $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '        </span>
';
                $buffer .= $indent . '    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
