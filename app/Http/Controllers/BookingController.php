<?php

namespace App\Http\Controllers;

use App\Helpers\Functions;
use App\Models\Booking;
use App\Models\Device;
use Illuminate\Http\Request;
use App\Mail\BookingCreated;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    // public function show(Request $request, $id = null)
    // {
    //     $devices = Device::get();
    //     $selectedDevice = null;
        
    //     if ($id) {
    //         $selectedDevice = Device::find($id);
    //     }
    
    //     return view('form-pengajuan', compact('devices', 'selectedDevice'));
    // }

    public function index(Request $request)
    {
        $key = $request->query('key');
        $devices = Device::get();
        $selectedDevice = null;
        if ($key) {
            $selectedDevice = Device::where('slug',$key)->first();
        }
    
        return view('form-pengajuan', compact('devices', 'selectedDevice'));
    }

    public function store(Request $request)
    {
        try {
            // Validasi input
            $request->validate([
                'device_slug' => 'required|string|max:255|exists:\App\Models\Device,slug',
                'company_name' => 'required|string',
                'company_address' => 'required|string',
                'person_name' => 'required|string',
                'phone_number' => 'required|numeric',
                'email' => 'nullable|email',
                'rental_type' => 'required|string|in:daily,monthly,yearly',
                'quantity' => 'required|numeric',
                'start_date' => 'nullable|date',
                'end_date' => 'nullable|date',
                'total_price' => 'nullable|numeric',
            ]);
    
            $data = [
                'device_slug' => $request->device_slug,
                'company_name' => $request->company_name,
                'company_address' => $request->company_address,
                'person_name' => $request->person_name,
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'rental_type' => $request->rental_type,
                'quantity' => $request->quantity,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'total_price' => $request->total_price,
            ];
    
            Booking::create($data);
            
            $device = Device::where('slug',$request->device_slug)->first();
            $deviceName = $device->full_name_specification;

            Carbon::setLocale('id');
            $dataMail = [
                'device' => $deviceName,
                'company_name' => $request->company_name,
                'company_address' => $request->company_address,
                'person_name' => $request->person_name,
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'rental_type' => Functions::getDisplayRentalName($request->rental_type),
                'quantity' => $request->quantity,
                'start_date' => $request->start_date ? Carbon::parse($request->start_date)->format('d F Y') : '-',
                'end_date' => $request->end_date ? Carbon::parse($request->end_date)->format('d F Y') : '-',
                'total_price' => $request->total_price,
            ];

            Mail::to('ikiraihann@gmail.com')->send(new BookingCreated($dataMail));
    
            // Kembalikan respon sukses
            return redirect()->back()->with('success', 'Pengajuan Anda berhasil terkirim. Kami akan segera menghubungi anda!');
    
        } catch (\Exception $e) {
            // Tangani error yang terjadi
            return redirect()->back()->with('error', "{$e->getMessage()}");
        }
    } 
}
