<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $data = array();
        return view('landing_page', $data);
    }

    public function track_and_trace() {
        $data = array();
        return view('track_and_trace', $data);
    }

    public function transaction_history() {
        $data = array();
        return view('transaction_history', $data);
    }

    public function about_us() {
        $data = array();
        return view('about_us', $data);
    }

    public function help_page() {
        $data = array();
        return view('help_page', $data);
    }

    public function admin_dashboard() {
        $data = array();
        return view('admin_dashboard', $data);
    }

    public function driver_records() {
        $data = array();
        return view('admin_driver_records', $data);
    }

}
