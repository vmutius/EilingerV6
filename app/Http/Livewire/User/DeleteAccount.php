<?php

namespace App\Http\Livewire\User;

use App\View\Components\Layout\UserDashboard;
use Illuminate\Http\Request;
use Livewire\Component;

class DeleteAccount extends Component
{
    public $showModal;

    public $current_password;

    protected $rules = [
        'current_password' => 'required|current-password',
    ];

    public function render()
    {
        return view('livewire.user.delete-account')
            ->layout(UserDashboard::class);
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request)
    {
        $this->validate();

        $user = $request->user();

        auth()->logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('index', app()->getLocale());
    }

    public function delete()
    {
        $this->showModal = true;
    }

    public function close()
    {
        $this->showModal = false;
        $this->password = '';
    }
}
