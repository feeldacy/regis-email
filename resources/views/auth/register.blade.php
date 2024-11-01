<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="position-absolute top-50 start-50 translate-middle">

        <h1 class="text-2xl font-semibold mb-2">Register</h1>
        <form action="{{ route('post-email')}}" method="post">
            @csrf

            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Name</label>
                <input type="text" id="form2Example1" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name')}}"/>

                @if($errors->has('name'))
                    <span class="tetx-danger">{{ $errors->first('name')}}</span>
                @endif
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form2Example1">NIM</label>
                <input type="text" id="form2Example1" class="form-control @error('name') is-invalid @enderror" id="nim" name="nim" value="{{ old('nim')}}"/>

                @if($errors->has('nim'))
                    <span class="tetx-danger">{{ $errors->first('nim')}}</span>
                @endif
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form2Example2">Password</label>
                <input type="password" id="form2Example2" class="form-control @error('password') is-invalid @enderror" id="password" name="password" />
                @if($errors->has('password'))
                <span class="tetx-danger">{{ $errors->first('password')}}</span>
                @endif
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form2Example2">Confirm Password</label>
                <input type="password" id="form2Example2" class="form-control" id="password_confirmation" name="password_confirmation"/>
            </div>

            <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Register</button>

            </form>
        </div>
</body>
</html>
