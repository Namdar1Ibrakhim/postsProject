<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Book Review</title>
    <style type="text/css">
      .navbar {
        min-height: 100px;
        font-size: 25px;
      }
      .navbar-brand {
        font-size: 25px;
      }
    </style>
  </head>
  <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-light sticky-top">
          <img class="img" src="https://upload.wikimedia.org/wikipedia/commons/9/95/Instagram_logo_2022.svg" style="padding-right: 30px; max-width:100px">
          <a class="navbar-brand text-dark" href="/home">Главная</a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link text-dark" href="/post">Создать<span class="sr-only">(current)</span></a>
              </li>
                <li class="nav-item">
                <a class="nav-link text-dark" href="/search">Поиск</a>
                </li>
            </ul>
          </div>
        </nav>
        @yield('content')




  </body>
</html>