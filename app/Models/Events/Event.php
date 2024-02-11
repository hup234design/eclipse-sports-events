<?php

namespace App\Models\Events;

use Carbon\Carbon;
use Hup234design\FilamentCms\Concerns\HasMediables;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;
    use HasMediables;

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
                $query->whereDate('start_date', '>=', Carbon::now()->startOfDay())
                    ->orWhereNull('end_date')
                    ->whereDate('end_date', '>=', Carbon::now()->startOfDay());
            });
    }

    public function scopePast($query)
    {
        return $query->whereNotNull('start_date')
            ->where(function ($query) {
                $query->whereDate('end_date', '<', Carbon::now()->startOfDay())
                    ->orWhereNull('end_date');
            })
            ->whereDate('start_date', '<', Carbon::now()->startOfDay());
    }

}
