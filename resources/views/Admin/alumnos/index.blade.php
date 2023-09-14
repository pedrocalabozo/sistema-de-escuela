@extends('Admin.layouts.app')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
@endsection
@section('content')

<div class="row">


<div class="col">
<h1 class="mt-4">LISTA DE ALUMNOS</h1>
<ol class="breadcrumb mb-4">
<li class="breadcrumb-item active">Panel de datos</li>
</ol>

<a href="{{url('alumnos/create')}}" class="btn btn-success">Nuevo Alumno</a>
</div>





<div class="col">

<h1>Alumno de la Semana</h1>
    <a href="{{url('alumnos')}}">Panel Alumnos</a>
<div class="border">

   <h3>{{ $activo->Nombre }}  {{ $activo->Apellido }}</h3> 
   <img style="width: 50%;" class="img-thumbnail img-fluid" src=" {{asset('storage').'/'.$activo->Foto}} ">


</div>
</div>




@if (Session::has('mensaje'))
<div class="alert alert-success">
    {{ Session::get('mensaje') }}
</div>
@endif
<div class="container">
    
<div class="table-responsive">
    <table id="lista" class="table table-light">
        <thead class="thead-light">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Foto</th>
                <th scope="col">Nombre</th>
                <th scope="col">Puntos</th>
                <th scope="col">Axiones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumnos as $rows)
                
  
            <tr class="">
                <td scope="row">{{$rows->id}}</td>
                <td scope=""> <img style="width: 100px;" class="img-thumbnail img-fluid" src=" {{asset('storage').'/'.$rows->Foto}} "></td>
                <td scope="">{{$rows->Nombre}} {{$rows->Apellido}}
                    <h4>{{$rows->Grado}} Grado</h4>
                </td>
                <td>{{ $rows->Puntos }}</td>
                <td>

                <a href="{{url('alumnos/'.$rows->id.'/edit')}}" class="btn btn-warning">editar</a>
 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$rows->id}}">
  Aplicar a Resaltante
</button>
  <form action="{{url('alumnos/'.$rows->id)}}" class="d-inline" method="post">
  @csrf
  @method('DELETE')
<button type="submit" onclick="return confirm('quieres borrar?')" class="btn btn-danger">Eliminar</button>
 </form>

                </td>
              
            </tr>





<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal{{$rows->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ALUMNO MAS RESALTANTE DE LA SEMANA</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <article style="display: inline-flex;">
      <img style="width: 50%; margin:5px" class="img-thumbnail img-fluid" src=" {{asset('storage').'/'.$rows->Foto}} ">
      
        <p>Añadir a {{$rows->Nombre}} {{$rows->Apellido}} como el alumno mas resaltante de la semana.
           <br> Sumara 1 punto de {{ $rows->Puntos }}.
        </p>
      </article>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
        <a href="{{url('aplicar/'.$rows->id)}}" type="button" class="btn btn-primary">Aplicar</a>
      </div>
    </div>
  </div>
</div>



                @endforeach
    </table>

    @section('js')
<script src="http://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

<script>

$(document).ready( function () {
    $('#lista').DataTable();
} );
</script>

@endsection
  <!--  {!! $alumnos->links() !!} -->
</div>





</div>
</div>
@endsection

