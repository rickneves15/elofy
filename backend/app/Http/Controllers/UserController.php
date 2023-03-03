<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request, Response $response)
    {
        $input = $request->all();
        $validated = $request->validated();
        $user = User::create([
            'email' => $input['email'],
            'password' => $input['password'],
        ]);

        return response()->json($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function loginValidated(UserRequest $request)
    {
        $input = $request->all();
        $validated = $request->validated();
        $user = User::where('email', $input['email'])->first();

        if ($user == null) {
            return response()->json(["message" => "User not exist."]);
        }


        return response()->json(["message" => "User valid."]);
    }
}
