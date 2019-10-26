@extends('admin_index')
@section('title','Типы ВУЗов')
@section('content')
    <main class="main">
        <div class="container-fluid">

            <div class="section_1">
                <div class="row">
                    <div class="col-md-9">
                        <div class="title">
                            <h4>Типы ВУЗов</h4>
                        </div>
                    </div>
                    <div class="col-md-3 text-right">
                        <div class="action-button">
                            <a href="{{route('admin_add_qualification')}}">Добавить тип</a>
                        </div>
                    </div>
                </div>

                <table class="table bg-primary" style="background: white">
                    <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Тип</th>
                        <th scope="col">Действие</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            Академия
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