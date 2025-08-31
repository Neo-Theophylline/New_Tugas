<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsFrontendController extends Controller
{
        //News view
    public function index(){
            return view('page.frontend.news.index');
    }
}
