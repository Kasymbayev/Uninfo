<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UNINFO - Сервис поиска вуза</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

<div class="header">
    <div class="top_header hidden-sm hidden-xs">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 logo">
                    <div class="logo_img">
                        <img src="images/logo.png" alt="">
                    </div>
                    <div class="descr_logo">
                        <span>Интересные вузы <br>Казахстана</span><br>
                        <label>Вперед на поиски</label>
                    </div>
                </div>
                <div class="col-md-3 information">
                    <div class="phone">
                        <img src="images/icons/phone.png" alt="">
                        <span>8(707)-711-07-98</span>
                    </div>
                    <div class="mail">
                        <img src="images/icons/mail.png" alt="">
                        <span>info@uninfo.kz</span>
                    </div>
                    <div class="location">
                        <img src="images/icons/location.png" alt="">
                        <span>Алматы, Манаса 34А</span>
                    </div>
                </div>
                @if(\Illuminate\Support\Facades\Auth::check())
                    <div class="col-md-4 auth_buttons">
                        <div class="cabinet_btn">
                            <input type="button" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" onclick=window.location.href="{{route('login')}}">
                        </div>
                        <div class="create_btn">
                            <input type="button" value="Выйти" onclick=window.location.href="{{route('logout')}}">
                        </div>
                    </div>
                @else
                    <div class="col-md-4 auth_buttons">
                        <div class="cabinet_btn">
                            <input type="button" value="Мой кабинет" onclick=window.location.href="{{route('login')}}">
                        </div>
                        <div class="create_btn">
                            <input type="button" value="Создать кабинет" onclick=window.location.href="{{route('register')}}">
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="main_header">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand hidden-lg hidden-md" href="#">
                        <h6>UN<span>INFO</span></h6>
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <div id="menu">
                        <ul class="nav navbar-nav navbar-center">
                            <li><a href="">Вузы</a></li>
                            <li><a href="">Колледжи</a></li>
                            <li><a href="">Курсы</a></li>
                            <li><a href="">Специальности</a></li>
                            <li><a href="">Профессии</a></li>
                            <li><a href="">O нас</a></li>
                            <li><a href="">Обратная связь</a></li>
                            <li class="hidden-md hidden-lg"><a href="">Мой кабинет</a></li>
                            <li class="hidden-md hidden-lg"><a href="">Создать кабинет</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>

    @yield('content')

<script
        src="https://code.jquery.com/jquery-2.0.0.min.js"
        integrity="sha256-1IKHGl6UjLSIT6CXLqmKgavKBXtr0/jJlaGMEkh+dhw="
        crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>