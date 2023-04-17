<?php

namespace App\Models;

use App\Events\ChirpCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;
    
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'message',
    ];

    protected $dispatchesEvents = [
        'created' => ChirpCReated::class,
    ];
}
