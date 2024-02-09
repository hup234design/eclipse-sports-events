<?php

namespace App\Livewire;

use App\Models\Events\Event;
use Hup234design\FilamentCms\Livewire\Blocks\ContentBlockTemplate;

class UpcomingEventsBlock extends ContentBlockTemplate
{
    protected static function makeFilamentSchema(): array|\Closure
    {
        return [
            //
        ];
    }

    public function render()
    {
        $events = Event::upcoming()->take(9)->get();
        return view('livewire.blocks.upcoming-events-block', [
            'events' => $events
        ]);
    }
}
