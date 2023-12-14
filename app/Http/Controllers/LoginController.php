<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Exception;

class LoginController extends Controller
{
    public function register()
    {  //used to view account creating register form
        return view('auth.register');
    }
    public function registerpost(Request $request)
    { // used to store user's account details in database users table
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required|unique:users,email|email',
                'phone' => 'required|unique:users,phone|numeric',
                'password' => 'required',
                'name' => 'required',
            ]);

            $user = new User;
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->phone = $request['phone'];
            $user->password = Hash::make($request['password']);
            $user->role = '1';
            $user->save();

            return redirect('/')->withMessage('successfully created');
        } catch (Exception $e) {
            return redirect()->back()->withMessage('failed updated');
        }
    }

    public function login()
    { // used to view login form
        try {
            if (!empty(Auth::check())) {
                if (Auth::user()->role == 0) {
                    return redirect()->route('admin.index')->withMessage('loginsuccessful');
                } else if (Auth::user()->role == 1) {
                    return redirect()->route('user.index')->withMessage('loginsuccessful');
                }
            }
            return view('auth.login');
        } catch (Exception $e) {
            return redirect()->back()->withMessage('failed updated');
        }
    }
    public function loginpost(Request $request)
    { //used to admin and user login
        try {
            $craditials1 = [
                'email' => $request->id,
                'password' => $request->password,
            ];
            $craditials2 = [
                'phone' => $request->id,
                'password' => $request->password,
            ];

            if (Auth::attempt($craditials1) || Auth::attempt($craditials2)) {


                if (Auth::user()->role == 0) {
                    return redirect()->route('admin.index')->withMessage('loginsuccessful');
                } else if (Auth::user()->role == 1) {
                    return redirect()->route('user.index')->withMessage('loginsuccessful');
                }
            }
            return back()->withError('ID and Password Not Match');
        } catch (Exception $e) {
            return redirect()->back()->withMessage('failed updated');
        }
    }

    public function logout()
    {

        Auth::logout();
        return redirect('/')->withMessage('logoutsuccessfully');
    }
}
