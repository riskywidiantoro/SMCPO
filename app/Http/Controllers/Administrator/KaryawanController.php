<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KaryawanController extends Controller
{
    public function index()
    {
        return view('Administrator.admin-karyawan.index');
    }
}
