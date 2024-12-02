<?php

namespace App\Providers;

use Native\Laravel\Facades\Window;
use Native\Laravel\Menu\Menu;

class NativeAppServiceProvider
{
    public function boot(): void
    {
        Window::open()->hideMenu();
    }
}
