<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class DashboardController extends Controller
{
    //
    public function dashboard(){
        return view('admin.dashboard', [
            'users' => User::paginate(10),
            
            
        ]);
    }
}
