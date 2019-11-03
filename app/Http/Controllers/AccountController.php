<?php

namespace App\Http\Controllers;

use App\Entities\UserFavorite;
use Illuminate\Support\Facades\Auth;


class AccountController extends  Controller
{

    public function index()
    {
        $ObjFavorite = new UserFavorite();
        $universities = UserFavorite::with('university')->get();
        $favorites = $ObjFavorite::where('user_id', '=', Auth::user()->id)->get();
        return view('account.cabinet',['favorites' => $favorites,'universities' => $universities]);
    }

}