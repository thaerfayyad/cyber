<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin()
    {
        return view('admin.auth.loginAdmin');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function login(Request $request)
    {
//        make validations
//        dd($request->all());

        $validatedData = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string'],

            ]);
        $remember_me = $request->has('remember_me') ? true : false;


        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            // notify()->success('تم الدخول بنجاح  ');
            return redirect()->route('dashboard');
        }
        // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
        return redirect()->back()->with(['error' => 'incorrect information ']);


    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return Redirect()->route('get.login');
    }

}
