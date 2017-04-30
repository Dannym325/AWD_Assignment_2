<!DOCTYPE html>
<!-- index.blade.php -->

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
    <title>Blogs</title>
  </head>
  <body>
    <div class="container">
      <h1>Blogs</h1>
      <button type="button"><a href="/create">New Blog</a></button>
      </br></br>
      <p> Filter by category: </p>
      <form name="categoryFrm" action="/filter" method="POST">
        <select name="filterSelect" class="form-control">
          <option value="0">All</option>
          <option value="1">Cars</option>
          <option value="2">Day to day</option>
          <option value="3">Special Occasions</option>
          <option value="4">Other</option>
        </select>
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" /> <!-- WHY? -->
        </br>
        <input type="submit" name="filterSub" value="Search">
      </form>
      </br></br>
      <table class="table">
        <tr>
          <th>Title</th>
          <th>Content</th>
          <th>User</th>
          <th>View</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      @foreach ($blogs as $blog)
        <div>
          <tr>
            <td> {{ $blog->title }} </td>
            <td> {{ $blog->contents }} </td>
            <td> {{ $blog->username }} </td>
            <td> <a href="blogs/{{ $blog->id }}"> View </a> </td>
            <td> <a href="blogs/{{ $blog->id }}/edit"> Edit </a> </td>
            <td> <a href="/blogs/{{ $blog->id }}/delete"> Delete </a> </td>
          </tr>
        </div>
      @endforeach
      </table>
    </div>
  </body>
</html>
