<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class SpecialtyDirection extends Model
{
    protected $table = 'direction';
    protected $primaryKey = 'id';

    protected $fillable =
        [
            'direction',

        ];
}
