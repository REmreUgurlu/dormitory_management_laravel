<div>
    @foreach ($students as $student)
        <p>Id: {{ $student->id }} Name:{{ $student->name }} 
        Address:{{ $student->address }} Gender:{{ $student->gender }} 
        National ID:{{ $student->national_id }} Phone Number:{{ $student->phone_number }}
        Room Number:{{ $student->room_number }} Major:{{ $student->major_id}}
        Birtdate:{{ $student->date_of_birth}} Email:{{ $student->email }} </p>    
    @endforeach
    
    {{-- <p>{{ $student->name }}</p>
    <p>{{ $student->address }}</p>
    <p>{{ $student->gender }}</p>
    <p>{{ $student->national_id }}</p>
    <p>{{ $student->phone_number }}</p>
    <p>{{ $student->room_number }}</p>
    <p>{{ $student->major_id}}</p>
    <p>{{ $student->date_of_birth}}</p>
    <p>{{ $student->email }}</p> --}}
</div>
