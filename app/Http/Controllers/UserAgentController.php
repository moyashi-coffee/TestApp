<?php

namespace App\Http\Controllers;

use App\Models\UserAgent;
use Illuminate\Http\Request;

class UserAgentController extends Controller
{
    //

    public function index()
    {
        return UserAgent::all();
    }

    public function send(Request $request) {
        dd($request->headers->get('user-agent'));
    }
}
