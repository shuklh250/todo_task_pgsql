<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>

    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <!-- Optionally include Bootstrap for better form styling (if not using your own custom CSS) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container col-md-12 offset-md-12 ">
        <div class="login text-center">
            {{-- <h4 class="mb-3">Todo List</h4> --}}
            <h1 class="mb-4">Registration</h1>
            
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name"><strong>Name</strong></label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email"><strong>Email:</strong></label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password"><strong>Password:</strong></label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation"><strong>Confirm Password:</strong></label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Enter your password" required>
                </div>
                
                <button type="submit" class="btn btn-danger btn-block">Register</button>
            </form>

            <div class="register mt-3">
                <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
            </div>
        </div>
    </div>

    <!-- Optionally include jQuery and Bootstrap JS for interactive components -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
