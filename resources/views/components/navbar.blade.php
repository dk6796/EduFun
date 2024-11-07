<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>@yield('title')</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
     <nav class="navbar navbar-expand-lg  bg-light">
          <div class="container">
               <a class="navbar-brand" href="#">EduFun</a>
               <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto gap-5">
                         <li class="nav-item">
                              <a class="nav-link" href="{{ route('home') }}">Home</a>
                         </li>
                         <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Category
                              </a>
                              <ul class="dropdown-menu dropdown-menu-light">
                                <li><a class="dropdown-item" href="{{ route('interactive') }}">Interactive multimedia</a></li>
                                <li><a class="dropdown-item" href="{{ route('software') }}">Software engineering</a></li>
                              </ul>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="{{ route('writer') }}">Writers</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="{{ route('about') }}">About Us</a>
                         </li>
                    </ul>
               </div>
          </div>
     </nav>
     <div>
          @yield('content')
     </div>
     <footer class="bg-black d-flex justify-content-center align-items-center p-4">
          <div class="text-light">
               &copy; EduFun 2024 | Web Programming | Daniel Kurniawan | 2602090164
          </div>
     </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>