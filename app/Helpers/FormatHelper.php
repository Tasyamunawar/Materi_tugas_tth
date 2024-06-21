<?php

namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Foundation\Auth\User;

class FormatHelper
{
    public static function formatResultAuth($user)
    {
        return [
            'id_user' => $user->id,
            'name' => $user->name,
            'role' => $user->role,
            'email' => $user->email,
            'tanggal_daftar' => Carbon::parse($user->created_at)->translatedFormat('d F Y'),
            'update_at' => $user->updated_at,
        ];
    }
    public static function resultUser($id_user)
    {
        $user = User::where('id', $id_user)
            ->get()
            ->map(function ($user) {
                return FormatHelper::formatResultAuth($user);
            });

        return $user;
    }
}
