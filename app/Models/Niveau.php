<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    use HasFactory;

    protected $table = 'niveau';

    protected $fillable = [
        'libelle'
    ];

    public function cours()
    {
        return $this->hasMany(Cours::class, 'id_niveau', 'id_niveau');
    }

    public function etudiants()
    {
        return $this->hasMany(Etudiants::class, 'id_niveau', 'id_niveau');
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class, 'id_niveau', 'id_niveau');
    }




}
