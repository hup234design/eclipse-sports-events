<?php

namespace App\Models\Events;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'has_multiple' => 'boolean',
        'featured' => 'boolean',
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function event_category() : BelongsTo
    {
        return $this->belongsTo(EventCategory::class);
    }

    public function event_venue() : BelongsTo
    {
        return $this->belongsTo(EventVenue::class);
    }

    public function event_location() : BelongsTo
    {
        return $this->belongsTo(EventLocation::class);
    }

    public function event_schedules() : HasMany
    {
        return $this->hasMany(EventSchedule::class);
    }

    public function scopeUpcoming($query)
    {
        return $query->whereNotNull('start_date')
            ->where(function ($query) {
                $now = now();

                $query->where('start_date', '>=', $now)
                    ->orWhereNull('end_date')
                    ->orWhere('end_date', '>=', $now);
            });
    }

    public function scopePast($query)
    {
        return $query->whereNotNull('start_date')
            ->where(function ($query) {
                $now = now();

                $query->where('end_date', '<', $now)
                    ->orWhereNull('end_date');
            })
            ->where('start_date', '<', now());
    }

}
