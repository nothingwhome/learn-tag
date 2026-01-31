<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Module;
use App\Models\UserQuizResult;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::where('role', 'user')->count();
        $activeUsers = User::where('role', 'user')->where('is_active', true)->count();
        $totalModules = Module::count();
        $totalQuizzes = UserQuizResult::count();
        
        $recentUsers = User::where('role', 'user')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        return view('admin.dashboard', compact(
            'totalUsers', 
            'activeUsers', 
            'totalModules', 
            'totalQuizzes',
            'recentUsers'
        ));
    }
}