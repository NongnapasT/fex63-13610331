<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index(){
        $urls = Url::all();
        return view('index', compact('urls'));
    }
}
//compact('urls')
