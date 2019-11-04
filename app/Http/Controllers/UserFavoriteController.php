<?php

namespace App\Http\Controllers;

use App\Entities\UserFavorite;
use Illuminate\Support\Facades\Request;

class UserFavoriteController extends Controller
{

    public function addFavorite(){

        return view('pages.index');
    }

    public function addRequestFavorite(){

        $favorite = new UserFavorite();
        $favorite -> university_id = Request::input('university_id');
        $favorite -> user_id = Request::input('user_id');

        $favorite = UserFavorite::where('university_id');

        $saveFlag = $favorite->save();
        if($saveFlag)
        {
        return redirect(route('index'))->with('success', 'Вы сохранили в избранные');}
        }

}
