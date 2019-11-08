<?php

namespace App\Http\Controllers;

use App\Entities\DocumentsModel;
use App\Entities\Universities;
use App\Entities\UniversitySpecialty;
use App\Entities\User;
use Illuminate\Support\Facades\Request;

class DocumentsController extends Controller
{
    public function document(){
        $ObjDocuments = new DocumentsModel;
        $documents = $ObjDocuments->get();
        return view('admin.documents',['documents' => $documents]);
    }

    public function AddDocument(){

        $ObjUsers = new User();
        $ObjUniversities = new Universities();
        $universities = $ObjUniversities->get();
        $ObjSpecialties = new UniversitySpecialty();
        $specialties = $ObjSpecialties->get();
        $users = $ObjUsers->get();
        return view('pages.add_documents',[
            'universities' => $universities,
            'specialties' => $specialties,
            'users' => $users,
        ]);

    }

    public function addRequestDocument(){

        $document = new DocumentsModel();
        $document -> username = Request::input('username');
        $document -> userlastname = Request::input('userlastname');
        $document -> iin = Request::input('iin');
        $document -> address = Request::input('address');
        $document -> kvota = Request::input('kvota');
        $document -> serial_certificate = Request::input('serial_certificate');
        $document -> phone = Request::input('phone');
        $document -> id_certificate = Request::input('id_certificate');
        $document -> university = Request::input('university');
        $document -> specialty = Request::input('specialty');

        $saveFlag = $document->save();
        if($saveFlag){
            return redirect(route('account'))->with('success', 'Заявка успешно отправлена');
        }

    }
}
