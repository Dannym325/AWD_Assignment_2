<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>
  </head>
  <body>
    <div class="container">

      @if($errors->any())
      <h4>{{$errors->first()}}</h4>
      @endif

      <h2>Please log in:</h2>
      <form name="loginFrm" action="/login" method="POST">
        <div class="form-group">
          <p>Username:</p><input type="text" class="form-control" name="username" placeholder="Enter E-Mail">
          <p>Password:</p><input type="password" class="form-control" name="password" placeholder="Enter Password">
        </div>
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" /> <!-- WHY? -->
        <input type="submit" name="loginSubmit" class="btn btn-default" value="Log In">
      </form>
    </div>
  </body>
</html>
