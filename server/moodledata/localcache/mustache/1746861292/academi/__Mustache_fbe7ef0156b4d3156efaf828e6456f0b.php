<?php

class __Mustache_fbe7ef0156b4d3156efaf828e6456f0b extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="filter pb-3 mb-3" data-filter-for="';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="filter-header d-flex align-items-start justify-content-between">
';
        $buffer .= $indent . '        <div class="filter-name text-truncate">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';

        return $buffer;
    }
}
