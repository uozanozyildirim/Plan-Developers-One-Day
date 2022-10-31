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
        return DB::table($this->table)->get();
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
