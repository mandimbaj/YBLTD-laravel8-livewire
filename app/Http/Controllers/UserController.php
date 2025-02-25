<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    Public function index()
    {
        return view("users");
    }
}
