<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UNINFO - Регистрация</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="/css/alertify.css">
</head>
<body>
<div class="logo_signup">
    <img src="images/logo.png" alt="">
</div>
<div class="signup_wrapper">
    <div class="header_title">
        <h3>Регистрация UNI-аккаунта</h3>
        <span>Для регистрации укажите ваши данные</span>
    </div>
    <div class="form_signup">
        <form action="{{route('register')}}" method="post">

            {!! csrf_field() !!}

            <input type="text" placeholder="Ваше имя" name="firstname" required> <br>
            <input type="text" placeholder="Ваша Фамилия" name="lastname" required> <br>
            <input type="email" placeholder="Укажите E-mail" name="email" required> <br>
            <input type="text" placeholder="Укажите ИИН" name="iin" required> <br>
            <input type="password" placeholder="Придумайте пароль" name="password" required> <br>
            <input type="password" placeholder="Повторите пароль" name="password_confirmation" required> <br>
            <label for="remember">Запомнить меня</label>
            <input type="checkbox" name="remember" id="remember" style="width:auto; position: relative; top:2px;">
            <br>
            <button type="submit">Зарегистрироваться</button>
        </form>
        <br>
        <span>У вас уже есть UNI аккаунт?</span>
        <br><br>
        <div class="signin">
            <button type="submit" onClick=window.location.href="{{route('login')}}">Войти</button>
        </div>
        <div class="repeatonsite">
            <a href="{{route('index')}}">Вернуться на сайт</a>
        </div>
    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/alertify.min.js"></script>
@include('inc.messages')
</body>
</html>