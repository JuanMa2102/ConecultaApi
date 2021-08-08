<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ChecadaResource;
use App\Http\Resources\ChecadasCollection;
use App\Http\Resources\ChecadaTotalesResource;
use App\Models\Checada;
use App\Models\ChecadaTotales;
use Carbon\Carbon;

class ChecadasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$count = Flight::where('active', 1)->count();
        $dias = array("Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");
        $checadas = Checada::where('Trabajador',$id)
            ->orderBy('Fecha','Desc')
            ->take(10)
            ->get();

        foreach ($checadas as $checada) {
            $date = Carbon::parse($checada->Fecha, 'UTC')->locale('es');           
            $checada->Dia = $dias[($date->dayOfWeek)-1];
        }

        return ChecadasCollection::make($checadas);
    }

    public function getFaltas($id){
             
        $checadas = Checada::where('Trabajador',$id)
        ->orderBy('Fecha','Desc')
        ->take(10)
        ->get();
        
        $result = [
            'Total' => $checadas->count(),
            'Faltas' => $checadas->where('Falta','F')->count(),
            'Retardos' => $checadas->where('Restardo','R')->count(),
        ];
        return ChecadaTotalesResource::make($result);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
