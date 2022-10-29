<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class InputDropdown extends Component
{
    public string $name;

    public string $label;

    public array $elements;

    public function __construct(string $name, string $label, array $elements)
    {
        $this->name = $name;
        $this->label = $label;
        $this->elements = $elements;
    }

    public function render() : View
    {
        return view('components.input-dropdown');
    }

    public function inputValue() : string
    {
        if (old($this->name) !== null) {
            return old($this->name);
        } else if ($this->attributes->has('value')) {
            return $this->attributes->get('value');
        }

        return '';
    }
}
