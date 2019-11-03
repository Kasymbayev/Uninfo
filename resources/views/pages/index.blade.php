@extends('main_index')

@section('content')

    <div class="wrapper">
        <div class="header">
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
                                    <div class="col-md-6 col-xs-12 inputs border_l">
                                        <input type="text" placeholder="Ваш предмет">
                                    </div>
                                    <div class="col-md-6 col-xs-12 inputs border_r">
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
                                <p>Популярные направления</p>
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
                            @foreach($universities as $university)
                            <div class="col-md-3 uni_card">
                                <div class="status_stick_accept">
                                    <div class="status_text">
                                        <p>Принят</p>
                                    </div>
                                </div>
                                <a href="{{route('uni.show',

                                [
                                    'id' => $university->id,
                                    'slug' => str_slug($university->title)
                                ]

                                )}}">
                                    <div class="uni_picture">
                                        <img src="{{ asset('public/images/university_img/'.$university->university_img) }}">
                                    </div>
                                    <div class="uni_title">
                                        <h5>{{$university->title}}</h5>
                                    </div>
                                    <div class="average_coin">
                                        <span>Средний балл ЕНТ</span>
                                        <p>{{$university->average_grade}}</p>
                                    </div>
                                    <div class="price_of_year">
                                        <span>Стоимость обучения в год</span>
                                        <p>{{$university->average_price}} тг</p>
                                    </div>
                                    <div class="uni_rating">
                                        <span>Рейтинг вуза:</span> <label>5148</label> <label class="voices">голосов</label>
                                    </div>
                                </a>
                                <div class="bottom_card_nav university_buttons">
                                    <a href="#"><div class="col-md-4 card_nav card_nav_like"></div></a>
                                    <form action="{{route('add.favorite')}}" method="post">
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="university_id" value="{{$university->id}}">
                                        <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                                        <button type="submit"><div class="card_nav_favorit"></div></button>
                                    </form>
                                    <form action="{{route('add.compare')}}" method="post">
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="university_id" value="{{$university->id}}">
                                        <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                                        <button type="submit"><div class="card_nav card_nav_repeat"></div></button>
                                    </form>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@stop