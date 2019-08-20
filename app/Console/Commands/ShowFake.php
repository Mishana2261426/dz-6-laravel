<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Car;

class ShowFake extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'show:fake';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show fake';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $arr = Car::all();

        //$arr = Car::skip(2)->take(2)->get(); //limit and offset

        $arr = Car::orderBy('id', 'desc')->get(); //sort

        foreach ($arr as $value) {
            $this->info($value);
        }
    }
}
