<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function showArticle(){
        $name = "Article01";
        return view('showArticle', compact('name'));
    }
}
