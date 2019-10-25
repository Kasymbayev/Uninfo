@extends('admin_index')
@section('title','Специальности')
@section('content')
    <main class="main">
        <div class="container-fluid">

            <div class="section_1">
                <div class="row">
                    <div class="col-md-9">
                        <div class="title">
                            <h4>Специальности</h4>
                        </div>
                    </div>
                    <div class="col-md-3 text-right">
                        <div class="action-button">
                            <a href="{{route('admin_add_specialty')}}">Добавить специальность</a>
                        </div>
                    </div>
                </div>

                <table class="table bg-primary" style="background: white">
                    <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Шифр</th>
                        <th scope="col">Специальность</th>
                        <th scope="col">Университет</th>
                        <th scope="col">Действие</th>
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
                            Международный университет информационных технологий
                        </td>
                        <td>
                            <div class="uni_action">
                                <a href="#">Редактировать</a>  |  <a href="#">Удалить</a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>


        </div>
    </main>
@stop