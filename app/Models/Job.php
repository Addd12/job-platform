<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job{
    public static function all(): array{
        return $jobs = [
            [
                'id' => 1,
                'title' => 'Developer',
                'salary' => '100000'
            ],
            [
                'id' => 2,
                'title' => 'Doctor',
                'salary' => '200000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '50000'
            ],
        ];
    }

    public static function find(int $id): array
    {
        //static replaces Job that was being used in the route previously because now we are calling it within the Job class and the function all() is static
        $job =  Arr::first(static::all(), fn($job)=>$job['id']== $id);
        if(! $job){
            abort(404);
        }
        return $job;
    }
}
