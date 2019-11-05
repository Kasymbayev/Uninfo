<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * @property array|null|string type_name
 */
class UniversityType extends Model
{
    protected $table = 'type';
    protected $primaryKey = 'id';

    protected $fillable = [
        'type_name'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

}

