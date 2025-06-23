<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jobWork extends Model
{
    protected $guarded = [];
    public function applies()
    {
        return $this->hasMany(jobApply::class, 'job_work_id');
    }
}
