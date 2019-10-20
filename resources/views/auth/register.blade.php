<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UNINFO - Регистрация</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
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

            <input type="text" placeholder="Как к вам обращаться ?" name="name"> <br>
            <input type="email" placeholder="Укажите E-mail" name="email"> <br>
            <input type="text" placeholder="Укажите ИИН" name="iin"> <br>
            <input type="password" placeholder="Придумайте пароль" name="password"> <br>
            <input type="password" placeholder="Повторите пароль" name="password_confirmation"> <br>
            <label for="remember">Запомнить меня</label>
            <input type="checkbox" name="remember" id="remember" style="width:auto; position: relative; top:2px;">
            <button type="submit">Зарегистрироваться</button>
        </form>
        <br>
        <span>У вас уже есть UNI аккаунт?</span>
        <br><br>
        <div class="signin">
            <button type="submit">Войти</button>
        </div>
        <div class="repeatonsite">
            <a href="#">Вернуться на сайт</a>
        </div>
    </div>
</div>
</body>
</html>