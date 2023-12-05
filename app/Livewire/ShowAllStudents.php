<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Component;

class ShowAllStudents extends Component
{
    public $students;

    public function mount(){
        $this->students = Student::all();
        
        foreach ($this->students as $student) {
            $major_name=GetMajor::get($student->major_id);
            $student->major_id = $major_name;    
        }
    }

    public function render()
    {
        return view('livewire.show-all-students');
    }
}
