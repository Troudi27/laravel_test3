<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class AppController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        $email = 'my_email@server.com';

        // return view('about', ['email' => $email]);
        
        // ou bien
        // return view('about')->with('email', $email);
        
        // ou bien
        return view('about', compact('email'));
    }

    public function team()
    {
        $members = Member::all();
        return view('team', ['members' => $members]);
    }
}
