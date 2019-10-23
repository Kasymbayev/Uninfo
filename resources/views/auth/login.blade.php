<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UNINFO - Вход</title>
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
        <h3>Войдите в UNI-аккаунт</h3>
        <span>Мы уже заждались!</span>
    </div>
    <div class="form_signup">
        <form method="post">

            {!! csrf_field() !!}

            <input type="text" placeholder="Укажите E-mail" name="email" required> <br>
            <input type="password" placeholder="Ваш пароль" name="password" required> <br>
            <label for="remember">Запомнить меня</label>
            <input type="checkbox" name="remember" id="remember" style="width:auto; position: relative; top:2px;">
            <div class="signin">
                <button type="submit">Войти</button>
            </div>
        </form>
        <br>
        <span>У вас нет аккаунта?</span>
        <br><br>
        <div class="signup">
            <button type="submit" onClick=window.location.href="{{route('register')}}">Создать аккаунт</button>
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