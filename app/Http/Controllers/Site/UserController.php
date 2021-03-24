<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Mail\userMailVerification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use auth;
use Illuminate\Support\Facades\Mail;

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
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6',
        ]);

        $remember_me = $request->has('remember_me') ? true : false;
        if (auth()->guard('web')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
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
            'type' => 'required',
            'email' => 'required|email|unique:users,email,',
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
        $user = new User();
        $user ->name = $request->input('userName');
        $user ->email = $request-> input('email');;
        $user ->type = $request->input('type');
        $user ->password = bcrypt($request->password);
        $user ->save();
        $remember_me = $request->has('remember_me') ? true : false;


        if (auth()->guard('web')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            // notify()->success('تم الدخول بنجاح  ');
            return redirect()->route('index');
        }
        // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
        return redirect()->back()->with(['error' => 'incorrect information ']);

    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('site.user.profile',compact('user'));
    }

    public function update(Request $request ,$id)
    {
        $user = User::findOrFail($id);

        if(  $request->password != Null) {
            $user->password = Hash::make($request->password);
        }


        $user->name =$request->name;
        $user->save();

        $mail = Mail::to($user)->send(new userMailVerification());
        return redirect()->route('index')
            ->with('success', 'User updated successfully');
    }

    public function LogOut()
    {
        Auth::guard('web')->logout();
        return Redirect()->route('index');
    }

}
