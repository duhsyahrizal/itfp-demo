<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeviceSession;
use Browser;
use Jenssegers\Agent\Agent;

class ApiController extends Controller
{
    public function trigger(Request $request)
    {
        $isAndroid      = Browser::isAndroid();
        $platformName   = Browser::platformName();
        $platform       = Browser::platformFamily();
        $brand          = Browser::deviceFamily();
        $model          = Browser::deviceModel();

        DeviceSession::create([
            'ip_address'    => $request->ip(),
            'device_id'     => $request->deviceId,
            'platform'      => $request->platform,
            'brand'         => $request->brand,
            'model'         => $request->model,
        ]);

        return response()->json([
            'success'   => true,
            'data'      => 'http://103.93.56.27/plesk-site-preview/demo-app.itfpsolutions.com/https/192.168.68.9/assets/videos/demo-video.mp4'
        ], 200);
    }
}
