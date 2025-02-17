<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>
    <style>
        .error { color: red; }
        .success { color: green; }
    </style>
</head>
<body>
    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="/form">
        @csrf
        
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="age">Age:</label>
            <input type="number" name="age" value="{{ old('age') }}">
            @error('age')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Submit</button>
    </form>

    @if($errors->any())
        <div class="error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>