<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DefaultController extends Controller
{
    public function indexArea()
    {
        return view('Administrator.admin-area.index');
    }
    public function indexOU()
    {
        return view('Administrator.admin-OU.index');
    }
    public function indexChannel()
    {
        return view('Administrator.admin-Channel.index');
    }
    public function indexSubChannel()
    {
        return view('Administrator.admin-SubChannel.index');
    }
}
