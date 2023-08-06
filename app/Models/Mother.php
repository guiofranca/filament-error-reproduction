<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Mother extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function children(): HasMany
    {
        return $this->hasMany(Child::class);
    }

    public function grand_children() : HasManyThrough
    {
        return $this->hasManyThrough(GrandChild::class, Child::class);
    }
}
