<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size_vest extends Model
{

    protected $fillable = ['id','altura','cintura','busto','calcado'];
    use HasFactory;
}
