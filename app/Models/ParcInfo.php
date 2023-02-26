<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParcInfo extends Model
{
    use HasFactory;
    protected $fillable = ['id' , 'Departement', 'Service', 'Tord', 'Mord', 'TEc', 'MEc', 'TMClav', 'TMSour', 'SysExp', 'Antivirus', 'AdresseIP', 'HardDrive', 'RAM', 'LecteurCD', 'Imprimante'];
}
