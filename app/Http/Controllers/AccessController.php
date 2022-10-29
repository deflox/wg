<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChooseUserRequest;
use App\Models\Group;
use App\Services\WgSessionService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AccessController extends Controller
{
    private WgSessionService $wgSessionService;

    public function __construct(WgSessionService $wgSessionService)
    {
        $this->wgSessionService = $wgSessionService;
    }

    public function open() : View
    {
        return view('open-group');
    }

    public function submitToken(Request $request) : RedirectResponse
    {
        $request->validate([
            'token' => 'required',
        ]);

        return redirect()->route('verify-token', ['token' => $request->get('token')]);
    }

    public function verifyToken(Request $request, string $token) : RedirectResponse | View
    {
        $group = Group::where('token', $token)->first();

        if ($group === null) {
            $request->session()->flash('error', 'Es existiert keine WG mit diesem Token.');
            return redirect()->route('open-group');
        }

        return view('select-user', [
            'users' => $group->users()->get()->pluck('name', 'id')->toArray(),
            'token' => $token,
        ]);
    }

    public function chooseUser(ChooseUserRequest $request, string $token)
    {
        $group = Group::where('token', $token)->first();

        $this->wgSessionService->create($group->id, $group->token, $request->get('user'));
        return redirect()->route('index');
    }
}
