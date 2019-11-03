<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

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
