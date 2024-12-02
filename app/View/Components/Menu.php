<?php

namespace App\View\Components;

use Closure;
use App\Models\Patient;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Menu extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $patients = null)
    {
        $this->patients = Patient::orderBy('dob', 'asc')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menu', ['patients', $this->patients]);
    }
}
