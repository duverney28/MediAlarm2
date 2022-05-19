<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamentos extends Model
{
    use HasFactory;

    static $rules = [

        'title' => 'required',
        'id_user' => 'required',
        'hora' => 'required',
        'start' => 'required',
        'end' => 'required',
        'color' => 'required',
        'textColor' => 'required',
        'numeropastillas' => 'required',
        'tipomedicamento' => 'required',
        'dosismedi' => 'required',
        'fechavencimiento' => 'required'


    ];



    protected $fillable = ['id_user', 'title', 'numeropastillas', 'hora', 'start', 'end', "color", "textColor","tipomedicamento","dosismedi","fechavencimiento"];
}
