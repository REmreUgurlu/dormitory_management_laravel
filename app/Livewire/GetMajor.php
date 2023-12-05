<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Major;

class GetMajor extends Component
{
    
    public static function get($id){

        $major=Major::find($id);
        return $major->name;
    }

    public function render()
    {
        return view('livewire.get-major');
    }
}
