<!DOCTYPE html>

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

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Update Blog</title>
  </head>

  <body>
    <div class="container">
      <button type="button"><a href="/blogs">Home</a></button>
      </br></br>
      <p> {{ $blog->title }} </p>
      <form name="updateBlogFrm" action="/blogs/{{ $blog->id }}" method="POST">
        <div class="form-group">
          {{ csrf_field() }} <!-- need to ask why it only works with this? -->
          {{ method_field('PATCH') }}
          <input type="text" name="title" value="{{ $blog->title}}" class="form-control">
          </br>
          <input type="text" name="contents" value="{{ $blog->contents}}" class="form-control">
          </br>
          <input type="submit" name="updateBlogSub" value="Update">
        </div>
      </form>
    </div>
  </body>
</html>
