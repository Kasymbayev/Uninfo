<?php
/**
 * Created by PhpStorm.
 * User: Kassymbayev
 * Date: 20.10.2019
 * Time: 23:49
 */

namespace App\Http\Controllers\Admin;

use App\Entities\Universities;
use App\Entities\UniversityCategories;
use App\Entities\UniversitySpecialty;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{

    public function index(){

        $ObjUniversitites = new Universities();
        $ObjSpecialities = new UniversitySpecialty();
        $ObjCategories = new UniversityCategories();
        $categories = $ObjCategories->get();
        $specialities = $ObjSpecialities->get();
        $universities = $ObjUniversitites->get();
        return view('admin.index',
            [
            'universities' => $universities,
            'specialities' => $specialities,
            'categories' => $categories,
            ]);
    }


}
