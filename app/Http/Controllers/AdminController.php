<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        $jumlahCafe = Cafe::count();
        return view('admin.dashboard', compact('jumlahCafe'));
    }
}
