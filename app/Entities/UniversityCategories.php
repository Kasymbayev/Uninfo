<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * @property array|null|string category_name
 */
class UniversityCategories extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';

    protected $fillable = [
        'category_name'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

}
