<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class header extends Component
{
    public $home, $read, $contact, $about;
    /**
     * Create a new component instance.
     */
    public function __construct($home, $read, $contact, $about)
    {
        $this->$home = $home;
        $this->$read = $read;
        $this->$contact = $contact;
        $this->$about   = $about;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
