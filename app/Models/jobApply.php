<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jobApply extends Model
{
    protected $guarded = [];
    public function work()
    {
        return $this->belongsTo(jobWork::class, 'job_work_id');
    }
}
