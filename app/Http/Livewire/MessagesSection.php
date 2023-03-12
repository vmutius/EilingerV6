<?php

namespace App\Http\Livewire;

use App\Models\Application;
use Livewire\Component;

class MessagesSection extends Component
{
    public Application $application;
    public $newMessage;

    protected $rules = [
        'newMessage.body' => 'required',
    ];

    protected $messages = [
        'newMessage.body' => 'Nachricht muss eingegeben werden.',
    ];

    public function mount()
    {
        $this->newMessage = [
            'body' => '',
            'application_id' => $this->application->id,
            'user_id' => auth()->user()->id,

        ];
    }

    public function render()
    {
        $messages = $this->application->messages()->main()->latest()->get();

        return view('livewire.messages-section', [
            'messages' => $messages,
        ]);
    }

    public function postMessage()
    {
        $this->validate();
        $this->newMessage->save();

        session()->flash('message', 'Nachricht gespeichert');
    }
}
