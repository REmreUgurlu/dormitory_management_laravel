<div>
    @foreach ($students as $student)
        <p>  Name:{{ $student->name }}  Address:{{ $student->address }} 
             Gender:{{ $student->gender }}  National ID:{{ $student->national_id }} 
             Phone Number:{{ $student->phone_number }}  Room Number:{{ $student->room_number }}
             Major: {{ $student->major_id }}  Birthday: {{ $student->date_of_birth }}
             Email: {{ $student->email }} </p>
    @endforeach
</div>
