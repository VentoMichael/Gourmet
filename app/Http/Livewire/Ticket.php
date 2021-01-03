<?php

namespace App\Http\Livewire;

use App\Models\PraticalInfos;
use Livewire\Component;

class Ticket extends Component
{

    public $ticketCount = 1;
    public $ticketPrice = 6;
    public $totalPrice = 0;

    public function render()
    {
        sleep(1);
        return view('livewire.ticket', [
            'praticalInformations' => PraticalInfos::all()
        ]);
    }
}
