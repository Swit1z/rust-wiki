<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $articlesCount = Article::count();
        $usersCount = User::count();

        return view('admin.dashboard', compact('articlesCount', 'usersCount'));
    }
}