<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informacionusers extends Model
{
    use HasFactory;


    static $rules = [

        'id_user' => 'required',
        'nacionalidad' => 'required',
        'ciudad' => 'required',
        'alergias' => 'required'

    ];
    protected $fillable = ['id_user', 'nacionalidad', 'ciudad', 'alergias'];
}
