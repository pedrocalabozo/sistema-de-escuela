@extends('admin.layouts.app')

@section('content')
<div class="container">


<form action="{{url('/actividades')}}" method="post" enctype="multipart/form-data">
    @csrf
  @include('admin.actividades.form',['modo'=>'Registrar'])


</form>



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">CREAR NUEVA CATEGORIA</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <article style="display: inline-flex;">
    
      <form action="{{url('/categorias')}}" method="post" enctype="multipart/form-data">
    @csrf

  <input name="categoria" class="form-control" value="{{ old('categoria') }}" type="text">
  <BUTTON  type="submit" class="btn btn-primary">Aplicar</BUTTON>
</form>
      </article>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
       
      </div>
    </div>
  </div>
</div>


</div>
@endsection