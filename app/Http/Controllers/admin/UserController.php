<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('admin.users.home',[
            'user' => $user,
        ]);
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param
     * @return \Illuminate\Contracts\Validation\Validator
     */

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit',[
            'user' => $user,
        ]);
    }
    public function update(Request $request ,$id)
    {
       $user = User::findOrFail($id);
       $user->update($request->except('_token'));
        return redirect()->route('users.index')
            ->with('success', 'User updated successfully');

    }
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }
}
