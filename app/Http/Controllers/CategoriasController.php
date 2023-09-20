<?php

namespace App\Http\Controllers;

use App\Models\categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $categorias=categorias::paginate(5);
     return view('Admin.categorias.index',['categorias'=>$categorias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
$campos=[
    'categoria'=>'required|string|max:100',
   
    ];
    $mensaje=[
        'required'=>'El :attribute es requerido',
       
    ];
    $this->validate($request,$campos,$mensaje);
     $datosAlumno=request()->all();
       $datosAlumno=request()->except('_token');  
    

    categorias::insert( $datosAlumno);



   

  return redirect('categorias')->with('mensaje','Categoria registrado con exito');
    
  
    }

    /**
     * Display the specified resource.
     */
    public function show(categorias $categorias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categorias=categorias::findOrfail($id);
        return view('admin.categorias.edit',compact('categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        
        

          
        $campos=[
            'categoria'=>'required|string|max:100' ];
            $mensaje=[
                'required'=>'El :attribute es requerido'
            
            ];
            
       
            $this->validate($request,$campos,$mensaje);

            
        $datoscategoria=request()->except('_token','_method');


         categorias::where('id','=',$id)->update($datoscategoria);

        return redirect('categorias')->with('mensaje','Dato Editado con exito');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    categorias::destroy($id);
        
        return redirect('categorias')->with('mensaje','Categoria eliminada con exito');
    }
}
