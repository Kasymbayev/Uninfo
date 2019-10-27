<?php

namespace App\Http\Controllers;

use App\Entities\UniversitySubject;
use Illuminate\Support\Facades\Request;

class UniversitySubjectController extends Controller
{
    public function Subjects(){

        $ObjSubject = new UniversitySubject();
        $subjects = $ObjSubject->get();
        return view('admin.subject', ['subjects' => $subjects]);
    }

    public function AddSubjects(){
        return view('admin.add_subject');
    }

    public function AddRequestSubjects(){

        $subject = new UniversitySubject();
        $subject -> subject = Request::input('subject');

        $saveFlag = $subject->save();
        if($saveFlag){
            return redirect(route('admin_subject'))->with('success', 'Профильные предметы успешно добавлены');
        }

    }
}
