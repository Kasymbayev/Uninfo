<?php

namespace App\Http\Controllers;

use App\Entities\UniversityCategories;
use App\Entities\Universities;
use App\Entities\UniversityType;
use Illuminate\Http\Request;


class UniversityController extends Controller
{

    public function Universities(){



        return view('admin.universities');

    }

    public function addUniversities()
    {
        $objCategories = new UniversityCategories();
        $categories = $objCategories->get();
        $objTypes = new UniversityType();
        $types = $objTypes->get();
        return view('admin.add_university',['categories' => $categories,'types' => $types]);
    }

    public function addRequestUniversity(Request $request){

        $university = new Universities();

        if(request()->hasFile('university_img')){
            $filenameWithExit = request()->file('university_img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExit, PATHINFO_FILENAME);
            $extension = request()->file('university_img')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            request()->file('university_img')->storeAs('public/images',$fileNameToStore);
        }

        $university -> university_img = $fileNameToStore;

        $university -> abbreviation = $request->input('university_abbreviation');
        $university -> title = $request->input('university_title');
        $university -> description = $request->input('university_descr');
        $university -> rector = $request->input('university_rector');
        $university -> military_dep = $request->input('military_dep');
        $university -> address = $request->input('university_address');
        $university -> phone_number = $request->input('university_phone');
        $university -> fax_number = $request->input('university_fax');
        $university -> university_type = $request->input('university_type');
        $university -> email = $request->input('university_email');
        $university -> website = $request->input('university_website');
        $university -> university_code = $request->input('university_code');
        $university -> average_grade = $request->input('university_average_grade');
        $university -> average_price = $request->input('university_average_price');
        $university -> university_category = $request->input('category_of_university');


        $saveFlag = $university->save();
        if($saveFlag){
            return view('admin.universities')->with('success','Университет успешно добавлен');
        }

    }
}
