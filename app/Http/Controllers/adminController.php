<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    /*
     *    Dashboard pages
     */
    public function dashboard()
    {
        //code to verify that admin is connected !
        return view('Admin.dashboard');
    }

    public function charts()
    {
        //code
        return view('admin.charts');
    }

    public function tables()
    {
        //code
        return view('admin.tables');
    }

    /*
     *   Authentication pages
     */
    public function login()
    {
        //code for the authentication
        return view('Admin.login');
    }

    public function register()
    {
        //code
        return view('Admin.register');
    }

    public function forgetPassword()
    {
        //code
        return view('Admin.forget-password');
    }

    public function logout()
    {
        //code to disconnect the admin
        //then redirect him to the logim page
        return redirect(route('adminLogin'));
    }
}
