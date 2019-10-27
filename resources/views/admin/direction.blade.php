@extends('admin_index')
@section('title','Направления специальностей')
@section('content')
    <main class="main">
        <div class="container-fluid">

            <div class="section_1">
                <div class="row">
                    <div class="col-md-9">
                        <div class="title">
                            <h4>Направления специальностей</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="action-button">
                            <a href="{{route('admin_add_direct')}}">Добавить направления</a>
                        </div>
                    </div>
                </div>

                <table class="table" style="background: white">
                    <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Тип</th>
                        <th scope="col" class="text-right">Действие</th>
                    </tr>
                    </thead>
                    <tbody>

                            <tr>
                                <th scope="row">1</th>
                                <td>
                                    1
                                </td>
                                <td>
                                    <div class="uni_action text-right">
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