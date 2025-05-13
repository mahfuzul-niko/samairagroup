<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
     protected $guarded = [];
    public function subjects()
    {
        return $this->hasMany(ContactSubject::class);
    }
}
