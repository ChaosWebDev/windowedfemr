<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function render()
    {
        return view('dashboard');
    }

    public function report()
    {
        dd("REPORT VIEW PLACEHOLDER");
    }
}
