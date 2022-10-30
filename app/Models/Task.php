<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Task extends Model

{
    protected $table = 'task';

    private function  createNewTask($name, $complexity, $estimated_time)
    {
        DB::table($this->table)->insert(
            [
                'name' => $name,
                'complexity' =>$complexity,
                'estimated_time' => $estimated_time,
            ]
        );
    }

}
