<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class SpecialtyDirection extends Model
{
    protected $table = 'directions';
    protected $primaryKey = 'id';

    protected $fillable =
        [
            'direction',

        ];
}
