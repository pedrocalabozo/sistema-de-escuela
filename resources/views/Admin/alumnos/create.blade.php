@extends('admin.layouts.app')

@section('content')
<div class="container">


<form action="{{url('/alumnos')}}" method="post" enctype="multipart/form-data">
    @csrf
  @include('admin.alumnos.form',['modo'=>'Registrar'])



  
</form>
</div>
@endsection