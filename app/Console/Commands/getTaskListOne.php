<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Task;
class getTaskListOne extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'taskList:one';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Task List One is created for inserting datas from First Provider';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://www.mocky.io/v2/5d47f24c330000623fa3ebfa',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);


        foreach($response as $task)
        {
            Task::getInstance()->createNewTask($task->id, $task->zorluk, $task->sure);

        }

    }


    public function handle()
    {
        return 'TCommand Not Succesfully Completed';
    }
}
