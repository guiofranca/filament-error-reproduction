<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GrandChild extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'child_id'];

    public function child(): BelongsTo
    {
        return $this->belongsTo(Child::class);
    }
}
