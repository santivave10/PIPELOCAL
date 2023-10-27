<?php

class __Mustache_075250324dcdb456c64545d9ba8e7a10 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_boost/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('core/local/toast/wrapper')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="page-wrapper">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_klass/header')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="login-page mt-0">
';
        $value = $context->find('show_slideimages');
        $buffer .= $this->sectionFe75e4379b5c658b624b651c8c8c6de0($context, $indent, $value);
        $buffer .= $indent . '        <div id="page" class="container-fluid mt-0">
';
        $buffer .= $indent . '            <div id="page-content" class="row">
';
        $buffer .= $indent . '                <div id="region-main-box" class="col-12">
';
        $buffer .= $indent . '                    <section id="region-main" class="col-12 h-100" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section6b403a6a78537640b9e04a931aeb6463($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                    <div class="login-wrapper">
';
        $buffer .= $indent . '                        <div class="login-container">
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    </section>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_klass/footer')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->sectionC1c7ccc3f8b683fc1ccb1c6bfec9274d($context, $indent, $value);
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section5b45f511653c2da09a78e30a574b4fe0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li data-target="#loginCarousel" data-slide-to="{{target}}" class="{{^target}}active{{/target}}"></li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li data-target="#loginCarousel" data-slide-to="';
                $value = $this->resolveValue($context->find('target'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="';
                $value = $context->find('target');
                if (empty($value)) {
                    
                    $buffer .= 'active';
                }
                $buffer .= '"></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1bcca21d355b06a09ff0a6744c2377d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="carousel-item {{^target}}active{{/target}}">
                            <img class="d-block w-100" src="{{image}}" alt="{{name}}">
                        </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="carousel-item ';
                $value = $context->find('target');
                if (empty($value)) {
                    
                    $buffer .= 'active';
                }
                $buffer .= '">
';
                $buffer .= $indent . '                            <img class="d-block w-100" src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFe75e4379b5c658b624b651c8c8c6de0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="klass-login-background">
            <div class="carousel-parent-wrapper">
                <div id="loginCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000">
                    <ol class="carousel-indicators">
                        {{#slideimages}}
                        <li data-target="#loginCarousel" data-slide-to="{{target}}" class="{{^target}}active{{/target}}"></li>
                        {{/slideimages}}

                    </ol>
                    <div class="carousel-inner">
                        {{#slideimages}}
                        <div class="carousel-item {{^target}}active{{/target}}">
                            <img class="d-block w-100" src="{{image}}" alt="{{name}}">
                        </div>
                        {{/slideimages}}
                    </div>
                </div>
            </div>
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="klass-login-background">
';
                $buffer .= $indent . '            <div class="carousel-parent-wrapper">
';
                $buffer .= $indent . '                <div id="loginCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000">
';
                $buffer .= $indent . '                    <ol class="carousel-indicators">
';
                $value = $context->find('slideimages');
                $buffer .= $this->section5b45f511653c2da09a78e30a574b4fe0($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    </ol>
';
                $buffer .= $indent . '                    <div class="carousel-inner">
';
                $value = $context->find('slideimages');
                $buffer .= $this->section1bcca21d355b06a09ff0a6744c2377d1($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b403a6a78537640b9e04a931aeb6463(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'content';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'content';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC1c7ccc3f8b683fc1ccb1c6bfec9274d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
M.util.js_pending(\'theme_boost/loader\');
require([\'theme_boost/loader\'], function() {
  M.util.js_complete(\'theme_boost/loader\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'M.util.js_pending(\'theme_boost/loader\');
';
                $buffer .= $indent . 'require([\'theme_boost/loader\'], function() {
';
                $buffer .= $indent . '  M.util.js_complete(\'theme_boost/loader\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
