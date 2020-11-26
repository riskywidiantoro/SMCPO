<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DasborController extends Controller
{
    public function index()
    {
        return view('admin-dasbor.index');
    }
}
