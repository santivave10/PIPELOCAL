<?php

class __Mustache_4e08ea6afd87768c60644d2fcffc159c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<time id="time-';
        $blockFunction = $context->findInBlock('elementid');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $this->resolveValue($context->find('uniqid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        }
        $buffer .= '" class="';
        $blockFunction = $context->findInBlock('elementclass');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $this->resolveValue($context->find('timeclass'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        }
        $buffer .= '" datetime="';
        $blockFunction = $context->findInBlock('datetimeval');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $this->resolveValue($context->find('datetime'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        }
        $buffer .= '"
';
        $buffer .= $indent . '      data-timestamp="';
        $blockFunction = $context->findInBlock('timestampval');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $this->resolveValue($context->find('timestamp'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        }
        $buffer .= '"
';
        $buffer .= $indent . '      data-datetimeformat="';
        $blockFunction = $context->findInBlock('datetimeformatval');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $context->find('datetimeformat');
            $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
            $value = $context->find('datetimeformat');
            if (empty($value)) {
                
                $buffer .= '%Y-%m-%dT%H:%M%z';
            }
        }
        $buffer .= '">
';
        $blockFunction = $context->findInBlock('datedisplay');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $buffer .= $indent . '        ';
            $value = $context->find('userdate');
            $buffer .= $this->sectionEf4f393a23aa6725f8bf212fa08b3697($context, $indent, $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '</time>
';
        $value = $context->find('js');
        $buffer .= $this->section3944f4fcb885ed7daa7cfebedb56ac49($context, $indent, $value);

        return $buffer;
    }

    private function sectionE6922901afa7b60d3ce7403587f8d6c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{.}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf4f393a23aa6725f8bf212fa08b3697(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{$timestampval}}{{timestamp}}{{/timestampval}}, {{$userdateformatval}}{{userdateformat}}{{/userdateformatval}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $blockFunction = $context->findInBlock('timestampval');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $value = $this->resolveValue($context->find('timestamp'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                }
                $buffer .= ', ';
                $blockFunction = $context->findInBlock('userdateformatval');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $value = $this->resolveValue($context->find('userdateformat'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                }
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3944f4fcb885ed7daa7cfebedb56ac49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    /** Fetches the formatted date/time for the time element\'s datetime attribute. */
    require([\'core/user_date\'], function(UserDate) {
        var root = document.getElementById(\'time-{{$elementid}}{{uniqid}}{{/elementid}}\');
        // Fetch value for the datetime attribute using core/user_date, if it\'s not available.
        if (!root.getAttribute(\'datetime\')) {
            var dateTimeFormat = root.getAttribute(\'data-datetimeformat\');
            var timestamp = root.getAttribute(\'data-timestamp\');

            if (!dateTimeFormat.match(/%(?![YmdHMSzZ])./g)) {
                var zeroPad = function(nNum, nPad) {
                    return ((Math.pow(10, nPad) + nNum) + \'\').slice(1);
                };

                var date = new Date(timestamp * 1000);

                var datetime = dateTimeFormat.replace(/%./g, function(sMatch) {
                    return (({
                        \'%Y\': date.getFullYear(),
                        \'%m\': zeroPad(date.getMonth() + 1, 2),
                        \'%d\': zeroPad(date.getDate(), 2),
                        \'%H\': zeroPad(date.getHours(), 2),
                        \'%M\': zeroPad(date.getMinutes(), 2),
                        \'%S\': zeroPad(date.getSeconds(), 2),
                        \'%z\': date.toTimeString().replace(/.+GMT([+-]\\d+).+/, \'$1\'),
                        \'%Z\': date.toTimeString().replace(/.+\\((.+?)\\)$/, \'$1\')
                    }[sMatch] || \'\') + \'\') || sMatch;
                });
                root.setAttribute(\'datetime\', datetime);
            }  else {
                // Otherwise, use core/user_date.
                var timestamps = [{
                    timestamp: timestamp,
                    format: dateTimeFormat,
                    type: \'gregorian\',
                    fixday: 0,
                    fixhour: 0
                }];
                UserDate.get(timestamps).done(function(dates) {
                    var datetime = dates.pop();
                    root.setAttribute(\'datetime\', datetime);
                });
            }
        }
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    /** Fetches the formatted date/time for the time element\'s datetime attribute. */
';
                $buffer .= $indent . '    require([\'core/user_date\'], function(UserDate) {
';
                $buffer .= $indent . '        var root = document.getElementById(\'time-';
                $blockFunction = $context->findInBlock('elementid');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $value = $this->resolveValue($context->find('uniqid'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                }
                $buffer .= '\');
';
                $buffer .= $indent . '        // Fetch value for the datetime attribute using core/user_date, if it\'s not available.
';
                $buffer .= $indent . '        if (!root.getAttribute(\'datetime\')) {
';
                $buffer .= $indent . '            var dateTimeFormat = root.getAttribute(\'data-datetimeformat\');
';
                $buffer .= $indent . '            var timestamp = root.getAttribute(\'data-timestamp\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            if (!dateTimeFormat.match(/%(?![YmdHMSzZ])./g)) {
';
                $buffer .= $indent . '                var zeroPad = function(nNum, nPad) {
';
                $buffer .= $indent . '                    return ((Math.pow(10, nPad) + nNum) + \'\').slice(1);
';
                $buffer .= $indent . '                };
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                var date = new Date(timestamp * 1000);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                var datetime = dateTimeFormat.replace(/%./g, function(sMatch) {
';
                $buffer .= $indent . '                    return (({
';
                $buffer .= $indent . '                        \'%Y\': date.getFullYear(),
';
                $buffer .= $indent . '                        \'%m\': zeroPad(date.getMonth() + 1, 2),
';
                $buffer .= $indent . '                        \'%d\': zeroPad(date.getDate(), 2),
';
                $buffer .= $indent . '                        \'%H\': zeroPad(date.getHours(), 2),
';
                $buffer .= $indent . '                        \'%M\': zeroPad(date.getMinutes(), 2),
';
                $buffer .= $indent . '                        \'%S\': zeroPad(date.getSeconds(), 2),
';
                $buffer .= $indent . '                        \'%z\': date.toTimeString().replace(/.+GMT([+-]\\d+).+/, \'$1\'),
';
                $buffer .= $indent . '                        \'%Z\': date.toTimeString().replace(/.+\\((.+?)\\)$/, \'$1\')
';
                $buffer .= $indent . '                    }[sMatch] || \'\') + \'\') || sMatch;
';
                $buffer .= $indent . '                });
';
                $buffer .= $indent . '                root.setAttribute(\'datetime\', datetime);
';
                $buffer .= $indent . '            }  else {
';
                $buffer .= $indent . '                // Otherwise, use core/user_date.
';
                $buffer .= $indent . '                var timestamps = [{
';
                $buffer .= $indent . '                    timestamp: timestamp,
';
                $buffer .= $indent . '                    format: dateTimeFormat,
';
                $buffer .= $indent . '                    type: \'gregorian\',
';
                $buffer .= $indent . '                    fixday: 0,
';
                $buffer .= $indent . '                    fixhour: 0
';
                $buffer .= $indent . '                }];
';
                $buffer .= $indent . '                UserDate.get(timestamps).done(function(dates) {
';
                $buffer .= $indent . '                    var datetime = dates.pop();
';
                $buffer .= $indent . '                    root.setAttribute(\'datetime\', datetime);
';
                $buffer .= $indent . '                });
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
