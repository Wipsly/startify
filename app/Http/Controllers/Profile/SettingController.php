<?php

namespace App\Http\Controllers\Profile;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function updateUserPersonal(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $user = User::findOrFail(Auth::user());

        $user->name = $request->input('name');

        $user->save();

        return $user;
    }
}
