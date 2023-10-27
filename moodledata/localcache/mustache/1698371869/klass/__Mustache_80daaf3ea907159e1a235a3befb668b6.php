<?php

class __Mustache_80daaf3ea907159e1a235a3befb668b6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_klass/navbar')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="header-main">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="header-main-content">
';
        $buffer .= $indent . '        <div class="container-fluid">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="navbar">
';
        $buffer .= $indent . '                <div class="navbar-inner">
';
        $buffer .= $indent . '                <div id="logo">
';
        $buffer .= $indent . '                    <a href="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/?redirect=0" class="navbar-brand ';
        $value = $context->find('logourl');
        $buffer .= $this->sectionE1b7734efa381e40cb6792ff2d8c4194($context, $indent, $value);
        $buffer .= '
';
        $value = $context->find('logourl');
        if (empty($value)) {
            
            $buffer .= $indent . '                    hidden-sm-down
';
        }
        $buffer .= $indent . '                    ">
';
        $value = $context->find('logourl');
        $buffer .= $this->section393fce6551f291b08ba242eb528b59ea($context, $indent, $value);
        $value = $context->find('logourl');
        if (empty($value)) {
            
            $buffer .= $indent . '                    <span class="site-name hidden-sm-down">';
            $value = $this->resolveValue($context->find('sitename'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '</span>
';
        }
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <button class="';
        $value = $this->resolveValue($context->find('customclass'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="collapse navbar-toggleable-md" id="navbarResponsive">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="infoarea ">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <!-- custom_menu -->
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.custom_menu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    <!-- page_heading_menu -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="clearfix"></div>
';
        $buffer .= $indent . '       </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionE1b7734efa381e40cb6792ff2d8c4194(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-logo';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'has-logo';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section393fce6551f291b08ba242eb528b59ea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <span class="logo">
                        <img src="{{logourl}}" alt="{{sitename}}">
                    </span>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <span class="logo">
';
                $buffer .= $indent . '                        <img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
