<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Table;

class TableController extends Controller
{
    public function index(){
        $tables = Table::all();
        return view('admin.tables.index',compact('tables'));
    }
}
