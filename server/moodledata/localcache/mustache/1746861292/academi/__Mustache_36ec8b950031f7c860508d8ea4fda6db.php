<?php

class __Mustache_36ec8b950031f7c860508d8ea4fda6db extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('haspages');
        $buffer .= $this->sectionA2a815ef21a3d07c7d70e83723d8c94f($context, $indent, $value);

        return $buffer;
    }

    private function section645524493d529813a1222916ebeb2ac7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'previouspage, moodle';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'previouspage, moodle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a43447a36c4d1a3d7e42956090a160d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="page-item" data-page-number="{{page}}">
                    <a href="{{url}}" class="page-link">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="visually-hidden">{{#str}}previouspage, moodle{{/str}}</span>
                    </a>
                </li>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li class="page-item" data-page-number="';
                $value = $this->resolveValue($context->find('page'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="page-link">
';
                $buffer .= $indent . '                        <span aria-hidden="true">&laquo;</span>
';
                $buffer .= $indent . '                        <span class="visually-hidden">';
                $value = $context->find('str');
                $buffer .= $this->section645524493d529813a1222916ebeb2ac7($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section90b252dbdd6f7779dcec8174398852c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'pagea, moodle, {{page}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'pagea, moodle, ';
                $value = $this->resolveValue($context->find('page'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4ccc7fccd2d0aedd6cce3ca416b5df6b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="page-item" data-page-number="{{page}}">
                    <a href="{{url}}" class="page-link">
                        <span aria-hidden="true">{{page}}</span>
                        <span class="visually-hidden">{{#str}}pagea, moodle, {{page}}{{/str}}</span>
                    </a>
                </li>
                <li class="page-item disabled" data-page-number="{{page}}">
                    <span class="page-link">&hellip;</span>
                </li>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li class="page-item" data-page-number="';
                $value = $this->resolveValue($context->find('page'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="page-link">
';
                $buffer .= $indent . '                        <span aria-hidden="true">';
                $value = $this->resolveValue($context->find('page'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '                        <span class="visually-hidden">';
                $value = $context->find('str');
                $buffer .= $this->section90b252dbdd6f7779dcec8174398852c0($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </li>
';
                $buffer .= $indent . '                <li class="page-item disabled" data-page-number="';
                $value = $this->resolveValue($context->find('page'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <span class="page-link">&hellip;</span>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
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

    private function section6dabfc6e3de0f7ff4baa136bb16e58d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria-current="page"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'aria-current="page"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD617497492be218c246d7da693d7b71f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="page-item {{#active}}active{{/active}}" data-page-number="{{page}}">
                    <a href="{{#url}}{{.}}{{/url}}{{^url}}#{{/url}}" class="page-link" {{#active}}aria-current="page"{{/active}}>
                        <span aria-hidden="true">{{page}}</span>
                        <span class="visually-hidden">{{#str}}pagea, moodle, {{page}}{{/str}}</span>
                    </a>
                </li>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li class="page-item ';
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '" data-page-number="';
                $value = $this->resolveValue($context->find('page'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <a href="';
                $value = $context->find('url');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $value = $context->find('url');
                if (empty($value)) {
                    
                    $buffer .= '#';
                }
                $buffer .= '" class="page-link" ';
                $value = $context->find('active');
                $buffer .= $this->section6dabfc6e3de0f7ff4baa136bb16e58d0($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                        <span aria-hidden="true">';
                $value = $this->resolveValue($context->find('page'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '                        <span class="visually-hidden">';
                $value = $context->find('str');
                $buffer .= $this->section90b252dbdd6f7779dcec8174398852c0($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8e597133c3bad3df6e8d664aab0b24f6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="page-item disabled" data-page-number="{{page}}">
                    <span class="page-link">&hellip;</span>
                </li>
                <li class="page-item" data-page-number="{{page}}">
                    <a href="{{url}}" class="page-link">
                        <span aria-hidden="true">{{page}}</span>
                        <span class="visually-hidden">{{#str}}pagea, moodle, {{page}}{{/str}}</span>
                    </a>
                </li>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li class="page-item disabled" data-page-number="';
                $value = $this->resolveValue($context->find('page'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <span class="page-link">&hellip;</span>
';
                $buffer .= $indent . '                </li>
';
                $buffer .= $indent . '                <li class="page-item" data-page-number="';
                $value = $this->resolveValue($context->find('page'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="page-link">
';
                $buffer .= $indent . '                        <span aria-hidden="true">';
                $value = $this->resolveValue($context->find('page'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '                        <span class="visually-hidden">';
                $value = $context->find('str');
                $buffer .= $this->section90b252dbdd6f7779dcec8174398852c0($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD30ff9b9dd5fef1da6e8aab09ea5dfed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nextpage, moodle';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nextpage, moodle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1e999f83e87a4050814c6a16e74ac47f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="page-item" data-page-number="{{page}}">
                    <a href="{{url}}" class="page-link">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="visually-hidden">{{#str}}nextpage, moodle{{/str}}</span>
                    </a>
                </li>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li class="page-item" data-page-number="';
                $value = $this->resolveValue($context->find('page'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="page-link">
';
                $buffer .= $indent . '                        <span aria-hidden="true">&raquo;</span>
';
                $buffer .= $indent . '                        <span class="visually-hidden">';
                $value = $context->find('str');
                $buffer .= $this->sectionD30ff9b9dd5fef1da6e8aab09ea5dfed($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA2a815ef21a3d07c7d70e83723d8c94f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <nav aria-label="{{label}}" class="pagination pagination-centered justify-content-center">
        <ul class="mt-1 pagination " data-page-size="{{pagesize}}">
            {{#previous}}
                <li class="page-item" data-page-number="{{page}}">
                    <a href="{{url}}" class="page-link">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="visually-hidden">{{#str}}previouspage, moodle{{/str}}</span>
                    </a>
                </li>
            {{/previous}}
            {{#first}}
                <li class="page-item" data-page-number="{{page}}">
                    <a href="{{url}}" class="page-link">
                        <span aria-hidden="true">{{page}}</span>
                        <span class="visually-hidden">{{#str}}pagea, moodle, {{page}}{{/str}}</span>
                    </a>
                </li>
                <li class="page-item disabled" data-page-number="{{page}}">
                    <span class="page-link">&hellip;</span>
                </li>
            {{/first}}
            {{#pages}}
                <li class="page-item {{#active}}active{{/active}}" data-page-number="{{page}}">
                    <a href="{{#url}}{{.}}{{/url}}{{^url}}#{{/url}}" class="page-link" {{#active}}aria-current="page"{{/active}}>
                        <span aria-hidden="true">{{page}}</span>
                        <span class="visually-hidden">{{#str}}pagea, moodle, {{page}}{{/str}}</span>
                    </a>
                </li>
            {{/pages}}
            {{#last}}
                <li class="page-item disabled" data-page-number="{{page}}">
                    <span class="page-link">&hellip;</span>
                </li>
                <li class="page-item" data-page-number="{{page}}">
                    <a href="{{url}}" class="page-link">
                        <span aria-hidden="true">{{page}}</span>
                        <span class="visually-hidden">{{#str}}pagea, moodle, {{page}}{{/str}}</span>
                    </a>
                </li>
            {{/last}}
            {{#next}}
                <li class="page-item" data-page-number="{{page}}">
                    <a href="{{url}}" class="page-link">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="visually-hidden">{{#str}}nextpage, moodle{{/str}}</span>
                    </a>
                </li>
            {{/next}}
        </ul>
    </nav>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <nav aria-label="';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="pagination pagination-centered justify-content-center">
';
                $buffer .= $indent . '        <ul class="mt-1 pagination " data-page-size="';
                $value = $this->resolveValue($context->find('pagesize'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('previous');
                $buffer .= $this->section8a43447a36c4d1a3d7e42956090a160d($context, $indent, $value);
                $value = $context->find('first');
                $buffer .= $this->section4ccc7fccd2d0aedd6cce3ca416b5df6b($context, $indent, $value);
                $value = $context->find('pages');
                $buffer .= $this->sectionD617497492be218c246d7da693d7b71f($context, $indent, $value);
                $value = $context->find('last');
                $buffer .= $this->section8e597133c3bad3df6e8d664aab0b24f6($context, $indent, $value);
                $value = $context->find('next');
                $buffer .= $this->section1e999f83e87a4050814c6a16e74ac47f($context, $indent, $value);
                $buffer .= $indent . '        </ul>
';
                $buffer .= $indent . '    </nav>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
