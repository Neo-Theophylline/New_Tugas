<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardBackendController extends Controller
{
        //dasboard view
    public function index(){
            return view('page.backend.dashboard.index');
    }
}
