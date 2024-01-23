<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaKegiatanController extends Controller
{
    public function index()
    {
        // Your logic for handling the agenda page goes here
        // You can load data, perform operations, etc.
        return view('agenda.index'); // Adjust the view name as needed
    }
}
