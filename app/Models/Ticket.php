<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;

    protected $table= 'ticket';

    protected $fillable = [
        'report',
    ];

    public function fasum()
    {
        return $this->belongsTo(Fasum::class);
    }

    public function place() : BelongsTo
    {
        return $this->belongsTo(Place::class);
    }
}
