<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfileController extends Controller
{
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

        if (auth()->user()->is_admin) {
            return redirect()->route('admin_dashboard', app()->getLocale())->with('success', 'Profil wurde aktualisiert');
        } else {
            return redirect()->route('user_dashboard', app()->getLocale())->with('success', 'Profil wurde aktualisiert');
        }

    }
}
