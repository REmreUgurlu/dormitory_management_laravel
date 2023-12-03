<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif
 
        <div class="content">
            <div class="title m-b-md">
                <h1>Students:</h1>
            </div>
 
            <div class="students">
                @foreach ($students as $student)
                    <h2>Name: {{ $student->name }} Gender: {{ $student->gender }}</h2>
                @endforeach
            </div>
        </div>
    </div>
</body>