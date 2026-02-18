<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // $all = Author::with('book')->get();
 $all = Author::with('books')->get();
        dd($all);
    }

   

}
