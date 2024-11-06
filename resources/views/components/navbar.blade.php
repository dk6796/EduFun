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
                    <a href={{route('home')}}>Home</a>
               </li>
               <li class="nav-item">
                    <a href={{route('category')}}>Category</a>
               </li>
               <li class="nav-item">
                    <a href={{route('writer')}}>Writers</a>
               </li>
               <li class="nav-item">
                    <a href={{route('about')}}>About Us</a>
               </li>
          </ul>
     </div>
     <div>
          @yield('content')
     </div>
</body>
</html>