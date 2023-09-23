<?php

namespace App\Http\Controllers;

use App\Models\actividades;
use App\Models\alumnomasr;
use App\Models\categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['activo']=alumnomasr::find(1);
        $datos['actividades']=actividades::paginate(10);
        // return response($datos,200,[]);
         return view('Admin.actividades.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
       
        return view('admin.actividades.create',['categorias'=> categorias::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      

$campos=[
    'Titulo'=>'required|string|max:300',
    'Contenido'=>'required|string|max:3000',
    'Grado'=>'required|string|max:100',
    'categoria_id'=>'required|max:3',
    'Autor'=>'required|string|max:100',
    'Foto'=>'required|max:10000|mimes:jpeg,png,jpg'
    
    
    ];
    
    $mensaje=[
        'required'=>'El :attribute es requerido',
        'Foto.required'=>'La Foto es requerida',
    ];
    
    $this->validate($request,$campos,$mensaje);
    
    
    
            //carga todos los datos del empleado
            $datosNoticia=request()->all();
             //carga todos los datos del empleado excepto _token
             $datosNoticia=request()->except('_token');
            // verificamos que tenemos una foto en el campo formulario foto
    if ($request->hasFile('Foto')) {
        $datosNoticia['Foto']=$request->file('Foto')->store('uploads','public');
    }
    actividades::insert( $datosNoticia);
            //retornamos un formato json 
           // $datos['empleados']=Empleado::paginate(5);
            //return view('empleado.index',$datos);
  return redirect('actividades')->with('mensaje','Actividad registrado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(actividades $actividades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $actividades=actividades::findOrfail($id);
        return view('admin.actividades.edit',['actividades'=>$actividades,'categorias'=> categorias::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       
        $campos=[
            'Titulo'=>'required|string|max:300',
            'Contenido'=>'required|string|max:3000',
            'Grado'=>'required|string|max:10',
            'categoria_id'=>'required|max:3',
            'Autor'=>'required|string|max:100',
            'Foto'=>'required|max:10000|mimes:jpeg,png,jpg'
            
            
            
            ];
            
            $mensaje=[
                'required'=>'El :attribute es requerido',
             
            ];
            
        if ($request->hasFile('Foto')) {
            $campos=['Foto'=>'required|max:10000|mimes:jpeg,png,jpg'];
            $mensaje=['Foto.required'=>'La Foto es requerida'];
        }
            $this->validate($request,$campos,$mensaje);

            
        $datosActividades=request()->except('_token','_method');

        if ($request->hasFile('Foto')) {
            $actividades=actividades::findOrfail($id);
            Storage::delete('public/'.$actividades->Foto);
            $datosActividades['Foto']=$request->file('Foto')->store('uploads','public');

        
          }

         actividades::where('id','=',$id)->update($datosActividades);
      

        $actividades=actividades::findOrfail($id);
        return redirect('actividades')->with('mensaje','Noticia Editada con exito');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $empleado=actividades::findOrfail($id);
       if(Storage::delete('public/'.$empleado->Foto)){
        actividades::destroy($id);
       }
       return redirect('actividades')->with('mensaje','Noticia eliminada con exito');

    
    
}

}