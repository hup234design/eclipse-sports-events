<?php

namespace App\Models\Events;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventSchedule extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function event() : BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    public function event_venue() : BelongsTo
    {
        return $this->belongsTo(EventVenue::class);
    }

    public function event_location() : BelongsTo
    {
        return $this->belongsTo(EventLocation::class);
    }
}
