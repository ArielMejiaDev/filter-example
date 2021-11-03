<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __invoke(Request $request)
    {
        $users = User::query();

        if ($request->has('include') && $request->filled('include')) {
            $filters = array_keys($request->get('include')); // equals to [bio, posts]
            $users->with($filters);
        }

        return $users->get();
    }
}
