<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(User $user)
    {
        $user = Auth::user();
        return view('users.edit', compact('user'));
    }

    public function update(User $user)
    {

        $user->coach_team_name = request('coach_team_name');
        $user->coach_first_name = request('coach_first_name');
        $user->coach_last_name = request('coach_last_name');
        $user->coach_email = request('coach_email');
        $user->coach_phone = request('coach_phone');
        $user->password = bcrypt(request('password'));

        $user->save();

        return back();
    }
}
