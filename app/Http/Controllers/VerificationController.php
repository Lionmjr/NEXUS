<?php
// VerificationController.php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class VerificationController extends Controller
{
    public function verify(Request $request, $token)
    {
        $user = User::where('verification_token', $token)->first();

        if (!$user) {
            return redirect('/verification')->with('error', 'Invalid verification token.');
        }

        if ($user->email_verified_at) {
            return redirect('/verification')->with('info', 'Your email is already verified.');
        }

        $user->update([
            'email_verified_at' => now(),
            'verification_token' => null,
        ]);

        Auth::login($user);

        return redirect('/verification')->with('success', 'Your email has been verified!');
    }
}