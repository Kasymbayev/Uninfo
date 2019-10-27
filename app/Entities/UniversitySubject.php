<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class UniversitySubject extends Model
{
    protected $table = 'subjects';
    protected $primaryKey = 'id';

    protected $fillable =
        [
            'subject'
        ];
}
