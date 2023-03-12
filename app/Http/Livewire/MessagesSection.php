<?php

namespace App\Http\Livewire;

use App\Models\Application;
use App\Models\Message;
use Livewire\Component;

class MessagesSection extends Component
{
    public Application $application;
    public $comment;

    protected $rules = [
        'comment' => 'required',
    ];

    protected $messages = [
        'comment' => 'Nachricht muss eingegeben werden.',
    ];

    public function render()
    {
        $messages = $this->application->messages()->main()->latest()->get();
        return view('livewire.messages-section', [
            'messages' => $messages,
        ]);
    }

    public function saveMessage()
    {
        $this->validate();
        Message::create([
            'user_id' => auth()->user()->id,
            'application_id' => $this->application->id,
            'body' => $this->comment,
        ]);
        
        $this->reset('comment');

        session()->flash('message', 'Nachricht gespeichert');
    }
}
