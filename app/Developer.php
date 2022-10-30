<?php

namespace  App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use http\Exception;

class Developer
{
    private static $instance = null;
    private $table = 'developer';

    private function __construct()
    {
        //
    }


    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Developer();
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
        $dev = new \App\Models\Developer();
        return  $dev->getTotalHoursOfWork();

    }

    public function getTotalWorkComplexity()
    {
       $dev = new \App\Models\Developer();
       return $dev->getTotalWorkComplexity();
    }

    public function getItems()
    {
        $dev = new \App\Models\Developer();
        return $dev->getItems();
    }

}

?>
