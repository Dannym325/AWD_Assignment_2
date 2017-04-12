<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>New Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
      <form name="createBlogFrm" action="" method="POST">
        <p>Title:</p><input type="text" name="title">
        <p>Content:</p><input type="text" name="content">
        <p>Category:</p>
        <p> Username: (auto) </p><input type="text" name="name"> <!-- delete this when can enter user session -->
        <input type="submit" name="loginSubmit" value="Log In">
      </form>
    </body>
</html>
