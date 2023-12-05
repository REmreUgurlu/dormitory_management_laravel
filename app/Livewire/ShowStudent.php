<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Component;

class ShowStudent extends Component
{
    public Student $student;

    public function mount($id){
        $this->student = Student::find($id);
        $major_name = GetMajor::get($this->student->major_id);
        $this->student->major_id=$major_name;
    }

    public function render()
    {
        return view('livewire.show-student');
    }
}
