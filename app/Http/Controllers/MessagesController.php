<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Notifications\MessageSent;
use App\Message;
use Illuminate\Support\Facades\Input;

class MessagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::where('id','!=', auth()->id())->get();
        return view('home', compact('users'));
    }
    public function enviarMensaje()
    {
        $users = User::where('id','!=', auth()->id())->get();
        return view('message', compact('users'));
    }
    public function message(Request $request)
    {

        $this->validate($request,[
            'mensaje'=>'required',
            'receptor_id' => 'required|exists:users,id',
            'asunto' => 'required'
        ]);

        $message = Message::create([
            'emisor_id' => auth()->id(),
            'receptor_id' => $request->receptor_id,
            'asunto' => $request->asunto,
            'categoria_notificacion_id' => Input::get('tipo'),
            'mensaje' => $request->mensaje,
        ]);

        $receptor = User::find($request->receptor_id);
        $receptor->notify(new MessageSent($message));
        return back()->with('flash','Tu mensaje fue enviado');
   
    }

    public function show($id)
    {
        $message = Message::findOrFail($id);
        return view('messages.show', compact('message'));
    }
    
}
