<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TerritoryController extends Controller
{
    public function index()
    {
        return view('Administrator.admin-territory.index');
    }
}
