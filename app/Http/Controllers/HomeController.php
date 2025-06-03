<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
    public function getHome(){
        $ultimosPost = [];
        $temp = Post::where('habilitated', 1)->orderBy('created_at')->take(5)->get();
        for($i=0;$i<count($temp);$i++){
            $nombre = Category::where('id', $temp[$i]->category_id)->first();
            $nombre = $nombre->name;
            $ultimosPost[$i] = ["categoria" => $nombre, "post" => $temp[$i]];
        }
        return view('home', ['posts' => $ultimosPost]);
    }
}
