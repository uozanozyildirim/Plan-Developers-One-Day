<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Task;
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
    protected $description = 'Command description';

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
            Task::createOrUpdate([
               'name' => $task->id
            ],
            ['time' => $task->sure,
              'complexity' => $task->zorluk
            ]);
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
