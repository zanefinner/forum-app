<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show_profile($id)
    {
        return 'retried data for account: '.$id;
    }
    public function login(Request $re)
    {
        if($re->input('email')!==null)
        {
            //process
            if(true)
            {
                return 1;
            }
            else
            {
                return 0;
            }
        }
        else
        {
            return view('login');
        }
    }
    public function signup(Request $re)
    {
        if($re->input('email')!==null)
        {
            //process
            if(true)
            {
                return 1;
            }
            else
            {
                return 0;
            }
        }
        else
        {
            return view('signup');
        }
    }
}
