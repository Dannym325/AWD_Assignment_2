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
      <h1>Blogs</h1>

      <table border="1">
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
              <td> <p>View</p> </td>
              <td> <p>Edit</p> </td>
              <td> <p>Delete</p> </td>
          </tr>

        </div>
      @endforeach
      </table>

    </body>
</html>
