<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent;
class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'national_id', 'email', 'date_of_birth', 'gender', 'phone_number', 'address', 'room_number', 'major_id'];
}
