<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OutletController extends Controller
{
    public function index()
    {
        return view('Administrator.admin-outlet.index');
    }

    public function indexCPO()
    {
        return view('Administrator.admin-outletCPO.index');
    }
}
