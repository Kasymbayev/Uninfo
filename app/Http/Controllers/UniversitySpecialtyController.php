<?php

namespace App\Http\Controllers;

use App\Entities\Universities;
use App\Entities\UniversityQualification;
use App\Entities\UniversitySpecialty;
use App\Entities\UniversitySubject;
use Illuminate\Support\Facades\Request;

class UniversitySpecialtyController extends Controller
{
    public function Specialty(){

        return view('admin.specialty');

    }

    public function AddSpecialty(){

        $ObjUniversity = new Universities();
        $ObjQualification = new UniversityQualification();
        $ObjSubject = new UniversitySubject();
        $universities = $ObjUniversity->get();
        $qualifications = $ObjQualification->get();
        $subjects = $ObjSubject->get();
        return view('admin.add_specialty',
            [
                'universities' => $universities,
                'qualifications' => $qualifications,
                'subjects' => $subjects,
            ]);

    }

    public function AddRequestSpecialty(){

        $specialty = new UniversitySpecialty();
        $specialty -> specialty_name = Request::input('specialty_name');
        $specialty -> specialty_chiper = Request::input('specialty_chiper');

        $saveFlag = $specialty->save();
        if($saveFlag){
            return redirect(route('admin_type'))->with('success', 'Тип успешно добавлен');
        }

    }
}
