<?php

namespace App\Http\Controllers\Consumer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CHomeController extends Controller
{
    public function index()
    {
        return view('Consumer.consumer-home.index');
    }
}
