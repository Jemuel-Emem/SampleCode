<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="bg-warning">
    <div class="container p-3">
    <table border="1px" class="table table-striped bg-primary-subtle">
        <tr class="table-dark">
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
            <td>Action</td>

        </tr>

        @foreach ($data as $data)
        <tr>

            <td>{{ $data  ->id }}</td>
            <td>{{ $data  ->name }}</td>
            <td>{{ $data  ->email }}</td>
            <td>{{ $data  ->password }}</td>
            <td>
                <a href="{{ url('edit/'.$data->id )}}" class="btn btn-primary">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>

            </td>

        </tr>

        @endforeach
    </table>
</div>
</body>
</html>
