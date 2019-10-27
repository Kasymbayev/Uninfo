<?php

namespace App\Http\Controllers;

use App\Entities\SpecialtyDirection;
use Illuminate\Support\Facades\Request;

class SpecialtyDirectionController extends Controller
{
    public function Directions(){

        return view('admin.direction');

    }

    public function AddDirections(){

        return view('admin.add_direct');

    }

    public function AddRequestDirections(){

        $direct = new SpecialtyDirection();
        $direct -> direction = Request::input('direct');

        $saveFlag = $direct->save();
        if($saveFlag){
            return redirect(route('admin_direct'))->with('success', 'Направление успешно добавлен');
        }

    }
}
