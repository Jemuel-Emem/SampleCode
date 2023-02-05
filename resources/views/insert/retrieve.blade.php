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
    <div class="container p-5">
        <form action="insert" method="get">
            @csrf
        <div class="row justify-content-center ">

            <div class="col-md-4 col-md-offset-4 p-5 bg-primary-subtle rounded form-group">

                <h1 class="samplename"> Retrieve data</h1>
                <hr>


                <label for="email" class="sample d-flex"> Enter email</label>
                <input type="text" class="form-control" placeholder="enter name" value="" name="email">

                <label for="password" class="sample d-flex"> Enter password</label>
                <input type="password" class="form-control" placeholder="enter password" value="" name="password">

<div class="form-group d-flex justify-content-center p-3">
                <button class="btn btn-block btn bg-info " type="submit">View</button>
            </div>

            <table>
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>password</td>
                </tr>

                @foreach ($users as $user)
                <tr>
                    <td>{{ $user ->name }}</td>
                    <td>{{ $user ->email }}</td>
                    <td>{{ $user ->password }}</td>
                </tr>
                @endforeach
            </table>
            </div>

            </form>



    </div>


</body>
</html>
