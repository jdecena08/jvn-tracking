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

    public function payment_options() {
        $data = array();
        return view('payment_options', $data);
    }

    public function ticket_page() {
        $data = array();
        return view('ticket_page', $data);
    }

}
