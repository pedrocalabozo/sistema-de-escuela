@extends('Admin.Layouts.app')

@section('content')
<div class="container">

{{ $categorias }}
<form action="{{url('categorias/'.$categorias->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
@include('Admin.categorias.form',['modo'=>'Editar'])
</form>
</div>
@endsection