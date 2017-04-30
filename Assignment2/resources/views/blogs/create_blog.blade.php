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
        <title>New Blog</title>

    </head>
    <body>
      <div class="container">
        <button type="button"><a href="/blogs">Home</a></button>
        <h2>Create new blog:</h2>

      <form name="createBlogFrm" action="/create/new" method="POST">
        {{ csrf_field() }} <!-- need to ask why it only works with this? -->
        <div class="form-group">
        <p>Title:</p><input type="text" class="form-control" name="title">
        </br>
        <p>Content:</p><input type="text" class="form-control" name="content">
      </br>
        <p>Category:</p>
        <select name="filerSelect" class="form-control">
          <option value="1">Cars</option>
          <option value="2">Day to day</option>
          <option value="3">Special Occasions</option>
          <option value="4">Other</option>
        </select>
      </br>
        <input type="submit" name="createBlogSub" value="Add">
      </div>
      </form>
    </div>
    </body>
</html>
