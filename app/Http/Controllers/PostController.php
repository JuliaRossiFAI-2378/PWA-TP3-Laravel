<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostUpdateRequest;
use App\Http\Controllers\CategoryController;

use App\Models\Post;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function getPost($idPost){
        if($idPost){
            try {
                $post = Post::where('id', $idPost)->firstOrFail();
            } catch(ModelNotFoundException){
                return null;
            }
            return $post;
        }
        return null;
    }
    public function getPostsByCategoria($idCategoria){
        return Post::where('category', $idCategoria)->where('habilitated', 1)->orderBy('created_at', 'desc')->get();
    }
    public function createPost(PostUpdateRequest $request){
        $data = $request->validated();
        $category = new CategoryController();
        if(empty($data['imageLink'])){
            unset($data['imageLink']);
        }
        Post::create($data);
        $category = $category->getCategoryById($request->category);
        return redirect()->route('index', ['category' => str_replace(' ', '', $category['name'])]);
    }

    public function update(PostUpdateRequest $request){
        $post = $this->getPost($request->id);
        $data = $request->validated();
        if(empty($data['imageLink'])){
            $data['imageLink']="https://somoskudasai.com/wp-content/uploads/2021/09/project-sekai-anime-kudasai.jpg";
        }
        $post->update($data);
        $category = new CategoryController();
        $category = $category->getCategoryById($request->category);
        return redirect()->route('show', ['category' => str_replace(' ', '', $category['name']), 'id' => $request->id]);
    }
    public function disable(Request $request){
        $post = $this->getPost($request->id);
        $post->update(['habilitated' => false]);
        return redirect()->route('home');
    }
}
