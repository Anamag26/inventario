<?php

namespace App\Http\Controllers;
use App\Models\escola;
use App\Models\sala;
use Illuminate\Http\Request;

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
        $escolas = escola::all();
        $salas=sala::all();
        return view('home', compact('escolas','salas'));
      
    }
}
