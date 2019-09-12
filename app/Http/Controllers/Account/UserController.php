<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class UserController extends Controller
{
    public  function index()
    {
        return view('account/index');
    }
}
