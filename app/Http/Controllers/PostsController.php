<?php

namespace App\Http\Controllers;

use App\Notifications\PostPublished;
use App\Post;
use App\Telefono;
use App\User;
use Illuminate\Http\Request;


//AGREGADO PARA PODER ENVIAR WSP
require_once 'C:/laragon/www/siga/vendor/autoload.php';
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Input;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function enviar(Request $request)
    {

        $this->validate($request,[
            'contenido'=>'required',
            'titulo' => 'required'
        ]);

        $posts = Post::create([
            'titulo' => $request->titulo,
            'contenido' => $request->contenido,
        ]);

        $users = User::all();

        foreach ($users as $user) {
            $user->notify(new PostPublished($posts));
        }


        //toma el valor del checkbox desde el view post.blade
        if (INPUT::get('whatsapp')) {

            
            $sid    = "ACf1bc96d37ecd824fe7410d3fa619f2d6";
            $token  = "18e50cbb751c942755cd185354557e3e";
            $twilio = new Client($sid, $token);

            //Trae un unico telefeno de la base de dato y lo almaceno
            $numero=Telefono::where('id','1')->value('numero');

            $message = $twilio->messages
                            ->create("whatsapp:". $numero, // to
                                    array(
                                        "from" => "whatsapp:+14155238886",
                                        //tomo el valor del titulo y el contenido y lo mando atraves del wsp
                                        "body" =>"Asunto: ".$request->titulo . "\n\nMensaje: " . $request->contenido
                                            )
                            );
        }



        
        return back()->with('flash','Tu post fue publicado');
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }

    public function crearPost()
    {
        $users = User::where('id','!=', auth()->id())->get();
        return view('posts.posts', compact('users'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
