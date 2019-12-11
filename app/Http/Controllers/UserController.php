<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\User;

class UserController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('users_form');
    }

    /**
     * @param UserStoreRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserStoreRequest $request)
    {
        $data = $request->validated();

        $user = User::create($data);

        return redirect()->route('users.create')->with([
            'success' => "You successfully created new user " . $user->name . " !"
        ]);
    }
}
