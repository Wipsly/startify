<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Get authenticated user
     */
    public function getAuthUser()
    {
        $user = User::findOrFail(Auth::user());
        return $user;
    }

    public function test(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
        ]);

        return $request->username;
    }
}
