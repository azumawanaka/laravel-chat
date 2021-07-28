<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['message'];

    /**
     * A message belong to a user
     *
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
