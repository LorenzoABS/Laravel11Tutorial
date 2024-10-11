<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function jobs()
    {
        return $this->belongToMany(Job::class, relatedPivotKey: "job_Listing_id");
    }
}
