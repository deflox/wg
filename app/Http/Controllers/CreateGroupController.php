<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGroupRequest;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\View\View;

class CreateGroupController extends Controller
{
    public function create() : View
    {
        return view('create-or-open.create-group');
    }

    public function store(CreateGroupRequest $request) : RedirectResponse
    {
        $group = Group::create([
            'name' => $request->get('group-name'),
            'token' => Str::random(50),
        ]);

        $user = User::create([
            'name' => $request->get('user-name'),
            'email' => $request->get('email'),
            'group_id' => $group->id,
        ]);

        $request->session()->flush();
        $request->session()->put('wg', [
            'user_id' => $user->id,
            'group_id' => $group->id,
            'group_token' => $group->token,
        ]);

        return redirect()->route('payments');
    }
}
