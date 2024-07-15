<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm bg-light">

            <div class="container-fluid">
              <!-- Links -->
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link " href="{{route('book.index')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Link 2</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link 3</a>
                </li>
              </ul>
            </div>
          
          </nav>
    </header>

    <h2 class="my-4 text-center">@yield('name')</h2>

    @yield('content')
</body>
</html>