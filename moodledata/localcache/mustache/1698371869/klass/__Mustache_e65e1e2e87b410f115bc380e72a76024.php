<?php

class __Mustache_e65e1e2e87b410f115bc380e72a76024 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="preferences-page-container">
';
        $buffer .= $indent . '    <h2>';
        $value = $context->find('str');
        $buffer .= $this->section5c109cc11ee011897152888aaf4973ba($context, $indent, $value);
        $buffer .= '</h2>
';
        $buffer .= $indent . '    <div class="checkbox-container" data-region="disable-notification-container">
';
        $buffer .= $indent . '        <input id="disable-notifications"
';
        $buffer .= $indent . '           type="checkbox"
';
        $buffer .= $indent . '           data-disable-notifications
';
        $buffer .= $indent . '           ';
        $value = $context->find('disableall');
        $buffer .= $this->section51d7c9c652ced0161cb587bacd669266($context, $indent, $value);
        $buffer .= ' />
';
        $buffer .= $indent . '        <label for="disable-notifications">';
        $value = $context->find('str');
        $buffer .= $this->section690c937fc28e77bdf109f71a9dae4665($context, $indent, $value);
        $buffer .= '</label>
';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="preferences-container ';
        $value = $context->find('disableall');
        $buffer .= $this->sectionC87198b06c7ce18b3aeed72afb34afb9($context, $indent, $value);
        $buffer .= '" data-user-id="';
        $value = $this->resolveValue($context->find('userid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '        <table class="table preference-table">
';
        $buffer .= $indent . '            <thead>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <th>';
        $value = $this->resolveValue($context->find('displayname'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</th>
';
        $value = $context->find('processors');
        $buffer .= $this->sectionC97e2274dc778bf1ec6f9d937c51e06b($context, $indent, $value);
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '            </thead>
';
        $buffer .= $indent . '            <tbody>
';
        $value = $context->find('components');
        $buffer .= $this->sectionFa090a290b0bc47a48e5668a84ec3924($context, $indent, $value);
        $buffer .= $indent . '            </tbody>
';
        $buffer .= $indent . '        </table>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section8653a41ee95043df0a525bce4623f8f8($context, $indent, $value);

        return $buffer;
    }

    private function section5c109cc11ee011897152888aaf4973ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notificationpreferences, message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' notificationpreferences, message ';
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

    private function section690c937fc28e77bdf109f71a9dae4665(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' disableall, message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' disableall, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC87198b06c7ce18b3aeed72afb34afb9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'disabled';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'disabled';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC97e2274dc778bf1ec6f9d937c51e06b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{> message/notification_preferences_processor }}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('message/notification_preferences_processor')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa090a290b0bc47a48e5668a84ec3924(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> message/notification_preferences_component }}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('message/notification_preferences_component')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8653a41ee95043df0a525bce4623f8f8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'core_message/preferences_notifications_list_controller\'],
    function($, Controller) {

    new Controller($(\'.preferences-container\'));
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'jquery\', \'core_message/preferences_notifications_list_controller\'],
';
                $buffer .= $indent . '    function($, Controller) {
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    new Controller($(\'.preferences-container\'));
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
