<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * @property array|null|string university_category
 * @property array|null|string average_price
 * @property array|null|string average_grade
 * @property array|null|string university_code
 * @property array|null|string website
 * @property array|null|string email
 * @property array|null|string university_type
 * @property array|null|string fax_number
 * @property array|null|string phone_number
 * @property array|null|string address
 * @property array|null|string military_dep
 * @property array|null|string rector
 * @property array|null|string description
 * @property array|null|string title
 * @property array|null|string abbreviation
 * @property string university_img
 */
class Universities extends Model
{
    protected $table = 'university';
    protected $primaryKey = 'id';

    protected $fillable = [
        'abbreviation',
        'status',
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

    public function specialty(){
        return $this->belongsToMany('App\Entities\UniversitySpecialty','uni_specialty','university_id','specialty_id');
    }

}

