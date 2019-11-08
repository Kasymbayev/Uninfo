@extends('main_index')
@section('content')
    <main class="main">
        <div class="container">
            <div class="section_1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="learn_specialty">
                            <br>
                            <h4>Подача онлайн документации</h4>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="form-wrapper">
                    <form action="{{route('add_document')}}" method="post">
                    {!! csrf_field() !!}
                        <div class="uni_form">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="username">
                                        Имя
                                    </label>
                                    @foreach($users as $user)
                                    <input type="text"
                                           id="username"
                                           class="form-control"
                                           name="username"
                                           value="{{$user->firstname}}"
                                           required>
                                </div>
                                <div class="col-md-4">
                                    <label for="userlastname">
                                        Фамилия
                                    </label>
                                    <input type="text"
                                           id="userlastname"
                                           class="form-control"
                                           value="{{$user->lastname}}"
                                           name="userlastname"
                                           required>
                                </div>
                                <div class="col-md-4">
                                    <label for="iin">
                                        Ваш ИИН
                                    </label>
                                    <input type="text"
                                           id="iin"
                                           class="form-control"
                                           value="{{$user->iin}}"
                                           name="iin"
                                           required>
                                </div>
                                @endforeach
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-8">
                                    <label for="address">
                                        Адрес проживания
                                    </label>
                                    <input type="text"
                                           id="address"
                                           class="form-control"
                                           name="address"
                                           required>
                                </div>
                                <div class="col-md-4">
                                    <label for="kvota">
                                        Есть ли сельская квота
                                    </label>
                                    <select name="kvota"
                                            id="kvota"
                                            class="form-control">
                                        <option value="Нет">Нет</option>
                                        <option value="Есть">Есть</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="serial_certificate">
                                        Серия сертификата ЕНТ
                                    </label>
                                    <input type="text"
                                           id="serial_certificate"
                                           class="form-control"
                                           name="serial_certificate"
                                           required>
                                </div>
                                <div class="col-md-4">
                                    <label for="phone">
                                        Телефон
                                    </label>
                                    <input type="text"
                                           id="phone"
                                           class="form-control"
                                           name="phone"
                                           required>
                                </div>
                                <div class="col-md-4">
                                    <label for="id_certificate">
                                        Идентифицированный номер сертификата ент
                                    </label>
                                    <input type="text"
                                           id="id_certificate"
                                           class="form-control"
                                           name="id_certificate"
                                           required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="university">Высшее учебное заведение</label>
                                    <select name="university" id="university" class="form-control">
                                        <option value="" hidden>Выберите ВУЗ</option>
                                        @foreach($universities as $university)
                                            <option value="{{$university->title}}">{{$university->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="specialty">Специальность</label>
                                    <select name="specialty" id="specialty" class="form-control">
                                        <option value="" hidden>Выберите специальность</option>
                                        @foreach($specialties as $speciality)
                                        <option value="{{$speciality->specialty_name}}">{{$speciality->specialty_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-warning" style="color: #fff; font-size: 18px;">Подать</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@stop