<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users form</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-4">
        @if(session()->has('success'))
            <div class="alert alert-success">
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <div class="card">
            <div class="card-header">Create user</div>
            <div class="card-body">
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">User Name</label>
                        <input id="name" name="name" value="{{ old('name') }}"
                               class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" required>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="age">User Age</label>
                        <input type="number" name="age" id="age" value="{{ old('age') }}"
                               class="form-control {{ $errors->has('age') ? 'is-invalid' : '' }}" required>
                        @error('age')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="dob">User DOB</label>
                        <input type="date" name="dob" id="dob" value="{{ old('dob') }}"
                               class="form-control {{ $errors->has('dob') ? 'is-invalid' : '' }}" required>
                        @error('dob')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="country">User Country</label>
                        <input name="country" id="country" value="{{ old('country') }}"
                               class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" required>
                        @error('country')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>


</body>
</html>