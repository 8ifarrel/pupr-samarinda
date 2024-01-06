<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function main()
    {
        $time = Carbon::now()->format('j F Y | H:i:s T');

        return view('home', [
            'time' => $time 
        ]);
    }
}