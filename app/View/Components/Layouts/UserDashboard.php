<?php

namespace App\View\Components\Layouts;

use Closure;
use Illuminate\View\Component;

class UserDashboard extends Component
{
    public $messages;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->messages = Message::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|Closure|string
     */
    public function render()
    {
        return view('layouts.user-dashboard', [
            'messages' => $this->messages,
        ]);
    }
}
