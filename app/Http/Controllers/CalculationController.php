<?php

namespace App\Http\Controllers;

use App\Models\TaskManager;
use App\Task;
use App\Developer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalculationController extends Controller
{
    public function CalculateMinimumEstimatedTime()
    {
        return Task::getInstance()->getTotalHoursOfWork() / Developer::getInstance()->getTotalHoursOfWork();
    }

    public function listTask()
    {
        $taskManager = new TaskManager();
        $taskManager =  json_decode($taskManager->getItems(), true);
        return view('welcome', ['taskManager' => $taskManager]);

    }



}
