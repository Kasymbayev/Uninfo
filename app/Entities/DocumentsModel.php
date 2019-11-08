<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class DocumentsModel extends Model
{
    protected $table = 'documents';
    protected $primaryKey = 'id';

    protected $fillable =
        [
            'username',
            'userlastname',
            'iin',
            'address',
            'kvota',
            'serial_certificate',
            'phone',
            'id_certificate',
            'university',
            'specialty'

        ];
}
