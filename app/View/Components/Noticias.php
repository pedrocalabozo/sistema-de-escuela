<?php

namespace App\View\Components;

use App\Models\actividades;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Noticias extends Component
{
    /**
     * Create a new component instance.
     */
    public $noticias;
    public function __construct()
    {
        $lista=actividades::all();
        $this->noticias=$lista;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.noticias');
    }
}
