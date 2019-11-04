<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class SearchModel extends Model
{

    public function subject(){
        return $this->belongsTo(UniversitySubject::class);
    }

    public function university(){
        return $this->belongsTo(Universities::class,'university_id');
    }

    public function qualification(){
        return $this->belongsTo(UniversityQualification::class);
    }

    public function direction(){
        return $this->belongsTo(SpecialtyDirection::class);
    }

}
