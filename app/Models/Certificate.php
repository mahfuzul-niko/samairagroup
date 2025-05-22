<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $guarded = [];
    public function enroll()
    {
        return $this->belongsTo(Enroll::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
