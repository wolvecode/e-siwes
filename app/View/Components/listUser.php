<?php

namespace App\View\Components;

use Illuminate\View\Component;

class listUser extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $users, public $mail,  public $lecturers, public $contact)
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
        return view('components.list-user');
    }
}
