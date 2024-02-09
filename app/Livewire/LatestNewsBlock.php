<?php

namespace App\Livewire;

use App\Models\Events\Event;
use Hup234design\FilamentCms\Livewire\Blocks\ContentBlockTemplate;
use Hup234design\FilamentCms\Models\Post;

class LatestNewsBlock extends ContentBlockTemplate
{
    protected static function makeFilamentSchema(): array|\Closure
    {
        return [
            //
        ];
    }

    public function render()
    {
        $posts = Post::visible()->take(3)->get();
        return view('livewire.blocks.latest-news-block', [
            'posts' => $posts
        ]);
    }
}
