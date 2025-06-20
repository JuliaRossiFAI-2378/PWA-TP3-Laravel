<?php

namespace App\Http\Controllers;


use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Comentario;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    //para cuando tenemos el nombre de la url y necesitamos tener la de la DB
    public function getCategory($categoryName){
        $dbCategories = Category::all();
        $category = '';
        foreach($dbCategories as $dbCategory){
            if(strcasecmp(str_replace(' ', '', $dbCategory['name']), $categoryName) == 0){
                $category = $dbCategory;
            }
        }
        return $category;
    }
    public function getCategories(){
        $listaCategorias = Category::all();
        return $listaCategorias;
    }
    //para cuando tenemos el id de la categoria y necesitamos el nombre
    public function getCategoryById($id){
        $category = Category::where('id', $id)->firstOrFail();
        return $category;
    }
   
    public function getUser($id){
        $user = User::where('id', $id)->first();
        if($user){
            return $user;
        }
        return null;
    }
    public function getComentarios($idPost){//retorna array vacio si no encuentra
        $result = [];
        $comentarios = Comentario::where('post_id', $idPost)->get();
        foreach($comentarios as $comentario){
            $usuario=$this->getUser($comentario->user_id);
            $imagen=$usuario->image;
            $result[] = ['comentario' => $comentario, 'usuario'=>$usuario->name, 'imagen'=>$imagen];
        }
        return $result;
    }

    public function getIndex($category=null){
        $category = $this->getCategory($category);
        $post = new PostController();
        if($category){
            $listaPosts = $post->getPostsByCategoria($category->id);
            return view('category/index', ['category' => str_replace(' ', '', $category->name), 'descripcion' => $category->description , 'posts' => $listaPosts, 'subCategory' => $category->name]);
        }
        return redirect('/')->with('error', 'No tenemos esa categoria!');
    }
    public function getShow($category=null, $id=null){
        $category = $this->getCategory($category);
        $post = new PostController();
        $post = $post->getPost($id);
        if($post){
            $user = $this->getUser($post->user);
            $coments = $this->getComentarios($post->id);
            return view('category/show', ['user'=>$user->name, 'category' => str_replace(' ', '', $category->name), 'post' => $post , 'coments' => $coments, 'category' => $category]);
        }
        return redirect('/')->with('error', 'No tenemos ese post!');
    }
    public function getEditForm($category=null, $id=null){
        $category = $this->getCategory($category);
        $post = new PostController();
        $post = $post->getPost($id);
        $user = $this->getUser($post->user);
        if($post){
            try {
                $this->authorize('update', $post);
            } catch (AuthorizationException) {
                return redirect('/')->with('error', 'No se pudo editar :(');
            }
            return view('category/edit', ['category' => $category->name, 'post' => $post, 'user' => $user]);
        }
        return redirect('/')->with('error', 'No tenemos ese post!');
    }

    public function getPostCreate(){
        $user = Auth::id();
        return view('category.create', ['categories' => $this->getCategories(), 'user' => $user]);
    }
    public function getCreate($category=null){
        $category = $this->getCategory($category);
        $user = Auth::id();
        if($category){
            return view('category/create', ['category' => $category->id, 'categories' => $this->getCategories(), 'user' => $user ]);
        }
        return redirect('/')->with('error', 'No tenemos esa categoria!');
    }
    
}
