<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index() {

        $goals = Goal::all();
        return view("donationDashboard", compact('goals'));
    }

    public function myDonations() {

        return view("myDonations");
    }
}
