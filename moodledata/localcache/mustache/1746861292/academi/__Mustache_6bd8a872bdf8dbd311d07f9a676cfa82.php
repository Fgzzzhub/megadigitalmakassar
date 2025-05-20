<?php

class __Mustache_6bd8a872bdf8dbd311d07f9a676cfa82 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('isInteractive');
        $buffer .= $this->sectionAa2d91d773172ca80da9b1d88e0103fc($context, $indent, $value);
        $value = $context->find('isInteractive');
        if (empty($value)) {
            
            $buffer .= $indent . '    <div
';
            $buffer .= $indent . '    data-region="groupmode-information"
';
            $buffer .= $indent . '    data-activityname="';
            $value = $this->resolveValue($context->find('activityname'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '"
';
            $buffer .= $indent . '    class="groupmode-information d-flex align-items-center justify-content-center icon-no-margin"
';
            $buffer .= $indent . '>
';
            $buffer .= $indent . '    ';
            $value = $context->find('groupicon');
            $buffer .= $this->sectionBe67a45eb42e98accc75b5c263d6b289($context, $indent, $value);
            $buffer .= '
';
            $value = $context->find('groupalt');
            $buffer .= $this->section067133a6a73b7644dd622d3e9e762693($context, $indent, $value);
            $buffer .= $indent . '</div>
';
        }

        return $buffer;
    }

    private function section32db0b198771114975407fc1b32ded20(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' v-parent-focus ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' v-parent-focus ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF44213eb23183c72abace573eaa6224b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{< core/local/dropdown/status}}
            {{$ buttonclasses }}
                {{#autohide}} v-parent-focus {{/autohide}}
                groupmode-information btn btn-icon
            {{/ buttonclasses }}
            {{$ buttoncontent }}
                {{{groupicon}}}
                <span class="groupmode-icon-info">{{groupalt}}</span>
            {{/ buttoncontent }}
        {{/ core/local/dropdown/status}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        ';
                if ($parent = $this->mustache->loadPartial('core/local/dropdown/status')) {
                    $context->pushBlockContext(array(
                        'buttonclasses' => array($this, 'block39540e88f3ebe01831422ae0db90ed2a'),
                        'buttoncontent' => array($this, 'block6ca235ee2518468a745b0d63291d573c'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAa2d91d773172ca80da9b1d88e0103fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#dropwdown}}
        {{< core/local/dropdown/status}}
            {{$ buttonclasses }}
                {{#autohide}} v-parent-focus {{/autohide}}
                groupmode-information btn btn-icon
            {{/ buttonclasses }}
            {{$ buttoncontent }}
                {{{groupicon}}}
                <span class="groupmode-icon-info">{{groupalt}}</span>
            {{/ buttoncontent }}
        {{/ core/local/dropdown/status}}
    {{/dropwdown}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('dropwdown');
                $buffer .= $this->sectionF44213eb23183c72abace573eaa6224b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe67a45eb42e98accc75b5c263d6b289(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{groupicon}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('groupicon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section067133a6a73b7644dd622d3e9e762693(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="groupmode-icon-info ms-1">{{groupalt}}</div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="groupmode-icon-info ms-1">';
                $value = $this->resolveValue($context->find('groupalt'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block39540e88f3ebe01831422ae0db90ed2a($context)
    {
        $indent = $buffer = '';
        $buffer .= '                ';
        $value = $context->find('autohide');
        $buffer .= $this->section32db0b198771114975407fc1b32ded20($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                groupmode-information btn btn-icon
';
    
        return $buffer;
    }

    public function block6ca235ee2518468a745b0d63291d573c($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('groupicon'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                <span class="groupmode-icon-info">';
        $value = $this->resolveValue($context->find('groupalt'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
    
        return $buffer;
    }
}
