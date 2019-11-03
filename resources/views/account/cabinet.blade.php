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
                                    <h3>Избранное</h3>
                                    <br>
                                    @if(!$favorites->isEmpty())
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Названия ВУЗА</th>
                                            <th>Действие</th>
                                            <th>Подача</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                                @foreach($favorites as $favorite)
                                                <tr>
                                                    <td><a href="#">{{$favorite->university->title}}</a></td>
                                                    <td><a href="#">Удалить</a></td>
                                                    <td><a href="#">Подать документы</a></td>
                                                </tr>
                                                @endforeach
                                        </tbody>
                                    </table>
                                    @else
                                        У вас нет избранных <small style="color: #8c8c8c;">(Чтобы добавить нажмите звездочку)</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="lB">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Сравнения</h3>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Названия ВУЗА</th>
                                            <th>Проходной балл</th>
                                            <th>Бюджетных мест</th>
                                            <th>Стоимость обучения</th>
                                            <th>Действия</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a href="#">Международный IT Университет</a></td>
                                            <td>105</td>
                                            <td>305</td>
                                            <td>750 000 тг/год</td>
                                            <td><a href="#">Удалить</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
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