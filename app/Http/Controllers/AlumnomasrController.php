<?php

namespace App\Http\Controllers;

use App\Models\alumnomasr;
use App\Models\Estadoalumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class AlumnomasrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
        $datos['alumnos']=Alumnomasr::paginate(10);
       
        if (  $alumno=Estadoalumno::findOrfail(1)) {
            $datos['activo']=Alumnomasr::find($alumno['Idalumno']);
        }
      
       
     
      //dd($datos);
        return view('Admin.alumnos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
$campos=[
    'Nombre'=>'required|string|max:100',
    'Apellido'=>'required|string|max:100',
    'Grado'=>'required|string|max:100',
    'Foto'=>'required|max:10000|mimes:jpeg,png,jpg',
    'Puntos'=>'1'
    ];
    $mensaje=[
        'required'=>'El :attribute es requerido',
        'Foto.required'=>'La Foto es requerida',
    ];
    $this->validate($request,$campos,$mensaje);
     $datosAlumno=request()->all();
       $datosAlumno=request()->except('_token');  
    if ($request->hasFile('Foto')) {
        $datosAlumno['Foto']=$request->file('Foto')->store('uploads','public');
    }
    $datosAlumno['Puntos']=0;
    alumnomasr::insert( $datosAlumno);



   

  return redirect('alumnos')->with('mensaje','Alumno registrado con exito');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumnomasr $alumnomasr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $alumnos=alumnomasr::findOrfail($id);
        return view('admin.alumnos.edit',compact('alumnos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
          
        $campos=[
            'Nombre'=>'required|string|max:100',
            'Apellido'=>'required|string|max:100',
            'Grado'=>'required|string|max:100',
            'Foto'=>'required|max:10000|mimes:jpeg,png,jpg',
            'Puntos'=>'1'
            ];
            $mensaje=[
                'required'=>'El :attribute es requerido',
                'Foto.required'=>'La Foto es requerida',
            ];
            
        if ($request->hasFile('Foto')) {
            $campos=['Foto'=>'required|max:10000|mimes:jpeg,png,jpg'];
            $mensaje=['Foto.required'=>'La Foto es requerida'];
        }
            $this->validate($request,$campos,$mensaje);

            
        $datosAlumno=request()->except('_token','_method');

        if ($request->hasFile('Foto')) {
            $actividades=alumnomasr::findOrfail($id);
            Storage::delete('public/'.$actividades->Foto);
            $datosAlumno['Foto']=$request->file('Foto')->store('uploads','public');

        
          }

         alumnomasr::where('id','=',$id)->update($datosAlumno);
      

        $alumnos=alumnomasr::findOrfail($id);
        return redirect('alumnos')->with('mensaje','Dato Editado con exito');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $empleado=alumnomasr::findOrfail($id);
        if(Storage::delete('public/'.$empleado->Foto)){
         alumnomasr::destroy($id);
        }
        return redirect('actividades')->with('mensaje','Noticia eliminada con exito');
    }
}
