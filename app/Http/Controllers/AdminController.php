<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Tambahkan method ini
    public function dashboard()
    {
        return view('admin.dashboard'); // Pastikan view 'admin.dashboard' sudah dibuat
    }
}
