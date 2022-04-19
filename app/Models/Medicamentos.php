<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamentos extends Model
{
    use HasFactory;

    static $rules=[
        
        'title'=>'required',
        'frecuencia'=>'required',
        'hora'=>'required',
        'start'=>'required',
        'end'=>'required'

    ];


    
    protected $fillable= ['title','frecuencia','hora','start','end'];


}
