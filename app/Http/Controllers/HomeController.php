<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Notifications\MessageSent;
use App\Message;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
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

    public function store(Request $request)
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

    public function inicio()
    {
        return view('inicio');
    }
    public function notificaciones()
    {
        $users = User::where('id','!=', auth()->id())->get();
        return view('notificaciones', compact('users'));
    }
}
