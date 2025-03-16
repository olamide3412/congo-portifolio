<?php

namespace App\Http\Controllers;

use App\Enums\StatusEnum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{


    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {

        $attributes = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);




    // Try to authenticate as a User first
    if (Auth::attempt($attributes)) {
        $user = Auth::user();

        // Check if the user's status is disabled
        if ($user->status === StatusEnum::Disable->value) {
            // Logout the user immediately if the status is disabled
            Auth::logout();

            throw ValidationException::withMessages([
                'email' => 'Your account is disabled.',
            ]);
        }

        $request->session()->regenerate();
        return redirect(route('dashboard.users'));
    }






        throw ValidationException::withMessages([
            'email' => __('messages.invalid_credentials'),
        ]);

    }
    public function destroy()
    {
        //$this->authorize('viewAny', User::class);
        Auth::logout();

        return redirect()->route('login');
    }


}
