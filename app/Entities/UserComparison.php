<?php

namespace App\Entities;

use App\Entities\Universities;
use Illuminate\Database\Eloquent\Model;

/**
 * @property array|null|string user_id
 * @property array|null|string university_id
 */
class UserComparison extends Model
{
    protected $table = 'comparison';
    protected  $primaryKey = 'id';

    protected $fillable =
        [
          'university_id',
          'user_id',
        ];

    public function university(){
        return $this->belongsTo(Universities::class,'university_id');
    }
}
