<?php

namespace App\Http\Controllers;
use App\Models\Anuncio;
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
        $anuncios = Anuncio::orderBy('created_at','desc')->paginate(5);
        return view('home',['anuncios'=>$anuncios]);
    }

}
