<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View; // Import class View

class LandingPageController extends Controller
{
    /**
     * Menampilkan halaman utama (landing page).
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        // Method 'view()' akan mencari file blade di 'resources/views/'
        // 'welcome' berarti akan me-render file 'resources/views/welcome.blade.php'
        // Ganti 'welcome' jika nama file view Anda berbeda (misal: 'home' atau 'index')
        return view('welcome');
    }
}
