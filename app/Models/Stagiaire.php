<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    use HasFactory;
    protected $fillable = ['CodeStag','NCIN','Nom','Prenom','DN','Tel','Email','Etab','Branch','Niveau','TyStage','Ddebut','Dfin'];
}
