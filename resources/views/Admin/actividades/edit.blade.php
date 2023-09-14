@extends('Admin.Layouts.app')

@section('content')
<div class="container">
<form action="{{url('actividades/'.$actividades->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
@include('Admin.actividades.form',['modo'=>'Editar'])
</form>
</div>
@endsection