<?php

class __Mustache_6efeec1a3458385aa4a2fa3402613e12 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('footerall');
        $buffer .= $this->section0c5b13f25850ef66bbdc9c572d120e84($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section8397d600017f65f298d8425ee0497b7d($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section44cca7cb7eae6e808ea785e5453e43c0($context, $indent, $value);

        return $buffer;
    }

    private function section2850c9b4f8d26f1721cff6545cfe46aa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <img src="{{logourl_footer}}" alt="klass">
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <img src="';
                $value = $this->resolveValue($context->find('logourl_footer'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="klass">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF3d4a52fe88cfa46f731a9f6cf0d01b0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="{{colclass}}">
                        <div class="infoarea">
                            <div class="footer-logo">
                                <a href="{{config.wwwroot}}/?redirect=0">
                                {{# logourl_footer}}
                                    <img src="{{logourl_footer}}" alt="klass">
                                {{/ logourl_footer}}
                                </a>
                            </div>
                            {{{footnote}}}
                        </div>
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        <div class="infoarea">
';
                $buffer .= $indent . '                            <div class="footer-logo">
';
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/?redirect=0">
';
                $value = $context->find('logourl_footer');
                $buffer .= $this->section2850c9b4f8d26f1721cff6545cfe46aa($context, $indent, $value);
                $buffer .= $indent . '                                </a>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('footnote'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4871b3a3b23d869d833a89e823755b06(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="{{colclass}}">
                        <div class="foot-links">
                            <h5>{{s_info}}</h5>
                            <ul>
                            {{{infolink}}}
                            </ul>
                    </div>
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        <div class="foot-links">
';
                $buffer .= $indent . '                            <h5>';
                $value = $this->resolveValue($context->find('s_info'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h5>
';
                $buffer .= $indent . '                            <ul>
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('infolink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </ul>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2dc230eaa5f231a2c48da121e346b77(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{address}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('address'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2048659d462b1086a36dafc08261261(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <p><i class="fa fa-phone-square"></i>{{s_phone}} : {{phoneno}}</p>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <p><i class="fa fa-phone-square"></i>';
                $value = $this->resolveValue($context->find('s_phone'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' : ';
                $value = $this->resolveValue($context->find('phoneno'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA69ce89ae7fa4c92a947328931f829f6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <p><i class="fa fa-envelope"></i>{{s_email}} : <a class="mail-link" href="mailto:{{emailid}}"> {{emailid}}</a></p>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <p><i class="fa fa-envelope"></i>';
                $value = $this->resolveValue($context->find('s_email'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' : <a class="mail-link" href="mailto:';
                $value = $this->resolveValue($context->find('emailid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"> ';
                $value = $this->resolveValue($context->find('emailid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a></p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB0f07502e07dad2093081a5f85fb9a1e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="{{colclass}}">
                        <div class="contact-info">
                            <h5 class="nopadding">{{s_contact_us}}</h5>
                            <p>{{# address}}{{address}}{{/address}}</p>
                            {{# phoneno}}
                            <p><i class="fa fa-phone-square"></i>{{s_phone}} : {{phoneno}}</p>
                            {{/ phoneno}}
                            {{# emailid}}
                            <p><i class="fa fa-envelope"></i>{{s_email}} : <a class="mail-link" href="mailto:{{emailid}}"> {{emailid}}</a></p>
                            {{/ emailid}}
                        </div>
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        <div class="contact-info">
';
                $buffer .= $indent . '                            <h5 class="nopadding">';
                $value = $this->resolveValue($context->find('s_contact_us'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h5>
';
                $buffer .= $indent . '                            <p>';
                $value = $context->find('address');
                $buffer .= $this->sectionB2dc230eaa5f231a2c48da121e346b77($context, $indent, $value);
                $buffer .= '</p>
';
                $value = $context->find('phoneno');
                $buffer .= $this->sectionB2048659d462b1086a36dafc08261261($context, $indent, $value);
                $value = $context->find('emailid');
                $buffer .= $this->sectionA69ce89ae7fa4c92a947328931f829f6($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7360ee3202143d96baa39c3fa8c12f0d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <li class="smedia-01">
                                    <a href="{{fburl}}" target="_blank">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                </li>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <li class="smedia-01">
';
                $buffer .= $indent . '                                    <a href="';
                $value = $this->resolveValue($context->find('fburl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                                        <i class="fa fa-facebook-square"></i>
';
                $buffer .= $indent . '                                    </a>
';
                $buffer .= $indent . '                                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section55e271f1018c0a1c1856cee4394db378(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <li class="smedia-02">
                                    <a href="{{pinurl}}" target="_blank">
                                        <i class="fa fa-pinterest-square"></i>
                                    </a>
                                </li>

                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <li class="smedia-02">
';
                $buffer .= $indent . '                                    <a href="';
                $value = $this->resolveValue($context->find('pinurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                                        <i class="fa fa-pinterest-square"></i>
';
                $buffer .= $indent . '                                    </a>
';
                $buffer .= $indent . '                                </li>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section58231e3e1dd9f49f2587949227e7b3b9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <li class="smedia-03">
                                    <a href="{{twurl}}" target="_blank">
                                        <i class="fa fa-twitter-square"></i>
                                    </a>
                                </li>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <li class="smedia-03">
';
                $buffer .= $indent . '                                    <a href="';
                $value = $this->resolveValue($context->find('twurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                                        <i class="fa fa-twitter-square"></i>
';
                $buffer .= $indent . '                                    </a>
';
                $buffer .= $indent . '                                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section21595dba2e8a4c4c7f74f488f40d19d9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <li class="smedia-04">
                                    <a href="{{gpurl}}" target="_blank">
                                    <i class="fa fa-google-plus-square"></i>
                                    </a>
                                </li>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <li class="smedia-04">
';
                $buffer .= $indent . '                                    <a href="';
                $value = $this->resolveValue($context->find('gpurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                                    <i class="fa fa-google-plus-square"></i>
';
                $buffer .= $indent . '                                    </a>
';
                $buffer .= $indent . '                                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section54d2e0288cb23395bd2f7e45ddd42ef2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="{{colclass}}">
                        <div class="social-media">
                        <h5>{{s_get_social}}</h5>
                        <ul>
                            {{# fburl}}
                                <li class="smedia-01">
                                    <a href="{{fburl}}" target="_blank">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                </li>
                            {{/ fburl}}

                            {{# pinurl}}
                                <li class="smedia-02">
                                    <a href="{{pinurl}}" target="_blank">
                                        <i class="fa fa-pinterest-square"></i>
                                    </a>
                                </li>

                            {{/ pinurl}}
                            {{# twurl}}
                                <li class="smedia-03">
                                    <a href="{{twurl}}" target="_blank">
                                        <i class="fa fa-twitter-square"></i>
                                    </a>
                                </li>
                            {{/ twurl}}

                            {{# gpurl}}
                                <li class="smedia-04">
                                    <a href="{{gpurl}}" target="_blank">
                                    <i class="fa fa-google-plus-square"></i>
                                    </a>
                                </li>
                            {{/ gpurl}}
                            </ul>
                        </div>
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        <div class="social-media">
';
                $buffer .= $indent . '                        <h5>';
                $value = $this->resolveValue($context->find('s_get_social'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h5>
';
                $buffer .= $indent . '                        <ul>
';
                $value = $context->find('fburl');
                $buffer .= $this->section7360ee3202143d96baa39c3fa8c12f0d($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('pinurl');
                $buffer .= $this->section55e271f1018c0a1c1856cee4394db378($context, $indent, $value);
                $value = $context->find('twurl');
                $buffer .= $this->section58231e3e1dd9f49f2587949227e7b3b9($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('gpurl');
                $buffer .= $this->section21595dba2e8a4c4c7f74f488f40d19d9($context, $indent, $value);
                $buffer .= $indent . '                            </ul>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9dde737836ebdd36132f48dbae4d1fc2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <p>{{{copyright_footer}}}</p>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <p>';
                $value = $this->resolveValue($context->find('copyright_footer'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a5198f26dc6ad191d1a18c314235d65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'showfooter, theme_boost';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'showfooter, theme_boost';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section46f926dcc61094038ebb3542556c1993(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'e/question, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'e/question, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section26caeb9515b8ad905e22d2f5411bbab4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="footer-section p-3 border-bottom">
                    {{{ output.page_doc_link }}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="footer-section p-3 border-bottom">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->findDot('output.page_doc_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cef0c729bd31199c0f96ce94b38f287(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'poweredbymoodle, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'poweredbymoodle, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbadd554e70ec7af082056d50928f237(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'version, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'version, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB49b84bde94828f292e94a93fac2af1a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div>
                        {{#str}}version, core{{/str}} {{{ output.moodle_release }}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div>
';
                $buffer .= $indent . '                        ';
                $value = $context->find('str');
                $buffer .= $this->sectionEbadd554e70ec7af082056d50928f237($context, $indent, $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->findDot('output.moodle_release'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c5b13f25850ef66bbdc9c572d120e84(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<footer id="page-footer" class="py-1 bg-inverse">
    <div id="footer">
        <div class="footer-main">
            <div class="container-fluid">
                <div class="row">
                {{#block1}}
                    <div class="{{colclass}}">
                        <div class="infoarea">
                            <div class="footer-logo">
                                <a href="{{config.wwwroot}}/?redirect=0">
                                {{# logourl_footer}}
                                    <img src="{{logourl_footer}}" alt="klass">
                                {{/ logourl_footer}}
                                </a>
                            </div>
                            {{{footnote}}}
                        </div>
                    </div>
                {{/block1}}
                {{# infolink}}
                    <div class="{{colclass}}">
                        <div class="foot-links">
                            <h5>{{s_info}}</h5>
                            <ul>
                            {{{infolink}}}
                            </ul>
                    </div>
                    </div>
                {{/ infolink}}
                {{# contact}}
                    <div class="{{colclass}}">
                        <div class="contact-info">
                            <h5 class="nopadding">{{s_contact_us}}</h5>
                            <p>{{# address}}{{address}}{{/address}}</p>
                            {{# phoneno}}
                            <p><i class="fa fa-phone-square"></i>{{s_phone}} : {{phoneno}}</p>
                            {{/ phoneno}}
                            {{# emailid}}
                            <p><i class="fa fa-envelope"></i>{{s_email}} : <a class="mail-link" href="mailto:{{emailid}}"> {{emailid}}</a></p>
                            {{/ emailid}}
                        </div>
                    </div>
                {{/ contact}}
                {{# socialurl }}
                    <div class="{{colclass}}">
                        <div class="social-media">
                        <h5>{{s_get_social}}</h5>
                        <ul>
                            {{# fburl}}
                                <li class="smedia-01">
                                    <a href="{{fburl}}" target="_blank">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                </li>
                            {{/ fburl}}

                            {{# pinurl}}
                                <li class="smedia-02">
                                    <a href="{{pinurl}}" target="_blank">
                                        <i class="fa fa-pinterest-square"></i>
                                    </a>
                                </li>

                            {{/ pinurl}}
                            {{# twurl}}
                                <li class="smedia-03">
                                    <a href="{{twurl}}" target="_blank">
                                        <i class="fa fa-twitter-square"></i>
                                    </a>
                                </li>
                            {{/ twurl}}

                            {{# gpurl}}
                                <li class="smedia-04">
                                    <a href="{{gpurl}}" target="_blank">
                                    <i class="fa fa-google-plus-square"></i>
                                    </a>
                                </li>
                            {{/ gpurl}}
                            </ul>
                        </div>
                    </div>
                {{/ socialurl }}
                </div>
            </div>
        </div>
        <div class="footer-foot">
            <div class="container-fluid">
                {{# copyright_footer}}
                <p>{{{copyright_footer}}}</p>
                {{/ copyright_footer}}
                {{! Moodle footer debug footer }}
                <div class="footer-content-debugging py-sm-3">
                    <div class="container">
                        {{{ output.debug_footer_html }}}
                    </div>
                </div>
            </div>
        </div>

        {{! Moodle footer help icon popover }}
        <div data-region="footer-container-popover">
            <button class="btn btn-icon bg-secondary icon-no-margin btn-footer-popover" data-action="footer-popover" aria-label="{{#str}}showfooter, theme_boost{{/str}}">
                {{#pix}}e/question, core{{/pix}}
            </button>
        </div>
        <div class="footer-content-popover container" data-region="footer-content-popover">
            {{# output.page_doc_link }}
                <div class="footer-section p-3 border-bottom">
                    {{{ output.page_doc_link }}}
                </div>
            {{/ output.page_doc_link }}

            <div class="footer-section p-3 border-bottom">
                <div class="logininfo">
                    {{{ output.login_info }}}
                </div>
                <div class="tool_usertours-resettourcontainer">
                </div>

                {{{ output.standard_footer_html }}}
                {{{ output.standard_end_of_body_html }}}
            </div>
            <div class="footer-section p-3">
                <div>{{#str}}poweredbymoodle, core{{/str}}</div>
                {{#output.moodle_release}}
                    <div>
                        {{#str}}version, core{{/str}} {{{ output.moodle_release }}}
                    </div>
                {{/output.moodle_release}}
            </div>
        </div>
    </div>
</footer>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<footer id="page-footer" class="py-1 bg-inverse">
';
                $buffer .= $indent . '    <div id="footer">
';
                $buffer .= $indent . '        <div class="footer-main">
';
                $buffer .= $indent . '            <div class="container-fluid">
';
                $buffer .= $indent . '                <div class="row">
';
                $value = $context->find('block1');
                $buffer .= $this->sectionF3d4a52fe88cfa46f731a9f6cf0d01b0($context, $indent, $value);
                $value = $context->find('infolink');
                $buffer .= $this->section4871b3a3b23d869d833a89e823755b06($context, $indent, $value);
                $value = $context->find('contact');
                $buffer .= $this->sectionB0f07502e07dad2093081a5f85fb9a1e($context, $indent, $value);
                $value = $context->find('socialurl');
                $buffer .= $this->section54d2e0288cb23395bd2f7e45ddd42ef2($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="footer-foot">
';
                $buffer .= $indent . '            <div class="container-fluid">
';
                $value = $context->find('copyright_footer');
                $buffer .= $this->section9dde737836ebdd36132f48dbae4d1fc2($context, $indent, $value);
                $buffer .= $indent . '                <div class="footer-content-debugging py-sm-3">
';
                $buffer .= $indent . '                    <div class="container">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->findDot('output.debug_footer_html'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <div data-region="footer-container-popover">
';
                $buffer .= $indent . '            <button class="btn btn-icon bg-secondary icon-no-margin btn-footer-popover" data-action="footer-popover" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section5a5198f26dc6ad191d1a18c314235d65($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                $value = $context->find('pix');
                $buffer .= $this->section46f926dcc61094038ebb3542556c1993($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </button>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="footer-content-popover container" data-region="footer-content-popover">
';
                $value = $context->findDot('output.page_doc_link');
                $buffer .= $this->section26caeb9515b8ad905e22d2f5411bbab4($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div class="footer-section p-3 border-bottom">
';
                $buffer .= $indent . '                <div class="logininfo">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->findDot('output.login_info'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="tool_usertours-resettourcontainer">
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="footer-section p-3">
';
                $buffer .= $indent . '                <div>';
                $value = $context->find('str');
                $buffer .= $this->section3cef0c729bd31199c0f96ce94b38f287($context, $indent, $value);
                $buffer .= '</div>
';
                $value = $context->findDot('output.moodle_release');
                $buffer .= $this->sectionB49b84bde94828f292e94a93fac2af1a($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</footer>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8397d600017f65f298d8425ee0497b7d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
M.util.js_pending(\'theme_boost/loader\');
require([\'theme_boost/loader\', \'theme_boost/drawer\'], function(Loader, Drawer) {
    Drawer.init();
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
                $buffer .= $indent . 'require([\'theme_boost/loader\', \'theme_boost/drawer\'], function(Loader, Drawer) {
';
                $buffer .= $indent . '    Drawer.init();
';
                $buffer .= $indent . '    M.util.js_complete(\'theme_boost/loader\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section44cca7cb7eae6e808ea785e5453e43c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_boost/footer-popover\'], function(FooterPopover) {
    FooterPopover.init();
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'theme_boost/footer-popover\'], function(FooterPopover) {
';
                $buffer .= $indent . '    FooterPopover.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
