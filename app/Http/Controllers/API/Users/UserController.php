<?php

namespace App\Http\Controllers\API\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function profile()
    {
        $user = auth()->user();

        return response()->json([
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
        ]);
    }

    public function UserById($id)
    {
        $user = User::find($id);

        return response()->json([
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
        ]);
    }
}
