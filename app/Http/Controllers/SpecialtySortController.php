<?php

namespace App\Http\Controllers;


use App\Entities\UniversitySpecialty;

class SpecialtySortController extends Controller
{
    public function bachelor(){

        $specialities = UniversitySpecialty::where('qualification_id','1')->get();
        return view('pages.specialty',
            ['specialities' => $specialities,
            ]);

    }

    public function magistr(){

        $specialities = UniversitySpecialty::where('qualification_id','2')->get();
        return view('pages.specialty',
            ['specialities' => $specialities,
            ]);

    }

}
