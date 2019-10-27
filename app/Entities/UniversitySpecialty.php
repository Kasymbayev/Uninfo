<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class UniversitySpecialty extends Model
{
    protected $table = 'specialty';
    protected $primaryKey = 'id';

    protected $fillable =
        [
            'specialty_name',
            'specialty_cipher',
            'university_id',
            'qualification_id',
        ];


    public function qualification()
    {
        return $this->belongsTo('App\Entities\UniversityQualification');
    }

    public function universities()
    {
        return $this->hasMany('App\Entities\Universities');
    }

}
