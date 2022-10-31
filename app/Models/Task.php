<?php

namespace  App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use http\Exception;

class Task extends Model
{

    protected $table = 'task';


    public function getItems()
    {
        return  DB::table($this->table)->select('*')->get();
    }

    public function getItemsOrderByTime()
    {
        return  DB::table($this->table)->orderByDesc('time')->get();
    }



}
?>
