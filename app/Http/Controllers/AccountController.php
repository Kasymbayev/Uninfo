<?php

namespace App\Http\Controllers;

use App\Entities\UserFavorite;
use App\Http\Controllers\Controller;
use App\Entities\UserComparison;
use Illuminate\Support\Facades\Auth;


class AccountController extends  Controller
{

    public function index()
    {
        $ObjFavorite = new UserFavorite();
        $ObjCompare = new UserComparison();
        $universities = UserFavorite::with('university')->get();
        $favorites = $ObjFavorite::where('user_id', '=', Auth::user()->id)->get();
        $compare = $ObjCompare::where('user_id', '=', Auth::user()->id)->get();
        return view('account.cabinet',['favorites' => $favorites,'compare' => $compare,'universities' => $universities]);
    }



}