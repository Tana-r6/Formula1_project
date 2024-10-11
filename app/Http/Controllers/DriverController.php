<?php

namespace App\Http\Controllers;


use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        $drivers = Driver::all();
    
            return view('drivers.index', [
                'drivers' => $drivers
            ]);
    }
    public function show(Driver $driver)
    {
        return view('drivers.show', ['driver' => $driver]);
    }
}