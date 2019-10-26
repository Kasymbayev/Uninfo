<?php

namespace App\Http\Controllers;

use App\Entities\UniversityCategories;
use App\Entities\Universities;
use Symfony\Component\Console\Input\Input;

class UniversityController extends Controller
{

    public function Universities(){

        return view('admin.universities');

    }

    public function addUniversities()
    {
        $objCategories = new UniversityCategories();
        $categories = $objCategories->get();
        return view('admin.add_university',['categories' => $categories]);
    }

    public function addRequestUniversity(){

        $image = Input::file('university_img');
        $image->move('images',$image->getClientOriginalName());
        $filename = $image->getClientOriginalName();
        $university = new Universities();
        $university -> abbreviation = Input::get('university_abbreviation');
        $university -> title = Input::get('university_title');
        $university -> description = Input::get('university_descr');
        $university -> image = $filename;
        $university -> rector = Input::get('university_rector');
        $university -> military_dep = Input::get('military_dep');
        $university -> address = Input::get('university_address');
        $university -> phone_number = Input::get('university_phone');
        $university -> fax_number = Input::get('university_fax');
        $university -> fax_number = Input::get('university_fax');
        $university -> university_type = Input::get('university_type');
        $university -> email = Input::get('university_email');
        $university -> website = Input::get('university_website');
        $university -> university_code = Input::get('university_code');
        $university -> university_average_grade = Input::get('university_average_grade');
        $university -> university_average_price = Input::get('university_average_price');
        $university -> category_of_university = Input::get('category_of_university');


        $saveFlag = $university->save();
        if($saveFlag){
            return view('admin.universities');
        }

    }
}
