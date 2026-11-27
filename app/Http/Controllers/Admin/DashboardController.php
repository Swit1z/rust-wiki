<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
}
public function index()
{
    $articlesCount = \App\Models\Article::count();
    $usersCount = \App\Models\User::count();
    
    return view('admin.dashboard', compact('articlesCount', 'usersCount'));
}