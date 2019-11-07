<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class UniversityJoinSpecialty extends Model
{
    protected $table = 'uni_specialty';
    protected $primaryKey = 'id';

    protected $fillable =
        [
            'university_id',
            'specialty_id'
        ];

    public function university(){
        return $this->belongsTo(Universities::class,'university_id');
    }

}
