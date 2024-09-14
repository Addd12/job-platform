<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model{

    use HasFactory;
    protected $table = 'job_listings';

    //fillable means that only the included items can be updated
    protected $fillable = ['title', 'salary'];

    public function employer(){
        return $this->belongsTo(Employer::class);
    }
}
