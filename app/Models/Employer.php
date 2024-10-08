<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employer extends Model
{
    use HasFactory;

    public function jobs(){
        return $this->hasMany(Job::class); //returns a collection when called because an employer may have many jobs
    }

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
