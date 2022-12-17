<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index(){
        $menu = Menu::all();
        return view('admin.menus.index',compact('menu'));
    }

    public function create(){
        return view('admin.menus.create');
    }
}
