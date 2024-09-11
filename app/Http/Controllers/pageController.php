<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller {
    public function index() {
        return view('pages.content-home.view');
    }

    public function store(Request $req) {
        
    }
}
