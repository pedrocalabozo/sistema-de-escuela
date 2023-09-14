<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->



    @foreach ($noticias as $rows)






    <div class="product col-sm-6">
<div>

<div class="product_img">  
    <a href="https://tm-shopify033-tools.myshopify.com/products/3m-dual-cartridge-respirator">
    	<img style="height: 200px;" src="{{asset('storage').'/'.$rows->Foto}} " alt="{{ $rows->Titulo }}">
        
    </a>
</div>

<div class="product_info"> 

<div class="product_name">
	<a href="https://tm-shopify033-tools.myshopify.com/products/3m-dual-cartridge-respirator"><h4>{{ $rows->Titulo }}</h4></a>
</div>



<div class="product_links">
    <!-- 
    This is just a regular add product form. 
    You should be able to add any valid input fields to it 
-->
<form method="post" action="https://tm-shopify033-tools.myshopify.com/cart/add">
    <!-- We can leave this in, since the select comes later, 
        so it will override if user picks something different. -->
    
        <input type="hidden" name="id" value="676716609">
    

  	

	<!-- START BUY -->
	    		    
		    <button class="btn btn-cart" type="submit">Add to cart</button>
		
	<!-- END BUY -->
</form>         
    <a class="btn" href="https://tm-shopify033-tools.myshopify.com/products/3m-dual-cartridge-respirator">View</a>
</div>
</div>
</div>
</div>




    @endforeach
   
</div>