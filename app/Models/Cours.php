<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;

    protected $table = 'cours';
    protected $primaryKey = 'id_cours';

    protected $fillable = [
        'intitule',
        'id_niveau',
        'id_enseignant'
    ];

    public function niveau()
    {
        return $this->belongsTo(Niveau::class, 'id_niveau', 'id_niveau');
    }

    public function enseignants()
    {
        return $this->belongsTo(Enseignants::class, 'id_enseignant', 'id_enseignant');
    }

    public function evaluations()
    {
        return $this->hasMany(Evaluations::class, 'id_cours', 'id_cours');
    }
}
