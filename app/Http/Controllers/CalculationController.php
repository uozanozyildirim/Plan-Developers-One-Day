<?php

namespace App\Http\Controllers;

use App\Developer;
use Illuminate\Http\Request;

class CalculationController extends Controller
{

    public function CalculateMinimumEstimatedTime()
    {
        Developer::getInstance()->getItems();

    }

}
