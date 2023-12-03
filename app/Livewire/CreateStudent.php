<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Component;

class CreateStudent extends Component
{
    public $name;
    public $national_id;
    public $email;
    public $date_of_birth;
    public $gender;
    public $phone_number;
    public $address;
    public $room_number;
    public $major_id;


    public function create_student(){
        $student = Student::create([
            'name' => $this->name,
            'national_id' =>$this->national_id,
            'email' =>$this->email,
            'date_of_birth' =>$this->date_of_birth,
            'gender' =>$this->gender,
            'phone_number' =>$this->phone_number,
            'address' =>$this->address,
            'room_number' =>$this->room_number,
            'major_id' =>$this->major_id
        ]);



        return redirect()->to('/')->with('status', 'Student Created!');
    }

    public function render()
    {
        return view('livewire.create-student');
    }
}
