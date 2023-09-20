@extends('admin.layouts.app')

@section('content')
<div class="container">


<form action="{{url('/categorias')}}" method="post" enctype="multipart/form-data">
    @csrf
  @include('Admin.categorias.form',['modo'=>'Registrar'])



  
</form>
</div>
@endsection