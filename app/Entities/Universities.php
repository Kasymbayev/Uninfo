<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Universities extends Model
{
    protected $table = 'university';
    protected $primaryKey = 'id';

    protected $fillable = [
        'abbreviation',
        'title',
        'description',
        'rector',
        'military_dep',
        'address',
        'phone_number',
        'university_code',
        'average_grade',
        'average_price',
        'university_category',
        'university_type',
        'fax_number',
        'email',
        'website',
        'university_img',
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

}
