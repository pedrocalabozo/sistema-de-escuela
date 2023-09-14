@extends('admin.layouts.app')

@section('content')
<div class="container">


<form action="{{url('/actividades')}}" method="post" enctype="multipart/form-data">
    @csrf
  @include('admin.actividades.form',['modo'=>'Registrar'])


</form>
</div>
@endsection