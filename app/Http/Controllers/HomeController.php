<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Get Authenticated User
    public function getAuthUser()
    {
        $user = User::findOrFail(Auth::user());
        return $user;
    }
}
