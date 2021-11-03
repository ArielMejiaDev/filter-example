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
            $users->with(array_keys($request->get('include')));
        }

        return $users->get();
    }
}
