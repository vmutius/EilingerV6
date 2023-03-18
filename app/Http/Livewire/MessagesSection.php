<?php

namespace App\Http\Livewire;

use App\Models\Application;
use App\Models\Message;
use Livewire\Component;

class MessagesSection extends Component
{
    public Application $application;
    public $body;
    public $message;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        'replyAdded' => '$refresh',
        'deleteMessage' => 'confirmDelete',
    ];

    protected $rules = [
        'body' => 'required',
    ];

    protected $messages = [
        'body' => 'Nachricht muss eingegeben werden.',
    ];

    public function render()
    {
        $messages = $this->application
            ->messages()
            ->with('user', 'replies.user', 'replies.replies')
            ->mainMessage()
            ->latest()
            ->paginate(5);

        return view('livewire.messages-section', [
            'messages' => $messages,
        ]);
    }

    public function postMessage()
    {
        $this->validate();
        Message::create([
            'user_id' => auth()->user()->id,
            'application_id' => $this->application->id,
            'body' => $this->body,
        ]);
        
        $this->reset('body');

        session()->flash('message', 'Nachricht gespeichert');
    }
}
