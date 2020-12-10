<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;
use App\Models\Anuncio;
use Illuminate\Support\Facades\Auth;

class AnunciosController extends Controller
{
    //
public function MostrarPagAnuncios()
    {
        $anuncios = Anuncio::orderBy('created_at','desc')->paginate(5);
        return view('Anuncios')->with('anuncios',$anuncios);
    }
    public function MostrarAnuncio($id)
    {
        $anuncios = Anuncio::where('id',$id)->get();
        if (Auth::user() == true){
            $respuesta = view('AnuncioAdmin')->with('anuncios',$anuncios);
        }else{
            $respuesta = view('Anuncio')->with('anuncios',$anuncios);
        }
        return $respuesta;
    }
    
public function PublicarAnuncio(Request $request){
        $anuncio = new Anuncio;
        $anuncio -> titulo = $request -> titulo; 
        $anuncio -> contenido = htmlspecialchars($request -> contenido);
        $anuncio -> creador_id = Auth()->id();
        $anuncio->save();
        return back()->with('mensaje','Anuncio Agregado con exito');
    }
public function EditarAnuncio($id,Request $request){
    $anuncio = Anuncio::find($id);
    $anuncio -> titulo = $request -> titulo;
    $anuncio -> contenido = $request -> contenido;
    $anuncio->save();
    return back()->with('mensaje','Anuncio editado con exito'); 
}

public function EliminarAnuncio($id){
    // $anuncio = Anuncio::where('id',$id)->delete();
    if($anuncio = Anuncio::where('id',$id)->delete()){
        $anuncios = Anuncio::orderBy('created_at','desc')->paginate(5);
        return view('Home')->with('anuncios',$anuncios)->with('mensaje','Anuncio eliminado correctamente');
    }
}
}

