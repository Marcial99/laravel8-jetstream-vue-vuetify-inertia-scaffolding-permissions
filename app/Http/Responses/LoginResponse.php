<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {

        // below is the existing response
        // replace this with your own code
        // the user can be located with Auth facade
        if (auth()->user()->hasRole('admin')) {
            return redirect()->intended(config('fortify.home'));
        } else if (auth()->user()->hasRole('cliente')) {
            return redirect()->intended(config('fortify.test'));
        }
    }
}
