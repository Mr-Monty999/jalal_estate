<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getNotificationsCount($userId)
    {
        $user = User::findOrFail($userId);
        $unreadNotificationsCount = $user
            ->unreadNotifications()
            ->count();
        $readedNotificationsCount = $user
            ->unreadNotifications()
            ->count();

        $allNotificationsCount = $user
            ->unreadNotifications()
            ->count();

        $data = [
            "unread_notifications_count" => $unreadNotificationsCount,
            "readed_notifications_count" => $readedNotificationsCount,
            "all_notifications_count" => $allNotificationsCount
        ];
        return response()->json($data);
    }

    public function readNotifications(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $user->unreadNotifications->markAsRead();
        return response()->json();
    }
}
