<?php

namespace App\Http\Controllers;

use App\Entities\UniversityQualification;
use Illuminate\Support\Facades\Request;

class UniversityQualificationController extends Controller
{
    public function Qualification(){

        $ObjQualification = new UniversityQualification();
        $qualifications = $ObjQualification->get();
        return view('admin.qualification',['qualifications' => $qualifications]);
    }

    public function AddQualification(){
        return view('admin.add_qualification');
    }

    public function AddRequestQualification(){

        $qualification = new UniversityQualification();
        $qualification -> qualification = Request::input('qualification_name');

        $saveFlag = $qualification->save();
        if($saveFlag){
            return redirect(route('admin_qualification'))->with('success', 'Квалификация успешно добавлена');
        }

    }
}
