<?php

namespace App\Http\Controllers;

use App\Entities\UniversitySpecialty;
use Illuminate\Http\Request;

class UserSpecialtyController extends Controller
{
    public function userSpecialty(){

        $ObjSpecialty = new UniversitySpecialty();
        $specialities = $ObjSpecialty->get();
        $qualifications = UniversitySpecialty::with('qualification')->get();
        $directions = UniversitySpecialty::with('direction')->get();
        $subjects = UniversitySpecialty::with('subject')->get();
        return view('pages.specialty',
            [
                'specialities' => $specialities,
                'qualifications' => $qualifications,
                'directions' => $directions,
                'subjects' => $subjects,
            ]);

    }
}
