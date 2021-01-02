<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class GalleryFilter extends Component
{
    use WithPagination;

    public $perpage = 9;

    public function render()
    {

        return view('livewire.gallery-filter',[
            'galleries' => \App\Models\Gallery::paginate($this->perpage)
        ]);
    }
}
