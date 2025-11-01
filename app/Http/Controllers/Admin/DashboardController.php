<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View; // Import View

class DashboardController extends Controller
{
    public function index(): View
    {
        // Arahkan ke view yang baru kita buat
        return view('admin.dashboard');
    }
}
