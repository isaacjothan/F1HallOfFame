<?php

namespace App\Models;

use Database\Factories\ChampionshipFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['driver_id', 'season', 'constructor', 'wins', 'podiums', 'poles'])]
class Championship extends Model
{
    /** @use HasFactory<ChampionshipFactory> */
    use HasFactory;

    /**
     * @return BelongsTo<Driver, $this>
     */
    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class);
    }
}
