<?php

namespace App\Http\Controllers;

use App\Jobs\CreateNewReport;

class ReportController extends Controller
{
    public function build()
    {
    	CreateNewReport::dispatch();
    }
}
