<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    use HasFactory;

    protected $table = 'admins';

    protected $fillable = [
        'id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }
}
