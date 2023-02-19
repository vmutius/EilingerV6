<?php

namespace App\Http\Livewire;

use App\Models\Application;
use App\Models\Message;
use Livewire\Component;

class MessagesSection extends Component
{
    public Application $application;
    public $body;

    protected $rules = [
        'body' => 'required',
    ];

    public function render()
    {
        return view('livewire.messages-section');
    }

    public function postMessage()
    {   dd($this->body);
        //$this->validate();
        Message::create([
            'application_id' => $this->application->id,
            'user_id' => auth()->user()->id,
            'body' => $this->body,
        ]);
        $this->body='';
        
        $this->application = Application::find($this->application->id);

        session()->flash('message', 'Nachricht gespeichert');
    }
}