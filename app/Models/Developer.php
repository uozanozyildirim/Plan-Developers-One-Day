<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Developer extends Model
{
    use HasFactory;
    protected $table = 'developer';

    public function getTotalHoursOfWork()
    {
        return DB::table($this->table)->sum('weekly_work_hours');
    }

    public function getTotalWorkComplexity()
    {
        return DB::table($this->table)->sum('seniority');
    }

    public function getItems()
    {
        return DB::table($this->table)->get();
    }


}
