<?php

namespace App\View\Components;

use App\Models\alumnomasr;
use App\Models\Estadoalumno;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Panellateral extends Component
{
    /**
     * Create a new component instance.
     */
    public $alumno;
    public function __construct()
    {
        $alumnos=Estadoalumno::findOrfail(1);
        $this->alumno=alumnomasr::find($alumnos['Idalumno']);
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.panellateral');
    }
}
