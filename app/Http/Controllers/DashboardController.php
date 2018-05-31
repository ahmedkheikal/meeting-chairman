<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.dashboard');
    }

    public function accountSettings()
    {
        return view('pages.account-settings');
    }

    public function ongoingMeeting()
    {
        return view('pages.meeting');
    }
}
