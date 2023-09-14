@extends('Admin.Layouts.app')

@section('content')
<div class="container">
<form action="{{url('alumnos/'.$alumnos->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
@include('Admin.alumnos.form',['modo'=>'Editar'])
</form>
</div>
@endsection