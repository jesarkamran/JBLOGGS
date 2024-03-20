<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderLoggedIn extends Component
{

    public $home, $read, $profile, $logout, $userName;
    /**
     * Create a new component instance.
     */
    public function __construct($home, $read, $profile, $userName, $logout)
    {
        $this->home = $home;
        $this->read = $read;
        $this->profile = $profile;
        $this->userName   = $userName;
        $this->logout   = $logout;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header-logged-in');
    }
}
