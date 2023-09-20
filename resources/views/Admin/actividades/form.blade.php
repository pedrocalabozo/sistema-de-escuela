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


 {{isset($actividades->Contenido)?$actividades->Contenido:old('Contenido')}}


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





<label for="Grado" class="form-label">Categorias</label>
<div class="row">
<div class="col">

<select  class="form-control" name="categoria_id" id="">
@if (isset($actividades->categorias->categoria))
<option value="{{ $actividades->categoria_id}}">{{isset($actividades->categorias->categoria)?$actividades->categorias->categoria:old('categoria')}}</option>
@endif
@foreach ($categorias as $categoria)
<option value="{{ $categoria->id}}">{{ $categoria->categoria }}</option> 
@endforeach

</select>


</div><div class="col">
<a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
<i class="fa-solid fa-plus"></i></a>
</div>
</div>






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