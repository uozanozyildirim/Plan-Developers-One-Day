<?php

namespace Tests\Unit;

use App\Developer;
use App\Task;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
//    public function test_example()
//    {
//
//
//        $items  = Task::getInstance()->getItems();
//
//        $subQuery = DB::table('task')->orderByDesc('time')->get();
//        $devs = Developer::getInstance()->getItems();
//
//
//        foreach ($subQuery as $tmp)
//        {
//
//            foreach ($devs as $dev)
//            {
//                DB::table('task_manager')->insertOrIgnore([
//                    'developer_id' => $dev->id,
//                    'task_id' => $tmp->id,
//                    'estimated_time_to_finish' => $tmp->time,
//                    'created_at' => date('Y-m-d h:i:s')
//                ]);
//            }
//
//        }
//
//    }
    public function test_create_task()
    {

        $tasks = Task::getInstance()->getItemsOrderByTime();
        $devs = Developer::getInstance()->getItems();

        foreach ($tasks as $tmp)
        {
            foreach ($devs as $dev)
            {

                    // task_id is an unique field and that way a task cannot be assigned to multiple developer.
                    DB::table('task_manager')->insertOrIgnore([
                        'developer_id' => $dev->id,
                        'task_id' => $tmp->id,
                        'created_at' => date('Y-m-d h:i:s'),
                        'estimated_time_to_finish' => $tmp->time
                    ]);
            }
        }

    }

}
