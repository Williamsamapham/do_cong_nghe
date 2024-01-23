<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        return view('admin.product.index');
    }
    function create()
    {
        return view('admin.product.create');
    }
}
