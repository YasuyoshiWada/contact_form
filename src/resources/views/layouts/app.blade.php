<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Contact_Form</title>

</head>
<body>
    <div class="header bg-white flex relative">
        <div class="title  bg-white pt-5 pb-5 mx-auto text-center">
            <h1 class="text-5xl  text-custom_brown">
                FashionablyLate
            </h1>
        </div>
        @if (request()->is('register'))
        <div class="login__link text-center">
            <a class="login__button-submit absolute bg-gray-100 text-yellow-400  w-[8vw] h-[3vh] right-[5vw] top-[2vh] text-xl" href="/login">login</a>
        </div>
        @endif
        @if (request()->is('login'))
        <div class="register__link text-center">
            <a class="register__button-submit absolute bg-gray-100 text-yellow-400  w-[8vw] h-[3vh] right-[5vw] top-[2vh] text-xl" href="/register">register</a>
        </div>
        @endif
        @if (Auth::check())
        <form action="/logout" method="post">
            @csrf
            <button class="nav_toggle  border-solid rounded-md p-4">
                logout
            </button>
        </form>
        @endif
    </div>

    <div class="content">
        @yield('content')
    </div>

</body>
</html>
