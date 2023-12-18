<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Resolucion extends Model
{
    use HasFactory;

    protected $fillable = [
        'secuencia',
        'detalle',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function incidente(): BelongsTo
    {
        return $this->belongsTo(Incidente::class, 'incidente_id');
    }
}
