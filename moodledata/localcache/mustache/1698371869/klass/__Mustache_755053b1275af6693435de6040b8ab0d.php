<?php

class __Mustache_755053b1275af6693435de6040b8ab0d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<tr class="preference-row" data-region="preference-row" data-preference-key="';
        $value = $this->resolveValue($context->find('preferencekey'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <td class="preference-name">';
        $value = $this->resolveValue($context->find('displayname'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</td>
';
        $value = $context->find('processors');
        $buffer .= $this->section9c73b743d07f45cc4d113146be760958($context, $indent, $value);
        $buffer .= $indent . '</tr>
';

        return $buffer;
    }

    private function section4ecc0ab9186499b2f268237f55817dc7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="dimmed_text" title="{{lockedlabel}}">{{{lockedmessage}}}</div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="dimmed_text" title="';
                $value = $this->resolveValue($context->find('lockedlabel'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('lockedmessage'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section05828eb925ccd1e324128320ddd16fea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' disabled';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' disabled';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7f9a54cf7dec731721abbf0255e3e5bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' disabled="true" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' disabled="true" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section51d7c9c652ced0161cb587bacd669266(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'checked';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'checked';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9c73b743d07f45cc4d113146be760958(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <td {{^userconfigured}}class="disabled"{{/userconfigured}} data-processor-name="{{name}}">
            {{#locked}}
                <div class="dimmed_text" title="{{lockedlabel}}">{{{lockedmessage}}}</div>
            {{/locked}}
            {{^locked}}
                <form>
                    <div class="preference-state" data-preference="{{{preferencekey}}}_{{{name}}}">
                        <div class="custom-control custom-switch">
                            <input type="checkbox"
                                id="{{{preferencekey}}}_{{{name}}}"
                                name="{{{preferencekey}}}_{{{name}}}"
                                class="custom-control-input notification_enabled{{#disableall}} disabled{{/disableall}}"
                                {{#disableall}} disabled="true" {{/disableall}}
                                {{#enabled}}checked{{/enabled}}
                            >
                            <label for="{{{preferencekey}}}_{{{name}}}" class="custom-control-label"
                                title="{{enabledlabel}}" >
                            </label>
                        </div>
                    </div>
                </form>
            {{/locked}}
        </td>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <td ';
                $value = $context->find('userconfigured');
                if (empty($value)) {
                    
                    $buffer .= 'class="disabled"';
                }
                $buffer .= ' data-processor-name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('locked');
                $buffer .= $this->section4ecc0ab9186499b2f268237f55817dc7($context, $indent, $value);
                $value = $context->find('locked');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <form>
';
                    $buffer .= $indent . '                    <div class="preference-state" data-preference="';
                    $value = $this->resolveValue($context->find('preferencekey'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '_';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '                        <div class="custom-control custom-switch">
';
                    $buffer .= $indent . '                            <input type="checkbox"
';
                    $buffer .= $indent . '                                id="';
                    $value = $this->resolveValue($context->find('preferencekey'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '_';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                name="';
                    $value = $this->resolveValue($context->find('preferencekey'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '_';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                class="custom-control-input notification_enabled';
                    $value = $context->find('disableall');
                    $buffer .= $this->section05828eb925ccd1e324128320ddd16fea($context, $indent, $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                ';
                    $value = $context->find('disableall');
                    $buffer .= $this->section7f9a54cf7dec731721abbf0255e3e5bb($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                                ';
                    $value = $context->find('enabled');
                    $buffer .= $this->section51d7c9c652ced0161cb587bacd669266($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                            >
';
                    $buffer .= $indent . '                            <label for="';
                    $value = $this->resolveValue($context->find('preferencekey'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '_';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '" class="custom-control-label"
';
                    $buffer .= $indent . '                                title="';
                    $value = $this->resolveValue($context->find('enabledlabel'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" >
';
                    $buffer .= $indent . '                            </label>
';
                    $buffer .= $indent . '                        </div>
';
                    $buffer .= $indent . '                    </div>
';
                    $buffer .= $indent . '                </form>
';
                }
                $buffer .= $indent . '        </td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
