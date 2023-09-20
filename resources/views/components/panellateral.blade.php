<div>

<div>
   
   <div class="column_left column col-sm-3">
   
   
   <div class="widget" style="    overflow: hidden;
    background: #ffffff;
    border: 1px solid #dddddd;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    display: block;
    padding: 30px;
    position: relative;">
   <div class="widget_content">
   <div class="index-scope">
   

   
   <H5 class="page_heading">EL ALUMNO MAS RESALTANTE DE LA SEMANA</H5>
   <a href="https://tm-shopify033-tools.myshopify.com/collections/accessories" class="" style="">
   
   <img src="http://localhost/proyectoescuelafeo/public/storage/{{ $alumno['Foto'] }}" title="#htmlcaption-11" style="width: 230px;">
<h4>{{ $alumno['Nombre'] }} {{ $alumno['Apellido'] }} {{ $alumno['Grado'] }} Grado</h4>   
</a>
   
   </div>
   </div>
     
      
      </div>
   
   
   

      <div class="widget widget_collections">
      <div class="widget_content">
          <ul class="list">
          
          @foreach ($categorias as $lista)
          <li class="accessories firstItem">
            <a href="https://tm-shopify033-tools.myshopify.com/collections/accessories" title="Accessories">{{ $lista->categoria }}</a>
          </li>
          @endforeach
          </ul>
      </div>
   </div>
      
   
   
   </div>
   </div>
</div>