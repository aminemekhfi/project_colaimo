<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TachEffectuee extends Model
{
    use HasFactory;
    protected $fillable = ['CodeTache','DateTache','Depar','Service','TacheEffec','Commantaire'];
}
