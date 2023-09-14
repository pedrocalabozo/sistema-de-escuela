<h1>{{ $modo }} Noticia</h1>

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

<label for="Titulo" class="form-label">TItulo</label>
<input name="Titulo" class="form-control" value="{{ isset($actividades->Titulo)?$actividades->Titulo:old('Titulo')}}" type="text">


<label for="Contenido" class="form-label">Descripcion</label>

<textarea class="form-control" name="Contenido" id="" cols="30" rows="10">


 {{isset($actividades->Contenido)?$actividades->Contenido:old('Comtenido')}}


</textarea>

<label for="Grado" class="form-label">Grado</label>

<select  class="form-control" name="Grado" id="">
<option>{{isset($actividades->Grado)?$actividades->Grado:old('Grado')}}</option>
<option>1ro</option>
<option>2do</option>
<option>3ro</option>
<option>4to</option>
<option>5to</option>
<option>6to</option>
<option>Todos</option>

</select>

<label for="Categoria" class="form-label">Categoria</label>
<input name="categoria" class="form-control" value="{{isset($actividades->categoria)?$actividades->categoria:old('categoria')}}" type="text">


<label for="Autor" class="form-label">Autor</label>
<input name="Autor" class="form-control" value="{{isset($actividades->Autor)?$actividades->Autor:old('Autor')}}" type="text">




<img 
class="img-thumbnail img-fluid"
style="width:100px;"
src="{{asset('storage')}} {{isset($actividades->Foto)? '/'.$actividades->Foto:''}}">
<label for="Foto" class="form-label">Foto</label>
<input name="Foto" class="form-control" value="{{isset($actividades->Foto)?$actividades->Foto:''}}" type="file">

</div>
</div>

<a class="btn btn-info" href="{{url('actividades/')}}">Regresar</a>
<button type="submit" class=" btn btn-success" value="{{  $modo }}">{{  $modo }}</button>

   
</div>