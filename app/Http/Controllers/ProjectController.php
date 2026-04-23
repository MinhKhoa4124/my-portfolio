<?php

namespace App\Http\Controllers;
use App\Models\Project; // Quan trọng: Phải có dòng này để gọi Model
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        // 1. Lấy tất cả dự án từ database
        $projects = Project::all(); 

        // 2. Truyền biến $projects sang view 'welcome'
        return view('welcome', ['projects' => $projects]);
}
}
