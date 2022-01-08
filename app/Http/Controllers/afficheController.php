<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class afficheController extends Controller
{
    public function index() {
  
        // ici je fais passer sous forme key value
        // $title = "je suis debout grace à lui fff";
        // $title2 = "je vais";

        //ici je simulais la recuperation dans la bd
        // $posts=[
        //     'ggg',
        //     'hdgf'
        // ];

            $posts=Post::all();
            // dd($posts);
        return view('premier',compact('posts')

        );
    }
    public function show($id){
         // ici c'etait la simulation d'une affichage d'un post id
        // $posts=[
        //     1=>'la vue une',
        //     2=>'la vue deux'
        // ];

        // $post = $posts[$id] ?? 'valeur de id non prise en compte';
        // suivant un titre :
         //$post=Post::Where('title','=','Unde error consequuntur sit enim et.')->first();
        $post=Post::findOrFail($id);

        ///dd affiche tout
        // dd($post);

        return view('articles', [
            'post'=> $post
        ]);
    }

  public function create() {
      return view('create');
  }


  public function store(Request $req){
      $post=new Post();
      $post->title=$req->title;
      $post->content=$req->content;
      $post->save();

      dd('post cree avec suces');
  }


    public function contact (){
        return view('contact');
    }
}
