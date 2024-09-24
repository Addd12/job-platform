<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
//use Illuminate\Queue\Jobs\Job;

class TranslateJob implements ShouldQueue
{
    use Queueable, Dispatchable, InteractsWithQueue, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(public \App\Models\Job $jobListing)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //below is an example that could be used if we were translating the jobs using AI
        //AI::translate($this->jobListing->description, 'spanish');
        logger('Translating '. $this->jobListing->title . ' to Spanish.');
    }
}
