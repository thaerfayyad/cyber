<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

    }
    public function getLogIn()
    {
        return view('site.user.login');
    }
    protected function userLogin(Request $request)
    {
//        make validations
//        dd($request->all());
        // return $request;
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $remember_me = $request->has('remember_me') ? true : false;
        if (auth()->guard('web')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            // notify()->success('تم الدخول بنجاح  ');
            return redirect()->route('index');
        }
        // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
        return redirect()->back()->with(['error' => 'incorrect information ']);
    }


        public function create()
    {
        return view('site.user.signup');
    }
    public function store(Request $request)
    {
        $request->validate([
            'userName' => 'required',
            'email' => 'required|email|unique:users,email,',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user = new User();
        $user ->name = $request->input('userName');
        $user ->email = $request-> input('email');;
        $user ->password = bcrypt($request->password);
        $user ->save();
        return redirect()->route('index');


    }

}
