<h1>{{ $modo }} Categoria</h1>

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

<label for="categoria" class="form-label">Categoria</label>
<input name="categoria" class="form-control" value="{{ isset($categorias->categoria)?$categorias->categoria:old('categoria')}}" type="text">


</div>
</div>

<a class="btn btn-info" href="{{url('categorias/')}}">Regresar</a>
<button type="submit" class=" btn btn-success" value="{{  $modo }}">{{  $modo }}</button>

   
</div>