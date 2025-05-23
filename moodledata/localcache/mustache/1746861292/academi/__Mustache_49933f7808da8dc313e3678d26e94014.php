<?php

class __Mustache_49933f7808da8dc313e3678d26e94014 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="core-filter-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="filter-group my-2 p-2 bg-light border-radius border" data-table-region="';
        $value = $this->resolveValue($context->find('tableregionid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-table-course-id="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-filterverb="2">
';
        if ($partial = $this->mustache->loadPartial('core/datafilter/filter_match')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div data-filterregion="filters">
';
        if ($partial = $this->mustache->loadPartial('core/datafilter/filter_row')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="d-flex" data-filterregion="actions">
';
        $buffer .= $indent . '        &nbsp;
';
        $buffer .= $indent . '        <button type="button" class="btn btn-link text-reset" data-filteraction="add">
';
        $buffer .= $indent . '            ';
        $value = $context->find('pix');
        $buffer .= $this->section22ee337edf54458589e0dbd973a89fe1($context, $indent, $value);
        $buffer .= '<span class="ps-3">';
        $value = $context->find('str');
        $buffer .= $this->section9f9dc7d43a97be21504a672741f55f49($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        </button>
';
        $value = $context->find('showallbutton');
        $buffer .= $this->section8018614546bd938a7d614204f36bfd74($context, $indent, $value);
        $buffer .= $indent . '        <button data-filteraction="reset" type="button" class="btn btn-secondary ';
        $value = $context->find('showallbutton');
        if (empty($value)) {
            
            $buffer .= 'ms-auto';
        }
        $buffer .= ' me-2">';
        $value = $context->find('str');
        $buffer .= $this->sectionE550d61cd11549b2619f8efbfe0a720d($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '        <button data-filteraction="apply" type="submit" class="btn btn-primary">';
        $value = $context->find('str');
        $buffer .= $this->section0e692956fee884d8b737113618bf432e($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('core/datafilter/filter_types')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section22ee337edf54458589e0dbd973a89fe1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/add';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/add';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f9dc7d43a97be21504a672741f55f49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addcondition';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'addcondition';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7860f416e2235f5b6692b15b7092cff6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'showall';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'showall';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8018614546bd938a7d614204f36bfd74(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <button data-filteraction="showall" data-perpage="{{ perpage }}" data-status="0" type="button" class="btn btn-light ms-auto me-2">{{#str}}showall{{/str}}</button>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <button data-filteraction="showall" data-perpage="';
                $value = $this->resolveValue($context->find('perpage'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-status="0" type="button" class="btn btn-light ms-auto me-2">';
                $value = $context->find('str');
                $buffer .= $this->section7860f416e2235f5b6692b15b7092cff6($context, $indent, $value);
                $buffer .= '</button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE550d61cd11549b2619f8efbfe0a720d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'clearfilters';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'clearfilters';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0e692956fee884d8b737113618bf432e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'applyfilters';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'applyfilters';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
