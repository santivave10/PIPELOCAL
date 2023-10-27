<?php

class __Mustache_81aaf4ed32df24667f2c248abe43849c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('hasnotifications');
        $buffer .= $this->section7c757270777db5498146f81d4079c061($context, $indent, $value);

        return $buffer;
    }

    private function section78b54502fbbd9e59dca202e432eff720(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> message/notification_preferences_component_notification }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('message/notification_preferences_component_notification')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7c757270777db5498146f81d4079c061(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <tr>
        <th colspan="{{{colspan}}}">{{{displayname}}}</th>
    </tr>
    {{#notifications}}
        {{> message/notification_preferences_component_notification }}
    {{/notifications}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <tr>
';
                $buffer .= $indent . '        <th colspan="';
                $value = $this->resolveValue($context->find('colspan'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('displayname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '    </tr>
';
                $value = $context->find('notifications');
                $buffer .= $this->section78b54502fbbd9e59dca202e432eff720($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
