<?php

class __Mustache_b7d284a4159e9081e5a0496ca67096d2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="ml-auto dropdown">
';
        $value = $context->find('settingsselector');
        $buffer .= $this->sectionCed30fab9bbb94b3289d8beb243fbe20($context, $indent, $value);
        $value = $context->find('settingsselector');
        if (empty($value)) {
            
            $buffer .= $indent . '        <a href="#" class="';
            $value = $context->findDot('settings.excludetext');
            if (empty($value)) {
                
                $buffer .= 'dropdown-toggle';
            }
            $buffer .= ' btn btn-link ';
            $value = $context->findDot('settings.togglemoreicon');
            $buffer .= $this->sectionE8e03679aed55de44566d9c08754f13e($context, $indent, $value);
            $buffer .= '"
';
            $buffer .= $indent . '           role="button"
';
            $buffer .= $indent . '           data-toggle="dropdown"
';
            $buffer .= $indent . '           data-boundary="window"
';
            $buffer .= $indent . '           aria-haspopup="true"
';
            $buffer .= $indent . '           tabindex="0"
';
            $buffer .= $indent . '           aria-controls="forum-action-menu-';
            $value = $this->resolveValue($context->find('id'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '-menu"
';
            $buffer .= $indent . '           aria-label="';
            $value = $context->find('str');
            $buffer .= $this->section4c6133ff98512e01b5be00eba924e9bb($context, $indent, $value);
            $buffer .= '"
';
            $buffer .= $indent . '           aria-expanded="false">
';
            $value = $context->findDot('settings.togglemoreicon');
            $buffer .= $this->sectionA77c4b7b25b5a0428024b6a5429c814a($context, $indent, $value);
            $value = $context->findDot('settings.togglemoreicon');
            if (empty($value)) {
                
                $buffer .= $indent . '                ';
                $value = $context->find('pix');
                $buffer .= $this->section69527bcedf704ed2bb6a9a31baf770bf($context, $indent, $value);
                $buffer .= '
';
            }
            $value = $context->findDot('settings.excludetext');
            if (empty($value)) {
                
                $buffer .= $indent . '                ';
                $value = $context->find('str');
                $buffer .= $this->section2f3e1314eee82127f771d153b61eb44a($context, $indent, $value);
                $buffer .= '
';
            }
            $buffer .= $indent . '        </a>
';
        }
        $buffer .= $indent . '    <div class="dropdown-menu dropdown-menu-right"
';
        $buffer .= $indent . '         aria-labelledby="forum-action-menu-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-menu"
';
        $buffer .= $indent . '         data-rel="menu-content"
';
        $buffer .= $indent . '         role="menu"
';
        $buffer .= $indent . '         id="forum-action-menu-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-menu">
';
        $value = $context->findDot('capabilities.favourite');
        $buffer .= $this->section4a3b97bb1bbb533176740a05c75cace4($context, $indent, $value);
        $value = $context->findDot('capabilities.pin');
        $buffer .= $this->section4c92459ba413de5918d4dab379aaf192($context, $indent, $value);
        $value = $context->findDot('capabilities.manage');
        $buffer .= $this->sectionFf9a33e4d11b687d41e5681391452d66($context, $indent, $value);
        $value = $context->findDot('settings.excludesubscription');
        if (empty($value)) {
            
            if ($partial = $this->mustache->loadPartial('forum/discussion_subscription_toggle')) {
                $buffer .= $partial->renderInternal($context, $indent . '            ');
            }
        }
        $value = $context->find('unread');
        $buffer .= $this->sectionAeecc4e637bc420fce137a86a8522e07($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section4c6133ff98512e01b5be00eba924e9bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'togglediscussionmenu, mod_forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'togglediscussionmenu, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2f3e1314eee82127f771d153b61eb44a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' settings, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' settings, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCed30fab9bbb94b3289d8beb243fbe20(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <button class="dropdown-toggle btn btn-outline-secondary"
                data-toggle="dropdown"
                aria-haspopup="true"
                tabindex="0"
                aria-controls="forum-action-menu-{{id}}-menu"
                aria-label="{{#str}}togglediscussionmenu, mod_forum{{/str}}"
                aria-expanded="false">
            {{#str}} settings, mod_forum {{/str}}
        </button>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <button class="dropdown-toggle btn btn-outline-secondary"
';
                $buffer .= $indent . '                data-toggle="dropdown"
';
                $buffer .= $indent . '                aria-haspopup="true"
';
                $buffer .= $indent . '                tabindex="0"
';
                $buffer .= $indent . '                aria-controls="forum-action-menu-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-menu"
';
                $buffer .= $indent . '                aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section4c6133ff98512e01b5be00eba924e9bb($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                aria-expanded="false">
';
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->section2f3e1314eee82127f771d153b61eb44a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE8e03679aed55de44566d9c08754f13e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'btn-icon colour-inherit text-decoration-none d-flex align-items-center justify-content-center';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'btn-icon colour-inherit text-decoration-none d-flex align-items-center justify-content-center';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb5e6a9e6040a5725cde4b1c9f1d593f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/menu, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/menu, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA77c4b7b25b5a0428024b6a5429c814a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#pix}} i/menu, core{{/pix}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                ';
                $value = $context->find('pix');
                $buffer .= $this->sectionDb5e6a9e6040a5725cde4b1c9f1d593f($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section69527bcedf704ed2bb6a9a31baf770bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/settings, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/settings, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a3b97bb1bbb533176740a05c75cace4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> mod_forum/discussion_favourite_toggle}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('mod_forum/discussion_favourite_toggle')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4c92459ba413de5918d4dab379aaf192(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> mod_forum/discussion_pin_toggle}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('mod_forum/discussion_pin_toggle')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf9a33e4d11b687d41e5681391452d66(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{^istimelocked}}
                {{> forum/discussion_lock_toggle }}
            {{/istimelocked}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('istimelocked');
                if (empty($value)) {
                    
                    if ($partial = $this->mustache->loadPartial('forum/discussion_lock_toggle')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAeecc4e637bc420fce137a86a8522e07(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> forum/mark_as_read }}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('forum/mark_as_read')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
