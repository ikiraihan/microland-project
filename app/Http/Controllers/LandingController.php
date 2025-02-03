<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    public function index()
    {
    $devices = DB::table('devices')->limit(8)->get();

    return view('landing', compact('devices'));
    }
}
