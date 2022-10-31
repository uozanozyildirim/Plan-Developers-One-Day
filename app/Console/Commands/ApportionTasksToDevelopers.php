<?php

namespace App\Console\Commands;

use App\Developer;
use App\Task;
use App\Models\TaskManager;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ApportionTasksToDevelopers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'task:apportion';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $tasks = Task::getInstance()->getItemsOrderByTime();
        $devs = Developer::getInstance()->getItems();
        $taskManager = new TaskManager();

        foreach ($tasks as $tmp) {
            // task_id is an unique field and that way a task cannot be assigned to multiple developer.
            foreach ($devs as $dev) {
                if ($tmp->complexity == $dev->seniority) {
                   $taskManager->create_task_relationship($dev->id, $tmp->id, $tmp->time);
                }
                else
                {
                    continue;
                }
            }

        }

    }
    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return 0;
    }
}
