<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'can_creditos', 'docente', 'asig_pre', 'horas_automas', 'horas_dirigidas'];
}
