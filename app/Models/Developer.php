<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Developer extends Model
{
    use HasFactory;
    public $table = 'developer';

    public function getItems()
    {
        return DB::table($this->table)->select('*')->get();
    }

    public function getTotalHoursOfWork()
    {
        return DB::table($this->table)->sum('weekly_work_hours');
    }

    public function getTotalAbilityToHandleComplexity()
    {
        return DB::table($this->table)->sum('seniority');
    }


}
