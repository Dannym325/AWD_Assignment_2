<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Log in</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
      <form name="loginFrm" action="/login" method="POST">
        <p>Username:</p><input type="text" name="username">
        <p>Password:</p><input type="password" name="password">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" /> <!-- WHY? -->
        <input type="submit" name="loginSubmit" value="Log In">
      </form>
    </body>
</html>
