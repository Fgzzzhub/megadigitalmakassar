<?php

class __Mustache_549ed2d4c815930b92e1bd66a3d70a0f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="course-overview-page">
';
        $value = $context->find('elements');
        $buffer .= $this->sectionCafc3a8ef53efa4ba2780d84d3a0f270($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->sectionDfd107cfe6d601bdb94f7e42689e6463($context, $indent, $value);

        return $buffer;
    }

    private function section1877ec06c3d30ec0d4d1ee308f082e79(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{{preloadedcontent}}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('preloadedcontent'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCd20de230b08425b920ceb92b9027404(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#preloadedcontent}} {{{preloadedcontent}}} {{/preloadedcontent}}
                {{^preloadedcontent}}
                <div
                    data-region="loading-icon-container"
                    data-courseid="{{courseid}}"
                    data-contextid="{{contextid}}"
                    data-modname="{{shortname}}"
                >
                    {{> core/loading }}
                </div>
                {{/preloadedcontent}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '                ';
                $value = $context->find('preloadedcontent');
                $buffer .= $this->section1877ec06c3d30ec0d4d1ee308f082e79($context, $indent, $value);
                $buffer .= '
';
                $value = $context->find('preloadedcontent');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <div
';
                    $buffer .= $indent . '                    data-region="loading-icon-container"
';
                    $buffer .= $indent . '                    data-courseid="';
                    $value = $this->resolveValue($context->find('courseid'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"
';
                    $buffer .= $indent . '                    data-contextid="';
                    $value = $this->resolveValue($context->find('contextid'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"
';
                    $buffer .= $indent . '                    data-modname="';
                    $value = $this->resolveValue($context->find('shortname'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"
';
                    $buffer .= $indent . '                >
';
                    if ($partial = $this->mustache->loadPartial('core/loading')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                    ');
                    }
                    $buffer .= $indent . '                </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCafc3a8ef53efa4ba2780d84d3a0f270(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{<core/local/collapsable_section}}
        {{$titlecontent}}{{{icon}}} {{name}}{{/titlecontent}}
        {{$elementid}}{{shortname}}_overview{{/elementid}}
        {{$extraclasses}}border border-1 rounded-3 p-3{{/extraclasses}}
        {{$sectioncontent}}
            {{#fragment}}
                {{#preloadedcontent}} {{{preloadedcontent}}} {{/preloadedcontent}}
                {{^preloadedcontent}}
                <div
                    data-region="loading-icon-container"
                    data-courseid="{{courseid}}"
                    data-contextid="{{contextid}}"
                    data-modname="{{shortname}}"
                >
                    {{> core/loading }}
                </div>
                {{/preloadedcontent}}
            {{/fragment}}
        {{/sectioncontent}}
    {{/core/local/collapsable_section}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    ';
                if ($parent = $this->mustache->loadPartial('core/local/collapsable_section')) {
                    $context->pushBlockContext(array(
                        'titlecontent' => array($this, 'blockA194365a7ade9b9c352300388c333031'),
                        'elementid' => array($this, 'block903f86e6c111cab403278d5e89d7ec99'),
                        'extraclasses' => array($this, 'blockA0e60b41f57b4b6063db71828c2dd0d3'),
                        'sectioncontent' => array($this, 'block415c99c9465734c32d54867b613ec29e'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDfd107cfe6d601bdb94f7e42689e6463(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'core_course/local/overview/overviewpage\'], function(overviewpage) {
    overviewpage.init(\'#course-overview-page\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'core_course/local/overview/overviewpage\'], function(overviewpage) {
';
                $buffer .= $indent . '    overviewpage.init(\'#course-overview-page\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockA194365a7ade9b9c352300388c333031($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('icon'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ' ';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
    
        return $buffer;
    }

    public function block903f86e6c111cab403278d5e89d7ec99($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('shortname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '_overview';
    
        return $buffer;
    }

    public function blockA0e60b41f57b4b6063db71828c2dd0d3($context)
    {
        $indent = $buffer = '';
        $buffer .= 'border border-1 rounded-3 p-3';
    
        return $buffer;
    }

    public function block415c99c9465734c32d54867b613ec29e($context)
    {
        $indent = $buffer = '';
        $value = $context->find('fragment');
        $buffer .= $this->sectionCd20de230b08425b920ceb92b9027404($context, $indent, $value);
    
        return $buffer;
    }
}
