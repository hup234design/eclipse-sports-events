<?php

namespace App\Models\Events;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventVenue extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function event_location() : BelongsTo
    {
        return $this->belongsTo(EventLocation::class);
    }
}
