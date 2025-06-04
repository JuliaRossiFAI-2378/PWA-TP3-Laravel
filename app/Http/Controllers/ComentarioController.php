<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;
use Illuminate\Support\Facades\Auth;

class ComentarioController extends Controller
{
    
    public function createComentario(Request $request){
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'content' => 'required|string|max:500',
        ]);

        Comentario::create([
            'post_id' => $request->post_id,
            'user_id' => auth::id(),
            'content' => $request->content,
        ]);

        return redirect()->back();
    }

    public function delete(Comentario $comentario){
        $comentario->delete();
        return redirect()->back();
    }
}
