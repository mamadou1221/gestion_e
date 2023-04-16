<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notifications';
    protected $primaryKey = 'id_notification';

    protected $fillable = ['id_niveau', 'message'];

    public function niveau()
    {
        return $this->belongsTo(Niveau::class, 'id_niveau');
    }


}




