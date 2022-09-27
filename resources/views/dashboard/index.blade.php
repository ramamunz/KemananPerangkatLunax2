<!DOCTYPE html>
<html>

<head>
  <title>WELCOME</title>
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <div class="container-fluid">
    <div class="form">
        <h1 class="h3 mb-3 fw-bold text-center mb-3 text-light">Welcome Back, {{ auth()->user()->username }} </h1>
        <div class="text-light text-center">
          <form action="/logout" method="POST">
            @csrf
          <button type="submit" class="btn btn-primary">Logout</button>
          </form>
        </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
</body>

</html>