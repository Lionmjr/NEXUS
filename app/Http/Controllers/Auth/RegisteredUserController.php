<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Mail\UserVerification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */public function store(Request $request): RedirectResponse
{
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ]);

    // Generate verification token
    $verificationToken = Str::random(40);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'verification_token' => $verificationToken,
        'email_verified_at' => null, // Assuming email verification is required
    ]);

    event(new Registered($user));

    // Generate token link
    $tokenLink = route('verification', ['token' => $verificationToken]);

    // Send verification email
    Mail::to($user->email)->send(new UserVerification($tokenLink));

    return redirect(route('register'))->with('status', 'Registration successful. Check your email to verify your account.');
}
}
