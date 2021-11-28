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

    public function deleteSession($id)
    {
        DeviceSession::where('id', $id)->delete();

        return redirect()->back()->with([
            'success'       => true,
            'message'       => 'Device Session has been deleted.'
        ]);
    }
}
