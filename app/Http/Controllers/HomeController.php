<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function main()
    {
        $time = Carbon::parse('2024-01-05 11:01:10')->format('j F Y | H:i:s T');

        return view('home', [
            'time' => $time
        ]);
    }
}
