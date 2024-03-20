<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    public $class;
    public $name;
    public $type;
    public $label;
    public $placeholder;

    /**
     * Create a new component instance.
     */
    public function __construct($label, $name, $type, $placeholder)
    {
        $this->$label = $label;
        $this->$name = $name;
        $this->$type = $type;
        $this->$placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
