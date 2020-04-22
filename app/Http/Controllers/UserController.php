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
            //process login
            if(true)
            {
                //start session
            }
            else
            {
                //redo login
            }
        }
        else
        {
            return 'return the form';
        }
    }
    public function signup(Request $re)
    {
        return 'signup form';
    }
}
