<?php

namespace App\View\Components;

use Illuminate\View\Component;

class form extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $name, public string $type, public string $action, public $sessions,  public bool $na,  public bool $role)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form');
    }
}
