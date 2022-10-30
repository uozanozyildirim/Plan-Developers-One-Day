<?php

namespace  App;

use Illuminate\Support\Facades\DB;

class Task
{
    private static $instance = null;
    private $table = 'task';

    private function __construct()
    {
        //
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Task();
        }

        return self::$instance;
    }

    public function createNewTask($name, $complexity,$estimated_time)
    {
        DB::table($this->table)->updateOrInsert(
            [
                'name' => $name
            ],
            [
                'complexity' => $complexity,
                'time' => $estimated_time,
                'created_at' => date('Y-m-d h:i:s'),
            ]
        );

    }

    public function getTotalHoursOfWork()
    {
        $dev = new \App\Models\Task();
        return  $dev->getTotalHoursOfWork();

    }

    public function getTotalWorkComplexity()
    {
       $dev = new \App\Models\Task();
       return $dev->getTotalWorkComplexity();
    }

    public function getItems()
    {
        $dev = new \App\Models\Task();
        return $dev->getItems();
    }


}



?>
