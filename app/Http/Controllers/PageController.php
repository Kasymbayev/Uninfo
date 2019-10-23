<?php
/**
 * Created by PhpStorm.
 * User: Kassymbayev
 * Date: 20.10.2019
 * Time: 23:34
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class PageController extends Controller
{

    public function index(){

        return view('pages.index')->with('success', trans('Добро пожаловать на UNINFO'));

    }

}