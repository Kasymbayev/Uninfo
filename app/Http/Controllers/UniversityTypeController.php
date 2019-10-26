<?php

namespace App\Http\Controllers;

use App\Entities\UniversityType;
use Illuminate\Support\Facades\Request;

class UniversityTypeController extends Controller
{
    public function Types(){
        $objType = new UniversityType();
        $types = $objType->get();
        return view('admin.type',['types' => $types]);
    }

    public function addTypes()
    {
        return view('admin.add_type');
    }

    public function addRequestTypes(){

        $type = new UniversityType();
        $type -> type_name = Request::input('type_name');

        $saveFlag = $type->save();
        if($saveFlag){
            return redirect(route('admin_type'))->with('success', 'Тип успешно добавлен');
        }

    }
}
