<?php

class __Mustache_d2dfc5e027d90453133efdbc4661a6c8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="divider border-start h-75 align-self-center ms-1 me-3"></div>
';
        $buffer .= $indent . '<form action="';
        $value = $this->resolveValue($context->find('legacyseturl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" method="post" class="d-flex align-items-center editmode-switch-form">
';
        $buffer .= $indent . '    <div class="input-group">
';
        $buffer .= $indent . '        <label class="me-2 mb-0 form-check-label ';
        $value = $context->find('checked');
        $buffer .= $this->section5fa6691bbd0b5caf3b13e18ede787532($context, $indent, $value);
        $buffer .= '" for="';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-editingswitch">
';
        $buffer .= $indent . '            ';
        $value = $context->find('str');
        $buffer .= $this->section8eb26301b7adb5b471f5b42058e0700c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </label>
';
        $buffer .= $indent . '        <div class="form-check form-switch">
';
        $buffer .= $indent . '            <input type="checkbox"';
        $buffer .= ' name="setmode"';
        $value = $context->find('checked');
        $buffer .= $this->section0a3e624674db165dbdcbf1cae9dc3f50($context, $indent, $value);
        $buffer .= ' class="form-check-input"';
        $buffer .= ' id="';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-editingswitch"';
        $buffer .= ' data-context="';
        $value = $this->resolveValue($context->find('pagecontextid'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"';
        $buffer .= ' data-pageurl="';
        $value = $this->resolveValue($context->find('pageurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"';
        $buffer .= '>
';
        $buffer .= $indent . '            <span class="form-check-label">&nbsp;</span>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <input type="hidden" name="sesskey" value="';
        $value = $this->resolveValue($context->find('sesskey'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <input type="hidden" name="pageurl" value="';
        $value = $this->resolveValue($context->find('pageurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <input type="hidden" name="context" value="';
        $value = $this->resolveValue($context->find('pagecontextid'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <noscript>
';
        $buffer .= $indent . '        <input type="submit" value="';
        $value = $context->find('str');
        $buffer .= $this->section784055b0413ba2959bcc3ebc23efe456($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '    </noscript>
';
        $buffer .= $indent . '</form>
';
        $value = $context->find('js');
        $buffer .= $this->sectionE9c6c9193574ed0e19a9788225ebd476($context, $indent, $value);

        return $buffer;
    }

    private function section5fa6691bbd0b5caf3b13e18ede787532(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'text-primary';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'text-primary';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8eb26301b7adb5b471f5b42058e0700c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' editmode ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' editmode ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a3e624674db165dbdcbf1cae9dc3f50(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{!
                    }} checked{{!
                }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' checked';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section784055b0413ba2959bcc3ebc23efe456(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'setmode, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'setmode, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE9c6c9193574ed0e19a9788225ebd476(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'core/edit_switch\'], function(editSwitch) {
    editSwitch.init(\'{{uniqid}}-editingswitch\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'core/edit_switch\'], function(editSwitch) {
';
                $buffer .= $indent . '    editSwitch.init(\'';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-editingswitch\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
