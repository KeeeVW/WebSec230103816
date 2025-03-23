<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Basic Website - @yield('title')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
 </head>
<body>
  <nav class="navbar navbar-expand-sm bg-light">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="./">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./even">Even Numbers</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="./prime">Prime Numbers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./multable">Multiplication Table</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./test"> test</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./Bill"> Super market bill</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./transcript">transcript</a>
        </li>       
         <li class="nav-item">
        <li class="nav-item">
        <a class="nav-link" href="./calculator">calculator</a>

        </li>
        <li class="nav-item">
        <a class="nav-link" href="./gpa-calculator">gpa-calculator</a>
        
        <li class="nav-item">
          <a class="nav-link" href="./products">View Products</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="card m-4">
    <div class="card-body">
      Welcome to Home Page
    </div>
  </div>
 </body>
