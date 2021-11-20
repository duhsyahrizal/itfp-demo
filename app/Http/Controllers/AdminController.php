<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeviceSession;
use Browser;


class AdminController extends Controller
{
    public function index()
    {
        $data['deviceSessions'] = DeviceSession::all();
        
        return view('home', $data);
    }
}
