<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSubject extends Model
{
    public function info()
    {
        return $this->belongsTo(ContactInfo::class);
    }
}
