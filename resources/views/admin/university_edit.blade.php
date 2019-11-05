@extends('admin_index')
@section('title','Изменить')
@section('content')
    <main class="main">
        <div class="container-fluid">

            <div class="section_1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h4>Изменить</h4>
                        </div>
                    </div>
                </div>

                <div class="form-wrapper">
                    <form method="post">
                    {!! csrf_field() !!}
                        <div class="uni_form">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="university_abbreviation">
                                        Аббревиатура
                                    </label>
                                    <input type="text"
                                           id="university_abbreviation"
                                           class="form-control"
                                           name="university_abbreviation"
                                           placeholder="IITU"
                                           required
                                           value="{{$universities->abbreviation}}"
                                    >
                                </div>
                                <div class="col-md-7">
                                    <label for="university_title">
                                        Название
                                    </label>
                                    <input type="text"
                                           value="{{$universities->title}}"
                                           id="university_title"
                                           class="form-control"
                                           name="university_title"
                                           placeholder="Международный университет информационных технологий"
                                           required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-8">
                                    <label for="university_descr">
                                        Описание
                                    </label>
                                    <textarea id="university_descr"
                                              class="form-control"
                                              cols="125"
                                              rows="3"
                                              name="university_descr"
                                              required>{{$universities->description}}"
                                    </textarea>
                                </div>
                                <div class="col-md-4" style="margin-top: 20px;">
                                    <label for="university_img">
                                        <sub>
                                            Фотография меняется администратором
                                        </sub>
                                    </label>
                                    <input id="university_img"
                                           type="file"
                                           disabled
                                           name="university_img"
                                           required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-8">
                                    <label for="university_rector">
                                        ФИО Ректора
                                    </label>
                                    <input type="text"
                                           id="university_rector"
                                           class="form-control"
                                           name="university_rector"
                                           required
                                           value="{{$universities->rector}}"
                                           placeholder="Ускенбаева Раиса Кабиевна">
                                </div>
                                <div class="col-md-4">
                                    <label for="military_dep">
                                        Есть ли военная кафедра
                                    </label>
                                    <select name="military_dep"
                                            id="military_dep"
                                            class="form-control">
                                        <option value="Нет">Нет</option>
                                        <option value="Есть" selected>Есть</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="address">
                                        Адрес
                                    </label>
                                    <input type="text"
                                           id="address"
                                           class="form-control"
                                           name="university_address"
                                           required
                                           value="{{$universities->address}}"
                                           placeholder="Казахстан, Алматинская область, Алматы, ул Манаса 34А">
                                </div>
                                <div class="col-md-4">
                                    <label for="university_phone">
                                        Телефон
                                    </label>
                                    <input type="text"
                                           id="university_phone"
                                           class="form-control"
                                           name="university_phone"
                                           required
                                           value="{{$universities->phone_number}}"
                                           placeholder="8(727)3200001">
                                </div>
                                <div class="col-md-4">
                                    <label for="university_fax">
                                        Факс
                                    </label>
                                    <input type="text"
                                           id="university_fax"
                                           class="form-control"
                                           name="university_fax"
                                           required
                                           value="{{$universities->fax_number}}"
                                           placeholder="8(727)2445121">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="university_type">Тип ВУЗа</label>
                                    <select name="university_type" id="university_type" required class="form-control">
                                            <option value="" hidden>Выберите тип</option>
                                        @foreach($types as $type)
                                            <option value="{{$type->id}}">{{$type->type_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="university_email">
                                        E-mail
                                    </label>
                                    <input type="text"
                                           id="university_email"
                                           class="form-control"
                                           name="university_email"
                                           required
                                           value="{{$universities->email}}"
                                           placeholder="8(727)3200001">
                                </div>
                                <div class="col-md-4">
                                    <label for="university_website">
                                        Сайт
                                    </label>
                                    <input type="text"
                                           id="university_website"
                                           class="form-control"
                                           name="university_website"
                                           required
                                           value="{{$universities->website}}"
                                           placeholder="8(727)2445121">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="university_code">
                                        Код университета
                                    </label>
                                    <input type="text"
                                           id="university_code"
                                           class="form-control"
                                           name="university_code"
                                           required
                                           value="{{$universities->university_code}}"
                                           placeholder="190">
                                </div>
                                <div class="col-md-6">
                                    <label for="university_average_grade">
                                        Средний балл поступления в университет
                                    </label>
                                    <input type="text"
                                           id="university_average_grade"
                                           class="form-control"
                                           name="university_average_grade"
                                           required
                                           value="{{$universities->average_grade}}"
                                           placeholder="97">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="university_average_price">
                                        Средняя цена стоимости обучения в университете
                                    </label>
                                    <input type="text"
                                           id="university_average_price"
                                           class="form-control"
                                           name="university_average_price"
                                           required
                                           value="{{$universities->average_price}}"
                                           placeholder="950 000">
                                </div>
                                <div class="col-md-6" style="margin-top: 25px;">
                                    <label for="category_of_university">Категория университета</label>
                                    <select name="category_of_university" id="category_of_university" class="form-control" required>
                                        <option value="" hidden>Выберите категорию</option>
                                            @foreach($categories as $category)
                                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-warning" style="color: #fff; font-size: 18px;">Изменить информацию</button>

                        </div>


                    </form>
                </div>


            </div>


        </div>
    </main>
@stop