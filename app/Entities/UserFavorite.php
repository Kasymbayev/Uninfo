<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

/**
 * @property array|null|string user_id
 * @property array|null|string university_id
 */
class UserFavorite extends Model
{
    protected $table = 'favorites';
    protected $primaryKey = 'id';

    protected $fillable =
        [
            'university_id',
            'user_id',
        ];


    public function university(){
        return $this->belongsTo(Universities::class,'university_id');
    }


}
