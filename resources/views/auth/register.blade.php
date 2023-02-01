<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

   .container{

    top: 50px;
    position: relative;
    width: 10px;


   }
   .reg{
    position: relative;
    right: -120px;
    top: 5px;
    font-family: arial;
    font-size: 20px;

   }
   a.tae{
   position: relative;
   right: -75px;
   top: -10px;
   }
   .putos{
    border: 2px solid rgb(8, 40, 40);
    padding: 10px;
    box-shadow: 0px 0px 5px rgb(27, 146, 142);
   }
   hr.new1 {
  border-top: 1px solid rgb(8, 40, 40);
}
#igit{
    position: relative;
    width: 100px;
    right: -120px;
    border-radius: 10px;
    top:10px;

}
    </style>
</head>
<body style="background-color:rgb(232, 253, 255);">
    <div class="container" id="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="putos">
                <h4 class="reg">Register</h4>
                <hr class="new1">
                <form action="{{ route('register-user') }}" method="post">

                    @if (Session::has ('success'))
                    <div class="alert alert-success">{{ session::get('success') }}</div>
                     @endif

                     @if (Session::has ('fail'))
                     <div class="alert alert-danger">{{ session::get('fail') }}</div>
                     @endif

                    @csrf
                    <div class="form-group">
                    <label for="name" class="name">Full name</label>
                    <input type="text" class="form-control" placeholder="enter name" name="name" value="{{ old('name') }}">
                    <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="email" class="name">Email</label>
                        <input type="text" class="form-control" placeholder="enter email" name="email" value="{{ old('email') }}">
                        <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="name" class="name">Password</label>
                            <input type="password" class="form-control" placeholder="enter password" name="password" value="{{ old('password') }}">
                            <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                            </div>


                    <div class="form-group">
                        <button class="btn btn-block btn primary" type="submit" id="igit"> Register</button>
                    </div>

                    <br>
                    <a href="login" class="tae"> Already registered? login here. </a>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</html>
