<!DOCTYPE html>
<!-- index.blade.php -->

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
      <h1>Blogs</h1>
      <button type="button"><a href="/create">New Blog!</a></button>

      <p> Filter by category: </p>
    <form name="categoryFrm" action="/filter" method="POST">
      <select name="filterSelect">
        <option value="0">All</option>
        <option value="1">Cars</option>
        <option value="2">Day to day</option>
        <option value="3">Special Occasions</option>
        <option value="4">Other</option>
      </select>
      <input type="hidden" name="_token" value="{{{ csrf_token() }}}" /> <!-- WHY? -->
      <input type="submit" name="filterSub" value="Search">
    </form>
  </br></br>

      <table border="1">
        <tr>
          <th>ID </th> <!-- This can be deleted (or hidden )-->
          <th>Title</th>
          <th>Content</th>
          <th>User</th>
          <th>CatID</th>
          <th>View</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      @foreach ($blogs as $blog)
        <div>
            <tr>
              <td> {{ $blog->id }} </td>
              <td> {{ $blog->title }} </td>
              <td> {{ $blog->contents }} </td>
              <td> {{ $blog->username }} </td>
              <td> {{ $blog->categoryID}} </td> <!-- Delete this -->
              <td> <a href="blogs/{{ $blog->id }}"> View </a> </td>
              <td> <a href="blogs/{{ $blog->id }}/edit"> Edit </a> </td>
              <td> <a href="/blogs/{{ $blog->id }}/delete"> Delete </a> </td>
          </tr>

        </div>
      @endforeach
      </table>

    </body>
</html>
