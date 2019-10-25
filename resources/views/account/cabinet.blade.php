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
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Названия ВУЗА</th>
                                            <th>Действие</th>
                                            <th>Подача</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a href="#">Международный IT Университет</a></td>
                                            <td><a href="#">Удалить</a></td>
                                            <td><a href="#">Подать документы</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
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

@stop