<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Anuncio;
use Illuminate\Http\Request;

class usuariosController extends Controller
{
    //Metodo para mostrar pagina
    public function MostrarPaginaUsuarios(){
        $users = User::all();
        return view('usuarios/usuarios')->with('users',$users);
    }

    public function AgregarUsuario(Request $request){
        $usuario = new User();
        $usuario->name = $request-> nombre;
        $usuario->email = $request -> email;
         // confirmacion de confirmar_contrasena
         if ($request->contrasena == $request->confirmar_contrasena) {
           $usuario ->password = bcrypt($request -> contrasena);
         }else {
           return back()->with('error', 'Error,las contraseñas no coinciden');
         }
         $usuario->save();
         return back()->with('mensaje-exitoso', 'El nuevo usuario se agrego con exito');
    }

    public function EliminarUsuario($id){
        // $anuncio = Anuncio::where('id',$id)->delete();
            $usuario = user::where('id',$id);
            $usuario->delete();
            return back()->with('mensaje-exitoso','Usuario eliminado correctamente');
        }

        public function EditarUsuario($id,request $request){
          
        }
}
