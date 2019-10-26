<?php
/**
 * Created by PhpStorm.
 * User: Kassymbayev
 * Date: 20.10.2019
 * Time: 23:49
 */

namespace App\Http\Controllers\Admin;

use App\Entities\Universities;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{

    public function index(){

        $ObjUniversitites = new Universities();
        $universities = $ObjUniversitites->get();
        return view('admin.index',['universities' => $universities]);
    }

    public function qualification(){return view('admin.qualification');}

    public function specialty(){return view('admin.specialty');}

    public function type(){return view('admin.type');}

    public function add_university(){return view('admin.add_university');}

    public function add_specialty(){return view('admin.add_specialty');}

    public function add_qualification(){return view('admin.add_qualification');}

    public function add_type(){return view('admin.add_type');}

}
