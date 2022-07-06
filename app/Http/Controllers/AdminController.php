<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_dashboard() {
        $data = array();
        return view('admin.dashboard', $data);
    }

    public function driver_management() {
        $data = array();
        return view('admin.driver_management', $data);
    }

    public function vehicle_management() {
        $data = array();
        return view('admin.vehicle_management', $data);
    }

    public function trip_tickets() {
        $data = array();
        return view('admin.trip_tickets', $data);
    }
}
