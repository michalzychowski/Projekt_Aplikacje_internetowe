<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class UserController extends Controller
{
    public function edit(User $user){
        return view('users.edit', ["user"=>$user]);
    }
    public function update(Request $request, User $user){
        $user->update($request->all());
        return redirect('/');
    }
    public function create(){
        return view("users.create");
    }
    public function store(Request $request){
        User::create($request->all());
        return redirect('/');
    }
    public function destroy(User $user){
        $user->delete();
        return redirect("/");
    }
}
