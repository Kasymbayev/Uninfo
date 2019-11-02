@extends('admin_index')
@section('title','Админ | Основные')
@section('content')

    <main class="main">
        <div class="container-fluid">

            <div class="section_1">
                <div class="title">
                    <h4>База университетов</h4>
                </div>

                <table class="table table-hover" style="background: white">
                    <thead class="bg-white">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Название</th>
                        <th scope="col">Адрес</th>
                        <th scope="col">Телефон</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Категория</th>
                        <th scope="col">Код</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($universities as $university)
                        <tr>
                            <th scope="row">{{$university->id}}</th>
                            <td width="350">
                                {{$university->title}}
                            </td>
                            <td>
                                {{$university->address}}
                            </td>
                            <td>{{$university->phone_number}}</td>
                            <td>{{$university->email}}</td>
                            <td>{{$university->university_category}}</td>
                            <td>{{$university->university_code}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="section_2">
                <div class="title">
                    <h4>Лучшие специальности</h4>
                </div>

                <table class="table bg-primary" style="background: white">
                    <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Шифр</th>
                        <th scope="col">Специальность</th>
                        <th scope="col">Университеты</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($specialities as $specialty)
                        <tr>
                            <th scope="row">{{$specialty -> id}}</th>
                            <td>
                                {{$specialty-> specialty_cipher}}
                            </td>
                            <td>
                                {{$specialty-> specialty_name}}
                            </td>

                            <td>{{$specialty-> university-> title}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="section_2">
                <div class="title">
                    <h4>Категории университетов</h4>
                </div>

                <table class="table bg-white table-hover" style="background: white">
                    <thead class="bg-white">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Категория</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <th scope="row">{{$category->id}}</th>
                            <td>
                                {{$category->category_name}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </main>

@stop