@extends('admin.layouts.app')


@section('csrf')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
<div class="container">


<form action="{{url('/actividades')}}" method="post" enctype="multipart/form-data">
    @csrf
  @include('admin.actividades.form',['modo'=>'Registrar'])


</form>



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">CREAR NUEVA CATEGORIA</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <article style="display: inline-flex;">
    
      <form action="{{url('/categorias')}}" method="post" id="mycategoria" enctype="multipart/form-data">
    @csrf

  <input name="categoria" id="categoria" class="form-control" value="{{ old('categoria') }}" type="text">
  <BUTTON id="btn-save"  type="submit" class="btn btn-primary">Aplicar</BUTTON>
</form>
<div id="alerta"></div>
      </article>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
       
      </div>
    </div>
  </div>
</div>


</div>
@endsection

@section('ajax')






<script src="http://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
jQuery(document).ready(function($){
    // //----- Open model CREATE -----//
    // jQuery('#btn-add').click(function () {
    //   //  jQuery('#btn-save').val("add");
    //     jQuery('#mycategoria').trigger("reset");
    //   //  jQuery('#exampleModal').modal('hide');
    // });
    // CREATE

  // CREATE
  $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content'),
                "_token": $("meta[name='csrf-token']").attr("content")
         
            }
        });

        e.preventDefault();
        var formData = {
            categoria: jQuery('#categoria').val(),
           
            
        };


        // var state = jQuery('#btn-save').val();
        var type = "POST";
        // var todo_id = jQuery('#todo_id').val();
        var ajaxurl = "{{url('/categorias')}}";
        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function (data) {
                var dat = data

              let ultina_cat=dat.categorias.length

                console.log(dat.categorias[ultina_cat-1].categoria)
                 if (data.alert == "success") {
                   jQuery('#alerta').html("<div class='alert alert-success' role='alert'>Categoria creada!</div>")
                  
                let option = document.createElement('option')
                    option.value=dat.categorias[ultina_cat-1].id
                    option.text=dat.categorias[ultina_cat-1].categoria
                      jQuery("#select-category").append(option)
                                 
                    } else {
                    
                                         }
                jQuery('#mycategoria').trigger("reset");
                // jQuery('#formModal').modal('hide')
            },
            error: function (data) {
                console.log(data);
            }
        });
    });





});

  </script>

@endsection