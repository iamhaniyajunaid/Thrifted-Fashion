<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginResponse extends Controller
{
 public function restriction(Request $request){

   $user = $request->user();
    if (strtolower($user->role) === 'admin') {
                return redirect('/admin');
            }

            if(strtolower($user->role) === 'user') {
                return redirect('/user');
            }
                return redirect('/login');
}
};
