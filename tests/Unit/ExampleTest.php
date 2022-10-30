<?php

namespace Tests\Unit;

use App\Developer;
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
       var_dump(Developer::getInstance()->getTotalWorkComplexity());
    }
}
