<?php

namespace Trungpv1601\TALL\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('TALL::index');
    }
}
