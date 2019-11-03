@include('inc.messages')
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <title>UNINFO - Сервис поиска вуза</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="/css/alertify.css">
</head>
<body>

<div class="header">
    <div class="top_header hidden-sm hidden-xs">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 logo">
                    <div class="logo_img">
                        <a href="{{route('index')}}"><img src="/images/logo.png" alt=""></a>
                    </div>
                    <div class="descr_logo">
                        <span>Интересные вузы <br>Казахстана</span><br>
                        <label>Вперед на поиски</label>
                    </div>
                </div>
                <div class="col-md-3 information">
                    <div class="phone">
                        <img src="/images/icons/phone.png" alt="">
                        <span>8(707)-711-07-98</span>
                    </div>
                    <div class="mail">
                        <img src="/images/icons/mail.png" alt="">
                        <span>info@uninfo.kz</span>
                    </div>
                    <div class="location">
                        <img src="/images/icons/location.png" alt="">
                        <span>Алматы, Манаса 34А</span>
                    </div>
                </div>
                @if(\Illuminate\Support\Facades\Auth::check())
                    <div class="col-md-4 auth_buttons">
                        <div class="cabinet_btn">
                            <input type="button" value="{{\Illuminate\Support\Facades\Auth::user()->firstname}} {{\Illuminate\Support\Facades\Auth::user()->lastname}}" onclick=window.location.href="{{route('account')}}">
                        </div>
                        <div class="create_btn">
                            <input type="button" value="Выйти" onclick=window.location.href="{{route('logout')}}">
                        </div>
                    </div>
                @else
                    <div class="col-md-4 auth_buttons">
                        <div class="cabinet_btn">
                            <input type="button" value="Войти в кабинет" onclick=window.location.href="{{route('login')}}">
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
                            <li><a href="{{route('specialty')}}">Специальности</a></li>
                            <li><a href="">Профессии</a></li>
                            <li><a href="">O нас</a></li>
                            <li><a href="">Обратная связь</a></li>
                            @if(\Illuminate\Support\Facades\Auth::check() == 0)
                            @elseif(\Illuminate\Support\Facades\Auth::user()-> isAdmin == 1)
                            <li>
                                <a href="{{route('admin')}}">Управление сайтом</a>
                            </li>
                            @endif
                            @if(\Illuminate\Support\Facades\Auth::check())
                            <li class="hidden-md hidden-lg"><a href="{{route('account')}}">{{\Illuminate\Support\Facades\Auth::user()->firstname}} {{\Illuminate\Support\Facades\Auth::user()->lastname}}</a></li>
                            <li class="hidden-md hidden-lg"><a href="{{route('logout')}}">Выйти</a></li>
                            @else
                            <li class="hidden-md hidden-lg"><a href="{{route('login')}}">Войти в кабинет</a></li>
                            <li class="hidden-md hidden-lg"><a href="{{route('register')}}">Создать кабинет</a></li>
                            @endif
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
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/alertify.min.js"></script>
<script src="https://kit.fontawesome.com/d0b98400cc.js" crossorigin="anonymous"></script>
@include('inc.messages')
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="/js/bootstrap.min.js"></script>
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="footer_objects">
                <div class="col-md-3 logo">
                    <div class="logo_img">
                        <img src="/images/logo.png" alt="">
                    </div>
                    <div class="descr_logo">
                        <span>Интересные вузы <br>Казахстана</span><br>
                        <label>Вперед на поиски</label>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 information">
                    <div class="phone">
                        <img src="/images/icons/phone.png" alt="">
                        <span>8(707)-711-07-98</span>
                    </div>
                    <div class="mail">
                        <img src="/images/icons/mail.png" alt="">
                        <span>info@uninfo.kz</span>
                    </div>
                    <div class="location">
                        <img src="/images/icons/location.png" alt="">
                        <span>Алматы, Манаса 34А</span>
                    </div>
                </div>
                <div class="col-md-3 col-xs-0">
                    <h6>UNINFO ©2019</h6>
                </div>
                <div class="col-md-2 social_icons">
                    <ul>
                        <li><a href="#"><img src="images/icons/vk.jpg" alt=""></a></li>
                        <li><a href="#"><img src="images/icons/inst.jpg" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>