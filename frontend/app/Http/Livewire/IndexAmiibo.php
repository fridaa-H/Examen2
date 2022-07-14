<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;

use Livewire\Component;

class IndexAmiibo extends Component
{
    public function render()
    {
        $response = http::get('https://amiiboapi.com/api/amiibo/');
        $amiibos = $response->json()['amiibo'];

        return view('livewire.index-amiibo', compact('amiibos'));
    }
}
