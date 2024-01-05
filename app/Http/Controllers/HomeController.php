<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function main()
    {
        $currentDateTime = Carbon::now('Asia/Makassar');
        $time = $currentDateTime->format('l, j F Y | H:i:s A');

        return view('home')->with('time', $time);
    }
}