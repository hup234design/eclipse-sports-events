<?php

namespace App\View\Components;

use Closure;
use Hup234design\FilamentCms\Services\NavigationItems;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $primary_header = NavigationItems::make(cms('primary_header_menu_id', null));

        return view('layouts.header', compact('primary_header'));
    }
}
