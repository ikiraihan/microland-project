<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class DeviceController extends Controller
{
    public function index()
    {
    // Fetch products from the database using DB facade
    $devices = DB::table('devices')->get();
    $lenovoDevices = DB::table('devices')->where('brand','Lenovo')->get();
    $dellDevices = DB::table('devices')->where('brand','Dell')->get();
    $hpDevices = DB::table('devices')->where('brand','Hp')->get();

    // Pass the device to the view
    return view('katalog-perangkat', compact('devices','lenovoDevices','dellDevices','hpDevices'));
    }
}

