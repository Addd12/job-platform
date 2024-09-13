<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;


Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
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
        ]
    ]);

});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
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
    $job = Arr::first($jobs, fn($job)=>$job['id']== $id);
    //dd($job);
    return view('job', ['job'=>$job]);
});

Route::get('/contact', function () {
    return view('contact');
});
