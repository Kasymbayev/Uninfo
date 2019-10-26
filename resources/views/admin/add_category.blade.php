@extends('admin_index')
@section('title','Добавить направление')
@section('content')
    <main class="main">
        <div class="container-fluid">

            <div class="section_1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h4>Добавить категорию</h4>
                        </div>
                    </div>
                </div>

                <div class="form-wrapper">
                    <form action="{{route('admin_add_category')}}" method="post">
                        {!! csrf_field() !!}
                        <div class="uni_form">
                            <label for="category_name">Название категории</label>
                            <br>
                            <input type="text" id="category_name" class="form-control" name="category_name" required>

                            <br>

                            <button type="submit" class="btn btn-warning" style="color: #fff; font-size: 18px;">Добавить категорию</button>

                        </div>


                    </form>
                </div>


            </div>


        </div>
    </main>
@stop