<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChangMat extends Model
{
    use HasFactory;
    protected $fillable = ['Code' , 'Date', 'TypeMach', 'SrvEmet', 'SrvRec', 'Commentaire'];
}
