@extends('admin_index')
@section('title','Добавить университет')
@section('content')
    <main class="main">
        <div class="container-fluid">

            <div class="section_1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h4>Добавить университет</h4>
                        </div>
                    </div>
                </div>

                <div class="form-wrapper">
                    <form enctype="multipart/form-data" action="/" method="post">

                        <div class="uni_form">
                            <label for="university_title">Название университета</label>
                            <br>
                            <input type="text" id="university_title" class="form-control" name="university_title" required>
                            <br>
                            <label for="university_descr">Описание университета</label>
                            <br>
                            <textarea id="university_descr" class="form-control" cols="125" rows="3" name="university_descr" required></textarea>
                            <br>
                            <label for="university_img">Выберите основную фотографию университета</label>
                            <br>
                            <input id="university_img" type="file" accept="image/*,image/jpeg" name="university_img" required>
                            <br>
                            <br>
                            <label for="university_average_grade">Средний балл поступления в университет</label>
                            <br>
                            <input type="text" id="university_average_grade" class="form-control" name="university_average_grade" required>
                            <br>
                            <label for="university_average_price">Средняя цена стоимости обучения в университете</label>
                            <br>
                            <input type="text" id="university_average_price" class="form-control" name="university_average_price" required>
                            <br>
                            <label for="qualification_of_university">Квалификации университета <small>(Вы можете выбрать несколько квалификации)</small></label>
                            <br>
                            <select name="qualification_of_university" id="qualification_of_university" class="form-control" multiple>
                                <option value="">Бакалавриат</option>
                                <option value="">Магистратура</option>
                                <option value="">Докторантура</option>
                            </select>
                            <br>

                            <button type="submit" class="btn btn-warning" style="color: #fff; font-size: 18px;">Добавить университет</button>

                        </div>


                    </form>
                </div>


            </div>


        </div>
    </main>
@stop