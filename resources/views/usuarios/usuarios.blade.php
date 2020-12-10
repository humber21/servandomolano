@extends('adminlte::page')
@section('title', 'Usuarios')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
@endsection

@section('content')
{{-- <div class="card"> --}}
@if ( session('mensaje-exitoso') )
    <div class="alert alert-success">{{ session('mensaje-exitoso') }}</div>
@endif
@if ( session('error') )
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif
        <button  type="button" class="btn btn-primary m-2 btn sm" data-toggle="modal" data-target="#ModalUsuario">Agregar Usuario</button>
        <!-- Modal -->
      <div class="modal fade" id="ModalUsuario" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content modal-lg">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{Route('AgregarUsuario')}}">
              @csrf
                <div class="form-group">
                  <label for="nombre" class="col-form-label">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                {{--  --}}
                <div class="form-group">
                  <label for="email" class="col-form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@email.com">
                </div>
                {{--  --}}
                  <div class="form-row">
                    <div class="col">
                      <label for="contrasena" class="col-form-label">Contraseña</label>
                      <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="************">
                    </div>
                    <div class="col">
                      <label for="confirmar_contrasena" class="col-form-label">Confirmar Contraseña</label>
                      <input type="password" class="form-control" id="confirmar_contrasena" name="confirmar_contrasena" placeholder="************">
                    </div>
                  </div>
                  {{--  --}}
                <button type="submit" class="btn btn-primary mt-3">Agregar nuevo usuario</button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
        <table id="usuarios" class="table table-striped ">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>email</th>
                    <th>password</th>
                    <th>creado</th>
                    <th>modificado</th>
                    <th>acciones</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td>
                        {{-- <a href="{{route('EditarUsuario',$user->id)}}" class="btn btn-success m-1">Editar</a> --}}

                        <a href="{{route('EliminarUsuario',$user->id)}}" class="btn btn-danger ">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    {{-- </div> --}}




@stop


@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
    <script>
          $('#usuarios').DataTable({
            responsive:true,
            autoWidth:false
          });
    </script>
@endsection
