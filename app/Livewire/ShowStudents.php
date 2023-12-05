<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Component;

class ShowStudents extends Component
{
    public $students;

    public function mount(){
        $this->students = Student::all();
        return $this->students;
    }

    public function render()
    {
        return view('livewire.show-students');
    }
}
