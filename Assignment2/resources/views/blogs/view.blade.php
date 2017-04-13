<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blogs</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
      <h1>ID: {{ $blog->id }}</h1>
      <h1>Title: {{ $blog->title }}</h1>
      <button type="button"><a href="/create">New Blog!</a></button>


    </body>
</html>
