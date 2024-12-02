<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Native\Laravel\Facades\Window;

class WindowController extends Controller
{
    public function quit()
    {
        Window::close();
        Window::close('settings');
    }
}
