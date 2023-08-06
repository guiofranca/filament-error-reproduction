<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Child extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function mother() : BelongsTo
    {
        return $this->belongsTo(Mother::class);
    }

    public function grand_children() : HasMany
    {
        return $this->hasMany(GrandChild::class);
    }
}
