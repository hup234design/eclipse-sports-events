<?php

namespace App\Livewire;

use App\Models\Client;
use Hup234design\FilamentCms\Livewire\Blocks\ContentBlockTemplate;

class ClientsBlock extends ContentBlockTemplate
{
    protected static function makeFilamentSchema(): array|\Closure
    {
        return [
            //
        ];
    }

    public function render()
    {
        $clients = Client::visible()->get();
        return view('livewire.blocks.clients-block', [
            'clients' => $clients
        ]);
    }
}
