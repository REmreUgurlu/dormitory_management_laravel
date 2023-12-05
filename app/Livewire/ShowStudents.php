<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Component;

class ShowStudents extends Component
{
    public $layout = 'layouts.app';
    public $students;

    public function mount(){
        $this->students = Student::all();
        foreach ($this->students as $student) {
            // dd($student->major_id);
            $student->major_id = GetMajors::get($student->major_id)->name;
        }

        return $this->students;
    }

    public function render()
    {
        return view('livewire.show-students');
    }
}
