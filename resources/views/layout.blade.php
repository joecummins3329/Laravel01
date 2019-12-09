<!DOCTYPE html>

<html>

<head>

 <div class="flex-center position-ref full-height">
           
           @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Logout</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

        </div>
    
    </div>   
    
    <title>@yield('title','My Website')</title>
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/8.7.2/css/bulma.css">
    

</head>

<body>

 

    <ul>
       
       <li><a href="/">Home</a></li>
       
       <li><a href="/contact">Contact</a></li>
       
       <li><a href="/fixtures">Fixtures</a></li>
       
       <li><a href="/notification">Membership</a></li>
       
       <li><a href="/create">Create a Session</a></li>
       
       <li><a href="/experience">Experience</a></li>
    
    </ul>
    
    @yield('content')
    
</body>

</html>