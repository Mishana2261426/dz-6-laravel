<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $adress;
    protected $theme;
    protected $message;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($adress, $theme, $message)
    {
        $this->adress = $adress;
        $this->theme = $theme;
        $this->message = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        

        $this->view('mail.send');
        
    }
}
