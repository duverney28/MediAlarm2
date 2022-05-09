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
        'id_user'=> 'required',
        'hora'=>'required',
        'start'=>'required',
        'end'=>'required',
        'color'=>'required',
        'textColor' =>'required'
    
        
    ];


    
    protected $fillable= ['id_user','title','frecuencia','hora','start','end',"color","textColor"];


}
