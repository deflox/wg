<?php

namespace App\Http\Requests;

use App\Models\Group;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ChooseUserRequest extends FormRequest
{
    public function authorize() : bool
    {
        return true;
    }

    public function rules() : array
    {
        $token = request()->route('token');
        $group = Group::where('token', $token)->first();
        if ($group === null) {
            abort(500); // just abort if the user for some reason changed the token
        }

        $validUserIds = $group->users()->pluck('id');

        return [
            'user' => ['required', 'numeric', Rule::in($validUserIds)],
        ];
    }

    public function messages() : array
    {
        return [
            'user.in' => 'Nutzer existiert nicht in dieser WG.'
        ];
    }
}
