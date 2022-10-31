<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TaskManager extends Model
{
    use HasFactory;

    protected $table = 'task_manager';


    public function getItems()
    {
        return DB::table($this->table)
            ->join('task', 'task.id',  '=','task_manager.task_id')
            ->join('developer', 'developer.id' , '=', 'task_manager.developer_id' )
            ->select('task.name as task_name','developer.name as developer_name', 'task_manager.estimated_time_to_finish')
            ->get();
    }

    public function getItemsWeekly()
    {
        return DB::table($this->table)->get();
    }

    public function create_task_relationship($devId, $taskId, $taskTime)
    {
        DB::table($this->table)->insertOrIgnore([
            'developer_id' => $devId,
            'task_id' => $taskId,
            'estimated_time_to_finish' => $taskTime
        ]);

    }



}
