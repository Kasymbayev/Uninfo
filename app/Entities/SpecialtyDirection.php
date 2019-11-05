<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * @property array|null|string direction
 */
class SpecialtyDirection extends Model
{
    protected $table = 'directions';
    protected $primaryKey = 'id';

    protected $fillable =
        [
            'direction',
        ];
}
