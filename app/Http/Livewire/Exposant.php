<?php

namespace App\Http\Livewire;

use App\Models\Country;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Exposant extends Component
{
    use WithPagination;

    public $filterPage = 6;
    public $product_id = '';
    public $country_id = '';
    public $exposantName = '';
    public $rq = '';

    protected $queryString = ['filterPage', 'product_id', 'country_id', 'exposantName'];

    public function render()
    {
        sleep(1);
        if ($this->exposantName != '') {
            $name = request('exposantName');
            $product = request('product_id');
            $country = request('country_id');
            $exposants = \App\Models\Exposant::where('accepted', 1)->where('shop_name', 'like',
                '%'.$name.'%')->where('product_id', $product)->where('country_id',
                $country)->paginate($this->filterPage);
        }
        return view('livewire.exposant', [
            'exposantRandom' => \App\Models\Exposant::where('accepted', 1)
                ->inRandomOrder()
                ->first(),
            'exposants' => \App\Models\Exposant::where('accepted', 1)
                ->with('country', 'product')
                ->search('shop_name', $this->exposantName)
                ->search('country_id', $this->country_id)
                ->search('product_id', $this->product_id)
                ->paginate($this->filterPage),
            'products' => Product::with('exposants')->get(),
            'countries' => Country::with('exposants')->get()
        ]);
    }
}
