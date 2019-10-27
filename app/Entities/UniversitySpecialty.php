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
            'direction_id',
            'subject_id',
        ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

}
