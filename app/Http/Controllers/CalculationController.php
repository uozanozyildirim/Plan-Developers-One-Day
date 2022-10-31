<?php

namespace App\Http\Controllers;

use App\Task;
use App\Developer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalculationController extends Controller
{
    public function CalculateMinimumEstimatedTime()
    {
         Task::getInstance()->getTotalHoursOfWork() / Developer::getInstance()->getTotalHoursOfWork();
    }

    public function ApportionTasksToDevelopers()
    {


        $tasks = Task::getInstance()->getItemsOrderByTime();
        $devs = Developer::getInstance()->getItems();


        foreach ($tasks as $tmp)
           {
                // task_id is an unique field and that way a task cannot be assigned to multiple developer.
               foreach ($devs as $dev)
               {
                   if($tmp['complexity'] = $dev['seniority'])
                   {
                       DB::table('task_manager')->insert([
                           'developer_id' => $dev['id'],
                           'task_id' => $tmp['id'],
                           'estimated_time_to_finish' => $tasks['time']
                       ]);
                   }
               }

           }

        }


}
