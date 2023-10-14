<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public $showModal = false;

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        if (auth()->user()->is_admin) {
            return view('admin.profile-edit', [
                'user' => $request->user(),
            ]);
        } else {
            return view('user.profile-edit', [
                'user' => $request->user(),
            ]);
        }
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
            $request->user()->sendEmailVerificationNotification();
        }

        $request->user()->save();

        $success_route = auth()->user()->is_admin 
            ? route('admin_dashboard', app()->getLocale()) 
            : route('user_dashboard', app()->getLocale());

        return redirect()->route($success_route)->with('success', 'Profil wurde aktualisiert');
    }

    /**
     * Delete the user's account.
     */
    public function delete(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        auth()->logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function destroy()
    {
        $this->showModal = true;
    }

    public function close()
    {
        $this->showModal = false;
    }
}
