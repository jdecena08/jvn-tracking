<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /*public function index() {
        $data = array();
        return view('authenticated-user.contents.landing_page', $data);
    }*/

    public function index() {
        $data = array();
        return view('authenticated-user.contents.about_us', $data);
    }

    public function track_and_trace() {
        $data = array();
        return view('authenticated-user.contents.track_and_trace', $data);
    }

    public function transaction_history() {
        $data = array();
        return view('authenticated-user.contents.transaction_history', $data);
    }

    public function about_us() {
        $data = array();
        return view('authenticated-user.contents.about_us', $data);
    }

    public function help_page() {
        $data = array();
        return view('authenticated-user.contents.help_page', $data);
    }

    public function payment_options() {
        $data = array();
        return view('authenticated-user.contents.payment_options', $data);
    }

    public function ticket_page() {
        $data = array();
        return view('authenticated-user.contents.ticket_page', $data);
    }

}