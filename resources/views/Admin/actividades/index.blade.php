@extends('Admin.layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
@endsection

@section('content')
<div class="container">
<h1>LISTA DE EVENTOS Y NOTICIAS</h1>
<a href="{{url('actividades/create')}}" class="btn btn-success">Nueva Publicacion</a>
<br>
<br>

@if (Session::has('mensaje'))
<div class="alert alert-success">
    {{ Session::get('mensaje') }}
</div>
@endif
<div class="container">
   
<div class="table-responsive ">
    <table id="lista" class="table table-light">
        <thead class="thead-light">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Foto</th>
                <th scope="col">Titulo</th>
                <th scope="col">Axiones </th>
             
            </tr>
        </thead>
        <tbody>
            @foreach($actividades as $rows)
                
  
            <tr class="">
                <td scope="row">{{$rows->id}}</td>
                <td scope=""> <img style="width: 100px;" class="img-thumbnail img-fluid" src=" {{asset('storage').'/'.$rows->Foto}} "></td>
                <td scope="">{{$rows->Titulo}}


 

                </td>
                <td>               <a href="{{url('actividades/'.$rows->id.'/edit')}}" class="btn btn-warning">editar</a>
  <form action="{{url('actividades/'.$rows->id)}}" class="d-inline" method="post">
  @csrf
  @method('DELETE')
<button type="submit" onclick="return confirm('quieres borrar?')" class="btn btn-danger">Eliminar</button>
 </form></td>
              
            </tr>
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

    {!! $actividades->links() !!}
</div>

</div>
</div>
@endsection

