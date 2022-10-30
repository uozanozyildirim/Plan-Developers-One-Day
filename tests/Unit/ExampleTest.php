<?php

namespace Tests\Unit;

use App\Developer;
use App\Task;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        // what i want to do is that; group the task in a array and that array's summary of estimated_hours field should not be over than 45 hours.
        $items  = Task::getInstance()->getItems();

        foreach ($items as $item)
        {
            if(Sum($firstArray) > 45)
            {
                "exit";
            }
            elseif(Sum($firstArray) < 45)
            {
                'INSERT INTO FIRST DEVELOPERS TO DO LIST';
            }
            elseif(Sum($secondArray) > 45)
            {
                "exit";
            }
            elseif(Sum($secondArray) < 45)
            {
                'INSERT INTO SECOND DEVELOPERS TO DO LIST';
            }
            // It goes like that to the fifth developers task list.


        }



    }
}
