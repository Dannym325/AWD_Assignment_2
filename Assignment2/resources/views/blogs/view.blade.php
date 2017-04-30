<!DOCTYPE html>
<!-- view.blade.php -->

@if (Session::has('name'))
<!-- Session variable is there -->
@else
<script>
window.location.href = '{{url("/logout")}}';
</script>
@endif

<html lang="{{ config('app.locale') }}">
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blogs</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <div class="container">
      </br>
      <button type="button"><a href="/blogs">Home</a></button>
      <h2><strong>Title: </strong> {{ $blog->title }}</h2>
      <h2><strong>User: </strong> {{ $blog->username }}</h2>
      <h2><strong>Content: </strong> {{ $blog->contents }}</h2>
      <h2><strong>created at: </strong> {{ $blog->created_at }}</h2>
    </div>
  </body>
</html>
