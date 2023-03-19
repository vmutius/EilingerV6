<?php

namespace App\Http\Livewire;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Message as MessageModel;
use Livewire\Component;

class Message extends Component
{
    use AuthorizesRequests;

    public $message;
    public $body;

    protected $listeners = [
        'refresh' => '$refresh'
    ];

    public $isReplying = false;

    public $isEditing = false;


    public function updatedIsEditing($isEditing)
    {
        if (!$isEditing) {
            return;
        }

        $this->body = $this->message->body;
    }

    public function editMessage()
    {
        $this->authorize('update', $this->message);

        $this->message->body = $this->body;
        $this->message->save();

        $this->isEditing = false;
    }

    public function deleteMessage()
    {
        $this->authorize('destroy', $this->message);

        $this->message->delete();

        $this->emitUp('refresh');
    }

    public function postReply()
    {
        if (!$this->message->isMainMessage()) {
            return;
        }

        $this->validate([
            'body' => 'required'
        ]);
        
        MessageModel::create([
            'user_id' => auth()->user()->id,
            'application_id' => $this->message->application_id,
            'body' => $this->body,
            'main_message_id' => $this->message->id,
        ]);
        
        $this->reset('body');

        $this->isReplying = false;

        $this->emitSelf('refresh');
    }

    public function render()
    {
        return view('livewire.message');
    }
}
