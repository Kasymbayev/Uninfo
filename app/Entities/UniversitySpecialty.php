<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * @property array|null|string subject_id
 * @property array|null|string qualification_id
 * @property array|null|string direction_id
 * @property array|null|string university_id
 * @property array|null|string specialty_cipher
 * @property array|null|string specialty_name
 */
class UniversitySpecialty extends Model
{
    protected $table = 'specialty';
    protected $primaryKey = 'id';

    protected $fillable =
        [
            'specialty_name',
            'specialty_cipher',
            'university_id',
            'qualification_id',
            'direction_id',
            'subject_id',
        ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];


    public function subject(){
        return $this->belongsTo(UniversitySubject::class);
    }

    public function university(){
        return $this->belongsTo(Universities::class,'university_id');
    }

    public function qualification(){
        return $this->belongsTo(UniversityQualification::class);
    }

    public function direction(){
        return $this->belongsTo(SpecialtyDirection::class);
    }

}
