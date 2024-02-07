<?php

namespace App\Models\Events;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventType extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function event_categories() : HasMany
    {
        return $this->hasMany(EventCategory::class);
    }

    public function events() : HasManyThrough
    {
        return $this->hasManyThrough(Event::class, EventCategory::class);
    }
}
