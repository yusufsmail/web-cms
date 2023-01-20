<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Lamaran;



class AdminCategoryController extends Controller
{
    public function index()
    {
      
        return view('dashboard.categories.index',[
            'categories' => Category::all()
        ]);
    }

}
