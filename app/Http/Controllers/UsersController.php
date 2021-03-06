<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function show($id)
    {
        $user = User::findOrFail($id);
      
        return view('user.profile')->withUser($user);
    }


}
