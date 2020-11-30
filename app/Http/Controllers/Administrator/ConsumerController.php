<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConsumerController extends Controller
{
    public function index()
    {
        return view('Administrator.admin-consumer.index');
    }
    public function indexCPO()
    {
        return view('Administrator.admin-consumerCPO.index');
    }
}
