<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class InternviewController extends Controller
{
    public function index()
    {
        return view('layouts.vote');
    }

    public function check_vote(Request $request)
    {
        $result = $request->input('yes');

        //save data in cookie
        Cookie::queue('result', $result, 60);

        return view('layouts.result-vote');
    }
}
