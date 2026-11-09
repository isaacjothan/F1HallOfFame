<?php

namespace App\Models;

use Database\Factories\DriverFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'slug', 'nationality', 'image_path', 'biography'])]
class Driver extends Model
{
    /** @use HasFactory<DriverFactory> */
    use HasFactory;

    /**
     * @return HasMany<Championship, $this>
     */
    public function championships(): HasMany
    {
        return $this->hasMany(Championship::class);
    }
}
