<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Incidente extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'fecha_incidente',
        'area_id',
        'descripcion',
        'categoria_id',
        'estado',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
