<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluations extends Model
{
    use HasFactory;

    protected $table = 'evaluations';

    protected $fillable = [
        'id_cours',
        'id_etudiant',
        'note',
        'commentaire',
        'date_evaluation'
    ];

    public function cours()
    {
        return $this->belongsTo(Cours::class, 'id_cours', 'id_cours');
    }

    public function etudiants()
    {
        return $this->belongsTo(Etudiants::class, 'id_etudiant', 'id_etudiant');
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if ($model->note < 0 || $model->note > 10) {
                throw new \Exception('The note value must be between 0 and 10.');
            }
        });
    }
}
