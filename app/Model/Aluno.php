<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class Aluno extends Model
{
	
    protected $fillable = ["nome", "email","senha", "cpf", "rg", "dt_nasc"];
    protected $hidden = ["senha"];
    protected $dates = ['deleted_at'];


}
