<?php

namespace App\Models\Events;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventLocation extends Model
{
    use SoftDeletes;

    protected $guarded = [];
}
