<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>@yield('title')</title>
</head>
<body>
     <div class="collapse navbar-collapse">
          <ul class="navbar-nav">
               <li class="nav-item">
                    <a href="#">Home</a>
               </li>
               <li class="nav-item">
                    <a href="#">Category</a>
               </li>
               <li class="nav-item">
                    <a href="#">Writers</a>
               </li>
               <li class="nav-item">
                    <a href="#">About Us</a>
               </li>
          </ul>
     </div>
     <div>
          @yield('content')
     </div>
</body>
</html>