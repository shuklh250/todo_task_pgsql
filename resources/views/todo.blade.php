<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo</title>

    <link rel="stylesheet" href="{{ asset('css/todo.css') }}">
    <!-- Optionally include Bootstrap for better form styling (if not using your own custom CSS) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container col-md-12 offset-md-12">
        <div class="todo text-center">

            <h1 class="mb-4">To-Do</h1>
            <form>
                <button type="submit" class="logout-button">Logout</button>
            </form>
            <form action="" method="POST">
                <div class="form-group">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter your task" required>
                    {{-- <button type="submit" class="add-button">Add</button> --}}
                    <button type="submit" class="btn btn-danger btn-block">Add</button>
                </div>
            </form>
{{-- 
            <div class=" list-task mt-3">
                <li>List 1</li>
                <li>List 2</li>
                <li>List 3</li>
            </div> --}}
        </div>
    </div>

    <!-- Optionally include jQuery and Bootstrap JS for interactive components -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
