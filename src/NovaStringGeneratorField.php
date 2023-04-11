<?php

namespace Scouser03\NovaStringGeneratorField;

use Laravel\Nova\Fields\Field;

class NovaStringGeneratorField extends Field
{
    
    public $component = 'nova-string-generator-field';

    
    public function length(int $length)
    {
        return $this->withMeta([
            'length' => $length,
        ]);
    }

    
    public function excludeRules(array $rules)
    {
        return $this->withMeta([
            'exclude_rules' => $rules,
        ]);
    }
}
