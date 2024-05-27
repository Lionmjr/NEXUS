<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LockScreenController extends Controller
{
    public function showLockScreen()
    {
        return view('lock-screen');
    }

    public function unlockScreen(Request $request)
    {
        $request->validate([
            'password' => 'required|string',
        ]);

        $user = Auth::user();

        if (Hash::check($request->password, $user->password)) {
            // Unlock the screen by redirecting to the dashboard
            return redirect('/home');
        }

        return redirect()->back()->withErrors(['password' => 'Incorrect password. Please try again.']);
    }
}
