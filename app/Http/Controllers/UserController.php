<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Jobs\RandUserExp;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function addUser(UserRequest $req) {

        $user = new User();
        $user->nickname = $req->input("nickname");
        $user->firstname = $req->input("firstname");
        $user->lastname = $req->input("lastname");
        $user->avatar = $req->input("avatar");
        $user->phone = $req->input("phone");
        $user->sex = $req->input("sex");
        $user->is_mail_allowed = $req->filled("is_mail_allowed");
        $user->experience = rand(1, 10);

        $user->save();

        //return redirect()->route("home", ['user' => $user])->with("success", "User created successfully!");
        return view("home", ['user' => $user]);
    }

    public function getExp() {
        $user = User::find(1);
        Log::info($user->experience);
        RandUserExp::dispatch($user)->onConnection('database')->onQueue('default');
        sleep(3);
        Log::info($user->experience);
    }
}
