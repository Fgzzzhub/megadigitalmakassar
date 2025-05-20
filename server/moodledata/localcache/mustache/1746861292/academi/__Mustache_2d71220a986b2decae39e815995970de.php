<?php

class __Mustache_2d71220a986b2decae39e815995970de extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="dropdown select-menu" id="';
        $value = $this->resolveValue($context->find('baseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    ';
        $value = $context->find('label');
        $buffer .= $this->section8884209939fcf89f1ea88e78988d557d($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    <div
';
        $buffer .= $indent . '        class="btn dropdown-toggle';
        $value = $context->find('inlinelabel');
        $buffer .= $this->sectionB466402b104184019c3a927661167585($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        role="combobox"
';
        $buffer .= $indent . '        data-bs-toggle="dropdown"
';
        $buffer .= $indent . '        ';
        $value = $context->find('label');
        $buffer .= $this->section21eed3cb7c61228a17106dfafdd2ae8a($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        aria-haspopup="listbox"
';
        $buffer .= $indent . '        aria-expanded="false"
';
        $buffer .= $indent . '        aria-controls="';
        $value = $this->resolveValue($context->find('baseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-listbox"
';
        $buffer .= $indent . '        data-input-element="';
        $value = $this->resolveValue($context->find('baseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-input"
';
        $buffer .= $indent . '        tabindex="0"
';
        $buffer .= $indent . '    >
';
        $value = $context->find('inlinelabel');
        $buffer .= $this->sectionFeb06ad073f2fad460c2df32ce2aa821($context, $indent, $value);
        $value = $context->find('inlinelabel');
        if (empty($value)) {
            
            $value = $context->find('headinglevel');
            $buffer .= $this->section95023f7beae828760689ec8fd6dff1e0($context, $indent, $value);
            $value = $context->find('headinglevel');
            if (empty($value)) {
                
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('selectedoption'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
            }
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <ul class="dropdown-menu" role="listbox" id="';
        $value = $this->resolveValue($context->find('baseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-listbox" ';
        $value = $context->find('label');
        $buffer .= $this->section21eed3cb7c61228a17106dfafdd2ae8a($context, $indent, $value);
        $buffer .= '>
';
        $value = $context->find('options');
        $buffer .= $this->section3b22df7ed565d62f60a205f74276dcb2($context, $indent, $value);
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '    <input type="hidden" name="';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" value="';
        $value = $this->resolveValue($context->find('value'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" id="';
        $value = $this->resolveValue($context->find('baseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-input">
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->sectionF825ad27bbd42c165dc05daff02d3c88($context, $indent, $value);

        return $buffer;
    }

    private function sectionAd20463c348991d5bbd2fb97358ea7c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{name}}="{{value}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8884209939fcf89f1ea88e78988d557d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{^inlinelabel}}
        <label id="{{baseid}}-label"{{#labelattributes}} {{name}}="{{value}}"{{/labelattributes}}>{{label}}</label>
    {{/inlinelabel}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('inlinelabel');
                if (empty($value)) {
                    
                    $buffer .= '
';
                    $buffer .= $indent . '        <label id="';
                    $value = $this->resolveValue($context->find('baseid'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '-label"';
                    $value = $context->find('labelattributes');
                    $buffer .= $this->sectionAd20463c348991d5bbd2fb97358ea7c0($context, $indent, $value);
                    $buffer .= '>';
                    $value = $this->resolveValue($context->find('label'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</label>
';
                    $buffer .= $indent . '    ';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB466402b104184019c3a927661167585(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' d-flex text-start align-items-center p-0';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' d-flex text-start align-items-center p-0';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section21eed3cb7c61228a17106dfafdd2ae8a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria-labelledby="{{baseid}}-label"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'aria-labelledby="';
                $value = $this->resolveValue($context->find('baseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-label"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3eb012444af046e625640b168a051779(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                role="heading"
                aria-level="{{headinglevel}}"
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                role="heading"
';
                $buffer .= $indent . '                aria-level="';
                $value = $this->resolveValue($context->find('headinglevel'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8c1d2fef9b27ea074eb574aea0e2af0b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <label class="d-block m-0 small" id="{{baseid}}-label"{{#labelattributes}} {{name}}="{{value}}"{{/labelattributes}}>{{label}}</label>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <label class="d-block m-0 small" id="';
                $value = $this->resolveValue($context->find('baseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-label"';
                $value = $context->find('labelattributes');
                $buffer .= $this->sectionAd20463c348991d5bbd2fb97358ea7c0($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</label>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFeb06ad073f2fad460c2df32ce2aa821(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div
                class="pe-3 text-truncate"
                {{#headinglevel}}
                role="heading"
                aria-level="{{headinglevel}}"
                {{/headinglevel}}
            >
                {{#label}}
                    <label class="d-block m-0 small" id="{{baseid}}-label"{{#labelattributes}} {{name}}="{{value}}"{{/labelattributes}}>{{label}}</label>
                {{/label}}
                <span class="fw-bold" data-selected-option>
                    {{selectedoption}}
                </span>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div
';
                $buffer .= $indent . '                class="pe-3 text-truncate"
';
                $value = $context->find('headinglevel');
                $buffer .= $this->section3eb012444af046e625640b168a051779($context, $indent, $value);
                $buffer .= $indent . '            >
';
                $value = $context->find('label');
                $buffer .= $this->section8c1d2fef9b27ea074eb574aea0e2af0b($context, $indent, $value);
                $buffer .= $indent . '                <span class="fw-bold" data-selected-option>
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('selectedoption'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                </span>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section95023f7beae828760689ec8fd6dff1e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <span
                    role="heading"
                    aria-level="{{headinglevel}}"
                >
                    {{selectedoption}}
                </span>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <span
';
                $buffer .= $indent . '                    role="heading"
';
                $buffer .= $indent . '                    aria-level="';
                $value = $this->resolveValue($context->find('headinglevel'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                >
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('selectedoption'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section632ba7e5fb0fbfca7204dca1b9bd4ed1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <li role="separator" class="dropdown-divider"></li>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <li role="separator" class="dropdown-divider"></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCe04cacc15f032e9e9f826b761c9b814(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria-selected="true"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'aria-selected="true"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD63e90eb2b71efa8b29ee7e9e6eedeae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{#isdivider}}
                                <li role="separator" class="dropdown-divider"></li>
                            {{/isdivider}}
                            {{^isdivider}}
                                <li class="dropdown-item" role="option" id="{{id}}" data-value="{{value}}" {{#selected}}aria-selected="true"{{/selected}}>
                                    {{name}}
                                </li>
                            {{/isdivider}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('isdivider');
                $buffer .= $this->section632ba7e5fb0fbfca7204dca1b9bd4ed1($context, $indent, $value);
                $value = $context->find('isdivider');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                <li class="dropdown-item" role="option" id="';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" data-value="';
                    $value = $this->resolveValue($context->find('value'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" ';
                    $value = $context->find('selected');
                    $buffer .= $this->sectionCe04cacc15f032e9e9f826b761c9b814($context, $indent, $value);
                    $buffer .= '>
';
                    $buffer .= $indent . '                                    ';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '
';
                    $buffer .= $indent . '                                </li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE0b4989f62c484c07c71d2d4b70b088c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li role="none">
                    <ul role="group" aria-labelledby="{{id}}">
                        <li role="presentation" id="{{id}}">{{name}}</li>
                        {{#options}}
                            {{#isdivider}}
                                <li role="separator" class="dropdown-divider"></li>
                            {{/isdivider}}
                            {{^isdivider}}
                                <li class="dropdown-item" role="option" id="{{id}}" data-value="{{value}}" {{#selected}}aria-selected="true"{{/selected}}>
                                    {{name}}
                                </li>
                            {{/isdivider}}
                        {{/options}}
                    </ul>
                </li>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li role="none">
';
                $buffer .= $indent . '                    <ul role="group" aria-labelledby="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        <li role="presentation" id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</li>
';
                $value = $context->find('options');
                $buffer .= $this->sectionD63e90eb2b71efa8b29ee7e9e6eedeae($context, $indent, $value);
                $buffer .= $indent . '                    </ul>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section24a28eed8d38c4243de8167b26e2e177(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li role="separator" class="dropdown-divider"></li>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li role="separator" class="dropdown-divider"></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3b22df7ed565d62f60a205f74276dcb2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#isgroup}}
                <li role="none">
                    <ul role="group" aria-labelledby="{{id}}">
                        <li role="presentation" id="{{id}}">{{name}}</li>
                        {{#options}}
                            {{#isdivider}}
                                <li role="separator" class="dropdown-divider"></li>
                            {{/isdivider}}
                            {{^isdivider}}
                                <li class="dropdown-item" role="option" id="{{id}}" data-value="{{value}}" {{#selected}}aria-selected="true"{{/selected}}>
                                    {{name}}
                                </li>
                            {{/isdivider}}
                        {{/options}}
                    </ul>
                </li>
            {{/isgroup}}
            {{^isgroup}}
                {{#isdivider}}
                    <li role="separator" class="dropdown-divider"></li>
                {{/isdivider}}
                {{^isdivider}}
                    <li class="dropdown-item" role="option" id="{{id}}" data-value="{{value}}" {{#selected}}aria-selected="true"{{/selected}}>
                        {{name}}
                    </li>
                {{/isdivider}}
            {{/isgroup}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('isgroup');
                $buffer .= $this->sectionE0b4989f62c484c07c71d2d4b70b088c($context, $indent, $value);
                $value = $context->find('isgroup');
                if (empty($value)) {
                    
                    $value = $context->find('isdivider');
                    $buffer .= $this->section24a28eed8d38c4243de8167b26e2e177($context, $indent, $value);
                    $value = $context->find('isdivider');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                    <li class="dropdown-item" role="option" id="';
                        $value = $this->resolveValue($context->find('id'), $context);
                        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                        $buffer .= '" data-value="';
                        $value = $this->resolveValue($context->find('value'), $context);
                        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                        $buffer .= '" ';
                        $value = $context->find('selected');
                        $buffer .= $this->sectionCe04cacc15f032e9e9f826b761c9b814($context, $indent, $value);
                        $buffer .= '>
';
                        $buffer .= $indent . '                        ';
                        $value = $this->resolveValue($context->find('name'), $context);
                        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                        $buffer .= '
';
                        $buffer .= $indent . '                    </li>
';
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF825ad27bbd42c165dc05daff02d3c88(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    var label = document.getElementById(\'{{baseid}}-label\');
    if (label) {
        label.addEventListener(\'click\', function() {
            this.parentElement.querySelector(\'.dropdown-toggle\').focus();
        });
    }
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    var label = document.getElementById(\'';
                $value = $this->resolveValue($context->find('baseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-label\');
';
                $buffer .= $indent . '    if (label) {
';
                $buffer .= $indent . '        label.addEventListener(\'click\', function() {
';
                $buffer .= $indent . '            this.parentElement.querySelector(\'.dropdown-toggle\').focus();
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    }
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
