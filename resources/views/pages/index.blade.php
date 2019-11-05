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
                            <form action="{{route('search')}}" method="post">
                                {!! csrf_field() !!}
                                <div class="search_section_inputs">
                                    <div class="col-md-6 col-xs-12 inputs border_l">
                                        <input type="text" placeholder="Введите название или шифр специальности" name="subject" required>
                                    </div>
                                    <div class="col-md-6 col-xs-12 inputs border_r">
                                        <input type="submit" value="Вперед">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            @if(!$universities->isEmpty())
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
                                        @if($university->status == 1)
                                        <div class="status_stick_accept">
                                            <div class="status_text">
                                                <p>Верифицирован</p>
                                            </div>
                                        </div>
                                        @else
                                            <div class="status_stick_check">
                                                <div class="status_text">
                                                    <p>На проверке</p>
                                                </div>
                                            </div>
                                        @endif
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
                                        </a>
                                        @if(\Illuminate\Support\Facades\Auth::check())
                                            <div class="bottom_card_nav university_buttons">
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
                                        @else
                                            <div class="no_auth">
                                                <a href="{{route('login')}}"><span>Войдите для просмотра информации</span></a>
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-md-12">
                    <div class="section_title">
                        <p>Администратор пополните базу!</p>
                    </div>
                </div>
            @endif
        </div>
    </div>

@stop

