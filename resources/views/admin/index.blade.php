@extends('admin_index')
@section('title','Админ | Основные')
@section('content')

    <main class="main">
        <div class="container-fluid">

            <div class="section_1">
                <div class="title">
                    <h4>Лучшие университеты</h4>
                </div>

                <table class="table table-hover" style="background: white">
                    <thead class="bg-white">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Название</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Категория</th>
                        <th scope="col">Код</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($universities as $university)
                        <tr>
                            <th scope="row">{{$university->id}}</th>
                            <td>
                                {{$university->title}}
                            </td>
                            <td>
                                {{$university->description}}
                            </td>
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
                        <th scope="col">Описание</th>
                        <th scope="col">Университеты</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            5B070300
                        </td>
                        <td>
                            Информационные системы
                        </td>
                        <td>
                            Специальность «Информационные системы» – область науки и техники, которая включает совокупность средств, способов и методов человеческой деятельности, направленных на создание и применение систем сбора, представления, хранения, передачи и обработки информации.
                        </td>
                        <td>Международный университет информационных технологий</td>
                    </tr>
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
                        <th scope="col">Университет</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            Технический
                        </td>
                        <td>
                            Международный университет информационных технологий
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </main>

@stop