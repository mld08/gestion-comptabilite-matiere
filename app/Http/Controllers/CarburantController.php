<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarburantFormRequest;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CarburantExport;
use App\Models\Carburant;

class CarburantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('carburant.index', [
            'carburants'=> Carburant::orderBy('created_at','asc')->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carburant = new Carburant();
        return view('carburant.form', [
            'carburant' => $carburant
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarburantFormRequest $request)
    {
        $carburant = Carburant::create($request->validated());
        return to_route('admin.carburant.index')->with('success', 'Le carburant a bien été créé');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Carburant $carburant)
    {
        return view('carburant.form', [
            'carburant' => $carburant
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarburantFormRequest $request, Carburant $carburant)
    {
        $carburant->update($request->validated());
        return to_route('admin.carburant.index')->with('success', 'Le carburant a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carburant $carburant)
    {
        $carburant->delete();
        return to_route('admin.carburant.index')->with('success','Le carburant a bien été supprimé.');
    }

    public function export()
    {
        return Excel::download(new CarburantExport, 'carburants.xlsx');
    }
}
