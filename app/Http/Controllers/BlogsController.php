<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blogs;
class BlogsController extends Controller
{
    function index(){
        $blogs=blogs::paginate(2);
        return view('welcome',compact('blogs'));
    }
}
