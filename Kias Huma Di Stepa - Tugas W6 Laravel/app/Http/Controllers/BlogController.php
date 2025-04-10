<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BlogController extends Controller
{
    function index() 
    {
        $bukus = DB::table('buku')->Paginate(10);
        return view ('blog', ['bukus' => $bukus]);
    }
}
