<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupAbout extends Model
{
    protected $guarded = [];
    public static function latestOrEmpty(): self
    {
        return self::latest()->first() ?? new self;
    }
}
