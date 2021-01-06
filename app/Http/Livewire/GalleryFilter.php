<?php

namespace App\Http\Livewire;

use App\Models\Gallery;
use Livewire\Component;
use Livewire\WithPagination;

class GalleryFilter extends Component
{
    use WithPagination;

    public $filterPage = 9;
    protected $queryString = ['filterPage'];

    public function render()
    {
        sleep(1);
        if ($this->filterPage != 9) {
            $galleries = Gallery::paginate($this->filterPage);
        }
        return view('livewire.gallery-filter',[
            'galleries' => \App\Models\Gallery::paginate($this->filterPage)
        ]);
    }
}
