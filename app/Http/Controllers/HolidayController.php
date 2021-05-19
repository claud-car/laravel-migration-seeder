<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Holiday;

class HolidayController extends Controller
{
    public function index()
    {
    $holiday = Holiday::all();
    return view('home',compact('holiday'));
    }
}
