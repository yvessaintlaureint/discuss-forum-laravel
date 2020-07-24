<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $users = User::where('name', 'LIKE', '%'.$request->cari.'%')->get();
        }else{
            $users = User::all();
        }
        return view('user.index', ['users' => $users]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('user/edit', ['user' => $user]);
    } 

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $user->avatar = $request->file('avatar')->getClientOriginalName();
            $user->save();
        }
        return redirect('/users')->with('sukses', 'Data berhasil diupdate!');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/logout');
    }
    
    public function profile($id)
    {
        $user = User::find($id);
        return view('user.profile', ['user' => $user]);    
    }


}
