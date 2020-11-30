<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SalesPersonController extends Controller
{
    public function index()
    {
        return view('Administrator.admin-salesperson.index');
    }
}
