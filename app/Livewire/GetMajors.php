<?php

namespace App\Livewire;

use App\Models\Major;
use Livewire\Component;

class GetMajors extends Component
{
    public $majors;

    public static function getAll(){
        $majors = Major::all();
        return $majors;
    }

    public static function get($id){
        $majors = Major::find($id);
        return $majors;
    }

    public function render()
    {
        return view('livewire.get-majors');
    }
}
