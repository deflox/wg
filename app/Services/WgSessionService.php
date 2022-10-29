<?php

namespace App\Services;

use App\Models\Group;
use Illuminate\Support\Facades\Session;

class WgSessionService
{
    const SESSION_NAME = 'wg';

    const GROUP_ID = 'group_id';

    const GROUP_TOKEN = 'group_token';

    const USER_ID = 'user_id';

    public function create($groupId, $groupToken, $userId) : void
    {
        Session::put(self::SESSION_NAME, [
            self::GROUP_ID => $groupId,
            self::GROUP_TOKEN => $groupToken,
            self::USER_ID => $userId,
        ]);
    }

    public function destroy() : void
    {
        Session::forget(self::SESSION_NAME);
    }

    public function expired() : bool
    {
        if (!Session::exists('wg')) {
            return true;
        }

        $token = Session::get(self::SESSION_NAME)[self::GROUP_TOKEN];
        $groupId = Session::get(self::SESSION_NAME)[self::GROUP_ID];

        $group = Group::where('id', $groupId)->first();

        return $group->token !== $token;
    }

    public function getGroupId() : string
    {
        return Session::get(self::SESSION_NAME)[self::GROUP_ID];
    }

    public function getGroupToken() : string
    {
        return Session::get(self::SESSION_NAME)[self::GROUP_TOKEN];
    }

    public function getUserId() : string
    {
        return Session::get(self::SESSION_NAME)[self::USER_ID];
    }
}
