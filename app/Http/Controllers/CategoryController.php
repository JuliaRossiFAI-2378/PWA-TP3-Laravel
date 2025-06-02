<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;

class CategoryController extends Controller
{
    //para cuando tenemos el nombre de la url y necesitamos tener la de la DB
    public function getCategory($categoryName){
        $dbCategories = Category::all();
        $category = '';
        foreach($dbCategories as $dbCategory){
            if(strcasecmp(str_replace(' ', '', $dbCategory['name']), $categoryName) == 0){
                $category = $dbCategory['name'];
            }
        }
        try{
            $foundCategory = Category::where('name', $category)->firstOrFail();
        } catch (ModelNotFoundException){
            return null;
        }
        return $foundCategory;
    }
    //para cuando tenemos el id de la categoria y necesitamos el nombre
    public function getCategoryById($id){
        $category = Category::where('id', $id)->firstOrFail();
        return $category;
    }
    public function getIndex($category = null){
        $view = view('category.index', ['posts' => Post::all()]);
        if($category){
            $dbCategory = $this->getCategory($category);
            $view = view('category.index', ['posts' => Post::where('category', $dbCategory['id'])->get()]);
        }
        return $view;
    }
    public function getPost($category, $id){
        $post = Post::findOrFail($id);
        return view('category.show', ['post' => $post , 'user' => User::findOrFail($post['user'])]);
    }
    public function getEdit($editId){
        return view('category.edit', ['category' => Category::findOrFail($editId)]);
    }
    public function getPostCreate(){
        return view('post.create', ['categories' => Category::all()]);
    }
    public function getCreate($category){
        $dbCategory = $this->getCategory($category);
        return view('category.create', ['category' => Category::findOrFail($dbCategory['id'])]);
    }
    public function createPost(Request $request){
        Post::create([
            'title' => $request['title'],
            'user' => $request['user'],
            'content' => $request['content'],
            'category' => $request['category']
        ]);
        $category = $this->getCategoryById($request['category']);
        return redirect()->route('category', ['category' => str_replace(' ', '', $category['name'])]);
    }
}
