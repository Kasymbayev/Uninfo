<?php

namespace App\Http\Controllers;

use App\Entities\UniversityCategories;
use App\Entities\Universities;
use App\Entities\UniversityType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;


class UniversityController extends Controller
{

    public function Universities(){

        $ObjUniversity = new Universities();
        $universities = $ObjUniversity->get();
        return view('admin.universities',['universities' => $universities]);

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
            request()->file('university_img')->move('public/images/university_img',$fileNameToStore);
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
            return redirect(route('admin_universities'))->with('success','Университет успешно добавлен');
        }

    }

    public function editUniversity(int $id){
        $ObjCategories = new UniversityCategories();
        $ObjTypes = new UniversityType();
        $university = Universities::all()->find($id);
        $types = $ObjTypes->get();
        $categories = $ObjCategories->get();
        return view('admin.university_edit',
            [
                'universities' => $university,
                'types' => $types,
                'categories' => $categories,
            ]);
    }


    public function editRequestUniversity(Request $request, int $id){

            $objUniversity = Universities::all()->find($id);

            $objUniversity -> abbreviation = $request->input('university_abbreviation');
            $objUniversity -> title = $request->input('university_title');
            $objUniversity -> description = $request->input('university_descr');
            $objUniversity -> rector = $request->input('university_rector');
            $objUniversity -> military_dep = $request->input('military_dep');
            $objUniversity -> address = $request->input('university_address');
            $objUniversity -> phone_number = $request->input('university_phone');
            $objUniversity -> fax_number = $request->input('university_fax');
            $objUniversity -> university_type = $request->input('university_type');
            $objUniversity -> email = $request->input('university_email');
            $objUniversity -> website = $request->input('university_website');
            $objUniversity -> university_code = $request->input('university_code');
            $objUniversity -> average_grade = $request->input('university_average_grade');
            $objUniversity -> average_price = $request->input('university_average_price');
            $objUniversity -> university_category = $request->input('category_of_university');

            if($objUniversity->save()){
                return redirect()->route('admin_universities')->with('success','Информация изменена');
            }
    }

    public function delete($id) {


            Universities::where('id', $id)->delete();
            return redirect(route('admin_universities'))->with('success','Университет успешно удален!');

    }
}
