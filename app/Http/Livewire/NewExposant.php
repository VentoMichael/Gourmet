<?php

namespace App\Http\Livewire;

use App\Models\Country;
use App\Models\Product;
use App\Models\Tag;
use Livewire\Component;

class NewExposant extends Component
{
    public $commentString='';
    public $tagsRepeat=[

    ];

    public function render()
    {
        sleep(1);
        return view('livewire.new-exposant', [
            'countries' => Country::all(),
            'tags' => Tag::all(),
            'products' => Product::all()
        ]);
    }
}
