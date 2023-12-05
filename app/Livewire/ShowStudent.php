<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Component;

class ShowStudent extends Component
{
    public $student;

    public function mount($id){
        $this->student = Student::find($id);
    }

    public function render()
    {
        return view('livewire.show-student');
    }
}
