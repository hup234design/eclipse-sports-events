<?php

namespace App\View\Components;

use App\Models\Events\Event;
use Closure;
use Hup234design\FilamentCms\Models\Post;
use Hup234design\FilamentCms\Services\NavigationItems;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FooterLayout extends Component
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
        $posts  = Post::visible()->take(5)->get();
        $events = Event::upcoming()->take(5)->orderBy('start_date', 'ASC')->get();
        $primary_footer = NavigationItems::make(cms('primary_footer_menu_id', null));

        return view('layouts.footer', compact('posts','events', 'primary_footer'));
    }
}
