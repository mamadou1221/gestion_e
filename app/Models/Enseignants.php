<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignants extends Model
{
    use HasFactory;

    protected $table = 'enseignants';
    protected $primaryKey = 'id_enseignant';

    protected $fillable = [
        'nom',
        'prenom'
    ];

    public function cours()
    {
        return $this->hasMany(Cours::class, 'id_cours', 'id_cours');
    }
}
