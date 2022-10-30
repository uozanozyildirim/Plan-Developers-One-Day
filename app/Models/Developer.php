<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Developer extends Model
{
    public $table = 'developer';
    use HasFactory;

    public function getItems()
    {
        DB::table($this->table)->select('*')->get();
    }


}
