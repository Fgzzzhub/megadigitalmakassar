<?php

class __Mustache_f79d7022d9f696006864c1710a6ca4ac extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core_form/element-template')) {
            $context->pushBlockContext(array(
                'element' => array($this, 'block058178884ee948b920f0f7c45d8b3f82'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }


    public function block058178884ee948b920f0f7c45d8b3f82($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <div class="form-control-static ';
        $value = $this->resolveValue($context->findDot('element.extraclasses'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" data-name="';
        $value = $this->resolveValue($context->findDot('element.name'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('element.html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
    
        return $buffer;
    }
}
