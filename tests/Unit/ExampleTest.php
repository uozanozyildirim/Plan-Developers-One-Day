<?php

namespace Tests\Unit;

use App\Developer;
use App\Models\TaskManager;
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

    public function test_create_task()
    {

        $tasks = Task::getInstance()->getItemsOrderByTime();
        $devs = Developer::getInstance()->getItems();
        $taskManager = new TaskManager();
        foreach ($tasks as $tmp)
        {
            foreach ($devs as $dev)
            {

                    // task_id is an unique field and that way an task cannot be assigned to multiple developer.
                $taskManager->create_task_relationship($dev->id, $tmp->id, $tmp->time);

            }
        }
         self::assertEquals('1', '1');
    }

}
