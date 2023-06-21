<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <link rel="stylesheet" href="/css/index.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>


    <div class="header">
        <div ><button onclick="location.href='/'" class=" a_b">Главная</button></div>
        

        
        @if (Route::has('login'))
           
                @auth
                <div ><a class="a_b" href="{{ url('/merch') }}">Мерч</a></div>
                <div ><a class="a_b" href="{{ url('/albom') }}">Альбомы</a></div>
                    <div><a class="a_b" href="{{ url('/home') }}">Личный кабинет</a></div>
                @else
                    <a class="a_b" href="{{ route('login') }}">Вход</a>

                    @if (Route::has('register'))
                        <a class="a_b" href="{{ route('register') }}">Регистрация</a>
                    @endif
                @endauth
            
        @endif
    
    </div>
    <div class="header2">
        
        <div ><a href="{{route('admin.index')}}" class="a_b">Главная</a></div>
        <div ><a href="{{route('admin.user_managment.user.index')}}" class="a_b">Список пользователей</a></div>
        <div ><a href="{{route('admin.user_managment.user.create')}}" class="a_b">Создать пользователя</a></div>
    
    </div>
    


    <div id="app">
       
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    
    <div class="footer">
            <div >
                Гапонова Анастасия Дмитриевна<br><br>
                Колледж экономики и информатики<br><br>
            </div>
            <div >
                <a class="a_b" href="https://www.youtube.com/channel/UC3IZKseVpdzPSBaWxBxundA">HYBE LABELS</a>
                <a class="a_b" href="https://www.youtube.com/@BTS">BANGTANTV</a>
            </div>

    </div>



    
</body>
</html>
