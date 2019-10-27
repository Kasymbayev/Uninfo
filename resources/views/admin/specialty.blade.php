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
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="action-button">
                            <a href="{{route('admin_add_specialty')}}">Добавить специальность</a>
                        </div>
                    </div>
                </div>

                <table class="table" style="background: white">
                    <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Шифр</th>
                        <th scope="col">Специальность</th>
                        <th scope="col">Квалификация</th>
                        <th scope="col">Направление</th>
                        <th scope="col">Профильные предметы</th>
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
                        <td>Бакалавр</td>
                        <td>Технические науки и технологии</td>
                        <td>Математика и Физика</td>
                        <td>
                            <div class="uni_action">
                                <a href="#" class="action-edit" title="Редактировать"><i class="fas fa-pencil-alt"></i></a>
                                <a href="#" class="action-delete" title="Удалить"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@stop