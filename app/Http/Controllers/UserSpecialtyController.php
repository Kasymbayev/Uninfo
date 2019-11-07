<?php

namespace App\Http\Controllers;

use App\Entities\Universities;
use App\Entities\UniversitySpecialty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserSpecialtyController extends Controller
{
    public function userSpecialty(){

        $ObjSpecialty = new UniversitySpecialty();
        $specialities = $ObjSpecialty->get();
        $qualifications = UniversitySpecialty::with('qualification')->get();
        $directions = UniversitySpecialty::with('direction')->get();
        $subjects = UniversitySpecialty::with('subject')->get();
        $universities = UniversitySpecialty::with('university')->get();
        return view('pages.specialty',
            [
                'specialities' => $specialities,
                'qualifications' => $qualifications,
                'directions' => $directions,
                'subjects' => $subjects,
                'universities' => $universities,
            ]);
    }

    public function ShowSpecialty(int $id){

        $ObjSpecialities = new UniversitySpecialty();
        $specialities = $ObjSpecialities::all()->find($id);
        $universities = UniversitySpecialty::all()->find($id);
        return view('pages.show_specialty',
            [
                'universities' => $universities,
                'specialities' => $specialities,

            ]);


}}
