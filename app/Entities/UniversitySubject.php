<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * @property array|null|string subject
 */
class UniversitySubject extends Model
{
    protected $table = 'subjects';
    protected $primaryKey = 'id';

    protected $fillable =
        [
            'subject'
        ];
}
