<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cat extends Model
{
    /** @use HasFactory<\Database\Factories\CatFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'breed_id',
        'name',
        'description',
    ];

    protected $hidden = [
        'breed_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function breed(): BelongsTo
    {
        return $this->belongsTo(Breed::class);
    }
}
