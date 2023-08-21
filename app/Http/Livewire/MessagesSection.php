<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Message;
use Livewire\Component;
use App\Models\Application;
use App\Notifications\MessageAdded;

class MessagesSection extends Component
{
    public Application $application;
    public $body;
    public $message;

    protected $paginationTheme = 'bootstrap'; 

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
        $newMessage = Message::create([
            'user_id' => auth()->user()->id,
            'application_id' => $this->application->id,
            'body' => $this->body,
        ]);
        
        $this->reset('body');

        if (auth()->user()->is_admin) {
            $this->message->application->user->notify(new MessageAdded($newMessage));
        } else {
            $admins = User::where('is_admin', 1)->get();
            foreach ($admins as $admin) {
                $admin->notify(new MessageAdded($newMessage));
            }
        }
    }
}
