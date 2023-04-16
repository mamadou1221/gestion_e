<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiants extends Model
{
    use HasFactory;

    protected $table = 'etudiants';

    protected $fillable = [
        'id',
        'id_niveau'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }

    public function niveau()
    {
        return $this->belongsTo(Niveau::class, 'id_niveau', 'id_niveau');
    }

    public function notifications()
    {
        return $this->hasManyThrough(Notification::class, Niveau::class, 'id_niveau', 'id_niveau', 'id_niveau');
    }
}
