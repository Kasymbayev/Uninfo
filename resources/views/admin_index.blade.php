@include('inc.messages')
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- Main styles for this application-->
    <link rel="stylesheet" href="/css/main_style.css">
    <link href="/css/admin_style.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/alertify.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
<header class="app-header navbar">
    <div class="container-fluid">
        <div class="col-md-4 logo_title"><a href="{{route('index')}}">UNINFO.KZ</a></div>
        <div class="col-md-4 text-center page_title d-none d-lg-block">Добро пожаловать, {{\Illuminate\Support\Facades\Auth::user()->firstname}} {{\Illuminate\Support\Facades\Auth::user()->lastname}}</div>
        <div class="col-md-4 profile_title text-right d-none d-lg-block"><a href="{{route('index')}}">Вернуться в личный кабинет</a></div>
    </div>
</header>
<div class="app-body">
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="{{route('admin')}}">Основные</a></li>
                <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#university_drop" >
                            Университеты
                        </a>
                </li>
                <div class="collapse" id="university_drop">
                    <div class="university_drop">
                        <li class="nav-item"><a class="nav-link" href="{{route('admin_universities')}}">Все университеты</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('admin_add_university')}}">Добавить университет</a></li>
                    </div>
                </div>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#university_type" >
                        Типы ВУЗов
                    </a>
                </li>
                <div class="collapse" id="university_type">
                    <div class="university_type">
                        <li class="nav-item"><a class="nav-link" href="{{route('admin_type')}}">Все типы</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('admin_add_type')}}">Добавить тип</a></li>
                    </div>
                </div>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#university_categories" >
                        Категории
                    </a>
                </li>
                <div class="collapse" id="university_categories">
                    <div class="university_categories">
                        <li class="nav-item"><a class="nav-link" href="{{route('admin_categories')}}">Все категории</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('admin_add_category')}}">Добавить категорию</a></li>
                    </div>
                </div>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#university_subject" >
                        Профильные предметы
                    </a>
                </li>
                <div class="collapse" id="university_subject">
                    <div class="university_subject">
                        <li class="nav-item"><a class="nav-link" href="{{route('admin_subject')}}">Все Профильные предметы</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('admin_add_subject')}}">Добавить профильные предметы</a></li>
                    </div>
                </div>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#university_qualification" >
                        Квалификации
                    </a>
                </li>
                <div class="collapse" id="university_qualification">
                    <div class="university_qualification">
                        <li class="nav-item"><a class="nav-link" href="{{route('admin_qualification')}}">Все квалификации</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('admin_add_qualification')}}">Добавить квалификацию</a></li>
                    </div>
                </div>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#university_specialty" >
                        Специальности
                    </a>
                </li>
                <div class="collapse" id="university_specialty">
                    <div class="university_specialty">
                        <li class="nav-item"><a class="nav-link" href="{{route('admin_specialty')}}">Все специальности</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('admin_add_specialty')}}">Добавить специальность</a></li>
                    </div>
                </div>
                <li class="nav-item"><a class="nav-link" href="#">Посмотреть документы</a></li>
            </ul>
        </nav>
    </div>

    @yield('content')


</div>
<footer class="app-footer">
    <div>
        <a href="https://coreui.io">IITU</a>
        <span>&copy; 2019 Uninfo Team.</span>
    </div>
</footer>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/alertify.min.js"></script>
<script src="https://kit.fontawesome.com/d0b98400cc.js" crossorigin="anonymous"></script>
<script src="/js/bootstrap.js"></script>
@include('inc.messages')
</body>
</html>
