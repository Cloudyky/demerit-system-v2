<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        $user = $request->user();

        $redirect = match ($user->role) {
            'admin' => '/admin',
            'warden' => '/warden/dashboard',
            'student' => '/student/dashboard',
            default => '/dashboard',
        };

        return redirect()->intended($redirect);
    }
}
