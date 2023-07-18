<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index() {
        return view('dash.index');

    }
    public function login() {
        return view('dash.login');

    }
}
