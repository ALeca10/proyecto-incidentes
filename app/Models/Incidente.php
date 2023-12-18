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
        'descripcion',
        'estado',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function area(): BelongsTo
    {
        return $this->belongsTo(Area::class);
    }

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    public function resolucion(): BelongsTo
    {
        return $this->belongsTo(Resolucion::class);
    }
}
