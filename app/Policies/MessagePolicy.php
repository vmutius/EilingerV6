<?php

namespace App\Policies;

use App\Models\Message;
use App\Models\User;

class MessagePolicy
{
    public function update(User $user, Message $message)
    {
        return $user->id === $message->user_id;
    }

    public function destroy(User $user, Message $message)
    {
        return $user->id === $message->user_id;
    }
}
