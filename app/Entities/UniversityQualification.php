<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * @property array|null|string qualification
 */
class UniversityQualification extends Model
{
    protected $table = 'qualification';
    protected $primaryKey = 'id';

    protected $fillable =
        [
            'qualification'
        ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

}
