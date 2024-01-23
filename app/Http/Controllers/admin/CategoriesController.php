<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    function index()
    {
        return view('admin.category.index');
    }
    function create()
    {
        return view('admin.category.create');
    }
}
