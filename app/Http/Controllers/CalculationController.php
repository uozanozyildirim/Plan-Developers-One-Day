<?php

namespace App\Http\Controllers;

use App\Developer;
use Illuminate\Http\Request;
use App\Task;

class CalculationController extends Controller
{
    public function CalculateMinimumEstimatedTime()
    {
         Task::getInstance()->getTotalHoursOfWork() / Developer::getInstance()->getTotalHoursOfWork();
    }

}
