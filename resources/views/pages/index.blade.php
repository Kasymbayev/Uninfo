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
<div class="wrapper">
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
                    <div class="col-md-4 auth_buttons">
                        <div class="cabinet_btn">
                            <input type="button" value="Мой кабинет" onClick="window.location='{{route('login')}}'">
                        </div>
                        <div class="create_btn">
                            <input type="button" value="Создать кабинет" onClick="window.location='{{route('register')}}'">
                        </div>
                    </div>
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
        <div class="search_section">
            <div class="main_object">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Найти Университет мечты</h3>
                            <p>Помощник по поиску вуза поможет подобрать вам университет</p>
                        </div>
                    </div>
                    <div class="row">
                        <form action="/" method="get">
                            <div class="search_section_inputs">
                                <div class="col-md-3 col-xs-12 inputs border_l">
                                    <input type="text" placeholder="Ваш предмет">
                                </div>
                                <div class="col-md-3 col-xs-12 inputs border_c">
                                    <select name="" id="">
                                        <option aria-disabled="true">Квалификация</option>
                                        <option value="Bachelor">Бакалавар</option>
                                        <option value="Magistor">Магистратура</option>
                                        <option value="Doctor">Докторантура</option>
                                    </select>
                                </div>
                                <div class="col-md-3 col-xs-12 inputs border_r">
                                    <input type="button" value="Вперед">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="section_one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_title">
                            <h3>Что вы хотите изучать?</h3>
                            <p>Популярные предметы</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="subject_cards">
                        <div class="col-md-4 subject_card">
                            <div class="card_header">
                                <div class="subject_title_chem">
                                    <img src="images/icons/chem.png" alt=""> <span>Наука</span>
                                </div>
                            </div>
                            <ul>
                                <li><a href="#">Биология</a></li>
                                <li><a href="#">Экология</a></li>
                                <li><a href="#">Физика</a></li>
                                <li><a href="#">Общие науки</a></li>
                            </ul>
                            <div class="show_all_object">
                                <a href="">Посмотреть все</a>
                            </div>
                        </div>
                        <div class="col-md-4 subject_card">
                            <div class="card_header">
                                <div class="subject_title_medi">
                                    <img src="images/icons/heart.png" alt=""> <span>Здоровье и медицина</span>
                                </div>
                            </div>
                            <ul>
                                <li><a href="#">Медицина</a></li>
                                <li><a href="#">Психология</a></li>
                                <li><a href="#">Стоматология</a></li>
                                <li><a href="#">Общее здравохранение</a></li>
                            </ul>
                            <div class="show_all_object">
                                <a href="">Посмотреть все</a>
                            </div>
                        </div>
                        <div class="col-md-4 subject_card">
                            <div class="card_header">
                                <div class="subject_title_social">
                                    <img src="images/icons/social.png" alt=""> <span>Социальные науки</span>
                                </div>
                            </div>
                            <ul>
                                <li><a href="#">СМИ</a></li>
                                <li><a href="#">Кино и телевидение</a></li>
                                <li><a href="#">Лингвистика</a></li>
                                <li><a href="#">Экономика</a></li>
                            </ul>
                            <div class="show_all_object">
                                <a href="">Посмотреть все</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="subject_cards">
                        <div class="col-md-4 subject_card">
                            <div class="card_header">
                                <div class="subject_title_desi">
                                    <img src="images/icons/design.png" alt=""> <span>Искусство и дизайн</span>
                                </div>
                            </div>
                            <ul>
                                <li><a href="#">Искусство</a></li>
                                <li><a href="#">Музыка</a></li>
                                <li><a href="#">Театр и драма</a></li>
                                <li><a href="#">Арт-менеджмент</a></li>
                            </ul>
                            <div class="show_all_object">
                                <a href="">Посмотреть все</a>
                            </div>
                        </div>
                        <div class="col-md-4 subject_card">
                            <div class="card_header">
                                <div class="subject_title_bus">
                                    <img src="images/icons/business.png" alt=""> <span>Бизнес</span>
                                </div>
                            </div>
                            <ul>
                                <li><a href="#">Бизнес</a></li>
                                <li><a href="#">Менеджмент</a></li>
                                <li><a href="#">Маркетинг</a></li>
                                <li><a href="#">Бухгалтерский учет</a></li>
                            </ul>
                            <div class="show_all_object">
                                <a href="">Посмотреть все</a>
                            </div>
                        </div>
                        <div class="col-md-4 subject_card">
                            <div class="card_header">
                                <div class="subject_title_it">
                                    <img src="images/icons/it.png" alt=""> <span>Инженерия</span>
                                </div>
                            </div>
                            <ul>
                                <li><a href="#">Технологии и инженерия</a></li>
                                <li><a href="#">Промышленное и строительство</a></li>
                                <li><a href="#">Теплоэнергетика и электротехника</a></li>
                                <li><a href="#">Программирование</a></li>
                            </ul>
                            <div class="show_all_object">
                                <a href="">Посмотреть все</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="show_more_subject_button">
                            <input type="submit" value="Посмотреть все предметы">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section_two">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_title">
                            <h3>Популярные ВУЗЫ страны</h3>
                            <p>Это то, что смотрят пользователи</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="uni_cards">
                        <div class="col-md-3 uni_card">
                            <div class="status_stick_accept">
                                <div class="status_text">
                                    <p>Принят</p>
                                </div>
                            </div>
                            <div class="uni_picture">
                                <img src="images/iitu.jpg" alt="">
                            </div>
                            <div class="uni_title">
                                <h5>Международный IT университет</h5>
                            </div>
                            <div class="average_coin">
                                <span>Средний балл ЕНТ</span>
                                <p>85</p>
                            </div>
                            <div class="price_of_year">
                                <span>Стоимость обучения в год</span>
                                <p>950 000 тг</p>
                            </div>
                            <div class="uni_rating">
                                <span>Рейтинг вуза:</span> <label>5148</label> <label class="voices">голосов</label>
                            </div>
                            <div class="bottom_card_nav">
                                <a href="#"><div class="col-md-4 card_nav card_nav_like"></div></a>
                                <a href="#"><div class="col-md-4 card_nav card_nav_favorit"></div></a>
                                <a href="#"><div class="col-md-4 card_nav card_nav_repeat"></div></a>
                            </div>
                        </div>
                        <div class="col-md-3 uni_card">
                            <div class="status_stick_check">
                                <div class="status_text">
                                    <p>Данные на проверке</p>
                                </div>
                            </div>
                            <div class="uni_picture">
                                <img src="images/kbtu.jpg" alt="">
                            </div>
                            <div class="uni_title">
                                <h5>Казахстанско-Британский технический университет</h5>
                            </div>
                            <div class="average_coin">
                                <span>Средний балл ЕНТ</span>
                                <p>121</p>
                            </div>
                            <div class="price_of_year">
                                <span>Стоимость обучения в год</span>
                                <p>1 250 000 тг</p>
                            </div>
                            <div class="uni_rating">
                                <span>Рейтинг вуза:</span> <label>5148</label> <label class="voices">голосов</label>
                            </div>
                            <div class="bottom_card_nav">
                                <a href="#"><div class="col-md-4 card_nav card_nav_like"></div></a>
                                <a href="#"><div class="col-md-4 card_nav card_nav_favorit"></div></a>
                                <a href="#"><div class="col-md-4 card_nav card_nav_repeat"></div></a>
                            </div>
                        </div>
                        <div class="col-md-3 uni_card">
                            <div class="status_stick_check">
                                <div class="status_text">
                                    <p>Данные на проверке</p>
                                </div>
                            </div>
                            <div class="uni_picture">
                                <img src="images/kaznu.jpg" alt="">
                            </div>
                            <div class="uni_title">
                                <h5>Казахский Национальный университет</h5>
                            </div>
                            <div class="average_coin">
                                <span>Средний балл ЕНТ</span>
                                <p>65</p>
                            </div>
                            <div class="price_of_year">
                                <span>Стоимость обучения в год</span>
                                <p>600 000 тг</p>
                            </div>
                            <div class="uni_rating">
                                <span>Рейтинг вуза:</span> <label>5148</label> <label class="voices">голосов</label>
                            </div>
                            <div class="bottom_card_nav">
                                <a href="#"><div class="col-md-4 card_nav card_nav_like"></div></a>
                                <a href="#"><div class="col-md-4 card_nav card_nav_favorit"></div></a>
                                <a href="#"><div class="col-md-4 card_nav card_nav_repeat"></div></a>
                            </div>
                        </div>
                        <div class="col-md-3 uni_card">
                            <div class="status_stick_check">
                                <div class="status_text">
                                    <p>Данные на проверке</p>
                                </div>
                            </div>
                            <div class="uni_picture">
                                <img src="images/sdu.jpg" alt="">
                            </div>
                            <div class="uni_title">
                                <h5>Университет Сулейман Демиреля</h5>
                            </div>
                            <div class="average_coin">
                                <span>Средний балл ЕНТ</span>
                                <p>75</p>
                            </div>
                            <div class="price_of_year">
                                <span>Стоимость обучения в год</span>
                                <p>750 000 тг</p>
                            </div>
                            <div class="uni_rating">
                                <span>Рейтинг вуза:</span> <label>5148</label> <label class="voices">голосов</label>
                            </div>
                            <div class="bottom_card_nav">
                                <a href="#"><div class="col-md-4 card_nav card_nav_like"></div></a>
                                <a href="#"><div class="col-md-4 card_nav card_nav_favorit"></div></a>
                                <a href="#"><div class="col-md-4 card_nav card_nav_repeat"></div></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="uni_cards">
                        <div class="col-md-3 uni_card">
                            <div class="status_stick_accept">
                                <div class="status_text">
                                    <p>Принят</p>
                                </div>
                            </div>
                            <div class="uni_picture">
                                <img src="images/iitu.jpg" alt="">
                            </div>
                            <div class="uni_title">
                                <h5>Международный IT университет</h5>
                            </div>
                            <div class="average_coin">
                                <span>Средний балл ЕНТ</span>
                                <p>85</p>
                            </div>
                            <div class="price_of_year">
                                <span>Стоимость обучения в год</span>
                                <p>950 000 тг</p>
                            </div>
                            <div class="uni_rating">
                                <span>Рейтинг вуза:</span> <label>5148</label> <label class="voices">голосов</label>
                            </div>
                            <div class="bottom_card_nav">
                                <a href="#"><div class="col-md-4 card_nav card_nav_like"></div></a>
                                <a href="#"><div class="col-md-4 card_nav card_nav_favorit"></div></a>
                                <a href="#"><div class="col-md-4 card_nav card_nav_repeat"></div></a>
                            </div>
                        </div>
                        <div class="col-md-3 uni_card">
                            <div class="status_stick_check">
                                <div class="status_text">
                                    <p>Данные на проверке</p>
                                </div>
                            </div>
                            <div class="uni_picture">
                                <img src="images/kbtu.jpg" alt="">
                            </div>
                            <div class="uni_title">
                                <h5>Казахстанско-Британский технический университет</h5>
                            </div>
                            <div class="average_coin">
                                <span>Средний балл ЕНТ</span>
                                <p>121</p>
                            </div>
                            <div class="price_of_year">
                                <span>Стоимость обучения в год</span>
                                <p>1 250 000 тг</p>
                            </div>
                            <div class="uni_rating">
                                <span>Рейтинг вуза:</span> <label>5148</label> <label class="voices">голосов</label>
                            </div>
                            <div class="bottom_card_nav">
                                <a href="#"><div class="col-md-4 card_nav card_nav_like"></div></a>
                                <a href="#"><div class="col-md-4 card_nav card_nav_favorit"></div></a>
                                <a href="#"><div class="col-md-4 card_nav card_nav_repeat"></div></a>
                            </div>
                        </div>
                        <div class="col-md-3 uni_card">
                            <div class="status_stick_check">
                                <div class="status_text">
                                    <p>Данные на проверке</p>
                                </div>
                            </div>
                            <div class="uni_picture">
                                <img src="images/kaznu.jpg" alt="">
                            </div>
                            <div class="uni_title">
                                <h5>Казахский Национальный университет</h5>
                            </div>
                            <div class="average_coin">
                                <span>Средний балл ЕНТ</span>
                                <p>65</p>
                            </div>
                            <div class="price_of_year">
                                <span>Стоимость обучения в год</span>
                                <p>600 000 тг</p>
                            </div>
                            <div class="uni_rating">
                                <span>Рейтинг вуза:</span> <label>5148</label> <label class="voices">голосов</label>
                            </div>
                            <div class="bottom_card_nav">
                                <a href="#"><div class="col-md-4 card_nav card_nav_like"></div></a>
                                <a href="#"><div class="col-md-4 card_nav card_nav_favorit"></div></a>
                                <a href="#"><div class="col-md-4 card_nav card_nav_repeat"></div></a>
                            </div>
                        </div>
                        <div class="col-md-3 uni_card">
                            <div class="status_stick_check">
                                <div class="status_text">
                                    <p>Данные на проверке</p>
                                </div>
                            </div>
                            <div class="uni_picture">
                                <img src="images/sdu.jpg" alt="">
                            </div>
                            <div class="uni_title">
                                <h5>Университет Сулейман Демиреля</h5>
                            </div>
                            <div class="average_coin">
                                <span>Средний балл ЕНТ</span>
                                <p>75</p>
                            </div>
                            <div class="price_of_year">
                                <span>Стоимость обучения в год</span>
                                <p>750 000 тг</p>
                            </div>
                            <div class="uni_rating">
                                <span>Рейтинг вуза:</span> <label>5148</label> <label class="voices">голосов</label>
                            </div>
                            <div class="bottom_card_nav">
                                <a href="#"><div class="col-md-4 card_nav card_nav_like"></div></a>
                                <a href="#"><div class="col-md-4 card_nav card_nav_favorit"></div></a>
                                <a href="#"><div class="col-md-4 card_nav card_nav_repeat"></div></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="footer_objects">
                        <div class="col-md-3 logo">
                            <div class="logo_img">
                                <img src="images/logo.png" alt="">
                            </div>
                            <div class="descr_logo">
                                <span>Интересные вузы <br>Казахстана</span><br>
                                <label>Вперед на поиски</label>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6 information">
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
    </div>
</div>
<script
        src="https://code.jquery.com/jquery-2.0.0.min.js"
        integrity="sha256-1IKHGl6UjLSIT6CXLqmKgavKBXtr0/jJlaGMEkh+dhw="
        crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>