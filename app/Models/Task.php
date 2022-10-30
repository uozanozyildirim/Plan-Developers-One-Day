<?php

namespace  App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use http\Exception;

class Task extends Model
{
// Hold the class instance.
    private static $instance = null;
    public $table = 'task';


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
}

?>
