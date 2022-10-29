<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Input extends Component
{
    public string $name;

    public string $type;

    public string $label;

    public function __construct(string $name, string $type, string $label)
    {
        $this->name = $name;
        $this->type = $type;
        $this->label = $label;
    }

    public function render() : View
    {
        return view('components.input');
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
