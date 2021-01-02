<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Exposant extends Component
{
    use WithPagination;

    public $search = '';
    public $country = '';
    public $product = '';
    public $perpage = 6;

    public function render()
    {
        sleep(1);
        return view('livewire.exposant', [
            'exposantRandom' => \App\Models\Exposant::where('accepted', 1)
                ->inRandomOrder()
                ->first(),
            'exposants' => \App\Models\Exposant::where('accepted', 1)
                ->with('country', 'product')
                ->search('shop_name', $this->search)
                ->search('country_id', $this->country)
                ->search('product_id', $this->product)
                ->paginate($this->perpage)
        ]);
    }
}
