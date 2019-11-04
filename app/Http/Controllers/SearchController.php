<?php

namespace App\Http\Controllers;

use App\Entities\UniversitySpecialty;
use Illuminate\Support\Facades\Request;

class SearchController extends Controller
{
    public function search(){



        $q = Request::get ( 'subject' );
        $search = UniversitySpecialty::where('specialty_name', 'LIKE', '%' . $q . '%')->orWhere('specialty_cipher', 'LIKE', '%' . $q . '%')->get();



        if(count($search) > 0)
            return view('pages.search',['search' => $search])->withDetails($search)->withQuery ( $q );
        else return view ('pages.search')->withMessage('No Details found. Try to search again !');

    }
}
