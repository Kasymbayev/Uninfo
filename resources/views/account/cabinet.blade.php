@extends('main_index')

@section('content')

    <div class="content">
        <div class="container" style="margin-top: 30px">
            <div class="row">
                <div id="MyAccountsTab" class="tabbable tabs-left">
                    <ul  class="nav nav-tabs col-md-2 col-xs-12">
                        <div class="mycab">
                            <div class="cabtitle">
                                <span class="account-type">Здравствуйте, {{\Illuminate\Support\Facades\Auth::user()->firstname}}</span>
                            </div>
                        </div>
                        <li class="active">
                            <div data-target="#lA" data-toggle="tab" class="nava">
                                <div>
                                    <span class="account-type">Избранное</span><br/>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div data-target="#lB" data-toggle="tab" class="nava">
                                <div>
                                    <span class="account-type">Сравнения</span><br/>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div data-target="#lC" data-toggle="tab" class="nava">
                                <div>
                                    <span class="account-type">Поданные документы</span><br/>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="tab-content col-md-10">
                        <div class="tab-pane active" id="lA">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 style="margin-top: -30px;">Избранное</h3>
                                    <br>
                                    @if(!$favorites->isEmpty())
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Названия ВУЗА</th>
                                            <th>Действие</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                                @foreach($favorites as $favorite)
                                                <tr>
                                                    <td><a href="#">{{$favorite->university->title}}</a></td>
                                                    <td><a href="#">Удалить</a></td>
                                                </tr>
                                                @endforeach
                                        </tbody>
                                    </table>
                                    @else
                                        <div class="no_compare">
                                            <h3>
                                                Упс!<br><span>Нет избранных</span>
                                            </h3>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="lB">
                            <h3 style="margin-top: -30px;">Сравнения</h3>
                                    <div class="compare_style">
                                        @if(!$compare->isEmpty())
                                            <div class="compare_cards">
                                                @foreach($compare as $compare)
                                                    <a href="{{route('uni.show',
                                                        [

                                                        'id'   => $compare->university->id,
                                                        'slug' => str_slug($compare->university->title)
                                                        ]
                                                    )}}">
                                                    <div class="col-md-3 compare_card">
                                                        <div class="uni_picture_compare">
                                                            <img src="{{ asset('public/images/university_img/'.$compare->university->university_img) }}">
                                                        </div>
                                                        <div class="compare_title">
                                                            <h5>{{$compare->university->title}}</h5>
                                                        </div>
                                                        <div class="compare_nav">
                                                            <p>Аббревиатура: <span class="answer"><small>{{$compare->university->abbreviation}}</small></span> </p>
                                                        </div>
                                                        <div class="compare_nav">
                                                            <p>Ректор: <span class="answer"><small>{{$compare->university->rector}}</small></span></p>
                                                        </div>
                                                        <div class="compare_nav">
                                                            <p>Военная кафедра: <span class="answer"><small>{{$compare->university->military_dep}}</small></span></p>
                                                        </div>
                                                        <div class="compare_nav">
                                                            <p>Средний балл поступления: <span class="answer"><small>{{$compare->university->average_grade}}</small></span></p>
                                                        </div>
                                                        <div class="compare_nav">
                                                            <p>Средняя стоимость обучения: <span class="answer"><small>{{$compare->university->average_price}}</small> тг/в год</span></p>
                                                        </div>
                                                        <div class="compare_nav">
                                                            <p>Код университета: <span class="answer"><small>{{$compare->university->university_code}}</small></span></p>
                                                        </div>
                                                        <div class="compare_nav">
                                                            <p>Адрес: <span class="answer"><small>{{$compare->university->address}}</small></span></p>
                                                        </div>
                                                        <div class="compare_nav">
                                                            <p>Приемная коммисия: <span class="answer"><small>{{$compare->university->phone_number}}</small></span></p>
                                                        </div>
                                                        <div class="compare_nav">
                                                            <p>Факс: <span class="answer"><small>{{$compare->university->fax_number}}</small></span></p>
                                                        </div>
                                                        <div class="compare_nav">
                                                            <p>Почта: <span class="answer"><small>{{$compare->university->email}}</small></span></p>
                                                        </div>
                                                        <div class="compare_nav">
                                                            <p>Сайт: <span class="answer"><small>{{$compare->university->website}}</small></span></p>
                                                        </div>
                                                        <div class="delete_btn">
                                                            <a href="#">Убрать</a>
                                                        </div>
                                                    </div>
                                                    </a>
                                                @endforeach
                                            </div>
                                            @else
                                            <div class="no_compare">
                                                <h3>
                                                    Упс!<br><span>У вас нет сравнений</span>
                                                </h3>
                                            </div>
                                        @endif
                                    </div>
                        </div>
                        <div class="tab-pane" id="lC">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Поданные документы</h3>
                                    <br>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Названия ВУЗА</th>
                                            <th>Статус</th>
                                            <th>Действие</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a href="#">Международный IT Университет</a></td>
                                            <td>Принят</td>
                                            <td><a href="#">Отменить</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
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
    <script src="/js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.js"></script>

@stop