@extends('admin_index')
@section('title','Добавить тип')
@section('content')
    <main class="main">
        <div class="container-fluid">

            <div class="section_1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h4>Добавить тип</h4>
                        </div>
                    </div>
                </div>

                <div class="form-wrapper">
                    <form action="{{route('admin_add_type')}}" method="post">
                        {!! csrf_field() !!}
                        <div class="uni_form">
                            <label for="type_name">Название типа</label>
                            <br>
                            <input type="text" id="type_name" class="form-control" name="type_name" required>

                            <br>

                            <button type="submit" class="btn btn-warning" style="color: #fff; font-size: 18px;">Добавить тип</button>

                        </div>


                    </form>
                </div>


            </div>


        </div>
    </main>
@stop