<h1>{{ $modo }} Alumnos</h1>

@if (count($errors)>0)
<div class="alert alert-danger" role="alert">
<ul>
    @foreach ($errors->all() as $error)
     <li> 
        <strong>   {{$error}}</strong> 
     
     </li>
    @endforeach
</ul>
</div>
@endif




<div class="container">
<div class="form-group">
<div class="mb-5">

<label for="Nombre" class="form-label">Nombre</label>
<input name="Nombre" class="form-control" value="{{ isset($alumnos->Nombre)?$alumnos->Nombre:old('Nombre')}}" type="text">


<label for="Apellido" class="form-label">Apellido</label>
<input name="Apellido" class="form-control" value="{{ isset($alumnos->Apellido)?$alumnos->Apellido:old('Apellido')}}" type="text">


<label for="Grado" class="form-label">Grado</label>

<select  class="form-control" name="Grado" id="">
<option>{{isset($alumnos->Grado)?$alumnos->Grado:old('Grado')}}</option>
<option>1ro</option>
<option>2do</option>
<option>3ro</option>
<option>4to</option>
<option>5to</option>
<option>6to</option>
<option>Todos</option>

</select>





<img 
class="img-thumbnail img-fluid"
style="width:100px;"
src="{{asset('storage')}} {{isset($alumnos->Foto)? '/'.$alumnos->Foto:''}}">
<label for="Foto" class="form-label">Foto</label>
<input name="Foto" class="form-control" value="{{isset($alumnos->Foto)?$alumnos->Foto:''}}" type="file">

</div>
</div>

<a class="btn btn-info" href="{{url('alumnos/')}}">Regresar</a>
<button type="submit" class=" btn btn-success" value="{{  $modo }}">{{  $modo }}</button>

   
</div>