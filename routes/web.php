<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

//index
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->paginate(3);
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

//create
Route::get('/jobs/create', function(){
    return view('jobs.create');
});

//store
Route::post('/jobs', function(){
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);
    return redirect('/jobs');
});

//show
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    //dd($job);
    return view('jobs.show', ['job'=>$job]);
});

//edit
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);
    return view('jobs.edit', ['job'=>$job]);
});

//update
Route::patch('/jobs/{id}', function ($id) {
    // validate
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);
    //authorize

    //update the job
    $job = Job::findOrFail($id); //findOrFail instead of find() so that if it doesn't find the id it, abort it
    //and persist (write to the db)
    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    //redirect to the job page
    return redirect('/jobs/'.$job->id);
});

//destroy
Route::delete('/jobs/{id}', function ($id) {
    Job::findOrFail($id)->delete();

    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});
