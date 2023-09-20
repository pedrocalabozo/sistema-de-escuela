<?php

namespace App\Http\Controllers;

use App\Models\alumnomasr;
use App\Models\Estadoalumno;
use Illuminate\Http\Request;

class EstadoalumnoController extends Controller
{
    //

public function index($id){


 $alumno=alumnomasr::findOrfail($id);
$datos=alumnomasr::findOrfail($id);

//ydd($['Puntos']);
$x=$alumno['Puntos']+1;
$idalumno['Idalumno']=$id;
Estadoalumno::where('id','=',1)->update($idalumno);
alumnomasr::where('id','=',$id)->update(['Puntos' => $x]);
return redirect('alumnos')->with('mensaje','Alumno Aplicado');
}

}
