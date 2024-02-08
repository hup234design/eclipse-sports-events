<?php

namespace App\View\Components;

use App\Models\Events\Event;
use Closure;
use Hup234design\FilamentCms\Models\Post;
use Hup234design\FilamentCms\Services\NavigationItems;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppFooter extends Component
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
        $menus = [
            'primary'   => NavigationItems::make(cms('primary_footer_menu_id', null)),
            'secondary' => NavigationItems::make(cms('secondary_footer_menu_id', null)),
        ];

        $posts = Post::visible()->take(5)->get();

        $events = Event::upcoming()->orderBy('start_date','asc')->take(5)->get();

        return view('components.app-footer', compact('menus','posts', 'events'));
    }
}
