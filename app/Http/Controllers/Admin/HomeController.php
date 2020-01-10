<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Bem vindo ao sistema de locação';
        return view ('admin.home.index', compact('title'));
    }
}
