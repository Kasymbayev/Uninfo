<?php

namespace App\Http\Controllers;

use App\Entities\UserComparison;
use Illuminate\Support\Facades\Request;


class UserComparisonController extends Controller
{
    public function addCompare(){
        return view('pages.index');
    }

    public function addRequestCompare(){

        $comparison = new UserComparison();
        $comparison -> university_id = Request::input('university_id');
        $comparison -> user_id = Request::input('user_id');


        $saveFlag = $comparison->save();
        if($saveFlag){
            return redirect(route('index'))->with('success', 'Вы добавили для сравнения');
        }

    }
}
