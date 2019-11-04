<?php
/**
 * Created by PhpStorm.
 * User: Kassymbayev
 * Date: 20.10.2019
 * Time: 23:34
 */

namespace App\Http\Controllers;

use App\Entities\Universities;

use App\Http\Controllers\Controller;

class PageController extends Controller
{

    public function index(){

        $ObjUniversity = new Universities();
        $universities = $ObjUniversity->get();
        return view('pages.index',['universities' => $universities]);

    }

    public function ShowUniversity(int $id){

        $infUniversity = Universities::find($id);


        if(!$infUniversity){
            return abort(404);
        }

        return view('pages.show_university',['universities' => $infUniversity]);

    }

}